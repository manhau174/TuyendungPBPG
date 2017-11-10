@extends('layout.header')
@section('content')

<div id="pagefr">
    <section id="page_profile">
        <h1 class="name">Nam Lemon</h1>
        <div class="eidtpage" style="font-size: 12px;">Link profile của bạn: <a target="_blank" href="http://canavi.com/candidate/nam-lemon-25409?preview=1" style="color: #ef5e9c;">http://canavi.com/candidate/nam-lemon-25409?preview=1</a></div>
        <div id="tabs-container">
            <ul class="tabs-people">
                <li class="current"><a href="#tab-profile">Thông tin</a></li>
            </ul>
            <div id="main-profile" class="posting-thumb">
                <div id="column-profile">
                    <figure id="coverProfile">
                        <span>
                            <img src="http://canavi.com/templates/default/css/site/images/noimage.png">
                        </span>
                    </figure>
                <input type="file" name="cover" id="filecover" class="collapse">
                <div class="title-cover">Cập nhật ảnh đại diện</div>
            </div>
                <div id="column-info">
                    <div class="tab">
                        <div id="tab-profile" class="tab-content">
                            <input type="hidden" id="ftoken" value="ec076e93205db2b96060ef5157049344">
                            <div class="box-info">
                                <div class="title"><i class="icon fa fa-info-circle"></i>Thông tin cơ bản</div>
                                <ul class="edit">
                                    <li><strong>CÁ NHÂN</strong>
                                        <ul class="edit-info">
                                            <li><span>Năm sinh (dd/mm/yyyy)</span>
                                                <input type="text" name="fnamsinh" id="fnamsinh" value="" class="txt-date" placeholder="dd/mm/yyyy">
                                            </li>
                                            <!--<li><span>Tuổi</span>
                                            <div class="select-style">
                                            <select name="ftuoi" id="ftuoi">
                                            </select>
                                            </div>
                                        </li>-->
                                            <li id="checked"><span>Giới tính</span>
                                                <input type="hidden" name="fgioitinh" id="fgioitinh" value="0">
                                                <span class="customer-radio one " data-value="1" data-target="fgioitinh">Nam</span>
                                                <span class="customer-radio two " data-value="2" data-target="fgioitinh">Nữ</span>
                                            </li>
                                            <!--<li id="checked"><span>Tình trạng hôn nhân</span>
                                            <input type="hidden" name="fhonnhan" id="fhonnhan" value="0" />
                                            <span class="customer-radio one option" data-value="0" data-target="fhonnhan">Độc thân</span>
                                            <span class="customer-radio tree " data-value="1" data-target="fhonnhan">Đã kết hôn</span>
                                            <span class="customer-radio two " data-value="2" data-target="fhonnhan">Không xác định</span>
                                        </li>-->
                                        </ul>
                                    </li>
                                    <li><strong>NƠI Ở</strong>
                                        <ul class="edit-info">
                                            <li>
                                                <div class="dist"><span>Tỉnh thành</span>
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
                                                </div>
                                                <div class="ward" style="margin-right: 0">
                                                    <span>Quận/Huyện</span>
                                                    <div class="select-style">
                                                        <select name="fsubregion" id="fsubregion" class="">
                                                        <option value="0" selected="selected">-- Chọn quận/huyện --</option>
<option value="822">Quận 1</option>
<option value="799">Quận 2</option>
<option value="800">Quận 3</option>
<option value="801">Quận 4</option>
<option value="802">Quận 5</option>
<option value="803">Quận 6</option>
<option value="804">Quận 7</option>
<option value="805">Quận 8</option>
<option value="806">Quận 9</option>
<option value="807">Quận 10</option>
<option value="808">Quận 11</option>
<option value="809">Quận 12</option>
<option value="813">Quận Bình Tân</option>
<option value="819">Quận Bình Thạnh</option>
<option value="811">Quận Gò Vấp</option>
<option value="820">Quận Phú Nhuận</option>
<option value="812">Quận Tân Bình</option>
<option value="815">Quận Tân Phú</option>
<option value="810">Quận Thủ Đức</option>
<option value="818">Huyện Bình Chánh</option>
<option value="821">Huyện Cần Giờ</option>
<option value="816">Huyện Củ Chi</option>
<option value="814">Huyện Hóc Môn</option>
<option value="817">Huyện Nhà Bè</option>

                                                    </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><strong>THU NHẬP MONG MUỐN</strong>
                                        <ul class="edit-info">
                                            <li>
                                                <span>Lương theo ngày</span>
                                                <div class="select-style">
                                                    <select name="fluongtheongay" id="fluongtheongay">
                                                    <option value="400.000">400.000</option>
