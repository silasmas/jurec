<?php

namespace App\Http\Controllers;

use App\Models\projet;
use App\Models\article;
use App\Models\message;
use App\Models\service;
use Illuminate\View\View;
use App\Models\thematique;
use Illuminate\Http\Request;

class about extends Controller
{


    public function index(): View
    {
        return view('pages.home');
    }
    public function about(): View
    {
        return view('pages.about');
    }
    public function team(): View
    {
        return view('pages.team');
    }
    public function services(): View
    {

        return view('pages.services');
    }
    public function domaines(): View
    {
        return view('pages.domaines');
    }
    public function projet(): View
    {
        return view('pages.projets');
    }
    public function blog(): View
    {
        return view('pages.blog');
    }
    public function contact(): View
    {
        return view('pages.contact');
    }
    public function detailTeam($slog): View
    {
        return view('pages.home');
    }
    public function detailService($slug): View
    {

        $service = bySlug($slug, service::class);
        return view('pages.detailService', compact("service"));
    }
    public function detailDomaine($slug): View
    {
        $domaine = bySlug($slug, thematique::class);
        // Récupérer les autres services
    $services = thematique::where('slug', '!=', $slug)->get();
        return view('pages.detailDomaine', compact("domaine","services"));
    }
    public function detailProjet($slug): View
    {
        $projet = bySlug($slug, projet::class);
        $avant = projet::where('id', '<', $projet->id)
            ->orderBy('id', 'desc')
            ->first();

        $apres = projet::where('id', '>', $projet->id)
            ->orderBy('id', 'asc')
            ->first();
        return view('pages.detailProjet', compact('projet', 'avant', 'apres'));
    }
    public function detailBlog($slug): View
    {
        $article = bySlug($slug, article::class);
        $avant = article::where([['id', '<', $article->id], ['is_active', '=', true]])
            ->orderBy('id', 'desc')
            ->first();

        $apres = article::where([['id', '>', $article->id], ['is_active', '=', true]])
            ->orderBy('id', 'asc')
            ->first();
        return view('pages.detailArticle', compact('article', 'avant', 'apres'));
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function addNewMessage(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => ['required', 'string'],
            'phone' => ['required', 'string'],
            // 'subject' => ['required', 'string', 'max:255'],
        ]);
        $rep = message::create([
            'nom' => $request->email,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Message envoyé avec succès!"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);
        }
    }
}
