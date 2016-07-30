@extends('layouts.dashboard_app')
@section('content')
<h1>Show All Categories</h1>
<hr/>
@if ($categories->count())
<table class='table table-bordered table-responsive'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($categories as $category) 
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->status }}</td>
        <td>
            {{ Form::open(array('route' => ['categories.edit',$category->id], 'method'=>'patch', 'enctype' => 'multipart/form-data')) }}
            {{ Form::submit('Edit', array('class' => 'btn btn-success')) }}
            {{ Form::close() }}
        </td>
        <td>
            {{ Form::open(array('route' => ['categories.delete',$category->id], 'method'=>'get', 'enctype' => 'multipart/form-data')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
</table>
<div class='text-center' style="">
    {{ $categories->links() }} {{ $categories->render() }}
</div>
@else
<div class='empty'>
    Nothing Found.
</div>
@endif
@endsection