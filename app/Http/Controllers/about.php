<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class about extends Controller
{


    public function index(): View
    {
        return view('pages.home');
    }
    public function about(): View
    {
        return view('pages.home');
    }
    public function team(): View
    {
        return view('pages.home');
    }
    public function services(): View
    {
        return view('pages.home');
    }
    public function domaines(): View
    {
        return view('pages.home');
    }
    public function projet(): View
    {
        return view('pages.home');
    }
    public function blog(): View
    {
        return view('pages.home');
    }
    public function contact(): View
    {
        return view('pages.home');
    }
    public function detailTeam($slog): View
    {
        return view('pages.home');
    }
    public function detailService($slog): View
    {
        return view('pages.home');
    }
    public function detailDomaine($slog): View
    {
        return view('pages.home');
    }
    public function detailProjet($slog): View
    {
        return view('pages.home');
    }
    public function detailBlog($slog): View
    {
        return view('pages.home');
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
}
