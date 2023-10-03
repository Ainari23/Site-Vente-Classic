<?php

namespace App\Http\Controllers;
use \App\Models\Post;
use illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
    //use App\Models\Post; // Assurez-vous d'importer le modèle Post si ce n'est pas déjà fait

    public function index() {
        $posts = Post::paginate(10); // Récupérer tous les articles de blog depuis la base de données

        return view('blog.index', ['posts' => $posts]);
    }
    public function show(string $slug, string $id): RedirectResponse | Post{
        $post = \App\Models\Post::findOrFail($id);
        if ($post->slug != $slug){
            return to_route('blog.show',['slug'=>$post->slug, 'id'=>$post->id]);
        }
        return $post;
    }

}
