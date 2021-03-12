@extends('layouts.contrib')

@section('title', '新規プロフィール登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="mb-3">新規プロフィール登録</h2>
                <form action="{{ action('Contrib\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-3">ニックネーム</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3">アイコン</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file" name="profile_image">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3">次に行きたい都道府県</label>
                        <div class="col-md-3">
                            <select class="form-control" name="next_prefecture">
                                <option value="">選択してください</option>
                                <option value="hokkaido" @if(old('next_prefecture')=='hokkaido') selected @endif>北海道</option>
                                <option value="aomori" @if(old('next_prefecture')=='aomori' ) selected @endif>青森県</option>
                                <option value="iwate" @if(old('next_prefecture')=='iwate') selected @endif>岩手県</option>
                                <option value="miyagi" @if(old('next_prefecture')=='miyagi') selected @endif>宮城県</option>
                                <option value="akita" @if(old('next_prefecture')=='akita') selected @endif>秋田県</option>
                                <option value="yamagata"  @if(old('next_prefecture')=='yamagata') selected @endif>山形県</option>
                                <option value="fukushima" @if(old('next_prefecture')=='fukushima') selected @endif>福島県</option>
                                <option value="ibaraki"  @if(old('next_prefecture')=='ibaraki') selected @endif>茨城県</option>
                                <option value="tochigi"  @if(old('next_prefecture')=='tochigi') selected @endif>栃木県</option>
                                <option value="gunma"  @if(old('next_prefecture')=='gunma') selected @endif>群馬県</option>
                                <option value="saitama"  @if(old('next_prefecture')=='saitama') selected @endif>埼玉県</option>
                                <option value="chiba" @if(old('next_prefecture')=='chiba') selected @endif>千葉県</option>
                                <option value="tokyo"  @if(old('next_prefecture')=='tokyo') selected @endif>東京都</option>
                                <option value="kanagawa"  @if(old('next_prefecture')=='kanagawa') selected @endif>神奈川県</option>
                                <option value="niigata"  @if(old('next_prefecture')=='niigata') selected @endif>新潟県</option>
                                <option	value="toyama"  @if(old('next_prefecture')=='toyama') selected @endif>富山県</option>
                                <option	value="ishikawa"  @if(old('next_prefecture')=='ishikawa') selected @endif>石川県</option>
                                <option	value="fukui"  @if(old('next_prefecture')=='fukui') selected @endif>福井県</option>
                                <option	value="yamanashi"  @if(old('next_prefecture')=='yamanashi') selected @endif>山梨県</option>
                                <option value="nagano"  @if(old('next_prefecture')=='nagano') selected @endif>長野県</option>
                                <option value="gifu"  @if(old('next_prefecture')=='gifu') selected @endif>岐阜県</option>
                                <option value="shizuoka"  @if(old('next_prefecture')=='shizuoka') selected @endif>静岡県</option>
                                <option value="aichi"  @if(old('next_prefecture')=='aichi') selected @endif>愛知県</option>
                                <option value="mie"  @if(old('next_prefecture')=='mie') selected @endif>三重県</option>
                                <option value="shiga"  @if(old('next_prefecture')=='shiga') selected @endif>滋賀県</option>
                                <option value="kyoto"  @if(old('next_prefecture')=='kyoto') selected @endif>京都府</option>
                                <option value="osaka"  @if(old('next_prefecture')=='osaka') selected @endif>大阪府</option>
                                <option value="hyogo"  @if(old('next_prefecture')=='hyogo') selected @endif>兵庫県</option>
                                <option value="nara"  @if(old('next_prefecture')=='nara') selected @endif>奈良県</option>
                                <option value="wakayama"  @if(old('next_prefecture')=='wakayama') selected @endif>和歌山県</option>
                                <option value="tottori"  @if(old('next_prefecture')=='tottori') selected @endif>鳥取県</option>
                                <option value="shimane"  @if(old('next_prefecture')=='shimane') selected @endif>島根県</option>
                                <option value="okayama"  @if(old('next_prefecture')=='okayama') selected @endif>岡山県</option>
                                <option value="hiroshima"  @if(old('next_prefecture')=='hiroshima') selected @endif>広島県</option>
                                <option value="yamaguchi"  @if(old('next_prefecture')=='yamaguchi') selected @endif>山口県</option>
                                <option value="tokushima"  @if(old('next_prefecture')=='tokushima') selected @endif>徳島県</option>
                                <option value="kagawa"  @if(old('next_prefecture')=='kagawa') selected @endif>香川県</option>
                                <option value="ehime"  @if(old('next_prefecture')=='ehime') selected @endif>愛媛県</option>
                                <option value="kochi"  @if(old('next_prefecture')=='kochi') selected @endif>高知県</option>
                                <option value="fukuoka"  @if(old('next_prefecture')=='fukuoka') selected @endif>福岡県</option>
                                <option value="saga"  @if(old('next_prefecture')=='saga') selected @endif>佐賀県</option>
                                <option value="nagasaki"  @if(old('next_prefecture')=='nagasaki') selected @endif>長崎県</option>
                                <option value="kumamoto"  @if(old('next_prefecture')=='kumamoto') selected @endif>熊本県</option>
                                <option value="oita"  @if(old('next_prefecture')=='oita') selected @endif>大分県</option>
                                <option value="miyazaki" @if(old('next_prefecture')=='miyazaki') selected @endif>宮崎県</option>
                                <option value="kagoshima"  @if(old('next_prefecture')=='kagoshima') selected @endif>鹿児島県</option>
                                <option value="okinawa"  @if(old('next_prefecture')=='okinawa') selected @endif>沖縄県</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3">好きなジャンル</label>
                        <div class="col-md-3">
                            <select class="form-control" name="favorite_category">
                                <option value="">選択してください</option>
                                <option value="accommodation"  @if(old('favorite_category')=='accommodation') selected @endif>宿泊</option>
                                <option value="sightseeing" @if(old('favorite_category')=='sightseeing') selected @endif>観光</option>
                                <option value="spa" @if(old('favorite_category')=='spa') selected @endif>温泉・スパ</option>
                                <option value="gourmet" @if(old('favorite_category')=='gourmet') selected @endif>グルメ</option>
                                <option value="activity" @if(old('favorite_category')=='activity') selected @endif>アクティビティ</option>
                                <option value="shopping" @if(old('favorite_category')=='shopping') selected @endif>買い物・お土産</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3">自己紹介</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3">公開範囲</label>
                        <div class="col-md-9">
                            <p class="mb-0">自分の旅行記録を</p>
                            <span class="mr-2"><input type="radio" name="role" value="contrib" {{ old('role') == 'contrib' ? 'checked' : '' }}>公開する</span>
                            <span class="mr-2"><input type="radio" name="role" value="subsc" {{ old('role') == 'subsc' ? 'checked' : '' }}>非公開にする</span>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary col-md-2 mr-2" value="登録">
                    <input type="reset" class="btn btn-light col-md-2" value="クリア">
                </form>
            </div>
        </div>
    </div>
@endsection