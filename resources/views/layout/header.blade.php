<!doctype html>

<html>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="http://canavi.com/templates/default/js/site/html5shiv.js"></script>
<script src="http://canavi.com/templates/default/js/site/respond.min.js"></script>
<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Thanh Nam</title>
  {{--   <meta name="description" content="Canavi Việt Nam đặt nền móng cho tương lai nghề nghiệp tươi sáng và canavi Việt Nam tự hào là thương hiệu dẫn đầu thị trường tuyển dụng nhân sự/nhân lực cho nữ">
    <meta name="keywords" content="Canavi Việt Nam, canavi Viet Nam" />
    <meta property="fb:app_id" content="1581108608867340" />
    <meta property="og:image" content="http://canavi.com/templates/default/css/site/images/canavi-cover.png" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Canavi dẫn đầu tuyển dụng nhân sự cho nữ" />
    <meta property="og:description" content="Canavi Việt Nam đặt nền móng cho tương lai nghề nghiệp tươi sáng và canavi Việt Nam tự hào là thương hiệu dẫn đầu thị trường tuyển dụng nhân sự/nhân lực cho nữ" />
 --}}    <link rel="shortcut icon" href="/canavi.com.png">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-grid.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-reboot.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/global.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/carousel.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/login.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/register.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/profile.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/select2.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/contact.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/catethumb.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/home.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/news.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/activity.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/animations.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/jquery.fancybox.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/shadowbox.css" type="text/css" rel="stylesheet" media="screen">
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript">
        var rooturl = 'http://canavi.com/';
        var delConfirm = 'Bạn có chắc chắn?';
        var imageDir = 'http://canavi.com/templates/default/images/';
        var spinner = '<img src="http://canavi.com/templates/default/images/site/spinner.gif" />';
        var configs = {
            'hotline': '090 8265 465',
            'controller': 'index',
            'uid': 0,
            'facebook': {
                appid: '1581108608867340'
            }
        };
        var lang = {
            default: {
                formEditLabel: 'Sửa'
            }
        }
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '315546052239357');
        fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=315546052239357&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-75522820-1', 'canavi.com');
        ga('send', 'pageview');
    </script>
</head>

