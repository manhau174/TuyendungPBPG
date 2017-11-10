{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USER Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}
 {{-- @extends('layouts.app') --}}
 <style type="text/css">
    .frmlogin{
        margin-left: 20%;
    }
    .btnLogin{
        background-color: #EF5E9C;
        color: white;
    }
    .help-block>strong{
        color: red !important;
        font-size: 16px !important;
    }
 </style>
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
        
        <div class="panel-body">
            <form class="form-horizontal frmlogin col-md-offset-2" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                    <label for="email" class="col-md-4 control-label">Email</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-6 control-label">Mật khẩu</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class=" btn btnLogin">
                            Đăng nhập
                        </button>

                        <a class="btn" href="{{ route('password.request') }}">
                            Quên mật khẩu?
                        </a>
                    </div>
                </div>
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