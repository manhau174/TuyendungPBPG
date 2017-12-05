{{-- {{dd($user->city_id)}} --}}

@extends('layout.header')

@section('content')
<div id="pagefr">
    <section id="page_profile">
        <div class="name">
            <h1>{{$user->name}}</h1><span class="prview">( 2924 lượt xem )</span>
        </div>
        <div id="tabs-container">
            <ul class="tabs-people">
                <li class="current"><a href="#tab-profile">Thông tin</a></li>
                <li><a href="#tab-picture">Ảnh</a></li>
                <li><a id="tab_review" href="#tab-review">Đánh giá (13)</a></li>
                <div class="fbsharebutton">
                    <div class="fb-send fb_iframe_widget" data-href="http://canavi.com/candidate/ly-minh-tu-22936?preview=1" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1581108608867340&amp;container_width=0&amp;href=http%3A%2F%2Fcanavi.com%2Fcandidate%2Fly-minh-tu-22936%3Fpreview%3D1&amp;locale=vi_VN&amp;sdk=joey"><span style="vertical-align: bottom; width: 47px; height: 20px;"><iframe name="f38eb45b1cb34d4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:send Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/send.php?app_id=1581108608867340&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FBbnCpbXY9X8.js%3Fversion%3D42%23cb%3Df3f1e44e85fa0c%26domain%3Dcanavi.com%26origin%3Dhttp%253A%252F%252Fcanavi.com%252Ff35b2effb82fcc%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fcanavi.com%2Fcandidate%2Fly-minh-tu-22936%3Fpreview%3D1&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 47px; height: 20px;" class=""></iframe></span></div>
                    <div class="fb-like fb_iframe_widget" data-href="http://canavi.com/candidate/ly-minh-tu-22936?preview=1" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1581108608867340&amp;container_width=0&amp;href=http%3A%2F%2Fcanavi.com%2Fcandidate%2Fly-minh-tu-22936%3Fpreview%3D1&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=small"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f14bc22cee5fdb" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/like.php?action=like&amp;app_id=1581108608867340&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FBbnCpbXY9X8.js%3Fversion%3D42%23cb%3Df25ee3d36c18694%26domain%3Dcanavi.com%26origin%3Dhttp%253A%252F%252Fcanavi.com%252Ff35b2effb82fcc%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fcanavi.com%2Fcandidate%2Fly-minh-tu-22936%3Fpreview%3D1&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=small" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></div>
                </div>
            </ul>
            <div class="clr"></div>
            <div id="main-profile" class="likeprofile">
                <div id="column-profile">
                    @if (empty($user->avatar))
                        <img class="thumb" src="{{ asset('images/avatar.jpg') }}" alt="{{$user->name}} - avatar" title="{{$user->name}}">

                    @else
                        <img class="thumb" src="{{$user->avatar }}" alt="{{$user->name}} - avatar" title="{{$user->name}}">
                    @endif
                    
                    <div class="count-rating">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                        <span>(1 đánh giá)</span>
                    </div>
                    <a data-id="22936" class="btn-wishlist btn-like active" href="javascript:void(0)"><i class="icon ca-ca-love"></i>Theo dõi (<span class="like-counter">1</span>)</a>
                    <a data-code="22936" class="linkcontact" href="javascript:void(0)"><i class="icon ca-ca-mail"></i>Liên hệ</a>
                </div>
                <div id="column-info">
                    <div class="tab">
                        <div id="tab-profile" class="tab-content">
                            <div class="box-info">
                                <h2 class="title"><i class="icon ca-ca-infor"></i>Thông tin cơ bản</h2>
                                <ul>
                                    <li>Năm sinh: <strong> 
                                    @if ($user->birthday == '01-01-1970')
                                        <strong style="color: red">Chưa cập nhật</strong>
                                    @else
                                    {{$user->birthday}}
                                    @endif
                                    
                                    </strong></li>

                                    <li>Thành phố: <strong>  @if (!empty($user->city_id))
                                       {{$user->city->name}}
                                    @else
                                    <strong style="color: red">Chưa cập nhật</strong>
                                    @endif</strong></li>
                                    <li>Giới tính: <strong>@if ($user->gender<2)
                                       {{$user->gender}}
                                    @else
                                    <strong style="color: red">Chưa cập nhật</strong>
                                    @endif</strong></li>
                                    {{-- <li>Tình trạng hôn nhân <strong>Độc thân</strong></li> --}}
                                    {{-- <li>Thành phố: <strong>{{$user->city->name}}</strong></li> --}}
                                </ul>
                            </div>
                            <div class="box-info">
                                <h2 class="title"><i class="icon ca-ca-suitecase"></i>Kinh nghiệm làm việc</h2>
                                <!--<ul class="experience">
                                    <li><i class="icon ca-ca-note-1"></i>PG mẫu ảnh - <strong>Giày Converse</strong>
                                        <ul>
                                            <li><i class="icon ca-ca-calendar"></i>03/08/2016</li>
                                        </ul>
                                   </li>
                                    <li><i class="icon ca-ca-note-1"></i>PG mẫu ảnh - <strong>Giày Converse</strong>
                                        <ul>
                                            <li><i class="icon ca-ca-calendar"></i>03/08/2016</li>
                                        </ul>
                                    </li>
                                </ul>-->
                                {{-- <textarea class="textarea-job" readonly="readonly">
                                    PG giải đấu bóng rổ VBA
                                    PG motorshow
                                    PG mẫu xe Nissan
                                    PG triễn làm glasstech
                                    PG strongbow
                                    PG khai trương mobifone
                                    PG lễ kỷ niệm 25 năm Isuzu
                                    PG lễ tân hội thảo Nha khoa du lịch
                                    PG lễ trao giải Vietjet
                                    PG event BMW
                                </textarea> --}}
                                @if (!@empty ($user->exp))
                                    
                                    {{$user->exp}}
                                @else
                                <strong style="color: red">Chưa cập nhật</strong>
                                @endif
                               
                            </div>
                            <div class="box-info" style="padding-right: 0; padding-bottom: 2px;">
                                <h2 class="title"><i class="icon ca-ca-photos"></i>Hình ảnh nổi bật ứng viên</h2>
                                <!--<span class="detail"><a href="#tab-picture">Xem thêm <i class="icon ca-ca-read-more"></i></a></span>-->
                                <ul id="lightgallery" class="gallery">
                                    <li class="marginleft">
                                        <a class="jackbox" href="#">
                                            <div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify"></div>
                                            <img src="http://canavi.com/uploads/people/2016/December/2/image-1480644509-medium.jpeg">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="jackbox" href="#">
                                            <div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify"></div>
                                            <img src="http://canavi.com/uploads/people/2016/December/2/image-1480644509-medium.jpeg">
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <div id="tab-picture" class="tab-content">
                            <div class="box-info" style="padding-right: 0">
                                <ul id="lightgallery" class="gallery">
                                    <li class="marginleft">
                                        <a href="#">
                                            <img src="http://canavi.com/uploads/people/2016/December/2/image-1480644509-medium.jpeg">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <img src="http://canavi.com/uploads/people/2016/December/2/image-1480644508-medium.jpeg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab-review" class="tab-content">
                            <div id="page_review">
                                <div class="box_review">
                                    <b>Bạn cần đăng ký để sử dụng chức năng viết nhận xét hồ sơ ứng viên này.</b>
                                </div>
                                <div class="box_review">
                                    <div class="rv-title"><i data-icon="h" class="icon"></i>Các nhận xét</div>
                                    <div id="" class="rv-list-item">
                                        <div class="rv-img"><span><img src="http://canavi.com/uploads/people/2017/June/20/16463115-1092064937606403-6322437987724215570-o-medium.jpg" class="img-responsive"></span></div>
                                        <div class="rv-desc">
                                            <div class="name">
                                                <a href="http://canavi.com/candidate/xuanthu-tran-24022?preview=1" target="_blank">Xuânthu Trần</a>
                                            </div>
                                            <div class="datetime">04/11/2017 09:45</div>
                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias iste reiciendis aliquam cupiditate eos, beatae, laudantium rem illo nam fugiat quasi quas dolore incidunt, non eveniet quos ut sed obcaecati.</div>
                                            <div class="rating">
                                                <span class="share"><a class="shareBtn" data-id="2508" data-owner="Lý Minh Tú" data-href="http://canavi.com/candidate/ly-minh-tu-22936?pf=2508&amp;tg=tab-review#review-2508">Chia sẻ Facebook</a></span>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div id="" class="rv-list-item">
                                        <div class="rv-img"><span><img src="http://canavi.com/uploads/people/2017/June/20/16463115-1092064937606403-6322437987724215570-o-medium.jpg" class="img-responsive"></span></div>
                                        <div class="rv-desc">
                                            <div class="name">
                                                <a href="http://canavi.com/candidate/xuanthu-tran-24022?preview=1" target="_blank">Xuânthu Trần</a>
                                            </div>
                                            <div class="datetime">04/11/2017 09:45</div>
                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dicta debitis similique dolorem molestias sapiente accusamus tempore qui est, architecto!</div>
                                            <div class="rating">
                                                <span class="share"><a class="shareBtn" data-id="2508" data-owner="Lý Minh Tú" data-href="http://canavi.com/candidate/ly-minh-tu-22936?pf=2508&amp;tg=tab-review#review-2508">Chia sẻ Facebook</a></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="rv-load"><a id="review_more" class="btncnv btnreset" data-pid="22936" data-start="10" data-total="13">Xem thêm</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-info">
                        <h2 class="title"><i class="icon ca-ca-suitecase"></i>Các sự kiện nỗi bật đã làm</h2>
                        <div class="box-event" style="border: none; padding: 0; margin: 0;">
                            <ul>
                                <li class="marginleft" style="width: 236px;">
                                    <a href="http://canavi.com/event/valentine-s-day-with-couple-tx-18">
                                        <div class="image" style="height: 236px; width: 236px;"><img src="http://canavi.com/uploads/event/2017/February/15/1487128964.png" width="400"></div>
                                        <div class="name">Valentine's Day with Couple TX</div>
                                    </a>
                                    <div class="time">Thời gian: 11/02/2017</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="invited"><a href="http://canavi.com/register?from=recruiter" target="_blank">P/S: Tôi yêu bạn. Hãy tạo hồ sơ chuyên nghiệp MIỄN PHÍ tại Canavi.</a></div> --}}
                </div>
            </div>
        </div>
        <div></div>
        <div class="clr_latest"></div>
        <div id="candine-latest">
            <h2 class="title"><span>Ứng viên liên quan</span></h2>
            <div class="latest-info">
                <div class="cnv_carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 19500px; left: 0px; display: block;">
                            <div class="owl-item" style="width: 195px;">
                                <div class="item">
                                    <div class="person marginleft">
                                        <a href="http://canavi.com/candidate/vo-thanh-nhan-16464">
                                            <div class="cover">
                                                <img width="180" height="180" src="http://canavi.com/uploads/people/2017/February/14/img-20170114-3-small.jpg" alt="Võ Thanh Nhàn - Canavi">
                                            </div>
                                            <h3>Võ Thanh Nhàn</h3>
                                        </a>
                                        <figure><span>Ứng viên</span><a href="http://canavi.com/pg/">PG</a>, <a href="http://canavi.com/pg/pg-ban-hang/">Bán hàng</a>, <a href="http://canavi.com/pg/khai-truong/">Khai trương</a>, <a href="http://canavi.com/pg/le-tan/">Lễ tân</a>, <a href="http://canavi.com/nguoi-mau/mau-quan-ao/">Mẫu quần áo</a></figure>
                                        <div class="action"><i class="icon ca-ca-eyes"></i>1524</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>





                    <div class="owl-controls clickable">
                        <div class="owl-buttons">
                            <div class="owl-prev"><i class="icon ca-ca-right-arrow"></i></div>
                            <div class="owl-next"><i class="icon ca-ca-right-arrow"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr_latest"></div>
        <div id="candine-latest">
            <h2 class="title"><span>Ứng viên nổi bật</span></h2>
            <div class="latest-info">
                <div class="cnv_carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 11700px; left: 0px; display: block;">

                            <div class="owl-item" style="width: 195px;">
                                <div class="item">
                                    <div class="person marginleft">
                                        <a href="http://canavi.com/candidate/dinh-lan-phuong-24405">
                                            <div class="cover">
                                                <img width="180" height="180" src="http://canavi.com/uploads/avatar/2017/July/22/dinh-lan-phuong-25634-1500675835-small.jpg" alt="Đinh Lan Phương">
                                            </div>
                                            <h3>Đinh Lan Phương</h3>
                                        </a>
                                        <figure><span>Ứng viên</span><a href="http://canavi.com/hanh-chinh/ke-toan/">Kế toán</a>, <a href="http://canavi.com/ban-hang/quang-cao/">Quảng cáo</a>, <a href="http://canavi.com/marketing/truyen-thong/">Truyền thông</a>, <a href="http://canavi.com/marketing/noi-dung-quang-cao/">Nội dung quảng cáo</a>, <a href="http://canavi.com/marketing/fanpage-website/">Fanpage/Website</a></figure>
                                        <div class="action"><i class="icon ca-ca-eyes"></i>272</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="owl-controls clickable">
                        <div class="owl-buttons">
                            <div class="owl-prev"><i class="icon ca-ca-right-arrow"></i></div>
                            <div class="owl-next"><i class="icon ca-ca-right-arrow"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr_latest"></div>
        <div class="carousel-jobs">
            <h2 class="title"><span>Công việc nổi bật</span></h2>
            <div class="latest-info">
                <div class="cnv_carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 390px; left: 0px; display: block;">
                            <div class="owl-item" style="width: 195px;">
                                <div class="item job-item marginleft">
                                    <div class="image">
                                        <figure>
                                            <a href="http://canavi.com/jobposting/phuonganhtourist-tuyen-nhan-vien-kinh-doanh-tour-khach-le-khach-doan-122-hoang-van-thu-697" title="Phuonganhtourist - Tuyển Nhân Viên Kinh Doanh Tour Khách Lẻ/ Khách đoàn - 122 Hoàng Văn Thụ">
                                        <img class="img-responsive" alt="Phuonganhtourist - Tuyển Nhân Viên Kinh Doanh Tour Khách Lẻ/ Khách đoàn - 122 Hoàng Văn Thụ - Canavi" src="http://canavi.com/uploads/job/2017/September/27/1506484197-medium.png">
                                    </a>
                                        </figure>
                                    </div>
                                    <div class="job-desc">
                                        <a href="http://canavi.com/jobposting/phuonganhtourist-tuyen-nhan-vien-kinh-doanh-tour-khach-le-khach-doan-122-hoang-van-thu-697" title="Phuonganhtourist - Tuyển Nhân Viên Kinh Doanh Tour Khách Lẻ/ Khách đoàn - 122 Hoàng Văn Thụ">
                                            <h3 class="title-job">Phuonganhtourist - Tuyển Nhân Viên Kinh Doanh Tour Khách Lẻ/ Khách đoàn - 122 Hoàng Văn Thụ</h3>
                                        </a>
                                        <div class="description">- Tìm kiếm nguồn khách tiềm năng và phát triển thị trường (ưu tiên ứng viên đã có sẵn nguồn khách hàng). - Có phương án và chiến lược kinh doanh thích hợp cho từng thời điểm trong năm. - Tư vấn tổ chức tour cho khách. - Tiếp nhận thông tin từ khách hàng, lên chương trình, bán tour cho khách.
                                        </div>
                                        <div class="action"><i class="icon ca-ca-eyes"></i>1473</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls clickable" style="display: none;">
                        <div class="owl-buttons">
                            <div class="owl-prev"><i class="icon ca-ca-right-arrow"></i></div>
                            <div class="owl-next"><i class="icon ca-ca-right-arrow"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@include('layout.footer')
@endsection