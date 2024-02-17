<?php
include("classes/connect_db.php");
$sql = "SELECT * FROM pages WHERE page_id=33";
$result = $conn->query($sql);
$getList = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="lv">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>SEO un Google</title>
<link href='styles.css' rel='stylesheet' type='text/css' />
</head>

<body>

<header>

<div class="wrapper">
	<div class="logo">
		<a href='admin/login.php'>
				<img src='images/logo.jpg' alt='' style="padding: 40px;">		
		</a>
	</div>
		<nav>
			<ul>
				<li><a href='index.php'>Mājas lapas izstrāde</a></li>
				<li><a href='page_projekti.php'>Mūsu paveiktie projekti</a></li>
				<li><a href='page_seo.php'>SEO un Google</a></li>
				<li><a href='page_parmums.php'>Par Mums</a></li>
				<li><a href='page_kontakti.php'>Kontakti</a></li>
			</ul>
		</nav>
</div>
</header>

<main style="text-align: center;">
<h1 style="padding-top: 20px;"><?php echo $getList['page_title']?></h1>		
<p style="color: white; margin: 70px; background-color: rgba(0, 0, 0, 0.5); padding: 30px; word-spacing: 3px;">
<?php echo $getList['page_content']?></p>
</main>

<footer>
<div class="wrapper">
	<div class="pageCenter">
		<div class='item'>
			<img style="width: 50px; height: 50px;" src='images/icons/klienti.png'>
			<span class='caption'><br>60+</span><p style="color: black;">Biznesa klienti</p>
		</div>
		<div class='item'>
			<img style="width: 50px; height: 50px;" src='images/icons/projekti.png'>
			<span class='caption'><br>70+</span><p style="color: black;">Izstrādāti projekti</p>
		</div>
		<div class='item'>
			<img style="width: 50px; height: 50px;" src='images/icons/pieredze.png'>
			<span class='caption'><br>12</span><p style="color: black;">Gadu pieredze</p>
		</div>
		<div class='item'>
			<img style="width: 50px; height: 50px;" src='images/icons/kafija.png'>
			<span class='caption'><br>2369</span><p style="color: black;">Izdzertas kafijas tases</p>
		</div>
	</div>
</div>
</footer>
</body>

</html>