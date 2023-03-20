@extends('layouts/app')

@section('content')

@if(session()->has('message'))

    <div class="mb-4 bg-danger text-white py-2 px-4"> 
        {{ session()->get('message') }}
    </div>
@endif

@if (Auth::user() && Auth::user()->id == $post->user_id)
    <div class="mb-4 bg-white"> 
      <form action="/blog/{{ $post->slug }}" method="post">
        @csrf
        @method('DELETE')
        <a href="/blog/{{ $post->slug }}/edit" class="btn btn-md btn-primary">Edit Post</a>
        <button class="btn btn-md btn-danger" type="submit" >Delete Post</button>
      </form>
    </div>
@endif

 
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
            {{  $post->description }} 
          </p> 
    </div>  
     
 

    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2 text-primary">Comments</h3>
          <div class="container" style="">

@foreach ( $post->comments as $comments )
    <div class="row p-4 border mb-3" style="">
        <div class="col-sm-4 col-md-2">
            img 
        </div>
        <div class="col-sm-8 col-md-10">
            <div class='font-weight-bold text-capitalize italic'>
                    <b>
                    {{ $comments->fullname }}
                    </b>
                    <i class="text-small">
                        {{ $comments->created_at }}
                    </i>
            </div>
            <div class="p">
                {{ $comments->comment }}
            </div>
        </div> 
    </div>
@endforeach
          
          </div> 
    </div>

@if(session()->has('comment_message'))

    <div class="mb-4 bg-danger text-white py-2 px-4"> 
        {{ session()->get('comment_message') }}
    </div>
@endif

    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2 text-info">Leave a Comment</h3>
          <div class="" style="">
              <form method="POST" action="{{ url('save-comment/'.$post->slug) }}" >
    @csrf
                  <div class="form-group">
                      <label for="fullname">Full Name:</label>
                      <input type="text" name="fullname" id="fullname"  value="{{ old('fullname') }}" class="form-control" />
                  </div>
                  <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" id="email"  value="{{ old('email') }}" class="form-control" />
                  </div>
                  <div class="form-group">
                      <label for="email">Comments:</label>
                        <textarea type="email" name="comments" id="comments" class="form-control" >{{ old('comments') }}</textarea>
                  </div>
                  <div class="form-group mt-2"> 
                      <input type="submit"  id="email"  value="Submit" class="btn btn-md btn-success" />
                  </div>
              </form>
          </div> 
    </div>



@endsection