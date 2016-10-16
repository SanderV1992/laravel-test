@extends('admin.layouts.app')

@section('content')
    <h1>Admin:index</h1>
    @if ($users)
        <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>active</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($users as $key => $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->roles->name}}</td>
                <td>{{$user->is_active === 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </table>
    @endif
@endsection
