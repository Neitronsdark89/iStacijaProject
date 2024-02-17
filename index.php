<?php
include("classes/connect_db.php");
$sql = "SELECT * FROM pages";
$menu = $conn->query($sql);
$page_id = $_GET['page_id'];
//$getList = $GET[''];
if ($page_id != "") {
	$sql2 = "SELECT page_title, page_content FROM pages WHERE page_id='$page_id'";
	$pageData = $conn->query($sql2);
	$getList = mysqli_fetch_assoc($pageData);
}
?>
<!DOCTYPE html>
<html lang="lv">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Istacija</title>
<link href='styles.css' rel='stylesheet' type='text/css' />
<link href='javascript.js' rel='stylesheet' type='text/css' />
</head>

<body>
<header>
<div class="wrapper">

	<div class="logo">
			<a href='admin/login.php'>
				<img src='images/icons/log-in.png' alt='' style="text-align: right;">		
		</a>
			<a href='index.php'>
				<img src='images/logo.jpg' alt='' style="padding: 40px;">		
			</a>
	</div>

		<nav>
			<ul>
			<?php
			while ($row = mysqli_fetch_array($menu)){
			?>
				<li><a href='<?php echo "?page_id=".$row['page_id'];?>'><?php echo $row['page_title']; ?></a></li>
			<?php }  ?>
				<!-- <li><a href='page_projekti.php'>Mūsu paveiktie projekti</a></li>
				<li><a href='page_seo.php'>SEO un Google</a></li>
				<li><a href='page_parmums.php'>Par Mums</a></li>
				<li><a href='page_kontakti.php'>Kontakti</a></li> -->
			</ul>
		</nav>
</div>
</header>

<main>
<?php if($page_id == "") {
	
?>
<div class="wrapper">
	<div class="pageCenter">
		<h1>Mājas lapu, interneta veikalu un WEB bāzētu risinājumu izstrāde</h1>
		<h3>Esam izstrādājuši dažādas sarežģītības mājas lapas un interneta veikalus, kā arī dažādus WEB bāzētus risinājumus un mobīlajām aplikācijām.</h3>
		<ul class='nav-area-section'>
			<div class='item'>
				<img id="edges" src='images/icons/vizitkarte.png'><br>Vizītkarte internetā<p>Sākot no &euro;500</p><a id="smallCap" href='#'>Skatīt vairāk</a><br>
			</div>
			<div class='item'>
				<img id="edges" src='images/icons/bizness.png'><br>Biznesa mājas lapa<p>Sākot no &euro;800</p><a id="smallCap" href='#'>Skatīt vairāk</a><br>
			</div>
			<div class='item'>
				<img id="edges" src='images/icons/veikals.png'><br>Interneta veikals<p>Sākot no &euro;1000</p><a id="smallCap" href='#'>Skatīt vairāk</a><br>
			</div>
			<div class='item'>
				<img id="edges" src='images/icons/risinajumi.png'><br>Individuāli risinājumi<p>Sākot no &euro;500</p><a id="smallCap" href='#'>Skatīt vairāk</a><br>
			</div>
		</ul>
	</div>
</div>

<?php
} else if($page_id == "31"){
?>
<h1 style="padding-top: 20px; text-align: center;"><?php echo $getList['page_title']?></h1><br>
<!-- <p style="color: white; margin: 70px; background-color: rgba(0, 0, 0, 0.5); padding: 30px; word-spacing: 3px;"></p> -->
<div style="display: flex; justify-content: center;"> <!-- class="display-container" -->
  <img class="mySlides" src="images/projekti/one.jpg" style="width:800px; height:400px;">
  <img class="mySlides" src="images/projekti/two.jpg" style="width:800px; height:400px;">
  <img class="mySlides" src="images/projekti/three.jpg" style="width:800px; height:400px;">
  <img class="mySlides" src="images/projekti/four.jpg" style="width:800px; height:400px;">
</div>
<div style="text-align: center;"><br><!-- class="btn" -->
  <button class="display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<?php
} else {
?>
<h1 style="padding-top: 20px; text-align: center;"><?php echo $getList['page_title']?></h1>
<p style="color: white; margin: 70px; background-color: rgba(0, 0, 0, 0.5); padding: 30px; word-spacing: 3px;">
<?php echo $getList['page_content']?>
<!--<span style="3px; white-space: pre-line; display: block; text-transform: uppercase;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis facilisis nibh sem, maximus cursus nulla rutrum non. Etiam et finibus neque, quis vulputate lectus. In ac tortor justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum risus, fringilla vitae nulla in, molestie convallis mi. Quisque ultricies lobortis nisi sit amet facilisis. Vivamus tristique tempor felis, vitae auctor velit consequat eget.
Vestibulum vel metus sem. Duis hendrerit, sapien ac pretium commodo, elit lacus sagittis lorem, a tempus nunc eros nec diam. Maecenas id sapien arcu. Pellentesque tincidunt, quam at egestas venenatis, elit nisl vulputate leo, non dapibus turpis purus at arcu. Sed facilisis magna eros. Praesent imperdiet, arcu sed viverra venenatis, enim orci tincidunt tortor, et ultrices risus leo in tortor. Quisque maximus est vitae luctus laoreet. Sed fermentum facilisis neque, sed luctus nisi eleifend sed. In facilisis tincidunt elementum. Vivamus a vulputate elit, non faucibus massa. Cras mollis imperdiet ligula vitae finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ante velit, venenatis nec est a, consequat ultrices odio. Nulla vel ligula nec metus dapibus mattis at a sapien.
Nullam ut orci id nisl dapibus egestas eget in leo. Integer in porttitor ex. Phasellus tempor sem vel mauris rhoncus suscipit commodo vel est. Suspendisse nulla magna, congue non porttitor ac, mattis eu leo. Ut ultrices felis non ex viverra dictum. Suspendisse posuere augue mi, vel auctor nunc hendrerit eu. Sed dui eros, pellentesque ac neque id, fringilla luctus erat. Aenean placerat tempus neque sit amet tincidunt. Nulla eget nibh mi. Praesent nisi nunc, tempor et convallis ac, consectetur sit amet nunc. Ut hendrerit leo vel ligula facilisis, vitae ornare tortor tincidunt. Aenean ut leo id ligula laoreet interdum vel quis diam. Cras pulvinar mi eget risus egestas, eget ultrices felis vehicula. In id dapibus mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus massa lorem, laoreet et nunc convallis, feugiat convallis orci.
</span>--></p>
<?php	
}
?>
</main>

<footer>
<div class="wrapper">
	<div class="pageCenter">
		<div class='item'>
			<img src='images/icons/klienti.png'>
			<span class='caption'><br>60+</span><p style="color: black;">Biznesa klienti</p>
		</div>
		<div class='item'>
			<img src='images/icons/projekti.png'>
			<span class='caption'><br>70+</span><p style="color: black;">Izstrādāti projekti</p>
		</div>
		<div class='item'>
			<img src='images/icons/pieredze.png'>
			<span class='caption'><br>12</span><p style="color: black;">Gadu pieredze</p>
		</div>
		<div class='item'>
			<img src='images/icons/kafija.png'>
			<span class='caption'><br>2369</span><p style="color: black;">Izdzertas kafijas tases</p>
		</div>
	</div>
</div>
</footer>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>

</html>