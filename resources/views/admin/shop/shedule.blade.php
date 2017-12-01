@extends('layouts.admin')


@section('content')
    <form method="post" action="{{route('admin.shops.edit',['id' => $id])}}">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">Time Open</label>
            <input name="time_open" type="time" class="form-control" id="exampleInputEmail1" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Time Closed</label>
            <input name="time_closed" type="time" class="form-control" id="exampleInputPassword1" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Date</label>
            <input name="date" type="date" class="form-control" id="exampleInputPassword2" >
        </div>

        <div class="checkbox">
            <label>
                <input name="is_open" type="checkbox"> Open today
            </label>
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection