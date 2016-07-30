@extends('layouts.dashboard_app')
@section('content')
<div class="container-fluid">
    <h1>Create Vendor</h1>
    {{ Form::open(array('route' => 'vendors.store', 'enctype' => 'multipart/form-data')) }}

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
        {{ Form::label('email','Email') }}
        {{ Form::text('email',null,array('class'=>'form-control','placeholder'=>'Title')) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone','Phone') }}
        {{ Form::text('phone',null,array('class'=>'form-control','placeholder'=>'Title')) }}
    </div>
    <div class="form-group">
        {{ Form::label('mobile','Mobile') }}
        {{ Form::text('mobile',null,array('class'=>'form-control','placeholder'=>'Title')) }}
    </div>
    <div class="form-group">
        {{ Form::label('address','Address') }}
        {{ Form::textarea('address',null,array('class'=>'form-control','placeholder'=>'Title')) }}
    </div>
    <div class="form-group">
        {{ Form::label('status','Status') }}
        {{ Form::select('status',array('Active' => 'active', 'Inactive' => 'inactive'),null,['class'=>'form-control']) }}
    </div>
    

    {{ Form::submit('Submit Vendor', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}

</div>
@endsection
