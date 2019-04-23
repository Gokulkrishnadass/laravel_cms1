@extends('layouts.admin')

@section('content')

<h1>Posts</h1>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            
        
        <tr>
            <td>{{$post->id}}</td>
            <th>{{$post->user->name}}</th>
            <th>{{$post->category ? $post->category->name :     'Uncategorized'  }}</th>
            <th>{{$post->title}}</th>
            <th>{{$post->body}}</th>
            <th>{{$post->created_at->diffForhumans()}}</th>
            <th>{{$post->updated_at->diffForhumans()}}</th>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection