<?php
session_start();
ob_start();
// $id=$_SESSION['id'];
// echo $id;
require 'connect.php';

include 'splheader.php';

//$sql = mysqli_query($con,"SELECT * FROM `product_up` join product on product_up.person_id = product.person_id");
$sql = mysqli_query($con,"SELECT * FROM `product_up` inner join product on product_up.person_id = product.person_id inner join demand on demand.person_id=product_up.person_id inner join register on register.reg_id=product_up.person_id;; ");

?>
<html>
<title>tit-tat </title>

<link type="text/css" href="abc.css" rel="stylesheet">

<head>

	<style>

	</style>
	<link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
	<div class="bg">

		<div class="row">

			<?php while($row = mysqli_fetch_assoc($sql)){ ?>
			<a href="pro_details.php?pid=<?php echo $row['pro_id']; ?>">
				<div class="column">
					<div class="a">
						<img src="<?php echo $row['image_dir']; ?>" alt="abc" class="center" width="240px"
							height="240px">
						<div class="details">
							<div class="first">
								<div class="evaluation">
									2000 Coins</div>
								<div class="prod_name"><?php echo $row['pro_name']; ?> <?php echo $row['pro_year']; ?>
								</div>
							
							</div>
							<div class="second">
								<div class="s1">
									<?php echo $row['district']; ?>

								</div>
								<div class="s2">
									<?php echo $row['reg_dob']; ?>

								</div>
							</div>



						</div>
					</div>
					
			</a>

		</div><?php } ?>
	</div>




</body>
<?php
include 'footer.php';

?>