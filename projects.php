<!DOCTYPE html>
<html lang="en">
<head>
	<title>Projects</title>
	<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css" >
</head>


<body>


<header>
<a href="index.php"><img class="logo" src="logo.svg"></a>
<a href="login.php"><img class="corner" src="corner.png"></a>



<ul class="navigation">
  <li><a href="index.php">Home</a></li>
  <li style="background-color:#006f79; "><a href="projects.php" >Projects</a></li>
  <li><a href="network.php">Network</a></li>
  <li><a href="companies.php">For Companies</a></li>
</ul>
</header>

<div class="container">
<div class="column1">
<h2>LATEST PROJECTS UPLOADED</h2>
<img src="latest1.png">
<img src="latest2.png">
<img src="latest3.png">
<img src="more.png">
</div>
</div>

<div class="picture">
	<img src="picture.png">
</div>

<div class="container_big">
<div class="column2">

	<h2 class="headline">FILTER</h2>

	<div class="filter_container">
	<h4>Years</h4>
	<form>
  		<input type="checkbox" name="year" value="2017" checked>2017<br>
  		<input type="checkbox" name="year" value="2016">2016<br>
  		<input type="checkbox" name="year" value="2015">2015<br>
  		<input type="checkbox" name="year" value="2014">2014<br>
	</form>
	<h4>Class</h4> 
	<form>
  		<input type="checkbox" name="class" value="A" checked>A class<br>
  		<input type="checkbox" name="class" value="B">B class<br>
  		<input type="checkbox" name="class" value="C">C class<br>
  		<input type="checkbox" name="class" value="D">D class<br>
  		<input type="checkbox" name="class" value="INT">INT class<br>
	</form>
	<h4>Keywords</h4>
	<form>
  		<input type="checkbox" name="keywords" value="Design Manual" >Design Manual<br>
  		<input type="checkbox" name="keywords" value="Logo" >Logo<br>
  		<input type="checkbox" name="keywords" value="Coding" >Coding<br>
  		<input type="checkbox" name="keywords" value="PHP">PHP<br>
  		<input type="checkbox" name="keywords" value="A"> Atomic Design<br>
	</form>
	</div>
</div>



<div class="column3">
	<h2 class="headline">RE-BRANDING</h2>
</div>

	<div class="column_small1">
		<h4>ABOUT</h4>
		<p>Summit is a band who registered this portal to have a re-branding. The project provided them a new logo design, website design and marketing mix. Now they have an updated design manual.  </p>
	<h4>MEMBERS</h4>
		<li>Anikó Huszár</li>
		<li>János Kovács</li>
		<li>Márton Juhász</li>
		<li>Gábor Péter</li>
	<h4>COMPANY</h4>
		<p>Summit<br>
		website:  <a href="http://www.samandthesoulmates.dk/" target="blank">samandthesoulmates.dk</a></p>
	</div>

	<div class="column_small2">
		<img src="summit.jpg" height="210">
	</div>


	<div class="column3" id="bottom"><h2 class="headline">RE-BRANDING</h2>
</div>

	<div class="column_small1">
		<h4>ABOUT</h4>
		<p>Sam and the Soulmates is a jazz music band. The project covers a full re-branding: the logo design, the website, a marketing mix and specification of the target audience. </p>
	<h4>MEMBERS</h4>
		<li>Bence Henz</li>
		<li>Bereniké Hegedűs</li>
		<li>Paul Schiéle</li>
		<li>Chloé Innl</li>
	<h4>COMPANY</h4>
		<p>Sam and the Soulmates<br>
		website:  <a href="http://www.samandthesoulmates.dk/" target="blank">samandthesoulmates.dk</a></p>
	</div>

	<div class="column_small2">
		<img src="sam3.jpg" height="210">
	</div>
</div>

<?php include("footer.php"); ?>


</body>

</html>
