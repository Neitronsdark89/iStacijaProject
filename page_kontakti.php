<?php
include("classes/connect_db.php");
$sql = "SELECT * FROM pages WHERE page_id=38";
$result = $conn->query($sql);
$getList = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="lv">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Kontakti</title>
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
<?php echo $getList['page_content']?>
<span style="3px; white-space: pre-line; display: block; text-transform: uppercase;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis facilisis nibh sem, maximus cursus nulla rutrum non. Etiam et finibus neque, quis vulputate lectus. In ac tortor justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum risus, fringilla vitae nulla in, molestie convallis mi. Quisque ultricies lobortis nisi sit amet facilisis. Vivamus tristique tempor felis, vitae auctor velit consequat eget.
Vestibulum vel metus sem. Duis hendrerit, sapien ac pretium commodo, elit lacus sagittis lorem, a tempus nunc eros nec diam. Maecenas id sapien arcu. Pellentesque tincidunt, quam at egestas venenatis, elit nisl vulputate leo, non dapibus turpis purus at arcu. Sed facilisis magna eros. Praesent imperdiet, arcu sed viverra venenatis, enim orci tincidunt tortor, et ultrices risus leo in tortor. Quisque maximus est vitae luctus laoreet. Sed fermentum facilisis neque, sed luctus nisi eleifend sed. In facilisis tincidunt elementum. Vivamus a vulputate elit, non faucibus massa. Cras mollis imperdiet ligula vitae finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ante velit, venenatis nec est a, consequat ultrices odio. Nulla vel ligula nec metus dapibus mattis at a sapien.
Nullam ut orci id nisl dapibus egestas eget in leo. Integer in porttitor ex. Phasellus tempor sem vel mauris rhoncus suscipit commodo vel est. Suspendisse nulla magna, congue non porttitor ac, mattis eu leo. Ut ultrices felis non ex viverra dictum. Suspendisse posuere augue mi, vel auctor nunc hendrerit eu. Sed dui eros, pellentesque ac neque id, fringilla luctus erat. Aenean placerat tempus neque sit amet tincidunt. Nulla eget nibh mi. Praesent nisi nunc, tempor et convallis ac, consectetur sit amet nunc. Ut hendrerit leo vel ligula facilisis, vitae ornare tortor tincidunt. Aenean ut leo id ligula laoreet interdum vel quis diam. Cras pulvinar mi eget risus egestas, eget ultrices felis vehicula. In id dapibus mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus massa lorem, laoreet et nunc convallis, feugiat convallis orci.
</span></p>
</main>

<footer">
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