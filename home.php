<?php
$pageTitle = 'Home';
include 'session.php';
include 'header.php';

?>


<body>
<div class="cont">
	<h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "signout.php">Sign Out</a></h2>

		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'Main')">Main</button>
		  <button class="tablinks" onclick="openCity(event, 'Categories')">Categories</button>
		  <button class="tablinks" onclick="openCity(event, 'branches')">branches</button>
		  <button class="tablinks" onclick="openCity(event, 'info')">Info</button>
		  <button class="tablinks" onclick="openCity(event, 'contactUs')">Contact us</button>
		  
		</div>

		<!-- Tab content -->
		<div id="Main" class="tabcontent">
		  <h3>Main</h3>
		  <p>Show Our Home Page</p>
		</div>

		<div id="Categories" class="tabcontent">
		  <h3>Categories</h3>
		  <p>Show our categories</p>
		</div>

		<div id="branches" class="tabcontent">
		  <h3>Branches</h3>
		  <p>List our branches</p>
		</div>

		<div id="info" class="tabcontent">
		  <h3>Info</h3>
		  <p>Information about  us</p>
		</div>

		<div id="contactUs" class="tabcontent">
		  <h3>Contact Us</h3>
		  <p>out contacts</p>
		</div>

</div>
</body>
<?php
include 'footer.php';

?>