@extends('layouts.dashboard_app')

@section('content')
<h1>Product</h1>
<p><a href="{{ route('products.create') }}">Add new product</a></p>
<p><a href="{{ route('products.show') }}">Show all products</a></p>
<br/>
<table class='table table-bordered table-responsive'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>
    @foreach($products as $product) 
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
    </tr>
    @endforeach
</table>
@endsection