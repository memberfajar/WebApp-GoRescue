@extends('app')

@section('content')
<h1>Article</h1>
@foreach($pangdar as $item)
	{{ $item->user->nama }}
@endforeach
@stop