<option value="600.000">600.000</option>
<option value="800.000">800.000</option>
<option value="1.000.000">1.000.000</option>
<option value="1.400.000">1.400.000</option>
<option value="1.800.000">1.800.000</option>
<option value="2.400.000">2.400.000</option>
<option value="3.000.000">3.000.000</option>
<option value="3.500.000">3.500.000</option>
<option value="4.000.000">4.000.000</option>

                                                </select>
                                                </div>
                                            </li>
                                            <li>
                                                <span>Lương theo tháng</span>
                                                <div class="select-style">
                                                    <select name="fluongtheothang" id="fluongtheothang">
                                                    <option value="6.000.000">6.000.000</option>
<option value="8.000.000">8.000.000</option>
<option value="10.000.000">10.000.000</option>
<option value="12.000.000">12.000.000</option>
<option value="14.000.000">14.000.000</option>
<option value="16.000.000">16.000.000</option>
<option value="18.000.000">18.000.000</option>
<option value="20.000.000">20.000.000</option>
<option value="22.000.000">22.000.000</option>
<option value="24.000.000">24.000.000</option>
<option value="26.000.000">26.000.000</option>
<option value="28.000.000">28.000.000</option>
<option value="30.000.000">30.000.000</option>

                                                </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="edit">
                                    <li class="hidden"><strong>THÔNG SỐ</strong>
                                        <ul class="edit-info">
                                            <li><span>Số đo 3 vòng</span>
                                                <div class="wrap">
                                                    <div class="select-style">
                                                        <select name="fvong1" id="fvong1">
                                                        <option value="" selected="selected">--</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>

                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="wrap">
                                                    <div class="select-style">
                                                        <select name="fvong2" id="fvong2">
                                                    <option value="" selected="selected">--</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>

                                                </select>
                                                    </div>
                                                </div>
                                                <div class="wrap">
                                                    <div class="select-style">
                                                        <select name="fvong3" id="fvong3">
                                                    <option value="" selected="selected">--</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option>
<option value="100">100</option>

                                                </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span>Cở áo/giày/quần</span>
                                                <div class="wrap">
                                                    <div class="select-style">
                                                        <select name="fcoao" id="fcoao">
                                                        <option value="" selected="selected">Áo</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL">XL</option>

                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="wrap">
                                                    <div class="select-style">
                                                        <select name="fcogiay" id="fcogiay">
                                                        <option value="" selected="selected">Giầy</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>

                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="wrap">
                                                    <div class="select-style">
                                                        <select name="fcoquan" id="fcoquan">
                                                        <option value="" selected="selected">Quần</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>

                                                    </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dist">
                                                    <span>Chiều cao <i style="font-style: normal">(cm)</i></span>
                                                    <div class="select-style">
                                                        <select name="fchieucao" id="fchieucao">
                                                        <option value="" selected="selected">--</option>
<option value="156">156</option>
<option value="157">157</option>
<option value="158">158</option>
<option value="159">159</option>
<option value="160">160</option>
<option value="161">161</option>
<option value="162">162</option>
<option value="163">163</option>
<option value="164">164</option>
<option value="165">165</option>
<option value="166">166</option>
<option value="167">167</option>
<option value="168">168</option>
<option value="169">169</option>
<option value="170">170</option>
<option value="171">171</option>
<option value="172">172</option>
<option value="173">173</option>
<option value="174">174</option>
<option value="175">175</option>
<option value="176">176</option>
<option value="177">177</option>
<option value="178">178</option>
<option value="179">179</option>
<option value="180">180</option>
<option value="181">181</option>
<option value="182">182</option>
<option value="183">183</option>
<option value="184">184</option>
<option value="185">185</option>

                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="ward" style="margin-right: 0">
                                                    <span>Cân nặng <i style="font-style: normal">(kg)</i></span>
                                                    <div class="select-style">
                                                        <select name="fcannang" id="fcannang">
                                                        <option value="" selected="selected">--</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>

                                                    </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><strong>LIÊN HỆ</strong>
                                        <ul class="edit-info">
                                            <li><span>Email <i style="color: #DB4F8A; font-style: normal">(*)</i></span>
                                                <input type="text" name="femail" id="femail" value="" placeholder="Địa chỉ thư liên hệ">
                                            </li>
                                            <li><span>Số điện thoại <i style="color: #DB4F8A; font-style: normal">(*)</i></span>
                                                <input type="text" onkeypress="return isNumberKey(event)" maxlength="11" name="fdienthoai" id="fdienthoai" value="" placeholder="Số điện thoại liên hệ">
                                            </li>
                                            <li><span>Link Facebook cá nhân</span>
                                                <input type="text" name="flinkfacebook" id="flinkfacebook" value="" placeholder="Link Facebook cá nhân">
                                            </li>
                                            <li class="policy private-information"><input type="hidden" name="fispublic" id="fispublic" value="0">
                                                <i class="icon-check"></i><em>Ẩn thông tin với nhà tuyển dụng</em>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="final">
                                    <button class="submit btn-saveexperience">Hoàn tất</button>
                                </div>
                            </div>
                            <div class="box-info">
                                <div class="title"><i class="icon fa fa-list-alt"></i>Chuyên môn</div>
                                <ul class="edit">
                                    <li>
                                        <strong>LOẠI HÌNH</strong>
                                        <ul class="edit-info">
                                            <li><span>Loại hình công việc</span>
                                                <div class="select-style">
                                                    <select name="fcat1" id="fcat1" class="multiple-limit select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                                <option value="0">-- Chọn danh mục --</option><option value="1">PG</option><option value="9">|--Phát sản phẩm mẫu</option><option value="10">|--Bán hàng</option><option value="11">|--Giới thiệu sản phẩm</option><option value="12">|--Khai trương</option><option value="13">|--Chạy Roadshow</option><option value="14">|--Lễ tân</option><option value="15">|--Giả khách</option><option value="16">|--Tiệc</option><option value="2">Người mẫu</option><option value="17">|--Mẫu ảnh nghệ thuật</option><option value="18">|--Mẫu nội y, áo tắm</option><option value="19">|--Mẫu quần áo</option><option value="20">|--Mẫu giày dép</option><option value="21">|--Mẫu cặp, túi xách</option><option value="22">|--Mẫu vật dụng thiết yếu</option><option value="3">Diễn viên</option><option value="23">|--Điện ảnh</option><option value="24">|--Sân khấu</option><option value="25">|--Hài</option><option value="26">|--Truyền hình</option><option value="27">|--Múa</option><option value="28">|--Đóng thế</option><option value="4">MC</option><option value="29">|--Sân khấu</option><option value="30">|--Hiện trường</option><option value="31">|--Sự kiện</option><option value="32">|--Truyền hình</option><option value="5">Hành chính</option><option value="33">|--Nhân sự</option><option value="34">|--Kế toán</option><option value="35">|--Văn phòng</option><option value="6">Trợ lý/Thư ký</option><option value="36">|--Hội nghị</option><option value="37">|--Văn phòng</option><option value="38">|--Lãnh đạo</option><option value="39">|--Nhà quản lý</option><option value="7">Bán hàng</option><option value="40">|--Bảo hiểm</option><option value="41">|--Bất động sản</option><option value="42">|--Giáo dục</option><option value="43">|--Ngân hàng</option><option value="44">|--Y tế</option><option value="45">|--Quảng cáo</option><option value="46">|--Viễn thông/Công nghệ</option><option value="8">Marketing</option><option value="47">|--Tiếp thị</option><option value="48">|--Truyền thông</option><option value="49">|--Dịch thuật</option><option value="50">|--Nội dung quảng cáo</option><option value="51">|--Fanpage/Website</option><option value="52">|--Phụ trách thương hiệu</option><option value="53">Phục vụ</option><option value="54">|--Nhà hàng</option><option value="55">|--Khách sạn</option><option value="56">|--Tiệc cưới</option><option value="57">|--Quán cafe</option><option value="58">|--Beer Club</option><option value="59">|--Chuỗi bán lẻ</option><option value="60">|--Quán Bar</option><option value="61">|--Karaoke</option><option value="62">|--Spa</option><option value="63">|--Siêu thị</option><option value="64">|--Fitness Center</option><option value="65">|--Rạp chiếu phim</option><option value="66">|--Trung tâm thương mại</option><option value="67">|--Resort</option><option value="68">|--Tiệm bánh</option><option value="69">|--Trung tâm giải trí</option><option value="70">|--Pha chế</option><option value="71">|--Phụ bếp</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 348px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </li>
                                            <li id="checked">
                                                <span>Hình thức công việc</span>
                                                <input type="hidden" name="fhinhthuc" id="fhinhthuc" value="0">
                                                <span class="customer-radio one " data-value="1" data-target="fhinhthuc">Bán thời gian</span>
                                                <span class="customer-radio two " data-value="2" data-target="fhinhthuc">Toàn thời gian</span>
                                            </li>
                                            <li>
                                                <span>Tính chất</span>
                                                <div class="select-style">
                                                    <select name="ftinhchat" id="ftinhchat">
                                                <option value="0">-- Chọn tính chất công việc --</option>
                                                <option value="2">Việc năng động</option>
<option value="3">Tại văn phòng</option>
<option value="4">Cần ngoại hình</option>
<option value="1">Cho bà mẹ mang bầu</option>

                                            </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="edit">
                                    <li>
                                        <strong>TRÌNH ĐỘ</strong>
                                        <ul class="edit-info">
                                            <li>
                                                <span>Bằng cấp</span>
                                                <div class="select-style">
                                                    <select name="fbangcap" id="fbangcap">
                                                    <option value="0">-- Lựa chọn bằng cấp --</option>
                                                    <option value="1">Phổ thông</option>
<option value="2">Trung cấp</option>
<option value="3">Cao đẳng</option>
<option value="4">Đại học</option>

                                                </select>
                                                </div>
                                            </li>
                                            <li>
                                                <span>Trường</span>
                                                <input type="text" name="ftruong" id="ftruong" value="">
                                            </li>
                                        </ul>
                                        <ul class="edit">
                                            <li>
                                                <strong>NGOẠI NGỮ</strong>
                                                <ul class="edit-info">
                                                    <li>
                                                        <span>Ngoại ngữ</span>
                                                        <div class="select-style">
                                                            <select name="fngoaingu1" id="fngoaingu1">
                                                            <option value="0">-- Chọn ngoại ngữ --</option>
                                                            <option value="1">Tiếng Anh</option>
<option value="2">Tiếng Trung</option>
<option value="3">Tiếng Nhật</option>
<option value="4">Tiếng Hàn</option>
<option value="5">Tiếng Pháp</option>
<option value="6">Tiếng Đức</option>
<option value="7">Tiếng Ý</option>

                                                        </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span>Trình độ</span>
                                                        <div class="select-style">
                                                            <select name="ftrinhdo1" id="ftrinhdo1">
                                                        <option value="0">-- Chọn trình độ --</option>
                                                        <option value="1">Bình thường</option>
<option value="2">Trung cấp</option>
<option value="3">Cao cấp</option>

                                                    </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ngoaingu2" data-show="0" style="display:none">
                                                            <span>Ngoại ngữ</span>
                                                            <div class="select-style">
                                                                <select name="fngoaingu2" id="fngoaingu2">
                                                                <option value="0">-- Chọn ngoại ngữ --</option>
                                                                <option value="1">Tiếng Anh</option>
<option value="2">Tiếng Trung</option>
<option value="3">Tiếng Nhật</option>
<option value="4">Tiếng Hàn</option>
<option value="5">Tiếng Pháp</option>
<option value="6">Tiếng Đức</option>
<option value="7">Tiếng Ý</option>

                                                            </select>
                                                            </div>
                                                            <span>Trình độ</span>
                                                            <div class="select-style">
                                                                <select name="ftrinhdo2" id="ftrinhdo2">
                                                                <option value="0">-- Chọn trình độ --</option>
                                                                <option value="1">Bình thường</option>
