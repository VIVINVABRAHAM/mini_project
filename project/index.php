<?php
session_start();
ob_start();
$id=$_SESSION['id'];
require 'connect.php';

include 'log_header.php';

?>
<html>
<title>tit-tat </title>

<head>

	<link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
	<div class="bg">

		<div class="first_row">
		<?php
			require 'connect.php';
						
						$sql3=mysqli_query($con,"SELECT * from register where reg_id='$id'") ;
						while($row3=mysqli_fetch_array($sql3))
						{
						
						?>
								
									<?php
								$user = $row3["reg_name"];
						}
								?>

			<div class="prod1">

				<img src="./product/cradle.jpg" alt="product1" class="center" width="240px" height="240px">

			</div>
			<div class="detail1">
				<div class="first_part1">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>
			<div class="prod2">
				<img src="./product/fridge.jpg" alt="product2" class="center" width="240px" height="240px">
			</div>
			<div class="detail2">
				<div class="first_part2">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>

			<div class="prod3">
				<img src="./product/smart_phone.jpg" alt="product3" class="center" width="240px" height="240px">


			</div>
			<div class="detail3">
				<div class="first_part3">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>
			<div class="prod4">
				<img src="./product/monitor.jpg" alt="product4" class="center" width="240px" height="240px">


			</div>
			<div class="detail4">
				<div class="first_part4">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>
			<div class="prod5">
				<img src="./product/mixi.jpeg" alt="product5" class="center" width="240px" height="240px">


			</div>
			<div class="detail5">
				<div class="first_part5">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>
		</div>
		<div class="second_row">

			<div class="prod6">
				<img src="./product/tiffin.jpg" alt="product6" class="center" width="240px" height="240px">
			</div>
			<div class="detail6">
				<div class="first_part6">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>
			<div class="prod7">
				<img src="./product/grainder.jpg" alt="product7" class="center" width="240px" height="240px">


			</div>
			<div class="detail7">
				<div class="first_part7">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>

			<div class="prod8">
				<img src="./product/washing.jpg" alt="product8" class="center" width="240px" height="240px">


			</div>
			<div class="detail8">
				<div class="first_part8">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>

			<div class="prod9">
				<img src="./product/kettle.jpg" alt="product9" class="center" width="240px" height="240px">


			</div>
			<div class="detail9">
				<div class="first_part9">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>

			<div class="prod10">
				<img src="./product/water_bottle.jpg" alt="product10" class="center" width="240px" height="240px">


			</div>
			<div class="detail10">
				<div class="first_part10">
					<table width=100%>
						<tr>
							<td><b>
									<font size="6">2000 Coins</font>
								</b></td>
						</tr>
						<tr>
							<td>
								<font size="4">2020 avero</font>
							</td>
						</tr>
						<tr>
							<td>
								<font size="5">Cooker 2016 - ..</font>
							</td>
						</tr>
						<tr>

						</tr>

					</table>
				</div>
				<div class="second_part">
					<font size="4">
						<table width=100%>
							<tr>
								<td>Kollam</td>
								<td>19/05/2021</td>


							</tr>
						</table>
					</font>
				</div>
			</div>
		</div>









	</div>



</body>
<?php
include 'footer.php';

?>