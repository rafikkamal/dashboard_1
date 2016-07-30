@extends('layouts.dashboard_app')
@section('content')
<div class="container-fluid">
    <h1>Create Category</h1>
    {{ Form::open(array('route' => 'categories.store', 'enctype' => 'multipart/form-data')) }}

    @if ($errors->has('title'))
    <div class="alert alert-danger">
        <strong>
            {{ $errors->first('title') }}
        </strong>
    </div>
    @endif
    
    <div class="form-group">
        {{ Form::label('title','Title') }}
        {{ Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title')) }}
    </div>

    <div class="form-group">
        {{ Form::label('status','Status') }}
        {{ Form::select('status',array('Active' => 'active', 'Inactive' => 'inactive'),null,['class'=>'form-control']) }}
    </div>
    

    {{ Form::submit('Submit Category', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}

</div>
@endsection
