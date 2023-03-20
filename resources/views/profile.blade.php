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

   
<form method="POST" action="" >
    @csrf
            <div class="form-group mb-2">
                <label for="">First Name</label>
                <input type="text" class="form-control py-2" name="first_name" value="" />
            </div>
            <div class="form-group mb-2">
                <label for="">Last Name</label>
                <input type="text" class="form-control " name="last_name" value="" />
            </div>
            <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="" />
            </div>
            <div class="form-group mb-2">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" value="" />
            </div>
            <div class="form-group mb-2">
                <input type="submit" class="form-control btn btn-md btn-success" value="UPDATE" />
            </div>
</form>                     
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
