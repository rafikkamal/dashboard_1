@extends('layouts.dashboard_app')

@section('content')
<h1>Promo</h1>
<p><a href="{{ route('promos.create') }}">Add new promo</a></p>
<p><a href="{{ route('promos.show') }}">Show all promos</a></p>
<hr/>

@endsection