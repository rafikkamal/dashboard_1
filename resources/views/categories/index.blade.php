@extends('layouts.dashboard_app')

@section('content')
<h1>Category</h1>
<p><a href="{{ route('categories.create') }}">Add new category</a></p>
<p><a href="{{ route('categories.show') }}">Show all categories</a></p>
<br/>
<table class='table table-bordered table-responsive'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Status</th>
    </tr>
    @foreach($categories as $category) 
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->status }}</td>
    </tr>
    @endforeach
</table>
@endsection