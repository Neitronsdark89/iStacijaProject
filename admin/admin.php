<?php
include("header.php");
include("../classes/connect_db.php");

$sql = "SELECT * FROM pages";
$result = $conn->query($sql);
$page_id = $_GET['page_id'];
$result_update = mysqli_query($conn, "UPDATE pages SET page_id='$pageid',page_title='$pagetitle',page_content='$pagecontent' WHERE page_id=$pageid"); //config.php?? include
?>
<!DOCTYPE html>
<html lang="lv">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Admin page</title>
	<link href='admin_new_style.css' rel='stylesheet' type='text/css' />
	<link href='javascript.js' rel='stylesheet' type='text/css' />
</head>

<body>
	<header>
		<div class="wrapper">
			<nav>
			<ul>
				<li style="text-decoration: none; color: white; text-align: center; font-size: 18px;">Administrācijas panelis</li>
			</ul>
			</nav>
		</div>
	</header>

<div class="wrapper">
	<ul class="bar-list">
		<?php
		echo "<li><a href='admin.php'>Teksta Sadaļas</a></li>";
		echo "<li><a href='?do=create'>Izveidot jaunu</a></li>";
		echo "<li><a href='../includes/logout.inc.php'>Atslēgties</a></li>";
		?>
	</ul>
</div>

	<div class="pageCenter">
		<div class="wrapped-table">
	<?php 
	//MASĪVA IZVEIDE
	if($_GET['page_id'] != "" && $_GET['save'] == '1') {
		$rinda = Array();
		$rinda['page_id'] = $_POST['pageid'];
		//echo $rinda['page_id']; //skaitlis virs tabulas
	}
	?>
	<?php 
	//Create new entry
		if($_GET['do'] == 'create' && $_GET['save'] == '3') { // 1. Kādēļ ar ['save'] == '2' izveidojas divi ieraksti tabulā?
		$pagetitle = $_POST['pagetitle'];
		$pagecontent = $_POST['pagecontent'];
		$sql_insert = "INSERT INTO pages(page_title, page_content) VALUES('".$pagetitle."', '".$pagecontent."')";
		//$result_insert = $conn ->query($sql_insert);
		$conn ->query($sql_insert);
		echo "Ieraksts ir pievienots veiksmīgi.";
		}
		
	//Update entry
		if($_GET['save'] == '1' &&  $page_id == $rinda['page_id']) { //$conn->query($sql_update) == TRUE && ...//$_GET['page_id'] == '1'
		$pagetitle = $_POST['pagetitle'];
		$pagecontent = $_POST['pagecontent'];
		$sql_update = "UPDATE pages SET page_title = '".$pagetitle."', page_content = '".$pagecontent."' WHERE page_id='".$page_id."'"; //'".$page_id."'//'Pirmā lapa'//'Hello world!'
		$result_update = $conn->query($sql_update);
		echo "Ieraksts ir izmainīts veiksmīgi.";
		} //else{
		//echo "KĻŪDA: Nav iespējams izvadīt $sql_update. " . $conn->error;
		//}
		
	//DELETE entry
		if($_GET['do'] == 'delete' && $_GET['page_id']) {
		$page_id = $_GET['page_id'];
		$sql_delete = "DELETE FROM pages WHERE page_id = '".$page_id."'";
		$conn ->query($sql_delete);
		echo "Ieraksts ir izdzēsts.";
		}		
	?>
	<!-- LIELĀS TABULAS IZVEIDE -->
			<table border>
			<!-- <tr colspan="3"><a href="< ?php echo "?do=create";?>">Izveidot jaunu</a></tr> -->
			<tr>																				 
				<th>Id</th>
				<th>Nosaukums</th>
				<th>Mainīt</th>
				<th>Dzēst lapu</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_array($result)){
			?>
				<tr>
					<td><?php echo $row['page_id'];?></td>
					<td><?php echo $row['page_title'];?></td>
					<td><a href="<?php echo "?do=edit&page_id=".$row['page_id'];?>"><img src="../images/pencil.png" alt="" width="20px" height="20px"></a></td>
					<td><a href="<?php echo "?do=delete&page_id=".$row['page_id'];?>"><img src="../images/delete_button.png" alt="" width="60px" height="30px"></a></td>
				</tr>
			<?php
			}
			?>
			</table>
			
	<!-- VEIDO DATUS DATUBĀZĒ -->
			<?php
			if($_GET['do'] == 'create') {
				?>
				<table><br>
				<tr>
				<form method="post" action="?do=create&save=3"> <!-- 2 arī tiek mainīts uz 3 -->
				<th><label>Page title</label></th>
				<td><input type="text" name="pagetitle" value="" /></td>
				<th><label>Page content</label></th>
				<td><textarea id="pid" name="pagecontent" rows="8" cols="50">
				</textarea></td>
				<td><button type="submit" name="submit">Save</button></td>
				</tr>
				</table>
				</form>
			<?php 
			}
			?>
			
	<!-- DZĒŠ DATUS DATUBĀZĒ -->
			<?php
			if($_GET['do'] == 'delete') {
			//$sql = "SELECT * FROM pages WHERE page_id='".$page_id."'";
			//$result = $conn->query($sql);
			//$mas = mysqli_fetch_assoc($result);
				?>
				<table>
				<form method="post" action="?do=delete&save=3"> <!-- < ?php echo $mas['page_id'];?> -->
				<!-- <th><label>Page ID</label></th> -->
				<!-- <td><input type="text" name="pageid" value="< ?php echo $mas['page_id'];?>" /></td> -->
				<!-- <th><button type="submit" name="submit">Delete</button></th> -->
				<table>
				</form>
			<?php 
			}
			?>
			
	<!-- MAINA DATUS DATUBĀZĒ -->
			<?php
			if($page_id != "" && $_GET['do'] == 'edit') {
				$sql = "SELECT * FROM pages WHERE page_id='".$page_id."'";
				$result = $conn->query($sql);
				$mas = mysqli_fetch_assoc($result);
			?>	
				<table>
				<tr>
				<form method="post" action="?page_id=<?php echo $mas['page_id'];?>&save=1">
				<th><label>Page ID</label></th>
				<td><input type="text" name="pageid" value="<?php echo $mas['page_id'];?>" /></td> 	<!-- No name lauka nāk pageid uz 45 rindu. -->
				<th><label>Page title</label></th>
				<td><input type="text" name="pagetitle" value="<?php echo $mas['page_title'];?>" /></td>
																							<!-- OLD < ?php $new_title = $mas['page_title'];?> -->
				<th><label>Page content</label></th>
				
				<td><textarea id="pid" name="pagecontent" rows="8" cols="50">
				<?php echo $mas['page_content'];?>
				</textarea></td>
				<td><button type="submit" name="submit">Save</button></td> 					<!-- value="save" vai nepieciešams??-->
				<!-- <input type="hidden" name="pageid" value="< ?php echo $_GET['page_id'];?>" /> -->
				</tr>
				</table>
				</form>
			<?php
			}
			$conn->close(); //Viens visā kodā un raksta beigās!
			?>
		</div>
	</div>

</body>
</html>