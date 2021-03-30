@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))

@section('title',$post->title)

@section('sub-heading',$post->subtitle)

@section('main-content')
<!-- Post Content -->
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <small class="pull-left">Created at {{$post->created_at->diffForHumans()}}</small>
        <br>
        <small>
          @foreach ($post->categories as $category)
          <small style="margin-right:20px;" >
            {{$category->name}}
          </small>
          @endforeach
        </small>
            {!! htmlspecialchars_decode($post->body) !!}
          
            <br>
        <small>
          <h3>Tag Cloudes</h3>
          @foreach ($post->tags as $tag)
          <small style="margin-right:20px;">
            {{$tag->name}}
          </small>
          @endforeach
        </small>
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection