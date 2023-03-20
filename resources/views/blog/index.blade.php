@extends('layouts/app')

@section('content')

@if(session()->has('message'))

    <div class="mb-4 bg-danger text-white py-2 px-4"> 
        {{ session()->get('message') }}
    </div>
@endif

 
<div class="mb-4 bg-white"> 
    <a href="{{ route('blog.create') }}" class="btn btn-md btn-primary">Create Post</a>
</div>
 


 
    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2">Lorem ipsum dolor sit amet consectetur</h3>
        <div class="" style="max-height:500px;overflow:hidden;">
            <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
                <img src="{{ asset('assets/img/sample.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
            </div>
        </div>
          <div class="time mb-3">
    by <span>Isaac Toyin </span> on <i>20 March 2023 </i>
          </div>
          <p class="desc mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil optio nesciunt in, libero reprehenderit iure vero? Eligendi facilis aut, molestias mollitia molestiae in maiores quam totam, pariatur ea labore! ...
          </p>
            <a href="{{ route('blog.show', 'show') }}" class="text-decoration-none btn btn-md btn-success">Continue Reading</a>
    </div>
 
    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2">Lorem ipsum dolor sit amet consectetur</h3>
        <div class="" style="max-height:500px;overflow:hidden;">
            <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
                <img src="{{ asset('assets/img/sample.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
            </div>
        </div>
          <div class="time mb-3">
    by <span>Isaac Toyin </span> on <i>20 March 2023 </i>
          </div>
          <p class="desc mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil optio nesciunt in, libero reprehenderit iure vero? Eligendi facilis aut, molestias mollitia molestiae in maiores quam totam, pariatur ea labore! ...
          </p>
            <a href="{{ route('blog.show', 'show') }}" class="text-decoration-none btn btn-md btn-success">Continue Reading</a>
    </div>
 
    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2">Lorem ipsum dolor sit amet consectetur</h3>
        <div class="" style="max-height:500px;overflow:hidden;">
            <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
                <img src="{{ asset('assets/img/sample.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
            </div>
        </div>
          <div class="time mb-3">
    by <span>Isaac Toyin </span> on <i>20 March 2023 </i>
          </div>
          <p class="desc mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil optio nesciunt in, libero reprehenderit iure vero? Eligendi facilis aut, molestias mollitia molestiae in maiores quam totam, pariatur ea labore! ...
          </p>
            <a href="{{ route('blog.show', 'show') }}" class="text-decoration-none btn btn-md btn-success">Continue Reading</a>
    </div>



@endsection