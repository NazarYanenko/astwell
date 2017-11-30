@extends('layouts.front')


@section('content')
<div class="row">
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Is opened</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $dates as $date)
                <tr>
                    <td scope="col">{{$date['shop']->id}}</td>
                    <td scope="col">{{$date['shop']->name}}</td>
                    <td scope="col">{{$date->date}}</td>
                    <td scope="col">{{$date->time_open}}</td>
                    <td scope="col">{{$date->time_closed}}</td>
                    <td scope="col">{{$date->IsOpened}}</td>
                </tr>

                <div></div>
            @endforeach

            </tbody>
        </table>


        <ul class="pagination">
            {{ $dates->links() }}
        </ul>
        <form action="{{route('catalog')}}">
       <label>Date:</label> <input type="date" name="date" />
       <label>Time:</label> <input type="time" name="time" />
            <input type="submit" name="submit"/>
        </form>
    </div>


</div>

@endsection