@extends('layouts/app')

@section('content')

@if(session()->has('message'))

    <div class="mb-4 bg-danger text-white py-2 px-4"> 
        {{ session()->get('message') }}
    </div>
@endif
 
    <div class="mb-4 bg-white"> 
      <form action="{{ route('blog.destroy', 'slug') }}" method="post">
        @csrf
        @method('DELETE')
        <a href="{{ route('blog.edit', 'slug') }}" class="btn btn-md btn-primary">Edit Post</a>
        <button class="btn btn-md btn-danger" type="submit" >Delete Post</button>
      </form>
    </div> 

 
    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2">Title Title Title Title </h3>
        <div class="" style="max-height:500px;overflow:hidden;">
            <div style="display:flex;justify-content:center;align-items: center;overflow:hidden;">
                <img src="{{ asset('assets/img/sample.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
            </div>
        </div>
          <div class="time mb-3">
            by <span> Isaac Toyin </span> on <i>20 March 2023 </i>
          </div>
          <p class="desc mb-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate porro placeat quas magni dolorem rem sint explicabo exercitationem minima tempora omnis eius quae inventore, iste sed voluptatum error laboriosam. 
          </p> 
    </div>  
     
 

    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2 text-primary">Comments (1)</h3>
    </div>

@if(session()->has('comment_message'))

    <div class="mb-4 bg-danger text-white py-2 px-4"> 
        {{ session()->get('comment_message') }}
    </div>
@endif

    <div class="mb-4 bg-white"> 
        <h3 class="text-uppercase h4 font-bold p-2 text-info">Leave a Comment</h3>
          <div class="" style="">
              <form method="POST" action="" >
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
 

            <div class="row  border mb-3" >
                {{-- <div class="col-sm-4 col-md-2">
                    <img src="{{ asset('assets/img/sample.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
                </div> --}}
                <div class="col-sm-8 col-md-10">
                    <div class='font-weight-bold text-capitalize italic'>
                            <b>
                                Isaac Toyin
                            </b>
                            <i class="text-small">
                                20 march 2023
                            </i>
                    </div>
                    <div class="p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt necessitatibus earum, mollitia reprehenderit maxime totam sequi cupiditate, nostrum aperiam, veniam veritatis voluptas ea beatae ratione repellendus facere corrupti in.
                    </div>
                </div>
            </div>
            <div class="row  border mb-3" >
                {{-- <div class="col-sm-4 col-md-2">
                    <img src="{{ asset('assets/img/sample.jpg')}}" class="w-100 h-100" style="flex-shrink:0;min-width:100%;min-height:100%"/>
                </div> --}}
                <div class="col-sm-8 col-md-10">
                    <div class='font-weight-bold text-capitalize italic'>
                            <b>
                                Isaac Toyin
                            </b>
                            <i class="text-small">
                                20 march 2023
                            </i>
                    </div>
                    <div class="p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt necessitatibus earum, mollitia reprehenderit maxime totam sequi cupiditate, nostrum aperiam, veniam veritatis voluptas ea beatae ratione repellendus facere corrupti in.
                    </div>
                </div>
            </div>

@endsection