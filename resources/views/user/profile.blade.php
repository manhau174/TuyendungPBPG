@extends('layout.header')
@section('content')
<div id="pagefr">
   <section id="page_profile">
      <h1 class="name">{{Auth::user()->name}}</h1>
      <div class="eidtpage" style="font-size: 12px;">Link profile của bạn: <a target="_blank" href="http://canavi.com/candidate/nam-lemon-25409?preview=1" style="color: #ef5e9c;">http://canavi.com/candidate/nam-lemon-25409?preview=1</a></div>
      <div id="tabs-container">
         <ul class="tabs-people">
            <li class="current"><a href="#tab-profile">Thông tin</a></li>
         </ul>
         <form action="{{ route('user.update') }}" method="POST" role="form">
            {{csrf_field()}}
            <div id="main-profile" class="posting-thumb">
               <div id="column-profile">
                  <figure id="coverProfile">
                     <span>
                     <img src="{{ asset('images/avatar.jpg') }}" alt="Ảnh đại diện">
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
                              <li>
                                 <strong>CÁ NHÂN</strong>
                                 <ul class="edit-info">
                                    <li><span>Năm sinh (dd/mm/yyyy)</span>
                                       <input type="text" name="deadline" id="datepicker" placeholder="">
                                    </li>
                                    <!--<li><span>Tuổi</span>
                                       <div class="select-style">
                                       <select name="ftuoi" id="ftuoi">
                                       </select>
                                       </div>
                                       </li>-->
                                    <li id="checked"><span>Giới tính</span>
                                       <br>
                                       <input type="radio" name="gender" value="1"> Male
                                       <input type="radio" name="gender" value="0" style="margin-left: 20px"> Female<br>
                                    </li>
                                    <!--<li id="checked"><span>Tình trạng hôn nhân</span>
                                       <input type="hidden" name="fhonnhan" id="fhonnhan" value="0" />
                                       <span class="customer-radio one option" data-value="0" data-target="fhonnhan">Độc thân</span>
                                       <span class="customer-radio tree " data-value="1" data-target="fhonnhan">Đã kết hôn</span>
                                       <span class="customer-radio two " data-value="2" data-target="fhonnhan">Không xác định</span>
                                       </li>-->
                                 </ul>
                              </li>
                              <li>
                                 <strong>THÀNH PHỐ</strong>
                                 <ul class="edit-info">
                                    <li>
                                       <div class="dist">
                                          <span>Tỉnh thành</span>
                                          <div class="select-style">
                                             <select name="city_id" id="fregion" class="select-style">
                                                @foreach ($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                           <ul class="edit">
                              <li>
                                 <strong>LIÊN HỆ</strong>
                                 <ul class="edit-info">
                                    <li><span>Email <i style="color: #DB4F8A; font-style: normal">(*)</i></span>
                                       <input type="text" name="email" id="femail" value="" placeholder="{{Auth::user()->email}}" readonly="">
                                    </li>
                                    <li><span>Số điện thoại <i style="color: #DB4F8A; font-style: normal">(*)</i></span>
                                       <input type="text" onkeypress="return isNumberKey(event)" maxlength="11" name="mobile" id="fdienthoai" value="" placeholder="Số điện thoại liên hệ">
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                           <div class="final">
                           </div>
                        </div>
                        <div class="box-info">
                           <div class="title"><i class="icon fa fa-list-alt"></i>Chuyên môn</div>
                           <ul class="edit">
                              <li>
                                 <strong>LOẠI HÌNH</strong>
                                 <ul class="edit-info">
                                    <li>
                                       <span>Loại hình công việc</span>
                                       <div class="select-style">
                                          <select name="job_id"    >
                                             <option value="0">-- Chọn danh mục --</option>
                                             @foreach (Data::getJobs() as $job)
                                             <option value="{{$job->id}}">{{$job->name}}</option>
                                             {{-- @foreach (Data::getJobsContentByJob($job->id) as $jobContent)
                                             <option value="{{$jobContent->id}}">|--{{$jobContent->name}}</option>
                                             @endforeach    --}}                            
                                 </ul>
                                 </div>
                                 @endforeach
                                 </select>
                                 {{-- 
                                 <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 348px;">
                                    <span class="selection">
                                       <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                          <ul class="select2-selection__rendered">
                                             <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                          </ul>
                                       </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                 </span>
                                 --}}
                        </div>
                        </li>
                        <li id="checked">
                        <span>Hình thức công việc</span>
                        <input type="radio" name="form_work_id" value="1"> Toàn thời gian
                        <input type="radio" name="form_work_id" value="2" style="margin-left: 20px"> Bán thời gian
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
                                       <select name="level" id="fbangcap">
                                          <option value="0">-- Lựa chọn bằng cấp --</option>
                                          <option value="Phổ thông">Phổ thông</option>
                                          <option value="Trung cấp">Trung cấp</option>
                                          <option value="Cao đẳng">Cao đẳng</option>
                                          <option value="Đại học">Đại học</option>
                                       </select>
                                    </div>
                                 </li>
                                 <li>
                                    <span>Trường</span>
                                    <input type="text" name="school" id="ftruong" value="">
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <div class="final">
                        </div>
                     </div>
                     <div class="box-info">
                        <div class="title"><i class="icon fa fa-suitcase"></i>Kinh nghiệm làm việc</div>
                        <ul class="edit" style="width:100%;">
                           <li>
                              <ul class="edit-info">
                                 <li>
                                    <span>Công việc làm gần đây</span>
                                    <textarea name="fcongviecganday" id="fcongviecganday" rows="5"></textarea>
                                 </li>
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
                     {{-- 
                     <div class="box-info row_profile" style="padding: 15px 0 5px 5px;">
            }
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
         </div> --}}
         <div class="final" style="position: static !important; left: inherit; right:inherit;">
         <input type="submit" class="submit btn-saveexperience" name="" value="Hoàn tất">
         </div>
         </div>
         </div>
         </div>
      </div>
      </form>
</div>
<div class="clr_latest"></div>
</section>
<link href="http://canavi.com/templates/default/css/site/desktop/dropzone.css" rel="stylesheet">
<script src="http://canavi.com/templates/default/js/site/dropzone.js"></script>
</div>
@endsection
@section('footer')
@endsection