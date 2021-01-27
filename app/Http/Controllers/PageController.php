<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $properties = Property::with(['type', 'images'])->latest()->limit(3)->get()->reverse();
        $posts = Post::with(['category', 'tags'])->latest()->limit(3)->get()->reverse();
        return view('welcome', compact(['properties', 'posts']));
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
     */
    public function storeContactForm(ContactFormRequest $request)
    {
        //TODO
    }

    /**
     * @param StoreNewsletterRequest $request
     * @return RedirectResponse
     */
    public function storeNotification(StoreNewsletterRequest $request): RedirectResponse
    {
        DB::table('newsletters')->insert([
            'email' => $request->newsletterMail,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        session()->flash('info', 'Votre email à bien été stocker');
        return redirect()->back();
    }

}

