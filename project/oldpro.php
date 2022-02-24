<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="profile.css" />
	<title>Sign up</title>
</head>

<body>

	<?php
		include 'header.php';
		?>
	<div class="container">
		<div class="content">

			<div class="box">

				<table border=0 color="black" width=15%>

					<tr>
						<td><img src="avatar.jpg" alt="Avatar" class="avatar">

						</td>

					</tr>
					<tr>
						<td>
							<div class="welcome">
								Welcome Username
							</div>
						</td>

					</tr>
					<tr>
						<td>

							<button onclick="myFunction()" href="javascript:void(0);">Address</button>
						</td>

					</tr>
					<tr>
						<td>
							<button onclick="myFunction1()" href="javascript:void(0)" ;>product</button>

						</td>

					</tr>
					<tr>
						<td>
							<div class="continue">
								<input class="input" type=submit value=logout>
							</div>
						</td>

					</tr>

				</table>
			</div>
			<div class="right">

				<div id="table" style="display:none">
					<table bgcolor=#D8FC97 border=0 width=60% height=auto border-radius=5px>

						<tr>
							<td>
								<div class="text1">Add Address:</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="text">House No./House Name</div>
							</td>
							<td><input class="input" type=text name=house placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Street No./Street Name</div>
							</td>
							<td><input class="input" type=text name=street placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Place</div>
							</td>
							<td><input class="input" type=text name=place placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Post Office</div>
							</td>
							<td><input class="input" type=text name=postoffice placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Pin Number</div>
							</td>
							<td><input class="input" type=text name=pin placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">District</div>
							</td>
							<td><input class="input" type=text name=district placeholder=""></td>
						</tr>
					</table>
				</div>
				<div id="table1" style="display:none">
					<table bgcolor=#90ee90 border=0 width=60% height=auto border-radius=5px>
						<tr>
							<td>
								<div class="text1">Add Product:</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="text">Product Name</div>
							</td>
							<td><input class="input" type=text name=product placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Category</div>
							</td>
							<td><input class="input" type=text name=category placeholder=""></td>
						</tr>

						<tr>
							<td>
								<div class="text">Color</div>
							</td>
							<td><input class="input" type=text name=color placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Year of Manufacture</div>
							</td>
							<td><input class="input" type=text name=yearm placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Specifiactions</div>
							</td>
							<td><input class="input" type=text name=specification placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Expected Market Value</div>
							</td>
							<td><input class="input" type=text name=market placeholder=""></td>
						</tr>
					</table>
				</div>

				<div id="table2">
					<table bgcolor=#90ee90 border=0 width=60% height=auto border-radius=5px>
						<tr>
							<td>
								<div class="text1"><b>Personal Information<b></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="text">Name</div>
							</td>
							<td><input class="input" type=text name=product placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Email-ID</div>
							</td>
							<td><input class="input" type=text name=category placeholder=""></td>
						</tr>

						<tr>
							<td>
								<div class="text">Gender</div>
							</td>
							<td><input class="input" type=text name=color placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Date Of Birth</div>
							</td>
							<td><input class="input" type=text name=yearm placeholder=""></td>
						</tr>
						<tr>
							<td>
								<div class="text">Phone Number</div>
							</td>
							<td><input class="input" type=text name=specification placeholder=""></td>
						</tr>
						
					</table>
				</div>


			</div>
		</div>

	</div>
	</div>
	<script>
	var x = document.getElementById("table");
	var y = document.getElementById("table1");
	var z = document.getElementById("table3");

	function myFunction() {

		if (x.style.display !== "none") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	}

	function myFunction1() {

		if (y.style.display !== "none") {
			y.style.display = "none";
		} else {
			y.style.display = "block";
		}
	}

	function myFunction2() {

		if (z.style.display !== "none") {
			z.style.display = "none";
		} else {
			z.style.display = "block";
		}
	}
	</script>




	<?php
include 'footer.php';

?>

</body>

</html>