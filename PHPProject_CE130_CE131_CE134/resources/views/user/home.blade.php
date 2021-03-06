@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title','Home')

@section('sub-heading','Learn Together and grow together')

@section('main-content')
 <!-- Main Content -->


 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      @if(count($posts) > 0)
      @foreach ($posts as $post)
        <div class="post-preview">
        <a href="{{ route('post',$post->id) }}">
            <h2 class="post-title">
            {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
            {{ $post->subtitle }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{$post->user->name}}</a>
            {{ $post->created_at->diffForHumans() }}</p>
        </div>
        @endforeach
        {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
        <hr>
      </div>
    </div>
  </div>
@endsection