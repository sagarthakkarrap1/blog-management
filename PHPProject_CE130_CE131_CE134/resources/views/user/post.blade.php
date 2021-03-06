@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

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
          @foreach ($post->tags as $tag)
          <small style="margin-right:20px;">
            {{$tag->name}}
          </small>
          @endforeach
        </small>
        <br>Posted by<h3>{{$post->user->name}}</h3>
        </div>
        <br><br>
        
           
           
        
      </div>
      <a href="{{route('guestuser')}}"  class="btn btn-warning">Back</a>
    </div>
  </article>

  <hr>
@endsection