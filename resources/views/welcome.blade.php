@extends('client.layout.master')
@section('content')
{{-- @foreach ($posts as $post) --}}
<section class="section pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Bài đăng mới nhất</h2>
          <article class="card">
            <div class="post-slider slider-sm">
              <img src="{{$lastestPost->image}}" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="h4 mb-3"><a class="post-title" href="{{route('show',$lastestPost->id)}}">{{$lastestPost->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/john-doe.jpg">
                    <span>{{$lastestPost->author}}</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{$lastestPost->created_at}}
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">{{$lastestPost->tag}}</a></li>
                    <li class="list-inline-item"><a href="tags.html">{{$lastestPost->tag}}</a></li>
                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                  </ul>
                </li>
              </ul>
              <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
              <a href="{{route('show',$lastestPost->id)}}" class="btn btn-outline-primary">Đọc thêm</a>
            </div>
          </article>
        </div>
        {{-- @endforeach --}}
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Bài đăng thịnh hành</h2>
          @foreach($mostViewed as $most)
          <article class="card mb-4">
            <div class="card-body d-flex">
              <img class="card-img-sm" src="{{$most->image}}">
              <div class="ml-3">
                <h4><a href="{{route('show',$most->id)}}" class="post-title">{{$most->title}}</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>{{$most->created_at}}
                  </li>
                  <li class="list-inline-item mb-0">
                    <i class="ti-timer"></i>2 Min To Read
                  </li>
                </ul>
              </div>
            </div>
          </article>
          @endforeach
          {{-- <article class="card mb-4">
            <div class="card-body d-flex">
              <img class="card-img-sm" src="images/post/post-2.jpg">
              <div class="ml-3">
                <h4><a href="post-details.html" class="post-title">The Design Files - Homes Minimalist</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>14 jan, 2020
                  </li>
                  <li class="list-inline-item mb-0">
                    <i class="ti-timer"></i>2 Min To Read
                  </li>
                </ul>
              </div>
            </div>
          </article>
          
          <article class="card mb-4">
            <div class="card-body d-flex">
              <img class="card-img-sm" src="images/post/post-4.jpg">
              <div class="ml-3">
                <h4><a href="post-details.html" class="post-title">The Skinny Confidential</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>14 jan, 2020
                  </li>
                  <li class="list-inline-item mb-0">
                    <i class="ti-timer"></i>2 Min To Read
                  </li>
                </ul>
              </div>
            </div>
          </article> --}}
        </div>
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Bài đăng phổ biến</h2>
          <article class="card">
            <div class="post-slider slider-sm">
              <img src="{{$popularPost->image}}" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">{{$popularPost->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/kate-stone.jpg" alt="">
                    <span>{{$popularPost->author}}</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{$popularPost->created_at}}
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">{{$popularPost->tag}}</a></li>
                    {{-- <li class="list-inline-item"><a href="tags.html">Food</a></li>
                    <li class="list-inline-item"><a href="tags.html">Taste</a></li> --}}
                  </ul>
                </li>
              </ul>
              <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
              <a href="{{route('show',$popularPost->id)}}" class="btn btn-outline-primary">Đọc thêm</a>
            </div>
          </article>
        </div>
        <div class="col-12">
          <div class="border-bottom border-default"></div>
        </div>
      </div>
    </div>
</section>
@endsection