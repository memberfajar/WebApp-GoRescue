@extends('layouts.master')

@section('title', 'Admin-Go Rescue')


@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header">Dashboard</h1>

		<table class="table table-bordered">
			<thead>
			<tr class="headertable">
				<th>ID</th>
				<th>Nama</th>
				<th>Nomor HP</th>
				<th>Tanggal Panggilan</th>
				<th>Longitude</th>
				<th>latitude</th>
				<th>Action</th>
				<th>Status</th>
			</tr>
			</thead>
			<tr>
				<td>001</td>
				<td>Isnan</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>002</td>
				<td>Patiyah</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>003</td>
				<td>Ilham</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>004</td>
				<td>Pajar</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>005</td>
				<td>Prasetya</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>006</td>
				<td>Enur</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>007</td>
				<td>Anugrah</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>008</td>
				<td>Hadifir</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>009</td>
				<td>Kiagus</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

			<tr>
				<td>010</td>
				<td>Achmad</td>
				<td>089249292452</td>
				<td>11-10-2015</td>
				<td>1,9097867</td>
				<td>0,6428424</td>
				<td>
					<button type="button" class="btn btn-default" data-somestringvalue-text="Terkirim" autocomplete="off">Kirim</button>
				</td>
				<td>Berhasil</td>
			</tr>

		</table>
	</div>
	{{--Pagination--}}
	<div class="pag">
		<div class="posisi">
			<ul class="pagination">
				<li><a href = "#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="disabled"><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href = "#">&raquo;</a></li>
			</ul>
		</div>
	</div>
@endsection

<script>
	$(document).ready(function(){
		$(".btn").click(function(){
			$(this).button('loading').delay(1000).queue(function(){
				$(this).button('somestringvalue');
				$(this).dequeue();
			});
		});
	});

</script>
