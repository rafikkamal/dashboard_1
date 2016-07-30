@extends('layouts.dashboard_app')

@section('content')
<h1>Vendor</h1>
<p><a href="{{ route('vendors.create') }}">Add new vendor</a></p>
<p><a href="{{ route('vendors.show') }}">Show all vendors</a></p>
<hr/>
@if ($vendors->count())
<table class='table table-bordered table-responsive'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
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
        <td>
            {{ Form::open(array('route' => ['vendors.edit',$vendor->id], 'method'=>'patch', 'enctype' => 'multipart/form-data')) }}
            {{ Form::submit('Edit', array('class' => 'btn btn-success')) }}
            {{ Form::close() }}
        </td>
        <td>
            {{ Form::open(array('route' => ['vendors.delete',$vendor->id], 'method'=>'get', 'enctype' => 'multipart/form-data')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
</table>
<div class='text-center'>
<!--    {{ $vendors->links() }} {{ $vendors->render() }}-->
</div>
@else
<div class='empty'>
    Nothing Found.
</div>
@endif
@endsection