<?php

namespace App\Http\Controllers;

use App\Events\ContactMail;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\StoreNewsletterRequest;
use App\Mail\SendContactMail;
use App\Models\Content;
use App\Models\Post;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Renvoie la page d'accueil avec les derniers biens et actu(s)
     * @return Application|Factory|View
     */
    public function home()
    {
        $properties = Property::with([
            'images' => fn($query) => $query->select('id', 'url', 'property_id'),
            'type' => fn($query) => $query->select('id', 'title'),
        ])->latest()->limit(3)->get(['id', 'price', 'surface', 'postcode', 'town', 'type_id'])->reverse();

        $text = Content::where('page', 'Home')->first()->pluck('wysiwyg_text')->toArray()[0];

        $posts = Post::with(['category' => fn($query) => $query->select('id', 'title')])
            ->latest()
            ->limit(3)
            ->get(['id', 'title', 'wysiwyg_text', 'imageUrl', 'category_id', 'created_at'])
            ->reverse();

        return view('welcome', compact(['properties', 'posts', 'text']));
    }

    /**
     * Renvoie la page de mentions légales
     * @return Application|Factory|View
     */
    public function legalNotices()
    {
        return view('static.legalNotices');
    }

    /**
     * Renvoie la page Qui sommes nous?
     * @return Application|Factory|View
     */
    public function whoAreWe()
    {
        return view('static.whoAreWe');
    }


    /**
     * Renvoie la page de contact
     * @return Application|Factory|View
     */
    public function contactForm()
    {
        return view('static.contact');
    }


    /**
     * @param ContactFormRequest $request
     * @return RedirectResponse
     */
    public function storeContactForm(ContactFormRequest $request): RedirectResponse
    {
        //Data du mail
        $dataMail = $request->all(['name', 'email', 'message']);
        //Es ce qui veux enregistrer son mail en BDD
        if ($request->exists('wantNewsletter')) {
            //On vérifie que l'email n'existe pas en double
            $validator = Validator::make($request->all(), [
                'email' => 'bail|email|unique:newsletters'
            ]);
            if (!$validator->fails()) {
                $this->insertNewsletter($request->input("email"));
            } else {
                session()->flash('warning', 'L\'email est déjà enregistrer dans notre base.');
            }
        }
        //On le stock en log
        event(new ContactMail($dataMail));
        //On envoi le mail
        Mail::to('administrateur@superDino.fr')->send(new SendContactMail($dataMail));

        session()->flash('success', 'Votre message à bien été envoyer!');
        return redirect()->route('pages.home');
    }

    /**
     * @param string $email
     * @return bool
     */
    private function insertNewsletter(string $email): bool
    {
        return DB::table('newsletters')->insert([
            'email' => $email,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }

    /**
     * @param StoreNewsletterRequest $request
     * @return RedirectResponse
     */
    public function storeNewsletter(StoreNewsletterRequest $request): RedirectResponse
    {
        $this->insertNewsletter($request->newsletterMail)
            ? session()->flash('info', 'Votre email à bien été stocker')
            : session()->flash('error', 'Une erreur est survenu lors de l\'enregistrement');
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $email
     * @return RedirectResponse
     */
    public function unsubscribe(Request $request, $email)
    {
        if (!$request->hasValidSignature()) {
            abort(401);
        }
        if (DB::table('newsletters')->where('email', $email)->exists()) {
            DB::table('newsletters')->where('email', $email)->delete()
                ? session()->flash('success', 'Votre email à bien été supprimer')
                : session()->flash('warning', 'Une erreur est survenu lors de la surpression');
            return redirect()->route('pages.home');
        } else {
            abort(401);
        }
    }
}

