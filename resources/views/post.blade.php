@extends('layout.header')
@section('content')
<div id="pagefr">
    <section id="page-jobposting">
        <div class="name-title">
            <h1>Biểu mẫu đăng tin tuyển dụng</h1>
        </div>
        <div class="backtolist"><a href="/jobposting"><i class="icon ca-ca-right-arrow"></i> Trở về danh sách</a></div>
        <div id="tabs-container">
            <div id="main-profile">
                <form action="/jobposting/update" method="POST" enctype="multipart/form-data">
                    <div id="column-profile" class="posting-thumb">
                        <figure>
                            <span>
                <img id="cover-image" class="jobs pointer" src="http://canavi.com/templates/default/css/site/images/noimage.png" alt="Cover image" title="Cover Image">
                <input id="fcover" type="file" name="fcover" class="collapse">
                    </span>
                        </figure>
                    </div>
                    <div id="column-info">
                        <div class="tab">
                            <div id="tab-profile" class="tab-content">
                                <div class="posting-box">
                                    <div class="title"><i class="icon fa fa-info-circle"></i>Thông tin cơ bản</div>
                                    <ul class="edit">
                                        <li><strong>VỊ TRÍ TUYỂN DỤNG</strong>
                                            <ul class="edit-info">
                                                <li><span class="required">Vị trí tuyển dụng</span>
                                                    <input name="ftitle" id="ftitle" class="txt-capital" value="" placeholder="Vị trí tuyển dụng" type="text">
                                                    <span class="warning-span">Tiêu đề sẽ không thể thay đổi sau khi tin được hiển trị trên Canavi</span>
                                                </li>
                                                <li>
                                                    <span>Khu vực tuyển dụng</span>
                                                    <div class="select-style">
                                                         <select name="fregion" id="fregion" class="select-style">
                                                    <option value="3">TP.Hồ Chí Minh</option>
                                                    <option value="5">Hà Nội</option>
                                                    <option value="9">Đà Nẵng</option>
                                                    <option value="7">Cần Thơ</option>
                                                    <option value="101">Hải Phòng</option>
                                                    <option value="125">Khánh Hoà</option>
                                                    <option value="102">Bà Rịa - Vũng Tàu</option>
                                                    <option value="109">Bình Dương</option>
                                                    <option value="82">An Giang</option>
                                                    <option value="105">Bạc Liêu</option>
                                                    <option value="103">Bắc Giang</option>
                                                    <option value="104">Bắc Kạn</option>
                                                    <option value="106">Bắc Ninh</option>
                                                    <option value="107">Bến Tre</option>
                                                    <option value="108">Bình Định</option>
                                                    <option value="110">Bình Phước</option>
                                                    <option value="111">Bình Thuận</option>
                                                    <option value="81">Cà Mau</option>
                                                    <option value="112">Cao Bằng</option>
                                                    <option value="6">Đắk Lắk</option>
                                                    <option value="113">Đắc Nông</option>
                                                    <option value="114">Điện Biên</option>
                                                    <option value="8">Đồng Nai</option>
                                                    <option value="115">Đồng Tháp</option>
                                                    <option value="116">Gia Lai</option>
                                                    <option value="117">Hà Giang</option>
                                                    <option value="118">Hà Nam</option>
                                                    <option value="120">Hà Tĩnh</option>
                                                    <option value="121">Hải Dương</option>
                                                    <option value="122">Hậu Giang</option>
                                                    <option value="123">Hoà Bình</option>
                                                    <option value="124">Hưng Yên</option>
                                                    <option value="126">Kiên Giang</option>
                                                    <option value="127">Kon Tum</option>
                                                    <option value="128">Lai Châu</option>
                                                    <option value="130">Lạng Sơn</option>
                                                    <option value="131">Lào Cai</option>
                                                    <option value="129">Lâm Đồng</option>
                                                    <option value="132">Long An</option>
                                                    <option value="133">Nam Định</option>
                                                    <option value="134">Nghệ An</option>
                                                    <option value="135">Ninh Bình</option>
                                                    <option value="136">Ninh Thuận</option>
                                                    <option value="137">Phú Thọ</option>
                                                    <option value="138">Phú Yên</option>
                                                    <option value="139">Quảng Bình</option>
                                                    <option value="140">Quảng Nam</option>
                                                    <option value="141">Quảng Ngãi</option>
                                                    <option value="142">Quảng Ninh</option>
                                                    <option value="143">Quảng Trị</option>
                                                    <option value="144">Sóc Trăng</option>
                                                    <option value="145">Sơn La</option>
                                                    <option value="146">Tây Ninh</option>
                                                    <option value="147">Thái Bình</option>
                                                    <option value="148">Thái Nguyên</option>
                                                    <option value="149">Thanh Hoá</option>
                                                    <option value="150">Thừa Thiên - Huế</option>
                                                    <option value="151">Tiền Giang</option>
                                                    <option value="152">Trà Vinh</option>
                                                    <option value="153">Tuyên Quang</option>
                                                    <option value="154">Vĩnh Long</option>
                                                    <option value="155">Vĩnh Phúc</option>
                                                    <option value="156">Yên Bái</option>
                                                    <option value="157">Khác</option>

                                                </select>
                                                   </div>
                                                </li>
                                                <li><span class="required">Số lượng cần tuyển</span>
                                                    <input name="fquantity" onkeypress="return isNumberKey(event)" id="fquantity" value="" placeholder="Số lượng cần tuyển" type="text">
                                                </li>
                                                <li>
                                                    <span>Lĩnh vực</span>
                                                    <div class="select-style">
                                                        <select name="fpeoplecategory" id="fpeoplecategory">
                                                                                                        <option value="7">Bán hàng</option>
                                                                                                        <option value="3">Diễn viên</option>
                                                                                                        <option value="5">Hành chính</option>
                                                                                                        <option value="8">Marketing</option>
                                                                                                        <option value="4">MC</option>
                                                                                                        <option value="2">Người mẫu</option>
                                                                                                        <option value="1">PG</option>
                                                                                                        <option value="53">Phục vụ</option>
                                                                                                        <option value="6">Trợ lý/Thư ký</option>
                                                                                                    </select>
                                                    </div>
                                                </li>
                                                <li id="checked"><span>Loại hình công việc</span>
                                                    <input name="fkind" id="fkind" value="1" type="hidden">
                                                    <span class="customer-radio one option" data-value="1" data-target="fkind">Bán thời gian</span>
                                                    <span class="customer-radio two" data-value="2" data-target="fkind">Toàn thời gian</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><strong>MỨC LƯƠNG</strong>
                                            <ul class="edit-info">
                                                <li><span class="required">Thấp nhất (VNĐ)</span>
                                                    <input name="fminsalary" id="fminsalary" class="money" value="" placeholder="" type="text">
                                                </li>
                                                <li><span class="required">Cao nhất (VNĐ)</span>
                                                    <input name="fmaxsalary" id="fmaxsalary" class="money" value="" placeholder="" type="text">
                                                </li>
                                                <li>
                                                    <span>Lương tính theo</span>
                                                    <div class="select-style">
                                                        <select name="fsalarytype" id="fsalarytype">
                                                    <option value="Hourly">Lương theo giờ</option>
                                                    <option value="Daily">Lương theo ngày</option>
                                                    <option value="Monthly">Lương theo tháng</option>
                                                </select>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="edit">
                                        <li><strong>YÊU CẦU CÔNG VIỆC</strong>
                                            <ul class="edit-info">
                                                <li>
                                                    <span>Kinh nghiệm</span>
                                                    <div class="select-style">
                                                        <select name="fexperienceyear" id="fexperienceyear">
                                                    <option value="0" selected="selected">Chưa có kinh nghiệm</option>
                                                    <option value="1">1 năm</option>
                                                    <option value="2">2 năm</option>
                                                    <option value="3">3 năm</option>
                                                    <option value="4">4 năm</option>
                                                    <option value="5">5 năm</option>
                                                    <option value="6">6 năm</option>
                                                    <option value="7">7 năm</option>
                                                    <option value="8">8 năm</option>
                                                    <option value="9">9 năm</option>
                                                    <option value="10">10 năm</option>
                                                </select>
                                                    </div>
                                                </li>
                                                <li><span class="required">Mô tả công việc</span>
                                                    <textarea name="fdescription" id="fdescription" rows="5"></textarea>
                                                </li>
                                                <li><span>Các kỹ năng yêu cầu</span>
                                                    <textarea name="frequirement" id="frequirement" rows="5"></textarea>
                                                </li>
                                                <li><span>Quyền lợi</span>
                                                    <textarea name="fbenefit" id="fbenefit" rows="5"></textarea>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="posting-box">
                                    <div class="title"><i class="icon fa fa-info-circle"></i>Thông tin liên hệ</div>
                                    <div class="choose">
                                        <div class="col-one">
                                            <p>Bạn muốn đăng công việc này với thông tin</p>
                                        </div>
                                        <div class="col-one select-style">
                                            <select name="is_company" id="is_company">
                                        <option value="0" selected="selected">Thông tin cá nhân</option>
                                        <option value="1">Thông tin công ty</option>
                                    </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Form load -->
                                    <div id="contact_form">
                                        <div class="choose">
                                            <div class="col-one">
                                                <p>Chọn thông tin có sẵn hoặc tạo mới</p>
                                            </div>
                                            <div class="col-one select-style">
                                                <select name="id_contact" id="id_contact">
            <option value="0">Tạo liên hệ mới</option>
                    </select>
                                            </div>
                                        </div>
                                        <ul class="edit">
                                            <li>
                                                <ul class="edit-info">
                                                    <li><span class="required">Người liên hệ</span>
                                                        <input name="ffullname" id="ffullname" value="" placeholder="" type="text">
                                                    </li>
                                                    <li><span>Địa chỉ liên hệ</span>
                                                        <input name="faddress" id="faddress" value="" placeholder="" type="text">
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="edit">
                                            <li>
                                                <ul class="edit-info">
                                                    <li><span class="required">Email liên hệ</span>
                                                        <input name="femails" id="femails" value="" placeholder="abc@example.com, xyz@example.com" type="text">
                                                    </li>
                                                    <li><span class="required">Điện thoại liên hệ</span>
                                                        <input name="fphone" id="fphone" value="" placeholder="" type="text">
                                                        <div class="requied-it">
                                                            <label><input id="fhidden" type="checkbox" name="fhidden" value="1"> Không hiển thị email và số điện thoại này</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--- End form -->
                                    <div class="contactguide">
                                        <strong>HƯỚNG DẪN NỘP HỒ SƠ</strong>
                                        <span class="noted">Mô tả cách thức liên hệ hoặc ghi chú khác nếu có</span>
                                        <textarea name="fcontactguide" id="fcontactguide" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="posting-box">
                                    <div class="title"><i class="icon fa fa-info-circle"></i>Vị trí nơi làm việc trên bản đồ</div>
                                    <ul class="edit-info" style="width: 100%">
                                        <li><span class="required">Địa chỉ làm việc</span>
                                            <input name="fworkingaddress" id="fworkingaddress" class="controls" value="" placeholder="Nhập địa chỉ nơi làm việc" type="text" autocomplete="off">
                                        </li>
                                    </ul>
                                    <div id="mapGoogle" style="position: relative; overflow: hidden;">
                                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                            <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                    <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 157px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 413px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 413px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 157px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 157px; top: 333px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 413px; top: 333px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: -99px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 669px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: -99px; top: 333px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 669px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: -99px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 669px; top: 333px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 157px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 413px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 413px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 157px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 157px; top: 333px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 413px; top: 333px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -99px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 669px; top: 77px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -99px; top: 333px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 669px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -99px; top: -179px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 669px; top: 333px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                            <div style="overflow: hidden; width: 770px; height: 350px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i1669731&amp;2i985267&amp;2e1&amp;3u13&amp;4m2&amp;1u770&amp;2u350&amp;5m5&amp;1e0&amp;5svi&amp;6sus&amp;10b1&amp;12b1&amp;token=82737" style="width: 770px; height: 350px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                            <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                <div style="position: absolute; left: 157px; top: 77px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6523!3i3849!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=106892" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 413px; top: 77px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6524!3i3849!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=126635" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 413px; top: -179px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6524!3i3848!4i256!2m3!1e0!2sm!3i399095813!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=65855" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 157px; top: -179px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6523!3i3848!4i256!2m3!1e0!2sm!3i399095813!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=46112" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 157px; top: 333px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6523!3i3850!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=126774" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 413px; top: 333px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6524!3i3850!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=15446" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: -99px; top: 77px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6522!3i3849!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=87149" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 669px; top: 77px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6525!3i3849!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=15307" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: -99px; top: 333px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6522!3i3850!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=107031" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 669px; top: -179px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6525!3i3848!4i256!2m3!1e0!2sm!3i399095813!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=85598" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: -99px; top: -179px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6522!3i3848!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=33947" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div style="position: absolute; left: 669px; top: 333px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6525!3i3850!4i256!2m3!1e0!2sm!3i399095778!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=35189" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                        <p class="gm-style-pbt"></p>
                                                    </div>
                                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                        <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                    </div>
                                                    <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                    </div>
                                                </div>
                                                <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                    <a target="_blank" href="https://maps.google.com/maps?ll=10.773599,106.69442&amp;z=13&amp;t=m&amp;hl=vi&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                        <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                    </a>
                                                </div>
                                                <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 235px; top: 85px;">
                                                    <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div>
                                                    <div style="font-size: 13px;">Dữ liệu bản đồ ©2017 Google</div>
                                                    <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                </div>
                                                <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 215px; bottom: 0px; width: 143px;">
                                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="">Dữ liệu bản đồ ©2017 Google</span></div>
                                                    </div>
                                                </div>
                                                <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                    <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2017 Google</div>
                                                </div>
                                                <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 115px; bottom: 0px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                                </div><button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình" aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button" style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button>
                                                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@10.773599,106.69442,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                                </div>
                                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                                    <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;">
                                                        <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button draggable="false" title="Phóng to" aria-label="Phóng to" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button>
                                                            <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Thu nhỏ" aria-label="Thu nhỏ" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button></div>
                                                    </div>
                                                    <div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;">
                                                        <div style="position: absolute; left: 1px; top: 1px;"></div>
                                                        <div style="position: absolute; left: 1px; top: 1px;">
                                                            <div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div aria-label="Người hình mắc áo ở đầu Bản đồ" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                                        <div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                                    <div class="gm-style-mtc" style="float: left; position: relative;">
                                                        <div role="button" tabindex="0" title="Hiển thị bản đồ phố" aria-label="Hiển thị bản đồ phố" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 35px; font-weight: 500;">Bản đồ</div>
                                                        <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;">
                                                            <div draggable="false" title="Hiển thị bản đồ phố với địa hình" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Địa hình</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="gm-style-mtc" style="float: left; position: relative;">
                                                        <div role="button" tabindex="0" title="Hiển thị hình ảnh qua vệ tinh" aria-label="Hiển thị hình ảnh qua vệ tinh" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 34px; border-left: 0px;">Vệ tinh</div>
                                                        <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;">
                                                            <div draggable="false" title="Hiển thị hình ảnh có tên phố" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Nhãn</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="posting-box">
                                    <div class="title"><i class="icon fa fa-info-circle"></i>Thiết lập khác</div>
                                    <!--
                            <ul class="edit">
                                <li>
                                    <ul class="edit-info">
                                        <li><span>Tag</span>
                                            <input name="ftag" id="ftag" value="" placeholder="PG, MC" type="text">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            -->
                                    <ul class="edit">
                                        <li>
                                            <ul class="edit-info">
                                                <li><span class="required">Ngày hết hạn nộp CV</span>
                                                    <input type="text" name="fdeadline" id="fdeadline" class="txt-date" value="" placeholder="dd/mm/yyyy">
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" id="id_record" name="id_record" value="">
                                <div class="final" style="position: static !important; left: inherit; right:inherit;">
                                    <button class="submitPosting btn-savejobposting">Hoàn tất</button>
                                </div>
                                <div class="backtolist"><a href="/jobposting"><i class="icon fa fa-chevron-left"></i> Trở về danh sách</a></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrNmqq16GyOY4Fn_C-eRXU0k2mpguFR2c&amp;libraries=places&amp;callback=initMapAutocomplete" async="" defer=""></script>

</div>

@endsection
@section('footer')
@endsection