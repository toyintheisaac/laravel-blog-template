@extends('layouts/app')
@section('header') 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

@endsection

@section('content')
    <div class="mb-4 bg-white">
        <a href="/blog" class="btn btn-md btn-info">Back</a>
    </div>
    <div class="mb-4 bg-white">
        <h3 class="text-uppercase font-bold p-2">Edit Post</h3>

@if($errors->any)
    @foreach($errors->all() as $error)
        <div class="bg-danger">
            {{ $error }}
        </div>
    @endforeach
@endif
 


<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="title" required value="" />
            </div>
            <div class="form-group mb-2">
                <textarea class="form-control" name="desc"  id="summernote" required ></textarea>
            </div> 
            <div class="form-group mb-2">
                <input type="file" class="form-control" name="image"  />
            </div>
            <div class="form-group mb-2">
                <input type="submit" class="form-control btn btn-md btn-success" value="Update" />
            </div>
</form>
    </div>  
@endsection


@section('script') 
<script> 
    $(function () {
      //Add text editor
    $('#summernote').summernote({
        toolbar: [ 
                ['font', ['bold', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],  
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']], 
              ],
        height: 400,
      })
    })
  </script>

@endsection