@extends('layouts.admin')


@section('content')
    <form method="post" action="admin/admin/update/{{$admin->id}}">
{{csrf_field()}}

        {{--<input type="hidden" name="id" value="{{$admin->id}}">--}}

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{$admin->name}}" placeholder="name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{$admin->email}}" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="{{$admin->password}}" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection