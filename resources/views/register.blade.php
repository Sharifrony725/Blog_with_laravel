@extends('master')
@section('content')
<h2>Register an account</h2>
<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        @if ($errors->count() == 1)
            {{ $errors->first() }}
        @else
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
        @endif
        
    </div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="exampleInputPhoto1">Photo</label>
      <input type="file" name="photo" class="form-control" placeholder="Upload Photo">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection