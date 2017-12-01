@extends('layout.header')
<style type="text/css">
   #company{
   height: 35px;
   border-radius: 3px;
   -moz-border-radius: 3px;
   -webkit-border-radius: 3px;
   background-color: #ffffff;
   border: solid 1px #cfd8dc;
   padding: 0 8px;
   color: #455a64;
   font-size: 13px;
   width: 45%;
   }
</style>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@section('content')
<div id="pagefr">
   <section id="page-jobposting">
      <div class="">
         <h3 style="color:  #e35290">Biểu mẫu đăng tin tuyển dụng</h3>
      </div>
      <div class="backtolist"><a href="/jobposting"><i class="icon fa fa-chevron-left"></i> Trở về danh sách</a></div>
      <div id="tabs-container">
         <div id="main-profile">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
               {{csrf_field()}}
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
                        <div class="posting-box" ">
                           <div class="title"><i class="icon fa fa-info-circle"></i>Thông tin cơ bản</div>
                           <ul class="edit">
                              <li>
                                 <strong>VỊ TRÍ TUYỂN DỤNG</strong>
                                 <ul class="edit-info">
                                    <li><span class="required">Vị trí tuyển dụng</span>
                                       <input name="vacancy" id="ftitle" class="txt-capital capitalised" value="" placeholder="Vị trí tuyển dụng" type="text">   
                                    </li>
                                    <li>
                                       <span>Khu vực tuyển dụng</span>
                                       <div class="select-style">
                                          <select name="city_id" id="fregion" class="select-style">
                                             @foreach (Data::getCities() as $city)
                                             <option value="{{$city->id}}">{{$city->name}}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                    </li>
                                    <li><span class="required">Số lượng cần tuyển</span>
                                       <input name="quantity" onkeypress="return isNumberKey(event)" id="fquantity" value="" placeholder="Số lượng cần tuyển" type="text">
                                    </li>
                                    <li>
                                       <span>Lĩnh vực</span>
                                       <div class="select-style">
                                          <select name="job_id" id="fpeoplecategory">
                                             @foreach (Data::getJobs() as $Job)
                                             <option value="{{$Job->id}}">{{$Job->name}}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                    </li>
                                    <li id="checked"><span>Loại hình công việc</span>
                                       <input type="radio" name="form_work_id" value="1"> Toàn thời gian
                                       <input type="radio" name="form_work_id" value="2" style="margin-left: 20px"> Bán thời gian<br>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                           <ul class="edit">
                              <strong>MỨC LƯƠNG</strong>
                              <ul class="edit-info">
                                 <li><span class="required">Thấp nhất (VNĐ)</span>
                                    <input name="salary_min" id="fminsalary" class="money" value="" placeholder="" type="text">
                                 </li>
                                 <li><span class="required">Cao nhất (VNĐ)</span>
                                    <input name="salary_max" id="fmaxsalary" class="money" value="" placeholder="" type="text">
                                 </li>
                                 {{-- 
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
                                 --}}
                              </ul>
                           </ul>
                           <ul class="edit">
                              <li>
                                 <strong>YÊU CẦU CÔNG VIỆC</strong>
                                 <ul class="edit-info">
                                    <li>
                                       <span>Kinh nghiệm</span>
                                       <div class="select-style">
                                          <select name="exp" id="fexperienceyear">
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
                                 </ul>
                              </li>
                           </ul>
                        </div>
                        <div class="posting-box">
                           <span class="required">Mô tả công việc</span>
                           <textarea name="description" id="" class="ckeditor" rows="5"></textarea>
                           <br>
                           <hr style="border: 1px #fd6ba9 solid">
                           <br>
                           <span>Các kỹ năng yêu cầu</span>
                           <textarea name="skin" id="" rows="5" class="ckeditor"></textarea>
                           <br>
                           <hr style="border: 1px #fd6ba9 solid">
                           <br>
                           <span>Quyền lợi</span>
                           <textarea name="benefit" id=" " rows="5" class="ckeditor"></textarea>
                           <br>
                        </div>
                        <div class="posting-box">
                           <div class="title"><i class="icon fa fa-info-circle"></i>Thông tin liên hệ</div>
                           {{-- 
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
                           --}}
                           <hr>
                           <!-- Form load -->
                           <div id="contact_form">
                              <div class="choose">
                                 <div class="col-one">
                                    <p>Công ty</p>
                                 </div>
                                 <input type="" name="company" id="company" class="">
                              </div>
                              <ul class="edit">
                                 <li>
                                    <ul class="edit-info">
                                       <li><span class="required">Người liên hệ</span>
                                          <input name="ffullname" id="ffullname" type="text" value="{{Auth::user()->name}}" readonly="">
                                       </li>
                                       <li><span>Địa chỉ liên hệ</span>
                                          <input name="address" id="faddress" type="text" value="">
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="edit">
                                 <li>
                                    <ul class="edit-info">
                                       <li><span class="required">Email liên hệ</span>
                                          <input name="email" id="femails" type="text" value="{{Auth::user()->email}}">
                                       </li>
                                       <li><span class="required">Điện thoại liên hệ</span>
                                          <input name="mobile" id="fphone" type="text" value="">
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <!--- End form -->
                           <div class="contactguide">
                              <strong>HƯỚNG DẪN NỘP HỒ SƠ</strong>
                              <span class="noted " id="noted">Mô tả cách thức liên hệ hoặc ghi chú khác nếu có</span>
                              <textarea name="guide" id="fcontactguide" rows="8" class="ckeditor"></textarea>
                              <br>
                              <hr style="border: 1px #fd6ba9 solid">
                              <br>
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
                                          <input type="text" name="deadline" id="datepicker" placeholder="">
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="final" style="position: static !important; left: inherit; right:inherit;">
                           <input type="submit" name="" class="submitPosting btn-savejobposting" value="Hoàn tất">
                           {{-- <button class="submitPosting btn-savejobposting"></button> --}}
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
<script type="text/javascript">
   CKEDITOR.replace('fcontactguide');
   CKEDITOR.replace('description');
   CKEDITOR.replace('skin');
   CKEDITOR.replace('benefit');
</script>
@endsection
@section('footer')
@endsection