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
                Email
            </th>

            <th>
                Create at
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
        @foreach($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>

                <td>
                    {{$user->name}}
                </td>

                <td>
                    {{$user->email}}
                </td>

                <td>
                    {{$user->created_at}}
                </td>

                <td>
                    <a class="btn btn-success" href="{{route('admin.users.edit.form', $user->id)}}">edit</a>
                </td>

                <td>
                    <a class="btn btn-success" href="{{route('admin.users.delete', $user->id)}}">delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <ul class="pagination">
        {{ $users->links() }}
    </ul>
@endsection