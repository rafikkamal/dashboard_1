@extends('layouts.dashboard_app')
@section('content')
<h1>Edit Product </h1>
{{ Form::open(array('route' => ['products.update',$product->id], 'enctype' => 'multipart/form-data')) }}

@if ($errors->has('title'))
<div class="alert alert-danger">
    <strong>
        {{ $errors->first('title') }}
    </strong>
</div>
@endif

<div class="form-group">
    {{ Form::label('title','Title') }}
    {{ Form::text('title',$product->title,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('price','Price') }}
    {{ Form::text('price',$product->price,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('stock','Stock') }}
    {{ Form::text('stock',$product->stock,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('discount','Discount') }}
    {{ Form::text('discount',$product->discount,array('class'=>'form-control'))  }}
</div> 
{{ Form::submit('Update Product', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}



@endsection
