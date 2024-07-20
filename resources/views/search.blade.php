@extends('client.layout.master')
@section('search')
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-4">
        <h1 class="h2 mb-4">Kết quả tìm kiếm 
          {{-- <mark>Use+apples+to+give+your+bakes+caramel</mark> --}}
        </h1>
      </div>
      <div class="col-lg-10">
        @foreach ($posts as $post)
        <article class="card mb-4">
          <div class="row card-body">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="post-slider slider-sm">
                <img src="{{$post->image}}" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
                {{-- <img src="images/post/post-1.jpg" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;"> --}}
              </div>
            </div>
            <div class="col-md-8">
              <h3 class="h4 mb-3"><a class="post-title" href="{{route('show',$post->id)}}">{{$post->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/john-doe.jpg" alt="">
                    <span>{{$post->author}}</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>3 Min To Read
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{$post->created_at}}
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">{{$post->tag}}</a></li>
                  </ul>
                </li>
              </ul>
              <p>Heading example Here is example of hedings. You can use this heading by following markdownify rules.</p>
              <a href="post-elements.html" class="btn btn-outline-primary">Read More</a>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection