@extends('layout.header')
@section('content')
<div id="column-main">
    <div id="mainmenu"></div>
    <div id="pagefr">
    <div class="wrap_bread">
    <!-- breadcrumb -->
    <ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
        <li typeof="v:Breadcrumb"><a href="http://canavi.com/">Trang chủ</a> <span>›</span></li>
        <li typeof="v:Breadcrumb"><h2>Đăng nhập</h2></li>
    </ul>
</div>
<section id="page_login">
	<div class="wrap_login">
    	<div class="title-register">Đăng nhập</div>
    <!--     <div class="row_fg">
        	<span>Đăng nhập hoặc đăng ký nhanh bằng tài khoản</span>
            <a id="actFacebook" href="javascript:void(0)" class="facebookbtn fb-login" onclick="oauth_facebooklogin()"><img src="/templates/default/css/site/images/btn-face-login.png" /></a>
        </div> -->
        
        <div class="row_canavi">
            <span class="message"></span>
            <form method="POST" action="{{ route('login') }}" style="">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="ftoken" id="ftoken" value="9d39a29c7bcd1b193788f132da81c9fb" /> --}}
                {{-- <input type="hidden" name="ffrom" id="ffrom" value="" /> --}}
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                	<input name="femail" id="femail" type="text" placeholder="Địa chỉ Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input name="fpassword" id="fpassword" type="password" placeholder="Mật khẩu">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <a id="actForget" href="" class="forgetpass">Quên mật khẩu?</a>
                <button id="actbtnLogin" type="submit" class="btn-login">Đăng nhập</button>
            </form>
        </div>
        
        <div class="row_link">
        	Bạn chưa là thành viên? <a id="actlinkRegiter" href="{{ route('register') }}">Đăng ký ngay</a>
        </div>
    </div>
    <div class="clr"></div>
</section>

@endsection
@section('footer')
@endsection