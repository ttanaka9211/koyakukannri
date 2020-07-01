@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">顧客新規登録</div>
                    <form action="/customers" method="post">
                        @csrf
                        <p>氏名:<input type="text" name="name" value="{{ old('name') }}"></p>
                        <p>店舗番号:<input type="text" name="shop_id" value="{{ old('shop')}}"></p>
                        <p style="font-size: 0.75em">1 東京本店、２名古屋支店、３大阪支店</p>
                        <p>郵便番号:<input type="text" name="postal" value="{{ old('postal')}}"></p>
                        <p>住所:<input type="text" name="address" value="{{ old('address') }}"></p>
                        <p>メール:<input type="text" name="email" value="{{ old('email') }}"></p>
                        <p>生年月日:<input type="text" name="birthdate" value="{{ old('birthdate') }}"></p>
                        <p>電話番号:<input type="text" name="phone" value="{{ old('phone') }}"></p>
                        <p>クレーマーフラグ:<input type="text" name="kramer_flag" value="{{ old('kramer_flag') }}"></p>
                        <p style="font-size: 0.75em">０問題ない顧客、１クレーマー顧客</p>
                        <p style="text-align: center"><button type="submit" class="btn btn-primary">登録</button></p>
                    </form>

                    @include('errors')
                </div>
            </div>
        </div>
    </div>
@endsection