<body id="">
    <div id="common_dialog" class="collapse modal fade" role="dialog"></div>
    <!-- Load Facebook SDK for JavaScript -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: configs.facebook.appid,
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.10'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <header>
        <div class="logo">
            <a href="http://canavi.com/">
                <img height="37" src="http://canavi.com/templates/default/css/site/images/canavi.com.png" alt="Canavi"/>
            </a>
        </div>
        <div id="search" class="filtergroup w80 nomargin">
            <input type="text" id="keyword" onkeydown="this.style.color = '#333';" onclick="this.value = '';" value="Nhập từ khóa..." name="keyword">
            <button class="button-search btnsearch" type="button">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <ul class="box-sign">
            <li>
                <a href="http://canavi.com/jobposting/create" class="active">Đăng tin tuyển dụng</a>
            </li>
            <li>
                <a id="actLogin" href="http://canavi.com/login">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Đăng Nhập
                </a>
            </li>
            <li>
                <a id="actRegiter" href="http://canavi.com/register">
                    <i class="fa fa-wpforms" aria-hidden="true"></i> Đăng ký
                </a>
            </li>
        </ul>
    </header>
    <div id="column-left">
        <div>
            <div id="nav-menu">
                <ul>
                    <li>
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="http://canavi.com/">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                        <a href="http://canavi.com/candidate/create">Tạo hồ sơ</a>
                    </li>
                    <li>
                        <i class="icon ca-ca-fb"></i>
                        <a href="http://canavi.com/jobsocial">Job Social</a>
                    </li>
                    <li>
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <a href="http://canavi.com/jobposting">Việc phù hợp</a>
                    </li>
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href="http://canavi.com/candidate">Tìm kiếm</a>
                    </li>
                   {{--  <li>
                        <i class="icon ca-ca-news"></i>
                        <a href="http://canavi.com/canavi-tu-van">Góc tư vấn</a>
                    </li> --}}
                    <!--<li><i class="icon ca-ca-suitcase"></i><a href="http://canavi.com/cung-cap-pg">Dịch vụ</a></li><li><i class="icon ca-ca-mail"></i><a href="http://canavi.com/contact">Liên hệ</a></li>-->
                </ul>
            </div>


            <div class="linefollow"></div>
            <div id="menu-foo">
                <ul>
                    <li>
                        <a href="/gioi-thieu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="/cung-cap-pg">Dịch Vụ Hiện Tại</a>
                    </li>
                    <li>
                        <a href="/cung-cap-dich-vu-quang-cao-tu-nhung-nguoi-co-tam-anh-huong"> Dịch Vụ Mới</a>
                    </li>
                    <li>
                        <a href="/quy-dinh-bao-mat">Quy định bảo mật</a>
                    </li>
                    <li>
                        <a href="/Giai-quyet-tranh-chap">Giải quyết tranh chấp</a>
                    </li>
                    <li>
                        <a href="/quy-che-hoat-dong">Thỏa thuận sử dụng</a>
                    </li>
                </ul>
            </div>
            <div id="coppyright">
                <ul>
                    <li>
                        <strong>Công ty cổ phần truyền thông Canavi Việt Nam</strong>
                    </li>
                    <li>MST: 0313503259</li>
                    <li>
                        <strong>Hồ Chí Minh: </strong>Tầng 4, tòa Lữ Gia Plaza, số 70 Lữ Gia, phường 15, quận 11, TP.Hồ Chí Minh
                    </li>
                    <li>
                        <strong>Hà Nội: </strong>Số 98 phố Hoàng Ngân, phường Trung Hoà, quận Cầu Giấy, Hà Nội.
                    </li>
                    <li>
                        <strong>Điện thoại:</strong> 0873.066.883
                    </li>
                    <li>
                        <strong>Hotline:</strong> 0908.265.465
                    </li>
                    <li>
                        <strong>Email:</strong> canavi.vn@gmail.com
                    </li>
                </ul>
                <div>
                    <a href="http://online.gov.vn/WebsiteDisplay.aspx?DocId=28450" target="_blank">
                        <img src="http://canavi.com/uploads/web/Pages/dadangky.png" alt="Canavi - Bo cong thuong" width="120" />
                    </a>
                </div>
                <p style="font-size: 11px;">
                    <em> Giấy phép Mạng Xã Hội số 
                    <strong>571/GP-BTTTT</strong> do Bộ Thông Tin Truyền Thông cấp ngày 15/12/2016. 
                    </em>
                </p>
            </div>
            <div class="linefollow"></div>
            <!--  <div id="menu-foo">
                <strong>Liên kết</strong>
                <ul>
                    <li>
                        <a href="http://homedy.com/" target="_blank">Homedy.com</a>
                    </li>
                    <li>
                        <a href="http://jamja.vn/" target="_blank">Jamja.vn</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
    <div id="column-main">
        <div id="mainmenu">

            <div id="menu">
                <ul>
                    <li><a href="">Hình thức tuyển dụng</a>
                        <div class="dropdown">
                            <div class="submenu">
                                <h2><a href="http://canavi.com/hinh-thuc-tuyen-dung/ban-thoi-gian/">Bán thời gian</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/hinh-thuc-tuyen-dung/toan-thoi-gian/">Toàn thời gian</a></h2>
                            </div>
                        </div>
                    </li>
                    <li><a href="">Loại hình công việc</a>
                        <div class="dropdown">
                            <div class="submenu">
                                <h2>PG</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/pg/phat-san-pham-mau/">Phát sản phẩm mẫu</a></li>
                                    <li><a href="http://canavi.com/pg/pg-ban-hang/">Bán hàng</a></li>
                                    <li><a href="http://canavi.com/pg/gioi-thieu-san-pham/">Giới thiệu sản phẩm</a></li>
                                    <li><a href="http://canavi.com/pg/khai-truong/">Khai Trương</a></li>
                                    <li><a href="http://canavi.com/pg/chay-roadshow/">Chạy Roadshow</a></li>
                                    <li><a href="http://canavi.com/pg/le-tan/">Lễ Tân</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Người mẫu</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/nguoi-mau/mau-anh-nghe-thuat/">Mẫu ảnh nghệ thuật</a></li>
                                    <li><a href="http://canavi.com/nguoi-mau/mau-noi-y-ao-tam/">Mẫu nội y áo tắm</a></li>
                                    <li><a href="http://canavi.com/nguoi-mau/mau-quan-ao/">Mẫu quần áo</a></li>
                                    <li><a href="http://canavi.com/nguoi-mau/mau-giay-dep/">Mẫu giày dép</a></li>
                                    <li><a href="http://canavi.com/nguoi-mau/mau-cap-tui-xach/">Mẫu cặp, túi xách</a></li>
                                    <li><a href="http://canavi.com/nguoi-mau/mau-vat-dung-thiet-yeu/">Mẫu vật dụng thiết yếu</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Diễn viên</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/dien-vien/dien-anh/">Điện ảnh</a></li>
                                    <li><a href="http://canavi.com/dien-vien/san-khau/">Sân khấu</a></li>
                                    <li><a href="http://canavi.com/dien-vien/hai/">Hài</a></li>
                                    <li><a href="http://canavi.com/dien-vien/truyen-hinh/">Truyền hình</a></li>
                                    <li><a href="http://canavi.com/dien-vien/mua/">Múa</a></li>
                                    <li><a href="http://canavi.com/dien-vien/dong-the/">Đóng thế</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>MC</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/mc/mc-san-khau/">Sân khấu</a></li>
                                    <li><a href="http://canavi.com/mc/hien-truong/">Hiện trường</a></li>
                                    <li><a href="http://canavi.com/mc/su-kien/">Sự kiện</a></li>
                                    <li><a href="http://canavi.com/mc/mc-truyen-hinh/">Truyền hình</a></li>
                                </ul>
                            </div>
                            <div style="clear: both"></div>
                            <div class="submenu">
                                <h2>Hành chính</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/hanh-chinh/nhan-su/">Nhân sự</a></li>
                                    <li><a href="http://canavi.com/hanh-chinh/ke-toan/">Kế toán</a></li>
                                    <li><a href="http://canavi.com/hanh-chinh/van-phong/">Văn phòng</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Trợ lý/Thư ký</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/tro-ly-thu-ky/hoi-nghi/">Hội nghị</a></li>
                                    <li><a href="http://canavi.com/tro-ly-thu-ky/tro-ly-thu-ky-van-phong/">Văn phòng</a></li>
                                    <li><a href="http://canavi.com/tro-ly-thu-ky/lanh-dao/">Lãnh đạo</a></li>
                                    <li><a href="http://canavi.com/tro-ly-thu-ky/nha-quan-ly/">Nhà quản lý</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Bán hàng</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/ban-hang/bao-hiem/">Bảo hiểm</a></li>
                                    <li><a href="http://canavi.com/ban-hang/bat-dong-san/">Bất động sản</a></li>
                                    <li><a href="http://canavi.com/ban-hang/giao-duc/">Giáo dục</a></li>
                                    <li><a href="http://canavi.com/ban-hang/ngan-hang/">Ngân hàng</a></li>
                                    <li><a href="http://canavi.com/ban-hang/y-te/">Y tế</a></li>
                                    <li><a href="http://canavi.com/ban-hang/quang-cao/">Quảng cáo</a></li>
                                    <li><a href="http://canavi.com/ban-hang/vien-thong-cong-nghe/">Viễn thông công nghệ</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Marketing</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/marketing/tiep-thi/">Tiếp thị</a></li>
                                    <li><a href="http://canavi.com/marketing/truyen-thong/">Truyền thông</a></li>
                                    <li><a href="http://canavi.com/marketing/dich-thuat/">Dịch thuật</a></li>
                                    <li><a href="http://canavi.com/marketing/noi-dung-quang-cao/">Nội dung quảng cáo</a></li>
                                    <li><a href="http://canavi.com/marketing/fanpage-website/">Fanpage/Website</a></li>
                                    <li><a href="http://canavi.com/marketing/phu-trach-thuong-hieu/">Phụ trách thương hiệu</a></li>
                                </ul>
                            </div>
                            <div style="clear: both"></div>
                            <div class="submenu">
                                <h2>Phục vụ</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/phuc-vu/nha-hang/">Nhà hàng</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/khach-san/">Khách sạn</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/tiec-cuoi/">Tiệc cưới</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/quan-cafe/">Quán Cafe</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/beer-club/">Beer Club</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/chuoi-ban-le/">Chuỗi bán lẻ</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/quan-bar/">Quán Bar</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/karaoke/">Karaoke</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/spa/">Spa</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/sieu-thi/">Siêu thị</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/fitness/">Fitness Center</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/rap-chieu-phim/">Rạp chiếu phim</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/trung-tam-thuong-mai/">Trung tâm thương mại</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/resort/">Resort</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/tiem-banh/">Tiệm bánh</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/trung-tam-giai-tri/">Trung tâm giải trí</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/pha-che/">Pha chế</a></li>
                                    <li><a href="http://canavi.com/phuc-vu/phu-bep/">Phụ bếp</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="">Tính chất công việc</a>
                        <div class="dropdown">
                            <div class="submenu">
                                <h2><a href="http://canavi.com/tinh-chat/cho-ba-me-mang-bau">Cho bà mẹ mang bầu</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/tinh-chat/viec-nang-dong">Việc năng động</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/tinh-chat/tai-van-phong">Tại văn phòng</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/tinh-chat/can-ngoai-hinh">Cần ngoại hình</a></h2>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    </li>
                    <li><a href="">Địa điểm</a>
                        <div class="dropdown">
                            <div class="submenu">
                                <h2>Miền Bắc</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/ha-noi">Hà Nội</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Miền Trung</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/da-nang">Đà Nẵng</a></li>
                                </ul>
                            </div>
                            <div class="submenu">
                                <h2>Miền Nam</h2>
                                <ul class="level3">
                                    <li><a href="http://canavi.com/tp-ho-chi-minh">TP Hồ Chí Minh</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://canavi.com/canavi-tu-van">Góc tư vấn</a>
                        <div class="dropdown">
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/nghe-nghiep-cho-pg">Nghề nghiệp Lễ Tân, Phục Vụ, PG</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cach-tao-mot-ho-so-xin-viec-chuyen-nghiep">Hồ sơ xin việc chuyên nghiệp</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cach-phong-van-xin-viec-hieu-qua">Phỏng vấn xin việc hiệu quả</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cach-de-sinh-vien-moi-ra-truong-xin-viec-hieu-qua">Cho sinh viên mới ra trường</a></h2>
                            </div>
                            <div style="clear: both"></div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cach-de-tro-thanh-ung-cu-vien-sang-gia-tai-cong-ty">Là ứng viên sáng giá tại công ty</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/khi-nao-ban-nen-nghi-viec">Khi nào bạn nên nghỉ việc</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cach-de-tuyen-dung-hieu-qua">Cách để tuyển dụng hiệu quả</a></h2>
                            </div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cac-ky-nang-van-phong-can-biet">Kỹ năng văn phòng cần biết</a></h2>
                            </div>
                            <div style="clear: both"></div>
                            <div class="submenu">
                                <h2><a href="http://canavi.com/canavi-tu-van/cach-de-ban-duoc-tang-luong">Cách để bạn được tăng lương</a></h2>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    @yield('content')
    @yield('footer')