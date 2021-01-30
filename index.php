<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Index</title>
	<link href="css/lightbox.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<html>
<body>
	<nav>
		<div class="container">
			<a href="upload-photo.php" class="btn">Add Photo</a>
		</div>
	</nav>

	<section class="photo">
		<div class="container">
			<div class="photo-grid">
			<?php
				require "db/condb.php"; 
				$Squery = "SELECT * FROM tbl_photos ORDER BY img_id DESC";
				 		if ($result =mysqli_query($conn, $Squery)) {
							while ($img = mysqli_fetch_array($result)) {

					?>

					<div class="photo-grid--items"> 
					<a href="<?php echo $img['img_path']; ?>"  data-Lightbox="<?php echo $img['img_id']; ?>" data-title="<?php echo $img['img_title']; ?>">
					<img src="<?php echo $img['img_path']; ?>" alt=""> 
					</a> 
					</div>
<?php
						}
					}
?>

			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="js/lightbox.js"></script>
</body>

</html>