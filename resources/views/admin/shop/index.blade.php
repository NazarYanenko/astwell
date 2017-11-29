@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Shops</div>
                    <div class="panel-body">
                        @foreach($shops as $shop)
                            <p>
                                {{ $shop->name }}
                                <ol>
                                    @foreach($shop->work_graphs as $work_graph)
                                        @if($work_graph->is_work)
                                        <li>
                            <p>{{$work_graph->time_open}}</p>
                            <p>{{$work_graph->time_closed}}</p>
                            <p>{{$work_graph->week->name}}</p>

                                     </li>
                                    @endif
                            @endforeach
                            </ol>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
