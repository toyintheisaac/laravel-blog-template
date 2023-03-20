@extends('layouts/app')

@section('content') 
    <div class="mb-4 bg-white"> 
        <a href="/blog" class="btn btn-md btn-info">Back</a>
    </div>
    <div class="mb-4 bg-white"> 
        <h1 class="text-uppercase font-bold p-2">Create New Post</h1>

@if($errors->any)
    @foreach($errors->all() as $error)
        <div class="bg-danger">
            {{ $error }}    
        </div>    
    @endforeach
@endif
 


<form method="POST" action="/blog" enctype="multipart/form-data">
    @csrf
            <div class="form-group mb-2">
                <input type="text" class="form-control py-3" name="title" placeholder="Title.." />
            </div>
            <div class="form-group mb-2">
                <textarea class="form-control py-3" name="desc" ></textarea>
            </div>
            <div class="form-group mb-2">
                <input type="file" class="form-control" name="image"  />
            </div>
            <div class="form-group mb-2">
                <input type="submit" class="form-control btn btn-md btn-success" value="CREATE"  />
            </div>
</form>
    </div>  
@endsection