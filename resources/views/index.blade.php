@extends('layouts/app')

@section('content') 
    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2">Title</h3>
        <div class="" style="max-height:500px;overflow:hidden;">
            <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
                <img src="{{ asset('img/pass.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
            </div>
        </div>
          <div class="time mb-3">
by <span>Isaac Toyin</span> on 
          </div>
          <p class="desc mb-3">
            Hello, my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site my name is isaac this is a test site 
          </p>
            <a href="" class="text-decoration-none btn btn-md btn-success">Contine Reading</a>
    </div>  
@endsection