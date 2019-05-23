<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="index-page">
	
	<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/bg0.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>My Blog</h1>

					</div>
				</div>
			</div>
		</div>
	</div>
	<h2>Postings</h2>
	<button id="sort-btn" class="btn btn-primary" type="submit">Sort Postingan</button>

	<div id="content">
	</div>

	  <form action="/posting/posting" method="post" class="col-lg-4 col-sm-4">
		  <div class="form-group label-floating">
			  <label class="control-label">Nama</label>
			  <input type="text" name="nama_poster" class="form-control">
		  </div>
		  <div class="form-group label-floating">
			  <label class="control-label">Judul Postingan</label>
			  <input type="text" name="judul_post" class="form-control">
		  </div>
		  <div class="form-group label-floating">
			  <label class="control-label">Isi Postingan</label>
			  <input type="text" name="isi_post" class="form-control">
		  </div>
          <button class="btn btn-primary" type="submit">Tambah Postingan</button>
	  </form>




</body>
	<!--   Core JS Files   -->

	<script type="text/javascript">

		$(document).ready(function() {
			let isDesc = true;
			let fn = function () {
				$.get('/posting/api/posting?sort=' + isDesc, function (html, textStatus, xhr) {
					$('#content').html(html);
				});
			};
			fn();
	        $('#sort-btn').click(function () {
	        	isDesc = !isDesc;
	        	fn();
			});
	        


			materialKit.initFormExtendedDatetimepickers();

		});
	</script>
</html>
