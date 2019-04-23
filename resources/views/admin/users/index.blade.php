@extends('layouts.admin')
@section('content')

@if(Session::has('deleted_user'))

{{session('deleted_user')}}

@endif

<h1>Users</h1>



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Create at</th>
            <th>Update at</th>
        </tr>
    </thead>
    <tbody>
        @if($users)
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img style="height:50px;" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'  }}" class="img-responsive img-rounded"></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>{!! Form::open(['method'=> 'Delete', 'action' =>['AdminUsersController@destroy', $user->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
                             </div>
                        
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
        @endif

    </tbody>
</table>

@endsection