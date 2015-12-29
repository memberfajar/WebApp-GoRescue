@extends('app')

@section('content')
<h1>Article</h1>
@foreach($admin as $admin)
	<article>
		<h2>
		<a href="{!! url('/admin', $admin->id_admin) !!}">{!! $admin->nama_admin !!}</a>
		</h2>

		<div class="body">nama admin: {!! $admin->nama_admin !!} || username: {!! $admin->username !!} || password:{!! $admin->password !!}</div>
		nama admin: {!! $admin->tanggal !!}
	</article>
@endforeach
@stop