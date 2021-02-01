<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterRequest;
use App\Mail\SendContactMail;
use App\Models\Post;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


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
        $text = Arr::first(DB::select("select wysiwyg_text from contents where page = 'Home'"))->wysiwyg_text;
        $properties = Property::with(['type', 'images'])->latest()->limit(3)->get()->reverse();
        $posts = Post::with(['category', 'tags'])->latest()->limit(3)->get()->reverse();
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
        //On le stock en log
        event(new ContactMail($dataMail));
        //On envoi le mail
        Mail::to('administrateur@superDino.fr')->send(new SendContactMail($dataMail));

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
}

