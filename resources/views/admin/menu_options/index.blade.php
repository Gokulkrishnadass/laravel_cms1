@extends('layouts.admin')

@section('content')
<h1>Menu Options</h1>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Options</th>
            <th>Status</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
            
            <tr>
                <td>{{$menu->id}}</td>
                <td>{{$menu->name}}</td>
                <td>{{$menu->is_active ? 'Active' : 'Not Active'}}</td>
                <td>{{$menu->created_at}}</td>
                <td>{{$menu->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

