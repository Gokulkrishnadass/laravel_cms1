@extends('layouts.admin')
@section('content')
@include('formerror.errormessage')
<div class="row">
{!! Form::open(['method'=> 'POST', 'action' => 'AdminPostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>  

    <div class="form-group">
            {!! Form::label('Category', 'Category') !!}
            {!! Form::select('category_id', ['' => 'choose options'] + $categories, null, ['class'=>'form-control']) !!}
    </div>  

    <div class="form-group">
            {!! Form::label('photo_id', 'Thumnail') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>  

    <div class="form-group">
            {!! Form::label('body', 'Description') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>'3']) !!}
    </div>  

           
<div class="form-group">
   {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
</div>

</div>

@endsection