    {{-- @extends('layouts. app') --}}
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
                    <a id="actLoglink" class="btnupload" href="{{ route('create') }}"><i class="icon fa fa-upload"></i>Cập nhật hồ sơ của bạn</a>
                @else
                    <a id="actLoglink" class="btnupload" href="{{ route('login') }}"><i class="icon fa fa-upload"></i>Tải hồ sơ của bạn lên</a>
                @endif
            </section>

               
    </section>

            <section id="page_home">
                <h2 class="title">
                    <a href="http://canavi.com/jobposting">Công việc hấp dẫn dành cho bạn</a>
                </h2>
                <div id="candine" class="candidate">
                    <div id="tabs-container">
                        <div class="jobs-list">
                            <div class="job-item marginleft ">
                                <div class="image">
                                    <figure>
                                        <a href="http://canavi.com/jobposting/cong-ty-tnhh-thuong-mai-son-duong-nhan-vien-le-tan-ha-noi-740" title="Công Ty Tnhh Thương Mại Sơn Dương  - Nhân viên lễ tân - Hà Nội"></a>
                                    </figure>
                                </div>
                                <div class="job-desc">
                                    <a href="http://canavi.com/jobposting/cong-ty-tnhh-thuong-mai-son-duong-nhan-vien-le-tan-ha-noi-740" title="Công Ty Tnhh Thương Mại Sơn Dương  - Nhân viên lễ tân - Hà Nội"></a>
                                        <h3 class="title-job">Công Ty Tnhh Thương Mại Sơn Dương - Nhân viên lễ tân - Hà Nội</h3>
                                    </a>
                                    <div class="description">- Làm thủ tục Checkin, Checkout cho khách - Tiếp nhận và trả lời tất cả các cuộc gọi khác liên hệ đến - Giải quyết than phiền của khách trong quá trình lưu trú. - Các công việc khác có liên quan đến bộ phận lễ tân</div>
                                    <div class="action">
                                        <i class="icon fa fa-eye"></i>6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view"><a href="http://canavi.com/jobposting"><i class="fa fa-chevron-circle-right"> &nbsp;</i>Xem thêm</a></div>
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
@endsection