@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
                    @if (session()->has('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('status') }}
                        </div>
                    @endif
    @if($errors->any)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

<form method="POST" action="{{ url("reset-password/".Auth::user()->id) }}"  >
    @csrf 
            <div class="form-group mb-2">
                <input type="password" class="form-control py-3" name="passwords" placeholder="********"/>
            </div>
            <div class="form-group mb-2">
                <input type="password" class="form-control py-3" name="new_password" placeholder="********" />
            </div>
            <div class="form-group mb-2">
                <input type="password" class="form-control py-3" name="new_password_re" placeholder="********" />
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
