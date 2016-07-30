@extends('layouts.dashboard_app')
@section('content')
<h1>Edit Product </h1>
{{ Form::open(array('route' => ['vendors.update',$vendor->id], 'enctype' => 'multipart/form-data')) }}

@if ($errors->has('title'))
<div class="alert alert-danger">
    <strong>
        {{ $errors->first('title') }}
    </strong>
</div>
@endif

<div class="form-group">
    {{ Form::label('title','Title') }}
    {{ Form::text('title',$vendor->title,array('class'=>'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('email','Email') }}
    {{ Form::text('email',$vendor->email,array('class'=>'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('phone','Phone') }}
    {{ Form::text('phone',$vendor->phone,array('class'=>'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('mobile','Mobile') }}
    {{ Form::text('mobile',$vendor->mobile,array('class'=>'form-control'))  }}
</div> 
<div class="form-group">
    {{ Form::label('address','Address') }}
    {{ Form::text('address',$vendor->address,array('class'=>'form-control'))  }}
</div> 
<div class="form-group">
    {{ Form::label('status','Status') }}
    {{ Form::text('status',select('status',array('Active' => 'active', 'Inactive' => 'inactive'),$vendor->status,array('class'=>'form-control'))  }}
</div> 

{{ Form::submit('Update Product', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@endsection