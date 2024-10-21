<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('format_date')) {
    function format_date($date)
    {
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }
}

if (!function_exists('getTitle')) {
    function getTitle($name)
    {
        $titre = [];
        switch ($name) {
            case 'home':
                return $titre = ['titre' => "Accueil", 'retour' => "home"];
                break;
            case 'about':
                return $titre = ['titre' => "Apropos", 't2' => "Qui sommes-nous", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'services':
                return $titre = ['titre' => "Nos services", 't2' => "Tous nos services", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'domaines':
                return $titre = ['titre' => "Nos domaines", 't2' => "Tous nos domaines d'activités", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'equipe':
                return $titre = ['titre' => "Notre équipe", 't2' => "Toute l'équipe", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'projets':
                return $titre = ['titre' => "Nos projets", 't2' => "Tous nos projets", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'publications':
                return $titre = ['titre' => "Nos publications", 't2' => "Toutes nos publications", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'contact':
                return $titre = ['titre' => "Contact", 't2' => "Contactez-nous", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'detailTeam':
                return $titre = ['titre' => "Activité", 't2' => "Detail de l'activité", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "Activités", 'retourT3' => "activites"];
                break;
            case 'detaildomaine':
                return $titre = ['titre' => "Archives", 't2' => "Detail de l'archive", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "Archives", 'retourT3' => "archives"];
                break;
            case 'detailprojet':
                return $titre = ['titre' => "Archives", 't2' => "Detail de l'archive", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "Archives", 'retourT3' => "archives"];
                break;
            case 'detailpublication':
                return $titre = ['titre' => "Archives", 't2' => "Detail de l'archive", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "Archives", 'retourT3' => "archives"];
                break;

            default:
                return $titre = ['titre' => "", 't2' => "", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
        }
    }
}
if (!function_exists('active')) {
    function active($name)
    {
        $titre = Route::currentRouteName();
        switch ($name) {
            case $titre:
                return "current";
                break;

            default:
                return "";
                break;
        }
    }
}
