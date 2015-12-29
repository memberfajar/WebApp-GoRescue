@extends('app')

@section('content')
<h1>Article</h1>
@foreach($pangdar as $pd)
	<article>
		<h2>
		<a href="{!! url('/pangdar', $pd->id_pangdar) !!}">{!! $pd->id_pangdar !!}</a>
		</h2>
{{-- 
		<div class="body">Nama: {!! $pangdar->nama !!} || Email: {!! $pangdar->email !!} || No Identitas: {!! $pangdar->no_identitas !!} || No HP: {!! $pangdar->nomor_hp !!} || Latitude: {!! $pangdar->latitude !!}</div> --}}
		
	</article>

@endforeach
@stop