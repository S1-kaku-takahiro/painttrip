<?php

namespace App\Http\Controllers\Contrib;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Article;

class ArticleController extends Controller
{
    public function add()
    {
        return view('contrib.article.create');
    }
    
    public function create(Request $request)
    {
        
        $this->validate($request, Article::$rules);
        
        $article = new Article;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $article->image_path = basename($path);
        } else {
            $article->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $article->fill($form);
        $article->user_id = Auth::id();
        $article->save();
        
        return redirect('contrib/article/create');
    }
}
