@extends('layouts.dashboard_app')
@section('content')
<div class="container-fluid">
    <h1>Create Product </h1>
    {{ Form::open(array('route' => 'products.store', 'enctype' => 'multipart/form-data')) }}

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
        {{ Form::label('caetgory','Category') }}
        {{ Form::select('category',array('L' => 'Large', 'S' => 'Small'),null,['class'=>'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('price','Price') }}
        {{ Form::text('price',null,array('class'=>'form-control','placeholder'=>'Price'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('stock','Stock') }}
        {{ Form::text('stock',null,array('class'=>'form-control','placeholder'=>'Stock'))  }}
    </div>
    
    <div class="form-group">
        {{ Form::label('discount','Discount') }}
        {{ Form::text('discount',null,array('class'=>'form-control','placeholder'=>'Discount'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('picture','Picture') }}
        {{ Form::file('picture') }}
    </div>

    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}

</div>
@endsection
