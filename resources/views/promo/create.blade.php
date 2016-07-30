@extends('layouts.dashboard_app')
@section('content')
<div class="container-fluid">
    <h1>Create Promo </h1>
    {{ Form::open(array('route' => 'promos.store', 'enctype' => 'multipart/form-data')) }}

    <div class="form-group">
        {{ Form::label('product','Product') }}
        {{ Form::select('product',$products,null,['class'=>'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('discount','Discount') }}
        {{ Form::text('discount',null,array('class'=>'form-control','placeholder'=>'Price'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('latest','Latest') }}
        {{ Form::select('latest',array('1' => 'Yes', '0' => 'No'), null,['class'=>'form-control'])  }}
    </div>
    
    <div class="form-group">
        {{ Form::label('discount','Discount') }}
        {{ Form::text('discount',null,array('class'=>'form-control','placeholder'=>'Discount'))  }}
    </div>

    {{ Form::submit('Submit Promo', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}

</div>
@endsection
