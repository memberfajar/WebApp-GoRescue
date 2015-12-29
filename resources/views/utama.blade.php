<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->

<link href="{{ asset('/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css" />
 	<style type="text/css">
      	.headertable{
      	background-color: grey;
      	color: white;
      	}

      	.pagination{
      		margin: 0 auto;
      		margin: auto;
      	}
      	.posisi{
      		margin-left: 35%;
      	}
	</style>
</head>

<body>
<div class="pag">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Aplikasi Layanan Panggilan Darurat</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>

<!--TABEL-->
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

<!--PAGINATION-->
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




</body>

</html>