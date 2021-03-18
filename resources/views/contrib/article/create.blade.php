@extends('layouts.contrib')

@section('title', '新規記事作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="mb-3">新規記事作成</h2>
                <form action="{{ action('Contrib\ArticleController@create') }}" method="post" enctype="multipart/form-data" id="article-form">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2">スポット名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="spot_name" value="{{ old('spot_name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2">訪問日</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="datepicker" name="visited_on" value="{{ old('visited_on') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <div class="col-md-4">
                            <select class="form-control" name="prefecture">
                                <option value="">選択してください</option>
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}" @if(old('prefecture')==$prefecture->id) selected @endif>{{ __("messages.{$prefecture->prefecture_name}") }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">ジャンル</label>
                        <div class="col-md-4">
                            <select class="form-control" name="category" id="category">
                                <option value="">選択してください</option>
                                @for ($i = 1; $i <= count($categories); $i++)
                                    <option value="{{ $i }}" @if(old('category')==$i) selected @endif)>{{ $categories[$i] }}</option>
                                @endfor
                            </select>
                        </div>
                        
                        <div class="col-md-4">
                            <select class="form-control" name="subcategory" id="subcategory">
                                <option value="">選択してください</option>
                            </select>
                        </div>

                        
                        <input type="hidden" name="hiddenSubcategory" id="hiddenSubcategory" value="{{ old('hiddenSubcategory') }}">
                        
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="impression" rows="10">{{ old('impression') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">混雑度</label>
                        <div class="col-md-10">
                            <span class="mr-2"><input type="radio" name="congestion" value="0" {{ old('congestion') == "0" ? "checked" : "" }}>がらがら</span>
                            <span class="mr-2"><input type="radio" name="congestion" value="1" {{ old('congestion') == "1" ? "checked" : "" }}>やや空き</span>
                            <span class="mr-2"><input type="radio" name="congestion" value="2" {{ old('congestion') == "2" ? "checked" : "" }}>やや混み</span>
                            <span class="mr-2"><input type="radio" name="congestion" value="3" {{ old('congestion') == "3" ? "checked" : "" }}>混雑</span>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">かかったお金（一人分）</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="expence" value="{{ old('expence') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">最寄り駅</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nearest_station" value="{{ old('nearest_station') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">駐車場</label>
                        <div class="col-md-10">
                            <span class="mr-2"><input type="radio" name="parking" value="0" checked>不明</span>
                            <span class="mr-2"><input type="radio" name="parking" value="1" {{ old('parking') == "1" ? "checked" : "" }}>無</span>
                            <span class="mr-2"><input type="radio" name="parking" value="2" {{ old('parking') == "2" ? "checked" : "" }}>有</span>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">公開設定</label>
                        <div class="col-md-10">
                            <span class="mr-2"><input type="radio" name="disclosure" value="0" checked>非公開</span>
                            <span class="mr-2"><input type="radio" name="disclosure" value="1" {{ old('disclosure') == "1" ? "checked" : "" }}>公開</span>
                        </div>
                    </div>
                    
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary col-md-2 mr-2" value="投稿" id="submit">
                    <input type="reset" class="btn btn-light col-md-2" value="クリア">
                </form>
            </div>
        </div>
    </div>
@endsection