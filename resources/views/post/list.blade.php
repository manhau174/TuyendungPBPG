{{-- {{dd($posts)}} --}}
@extends('layout.header')
@section('content')
<div id="pagefr">
   <section>
      <h1 style="display: none">Canavi dẫn đầu tuyển dụng nhân sự cho nữ</h1>
      <div class="wrap_bread">
         <!-- breadcrumb -->
         {{-- <ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#" style="background: none">
            <li typeof="v:Breadcrumb"><a href="http://canavi.com/">Trang chủ</a> <span>›</span></li>
            
         </ul> --}}
      </div>
      <div id="tabs-container">
         <div id="page-social">
            <ul class="tab-job">
               <li id="all-jobposting" class="current">Danh sách bài tuyển dụng của bạn</li>
            </ul>
            <div id="list-jobs" class="tab">
               <div class="tab-content">
                  @foreach ($posts as $post)
                    {{-- start item --}}
                    <div class="posting-list">
                        <div class="image">
                            <figure>
                               <a href=""><img src="http://canavi.com/templates/default/css/site/images/canavi.com.png" alt="Trợ Lý Giám đốc - Canavi"></a>
                            </figure>
                        </div>
                        <div class="desc-job">
                            <h3 class="name"><a href="{{ route('post.detail', ['slug' => $post->slug]) }}">{{$post->vacancy}}</a></h3>
                            <div class="desc">Loại hình công việc: {{$post->form_work->name}} | Lương: <span>{{number_format($post->salary_min)}} - {{number_format($post->salary_max)}}</span></div>
                            <div class="date">Hạn nộp hồ sơ: {{date('d-m-Y', strtotime($post->deadline))}}</div>
                        </div>                      
                    </div>
                     {{-- end item --}}
                  @endforeach

                    
               </div>
            </div>
         </div>
      </div>
</div>
</section>
</div>
@endsection
@section('footer')
@endsection