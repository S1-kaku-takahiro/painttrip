@extends('layouts.contrib')

@section('title', '個別記事')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="col-md-8 p-2 article-card">
                    <div class="clearfix mb-3">
                        <h2 class="float-left">{{ $article->spot_name }}</h2>
                        <div class="float-right">
                            {{ $article->updated_at->format('Y/m/d') }}<br>
                            {{ __("messages.{$article->category}") }} > {{ $article->subcategory }}
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="article-image mb-3">
                            @if ($article->image_path)
                                <img src="{{ asset('strage/image/' . $article->image_path) }}">
                            @endif
                        </div>
                        <div class="w-100 border rounded p-2">{{ $article->impression }}</div>
                        <p>{{ $article->visited_on->format('Y/m/d') }}訪問</p>
                        <div class="d-flex flex-row">
                            <div>アイテム1</div>
                            <div>アイテム2</div>
                            <div>アイテム3</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>

@endsection