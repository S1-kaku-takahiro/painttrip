<?php

namespace App\Http\Controllers\Contrib;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Article;
use App\Profile;
use App\Prefecture;
use App\Category;

class ArticleController extends Controller
{
    
    public function add()
    {
        $categories[1] = "ホテル・旅館";
        $categories[2] = "観光・レジャー";
        $categories[3] = "温泉・スパ";
        $categories[4] = "グルメ・レストラン";
        $categories[5] = "アクティビティ";
        $categories[6] = "買い物・お土産";
        $categories[7] = "その他";

        return view('contrib.article.create', ['prefectures' => Prefecture::all(), 'categories' => $categories]);
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
    
    public function show(Request $request)
    {
        $article = Article::find($request->id);
        
        if (empty($article)) {
            abort(404);
        }
        
        $profile = Profile::where('user_id', $article->user_id)->first();
    }
}
