@extends('layouts.dashboard_app')
@section('content')
<h1>Edit Category</h1>
{{ Form::open(array('route' => ['categories.update',$category->id], 'enctype' => 'multipart/form-data')) }}

@if ($errors->has('title'))
<div class="alert alert-danger">
    <strong>
        {{ $errors->first('title') }}
    </strong>
</div>
@endif

<div class="form-group">
    {{ Form::label('title','Title') }}
    {{ Form::text('title',$category->title,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('status','Status') }}
    {{ Form::text('status',$category->status,array('class'=>'form-control')) }}
</div>


{{ Form::submit('Update Category', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}



@endsection
