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

            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>
                    {{$admin->id}}
                </td>

                <td>
                    {{$admin->name}}
                </td>

                <td>
                    {{$admin->email}}
                </td>

                <td>
                    {{$admin->created_at}}
                </td>

                <td>
                    <a class="btn btn-success" href="{{route('admin.edit.form', $admin->id)}}">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection