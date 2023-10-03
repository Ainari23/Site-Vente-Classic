<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function show_ldpe()
    {
        // Récupérez toutes les données de type "LDPE" depuis la table "posts"
        $data = DB::table('posts')->where('typearticle', 'LDPE')->get();

        // Si aucune donnée n'est trouvée, renvoyez une erreur 404
        if ($data->isEmpty()) {
            return view('articles.ldpe', compact('data'));
        }

        // Renvoyez les données au fichier de vue pour affichage
        return view('articles.ldpe', compact('data'));
    }
    public function show_pehd()
    {
        // Récupérez toutes les données de type "PEHD" depuis la table "posts"
        $data = DB::table('posts')->where('typearticle', 'PEHD')->get();

        // Si aucune donnée n'est trouvée, renvoyez une erreur 404
        if ($data->isEmpty()) {
            return view('articles.pehd', compact('data'));
        }

        // Renvoyez les données au fichier de vue pour affichage
        return view('articles.pehd', compact('data'));
    }
    
    public function show_pet()
    {
        // Récupérez toutes les données de type "PET" depuis la table "posts"
        $data = DB::table('posts')->where('typearticle', 'PET')->get();

        // Si aucune donnée n'est trouvée, renvoyez une erreur 404
        if ($data->isEmpty()) {
            return view('articles.pet', compact('data'));
        }

        // Renvoyez les données au fichier de vue pour affichage
        return view('articles.pet', compact('data'));
    }
    public function show_pp()
    {
        // Récupérez toutes les données de type "PP" depuis la table "posts"
        $data = DB::table('posts')->where('typearticle', 'PP')->get();

        // Si aucune donnée n'est trouvée, renvoyez une erreur 404
        if ($data->isEmpty()) {
            return view('articles.pp', compact('data'));
        }

        // Renvoyez les données au fichier de vue pour affichage
        return view('articles.pp', compact('data'));
    }
    public function show_ps()
    {
        // Récupérez toutes les données de type "PS" depuis la table "posts"
        $data = DB::table('posts')->where('typearticle', 'PS')->get();

        // Si aucune donnée n'est trouvée, renvoyez une erreur 404
        if ($data->isEmpty()) {
            return view('articles.ps', compact('data'));
        }

        // Renvoyez les données au fichier de vue pour affichage
        return view('articles.ps', compact('data'));
    }
    
    public function show_pvc()
    {
        // Récupérez toutes les données de type "PS" depuis la table "posts"
        $data = DB::table('posts')->where('typearticle', 'PVC')->get();

        // Si aucune donnée n'est trouvée, renvoyez une erreur 404
        if ($data->isEmpty()) {
            return view('articles.pvc', compact('data'));
        }

        // Renvoyez les données au fichier de vue pour affichage
        return view('articles.pvc', compact('data'));
    }
}

