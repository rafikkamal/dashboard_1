@extends('layouts.dashboard_app')
@section('content')
<h1>Show All Products</h1>
<hr/>
@if ($products->count())
<table class='table table-bordered table-responsive'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Vendor</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Discount</th>
        <th>Option</th>
        <th>Option</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->title }}</td>
        <td>Category</td>
        <td>Brand</td>
        <td>Vendor</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->discount }}</td>
        <td>
            {{ Form::open(array('route' => ['products.edit',$product->id], 'method'=>'patch', 'enctype' => 'multipart/form-data')) }}
            {{ Form::submit('Edit', array('class' => 'btn btn-success')) }}
            {{ Form::close() }}
        </td>
        <td>
            {{ Form::open(array('route' => ['products.delete',$product->id], 'method'=>'get', 'enctype' => 'multipart/form-data')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
</table>
<div class='text-center' style="">
    {{ $products->render() }}
</div>
@else
<div class='empty'>
    Nothing Found.
</div>
@endif
@endsection