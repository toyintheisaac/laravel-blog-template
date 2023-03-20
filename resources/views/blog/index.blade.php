@extends('layouts/app')

@section('content')

@if(session()->has('message'))

    <div class="mb-4 bg-danger text-white py-2 px-4"> 
        {{ session()->get('message') }}
    </div>
@endif

@if (Auth::user())
<div class="mb-4 bg-white"> 
    <a href="/blog/create" class="btn btn-md btn-primary">Create Post</a>
</div>
@endif


@foreach ($posts as $post)
    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2">{{ $post->title }}</h3>
        <div class="" style="max-height:500px;overflow:hidden;">
            <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
                <img src="{{ asset('img/'.$post->image_path)}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
            </div>
        </div>
          <div class="time mb-3">
    by <span>{{ $post->user->firstname . ' '. $post->user->lastname }} </span> on <i>{{ date("d M Y", strtotime($post->created_at)) }} </i>
          </div>
          <p class="desc mb-3">
            {{ limit_words($post->description, 70)  }}...
          </p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-md btn-success">Contine Reading</a>
    </div>  
    
@endforeach



@endsection