@extends('layouts/app')

@section('content') 
    <div class="mb-4 bg-white"> 
        <a href="/blog" class="btn btn-md btn-info">Back</a>
    </div>
    <div class="mb-4 bg-white"> 
        <h1 class="text-uppercase font-bold p-2">Edit  Post</h1>

@if($errors->any)
    @foreach($errors->all() as $error)
        <div class="bg-danger">
            {{ $error }}    
        </div>    
    @endforeach
@endif
 


<form method="POST" action="/blog/{{ $post->slug }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="form-group mb-2">
                <input type="text" class="form-control py-3" name="title" value="{{ $post->title }}" />
            </div>
            <div class="form-group mb-2">
                <textarea class="form-control py-3" name="desc" >{{  $post->description }} </textarea>
            </div>
            <div class="form-group mb-2" style="max-height:500px;overflow:hidden;">
    <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
        <img src="{{ asset('img/'.$post->image_path)}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%;"/>
    </div>
            </div>
            <div class="form-group mb-2">
                <input type="file" class="form-control" name="image"  />
                <input type="hidden" class="form-control" name="image22"  value="{{ $post->image_path }}" />
            </div>
            <div class="form-group mb-2">
                <input type="submit" class="form-control btn btn-md btn-success" value="CREATE"  />
            </div>
</form>
    </div>  
@endsection