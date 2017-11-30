@extends('layouts.admin')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>
                ID
            </th>

            <th>
                Name
            </th>

            <th>
                Edit
            </th>

            <th>
                Delete
            </th>

        </tr>
        </thead>
        <tbody>
        @foreach($shops as $shop)
            <tr>
                <td>
                    {{$shop->id}}
                </td>

                <td>
                    {{$shop->name}}
                </td>

                {{--<td>--}}
                    {{--<a class="btn btn-success" href="{{route('admin.users.edit.form', $user->id)}}">edit</a>--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--<a class="btn btn-success" href="{{route('admin.users.delete', $user->id)}}">delete</a>--}}
                {{--</td>--}}
            </tr>
        @endforeach
        </tbody>

    </table>
    <ul class="pagination">
        {{ $shops->links() }}
    </ul>
@endsection