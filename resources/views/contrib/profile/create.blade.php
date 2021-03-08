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
                        <label class="col-md-2">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">アイコン</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="profile_image">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">次に行きたい都道府県</label>
                        <div class="col-md-3">
                            <select class="form-control" name="prefecture">
                                <option value="">選択してください</option>
                                <option value="hokkaido">北海道</option>
                                <option value="aomori">青森県</option>
                                <option value="iwate">岩手県</option>
                                <option value="miyagi">宮城県</option>
                                <option value="akita">秋田県</option>
                                <option value="yamagata">山形県</option>
                                <option value="fukushima">福島県</option>
                                <option value="ibaraki">茨城県</option>
                                <option value="tochigi">栃木県</option>
                                <option value="gunma">群馬県</option>
                                <option value="saitama">埼玉県</option>
                                <option value="chiba">千葉県</option>
                                <option value="tokyo">東京都</option>
                                <option value="kanagawa">神奈川県</option>
                                <option value="niigata">新潟県</option>
                                <option	value="toyama">富山県</option>
                                <option	value="ishikawa">石川県</option>
                                <option	value="fukui">福井県</option>
                                <option	value="yamanashi">山梨県</option>
                                <option value="nagano">長野県</option>
                                <option value="gifu">岐阜県</option>
                                <option value="shizuoka">静岡県</option>
                                <option value="aichi">愛知県</option>
                                <option value="mie">三重県</option>
                                <option value="shiga">滋賀県</option>
                                <option value="kyoto">京都府</option>
                                <option value="osaka">大阪府</option>
                                <option value="hyogo">兵庫県</option>
                                <option value="nara">奈良県</option>
                                <option value="wakayama">和歌山県</option>
                                <option value="tottori">鳥取県</option>
                                <option value="shimane">島根県</option>
                                <option value="okayama">岡山県</option>
                                <option value="hiroshima">広島県</option>
                                <option value="yamaguchi">山口県</option>
                                <option value="tokushima">徳島県</option>
                                <option value="kagawa">香川県</option>
                                <option value="ehime">愛媛県</option>
                                <option value="kochi">高知県</option>
                                <option value="fukuoka">福岡県</option>
                                <option value="saga">佐賀県</option>
                                <option value="nagasaki">長崎県</option>
                                <option value="kumamoto">熊本県</option>
                                <option value="oita">大分県</option>
                                <option value="miyazaki">宮崎県</option>
                                <option value="kagoshima">鹿児島県</option>
                                <option value="okinawa">沖縄県</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">好きなジャンル</label>
                        <div class="col-md-3">
                            <select class="form-control" name="category">
                                <option value="">選択してください</option>
                                <option value="accommodation">宿泊</option>
                                <option value="sightseeing">観光</option>
                                <option value="spa">温泉・スパ</option>
                                <option value="gourmet">グルメ</option>
                                <option value="activity">アクティビティ</option>
                                <option value="shopping">買い物・お土産</option>
                                <option value="other">その他</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">公開範囲</label>
                        <div class="col-md-10">
                            <p class="mb-0">自分の旅行記録を</p>
                            <span class="mr-2"><input type="radio" name="role" value="contrib">公開する</span>
                            <span class="mr-2"><input type="radio" name="role" value="subsc">非公開にする</span>
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