@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('admin.users.edit',['id' => $user->id])}}">
        {{csrf_field()}}


        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$user->name}}" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{$user->password}}" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection