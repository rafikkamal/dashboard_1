@extends('layouts.dashboard_app')

@section('content')
<h1>Product</h1>
<p><a href="{{ route('vendors.create') }}">Add new vendor</a></p>
<p><a href="{{ route('vendors.show') }}">Show all vendors</a></p>
<br/>
<table class='table table-bordered table-responsive'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Status</th>
    </tr>
    @foreach($vendors as $vendor) 
    <tr>
        <td>{{ $vendor->id }}</td>
        <td>{{ $vendor->title }}</td>
        <td>{{ $vendor->email }}</td>
        <td>{{ $vendor->phone }}</td>
        <td>{{ $vendor->mobile }}</td>
        <td>{{ $vendor->address }}</td>
        <td>{{ $vendor->status }}</td>
    </tr>
    @endforeach
</table>
@endsection