<option value="2">Trung cấp</option>
<option value="3">Cao cấp</option>

                                                            </select>
                                                            </div>
                                                        </div>
                                                        <div class="ngoaingu3" data-show="0" style="display:none">
                                                            <span>Ngoại ngữ</span>
                                                            <div class="select-style">
                                                                <select name="fngoaingu3" id="fngoaingu3">
                                                                <option value="0">-- Chọn ngoại ngữ --</option>
                                                                <option value="1">Tiếng Anh</option>
<option value="2">Tiếng Trung</option>
<option value="3">Tiếng Nhật</option>
<option value="4">Tiếng Hàn</option>
<option value="5">Tiếng Pháp</option>
<option value="6">Tiếng Đức</option>
<option value="7">Tiếng Ý</option>

                                                            </select>
                                                            </div>
                                                            <span>Trình độ</span>
                                                            <div class="select-style">
                                                                <select name="ftrinhdo3" id="ftrinhdo3">
                                                                <option value="0">-- Chọn trình độ --</option>
                                                                <option value="1">Bình thường</option>
<option value="2">Trung cấp</option>
<option value="3">Cao cấp</option>

                                                            </select>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0)" class="addnew addnew-ngoaingu">+ Thêm mới</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="final">
                                    <button class="submit btn-saveexperience">Hoàn tất</button>
                                </div>
                            </div>
                            <div class="box-info">
                                <div class="title"><i class="icon fa fa-suitcase"></i>Kinh nghiệm làm việc</div>
                                <ul class="edit" style="width:100%;">
                                    <li>
                                        <ul class="edit-info">
                                            <li>
                                                <span>Công việc làm gần đây</span>
                                                <textarea name="fcongviecganday" id="fcongviecganday" rows="5"></textarea></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!--<ul class="edit">
                                <li>
                                    <ul class="edit-info">
                                        <li>
                                                                                                <span>Công ty gần đây</span>
                                                    <input type="text" name="fcongtyganday[]" id="fcongtyganday" value="" placeholder="Công ty gần đây">
                                                </div>
                                                                                    </li>
                                    </ul>
                                </li>
                            </ul>-->
                            </div>
                            <div class="box-info row_profile" style="padding: 15px 0 5px 5px;">
                                <form class="dropzone dz-clickable" id="dropzone">
                                    <div class="dz-default dz-message"><span>Bạn chưa có ảnh nào, Bắt đầu tải ảnh...<i class="ca-ca-photos"></i></span></div>
                                    <div class="dz-preview dz-image-preview" id="uploadtrigger" onclick="dropzoneUploadImage()" style="display: none;">
                                        <div class="dz-image"><i class="ca-ca-plus-circle"></i>Tải ảnh lên</div>
                                    </div>
                                </form>
                                <div class="popup-updatedescription">
                                    <div class="image-updatedescription">
                                        <input type="hidden" id="fileid" value="">
                                        <div class="imageforupdate">
                                            <img src="">
                                        </div>
                                        <textarea rows="6" placeholder="Chú thích cho ảnh..."></textarea>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="final">
                                        <button class="submit" type="buttom">Lưu</button>
                                        <button class="reset" type="reset">Đóng</button>
                                        <p class="message"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-info">
                                <div class="title"><i class="icon ca-ca-video"></i>Video nổi bật</div>
                                <div id="videoEmbled">

                                    <table id="youtube">
                                        <tbody>
                                            <tr>
                                                <td><input size="80" name="fvideo[]" value="" type="text" placeholder="Link Youtube"></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td class="left"><a onclick="addLinkYoutube();" class="btn-default">Thêm</a></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                            <div class="final" style="position: static !important; left: inherit; right:inherit;">
                                <button class="submit btn-saveexperience">Hoàn tất</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr_latest"></div>
    </section>
    <link href="http://canavi.com/templates/default/css/site/desktop/dropzone.css" rel="stylesheet">
    <script src="http://canavi.com/templates/default/js/site/dropzone.js"></script>
</div>
@endsection
@section('footer')
@endsection