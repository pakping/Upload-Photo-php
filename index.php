<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link href="css/lightbox.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<html>

<body>


	<header class="bg-primary text-center py-5 mb-4">
		<div class="container">

			<a href="upload-photo.php" class="btn btn-success">Add Photo</a>
		</div>
	</header>

	<!-- Header -->
	<!-- Page Content -->
	<div class="container">
		<div class="row g-2">

			<?php
			require "db/condb.php";
			$Squery = "SELECT * FROM tbl_photos ORDER BY img_id DESC";
			if ($result = mysqli_query($conn, $Squery)) {
				while ($img = mysqli_fetch_array($result)) {

			?>
					<!-- Team photo-->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-0 shadow">
							<a href="<?php echo $img['img_path']; ?>"  data-lightbox="<?php echo $img['img_id']; ?>"  data-title="<?php echo $img['img_title']; ?>">
								<img src="<?php echo $img['img_path'] ; ?>" class="card-img-top" alt="..."  height="180" width="30">
							</a>
							<div class="card-body text-center">
								<h5 class="card-title"><?php echo $img['img_title']; ?></h5>
								<div class="card-text text-black-50"><?php echo $img['img_name']; ?></div>
								<a href="#" class="btn btn-primary">โหลดรูปภาพ</a>
							</div>
						</div>
					</div>

			<?php
				}
			}
			?>

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>