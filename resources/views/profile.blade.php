@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

   
<form method="POST" action="{{ url("profile/".Auth::user()->id) }}"  >
    @csrf 
            <div class="form-group mb-2">
                <input type="text" class="form-control py-3" name="firstname" value="{{ Auth::user()->firstname }}" />
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control py-3" name="lastname" value="{{  Auth::user()->lastname }}" />
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control py-3" name="phone" value="{{  Auth::user()->phone }}" />
            </div>
            <div class="form-group mb-2">
                <input type="submit" class="form-control btn btn-md btn-success" value="UPDATE"  />
            </div>
</form>                     
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
