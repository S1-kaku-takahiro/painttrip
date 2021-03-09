@extends('layouts.contrib')

@section('title', '新規記事作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="mb-3">新規記事作成</h2>
                <form action="{{ action('Contrib\ArticleController@create') }}" method="post" enctype="multipart/form-data">
                    
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
                        <div class="col-md-3">
                            <input type="text" class="form-control datepicker" name="visited_on" value="{{ old('visited_on') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <div class="col-md-3">
                            <select class="form-control" name="prefecture">
                                <option value="">選択してください</option>
                                <option value="hokkaido" @if(old('prefecture')=='hokkaido') selected @endif>北海道</option>
                                <option value="aomori" @if(old('prefecture')=='aomori' ) selected @endif>青森県</option>
                                <option value="iwate" @if(old('prefecture')=='iwate') selected @endif>岩手県</option>
                                <option value="miyagi" @if(old('prefecture')=='miyagi') selected @endif>宮城県</option>
                                <option value="akita" @if(old('prefecture')=='akita') selected @endif>秋田県</option>
                                <option value="yamagata"  @if(old('prefecture')=='yamagata') selected @endif>山形県</option>
                                <option value="fukushima" @if(old('prefecture')=='fukushima') selected @endif>福島県</option>
                                <option value="ibaraki"  @if(old('prefecture')=='ibaraki') selected @endif>茨城県</option>
                                <option value="tochigi"  @if(old('prefecture')=='tochigi') selected @endif>栃木県</option>
                                <option value="gunma"  @if(old('prefecture')=='gunma') selected @endif>群馬県</option>
                                <option value="saitama"  @if(old('prefecture')=='saitama') selected @endif>埼玉県</option>
                                <option value="chiba" @if(old('prefecture')=='chiba') selected @endif>千葉県</option>
                                <option value="tokyo"  @if(old('prefecture')=='tokyo') selected @endif>東京都</option>
                                <option value="kanagawa"  @if(old('prefecture')=='kanagawa') selected @endif>神奈川県</option>
                                <option value="niigata"  @if(old('prefecture')=='niigata') selected @endif>新潟県</option>
                                <option	value="toyama"  @if(old('prefecture')=='toyama') selected @endif>富山県</option>
                                <option	value="ishikawa"  @if(old('prefecture')=='ishikawa') selected @endif>石川県</option>
                                <option	value="fukui"  @if(old('prefecture')=='fukui') selected @endif>福井県</option>
                                <option	value="yamanashi"  @if(old('prefecture')=='yamanashi') selected @endif>山梨県</option>
                                <option value="nagano"  @if(old('prefecture')=='nagano') selected @endif>長野県</option>
                                <option value="gifu"  @if(old('prefecture')=='gifu') selected @endif>岐阜県</option>
                                <option value="shizuoka"  @if(old('prefecture')=='shizuoka') selected @endif>静岡県</option>
                                <option value="aichi"  @if(old('prefecture')=='aichi') selected @endif>愛知県</option>
                                <option value="mie"  @if(old('prefecture')=='mie') selected @endif>三重県</option>
                                <option value="shiga"  @if(old('prefecture')=='shiga') selected @endif>滋賀県</option>
                                <option value="kyoto"  @if(old('prefecture')=='kyoto') selected @endif>京都府</option>
                                <option value="osaka"  @if(old('prefecture')=='osaka') selected @endif>大阪府</option>
                                <option value="hyogo"  @if(old('prefecture')=='hyogo') selected @endif>兵庫県</option>
                                <option value="nara"  @if(old('prefecture')=='nara') selected @endif>奈良県</option>
                                <option value="wakayama"  @if(old('prefecture')=='wakayama') selected @endif>和歌山県</option>
                                <option value="tottori"  @if(old('prefecture')=='tottori') selected @endif>鳥取県</option>
                                <option value="shimane"  @if(old('prefecture')=='shimane') selected @endif>島根県</option>
                                <option value="okayama"  @if(old('prefecture')=='okayama') selected @endif>岡山県</option>
                                <option value="hiroshima"  @if(old('prefecture')=='hiroshima') selected @endif>広島県</option>
                                <option value="yamaguchi"  @if(old('prefecture')=='yamaguchi') selected @endif>山口県</option>
                                <option value="tokushima"  @if(old('prefecture')=='tokushima') selected @endif>徳島県</option>
                                <option value="kagawa"  @if(old('prefecture')=='kagawa') selected @endif>香川県</option>
                                <option value="ehime"  @if(old('prefecture')=='ehime') selected @endif>愛媛県</option>
                                <option value="kochi"  @if(old('prefecture')=='kochi') selected @endif>高知県</option>
                                <option value="fukuoka"  @if(old('prefecture')=='fukuoka') selected @endif>福岡県</option>
                                <option value="saga"  @if(old('prefecture')=='saga') selected @endif>佐賀県</option>
                                <option value="nagasaki"  @if(old('prefecture')=='nagasaki') selected @endif>長崎県</option>
                                <option value="kumamoto"  @if(old('prefecture')=='kumamoto') selected @endif>熊本県</option>
                                <option value="oita"  @if(old('prefecture')=='oita') selected @endif>大分県</option>
                                <option value="miyazaki" @if(old('prefecture')=='miyazaki') selected @endif>宮崎県</option>
                                <option value="kagoshima"  @if(old('prefecture')=='kagoshima') selected @endif>鹿児島県</option>
                                <option value="okinawa"  @if(old('prefecture')=='okinawa') selected @endif>沖縄県</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">ジャンル</label>
                        <div class="col-md-3">
                            <select class="form-control" name="category" id="category">
                                <option value="">選択してください</option>
                                <option value="accommodation"  @if(old('category')=='accommodation') selected @endif>宿泊</option>
                                <option value="sightseeing" @if(old('category')=='sightseeing') selected @endif>観光</option>
                                <option value="spa" @if(old('category')=='spa') selected @endif>温泉・スパ</option>
                                <option value="gourmet" @if(old('category')=='gourmet') selected @endif>グルメ</option>
                                <option value="activity" @if(old('category')=='activity') selected @endif>アクティビティ</option>
                                <option value="shopping" @if(old('category')=='shopping') selected @endif>買い物・お土産</option>
                                <option value="other" @if(old('category')=='other') selected @endif>その他</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="subcategory" id="subcategory">
                                <option value="">選択してください</option>
                            </select>
                        </div>
                        
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
                            <span class="mr-2"><input type="radio" name="congestion" value="nobody" {{ old('congestion') == 'nobody' ? 'checked' : '' }}>がらがら</span>
                            <span class="mr-2"><input type="radio" name="congestion" value="empty" {{ old('congestion') == 'empty' ? 'checked' : '' }}>やや空き</span>
                            <span class="mr-2"><input type="radio" name="congestion" value="crowded" {{ old('congestion') == 'crowded' ? 'checked' : '' }}>やや混み</span>
                            <span class="mr-2"><input type="radio" name="congestion" value="overcrowded" {{ old('congestion') == 'overcrouded' ? 'checked' : '' }}>混雑</span>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">かかったお金（一人分）</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="expence" value="{{ old('expence') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">最寄り駅</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="nearest_station" value="{{ old('nearest_station') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">駐車場</label>
                        <div class="col-md-10">
                            <span class="mr-2"><input type="radio" name="parking" value="available" {{ old('parking') == 'available' ? 'checked' : '' }}>有</span>
                            <span class="mr-2"><input type="radio" name="parking" value="unavailable" {{ old('parking') == 'unavailable' ? 'checked' : '' }}>無</span>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">公開設定</label>
                        <div class="col-md-10">
                            <span class="mr-2"><input type="radio" name="disclosure" value="open"  {{ old('disclosure') == 'open' ? 'checked' : '' }}>公開</span>
                            <span class="mr-2"><input type="radio" name="disclosure" value="private" {{ old('disclosure') == 'private' ? 'checked' : '' }}>非公開</span>
                        </div>
                    </div>
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary col-md-2 mr-2" value="投稿">
                    <input type="reset" class="btn btn-light col-md-2" value="クリア">
                </form>
            </div>
        </div>
    </div>
@endsection