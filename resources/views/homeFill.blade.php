{{dd($posts)}}
    {{-- @extends('layouts. app') --}}
}
}
@extends('layout.header')
@section('content')
<div id="pagefr">
            <!--<div class="welcome"><strong>Canavi</strong>
    Trang định hướng nghề nghiệp
</div>-->
            <section class="box-upCv carousel slide" id="myCarousel" data-ride="carousel">
                <h1 class="inv">Trang định hướng nghề nghiệp</h1>
                <div class="inv2">Các công việc về bán lẻ, nhà hàng, khách sạn, quán ăn</div>


                @if (!empty(Auth::user()))
                    <a id="actLoglink" class="btnupload" href="{{ route('user.profile') }}"><i class="icon fa fa-upload"></i>Cập nhật hồ sơ của bạn</a>
                @else
                    <a id="actLoglink" class="btnupload" href="{{ route('login') }}"><i class="icon fa fa-upload"></i>Tải hồ sơ của bạn lên</a>
                @endif
            </section>

               
    </section>

            <section id="page_home">
                <h2 class="title">
                    <a href="">Tất cả công việc</a>
                </h2>
                <div id="candine" class="candidate">
                
                    
                
                    <div id="tabs-container">
                        <div class="jobs-list">
                            @foreach (Data::getPosts() as $post)
                            {{-- start item --}}
                            <div class="job-item ">
                                <div class="image">
                                    <figure>
                                        <a href="" title="{{$post->title}}" ></a>
                                    </figure>
                                </div>
                                <div class="job-desc">
                                    <a href="{{ route('post.detail', ['slug' => $post->slug]) }}">
                                        <h3 class="title-job">{{$post->title}}</h3>
                                    </a>
                                    <div class="description">{{$post->description}}</div>
                                    <div class="action">
                                        <i class="icon fa fa-eye"></i>6
                                    </div>
                                </div>                              
                            </div>
                            {{-- end item --}}
                            @endforeach
                        </div>
                    
                    
                
                </div>


                    <div class="view"><a href=""><i class="fa fa-chevron-circle-right"> &nbsp;</i>Xem thêm</a></div>
                </div>


            </section>
            <section id="page_home">
                <h2 class="title">
                    <a href="http://canavi.com/candidate">Ứng viên PG nổi bật</a>
                </h2>
                <div id="candine" class="candidate">
                    <div id="tabs-container">
                        <ul class="tabs-candine">
                            <li class="current">
                                <a href="#tab-featured">Gợi ý</a>
                            </li>
                            <li>
                                <a href="#tab-viewed">Xem nhiều</a>
                            </li>
                            <li>
                                <a href="#tab-liked">Đánh giá</a>
                            </li>
                        </ul>
                        <div class="tab">
                            <div id="tab-featured" class="tab-content">
                                <div class="candidate-layout">
                                    <div class="person marginleft">
                                        <a href="http://canavi.com/candidate/ly-minh-tu-22936">
                                            <div class="cover">
                                                <img width="180" height="180" src="http://canavi.com/uploads/people/2016/December/2/image-1480644615-small.jpeg" alt="Lý Minh Tú - Canavi">
                                            </div>
                                            <h3>Lý Minh Tú</h3>
                                        </a>
                                        <figure>
                                            <span>Ứng viên</span>
                                            <a href="http://canavi.com/pg/">PG</a>,
                                            <a href="http://canavi.com/nguoi-mau/">Người mẫu</a>,
                                            <a href="http://canavi.com/dien-vien/">Diễn viên</a>,
                                            <a href="http://canavi.com/marketing/">Marketing</a>
                                        </figure>
                                        <div class="action">
                                            <i class="icon fa fa-eye"></i>2884
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view"><a href="http://canavi.com/jobposting"><i class="fa fa-chevron-circle-right"></i>&nbsp;Xem thêm</a></div>
                    </div>
                </div>
            </section>

            <section id="page_home">
                <h2 class="title">
                    <a href="http://canavi.com/candidate">Ứng viên PB nổi bật</a>
                </h2>
                <div id="candine" class="candidate">
                    <div id="tabs-container">
                        <ul class="tabs-candine">
                            <li class="current">
                                <a href="#tab-featured">Gợi ý</a>
                            </li>
                            <li>
                                <a href="#tab-viewed">Xem nhiều</a>
                            </li>
                            <li>
                                <a href="#tab-liked">Đánh giá</a>
                            </li>
                        </ul>
                        <div class="tab">
                            <div id="tab-featured" class="tab-content">
                                <div class="candidate-layout">
                                    <div class="person marginleft">
                                        <a href="http://canavi.com/candidate/ly-minh-tu-22936">
                                            <div class="cover">
                                                <img width="180" height="180" src="http://canavi.com/uploads/people/2016/December/2/image-1480644615-small.jpeg" alt="Lý Minh Tú - Canavi">
                                            </div>
                                            <h3>Lý Minh Tú</h3>
                                        </a>
                                        <figure>
                                            <span>Ứng viên</span>
                                            <a href="http://canavi.com/pg/">PG</a>,
                                            <a href="http://canavi.com/nguoi-mau/">Người mẫu</a>,
                                            <a href="http://canavi.com/dien-vien/">Diễn viên</a>,
                                            <a href="http://canavi.com/marketing/">Marketing</a>
                                        </figure>
                                        <div class="action">
                                            <i class="icon fa fa-eye"></i>2884
                                        </div>
                                    </div>

                                </div>    
                            </div>
                        </div>
                        <div class="view"><a href="http://canavi.com/jobposting"><i class="fa fa-chevron-circle-right"> &nbsp;</i>Xem thêm</a></div>
                    </div>
                </div>
            </section>


@endsection
@section('footer')
@include('layout.footer')
@endsection