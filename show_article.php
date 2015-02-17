<?php
require_once 'db_connect.php';


$type = $name = $brand = $description = $price = null;

if (isset($_GET['id'])) {
	$stmt = $DB->prepare("SELECT type, name, brand, description, price FROM article
		WHERE id = ?");

	$stmt->bind_param('i', $_GET['id']);
	$stmt->execute();
	$stmt->bind_result($type, $name, $brand, $description, $price);
	$stmt->fetch();
}


?>

<!DOCTYPE html>

<head>
	<title>Edit</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type= "text/css" rel= "stylesheet" href= "css/style.css"></link>
</head>

<body>

<div id= "wrapper">

<h2>Article description</h2>

<div id ="show_hr"></div>

<div id="show">

<p class= "show">Type: <?php echo htmlspecialchars($type); ?></p>
<p class= "show">Name: <?php echo nl2br(htmlspecialchars($name)); ?></p>
<p class= "show">Brand: <?php echo nl2br(htmlspecialchars($brand)); ?></p>
<p class= "show">Description: <?php echo nl2br(htmlspecialchars($description)); ?></p>
<p class= "show">Price: <?php echo nl2br(htmlspecialchars($price)); ?></p>

</div>

<a href = "index.php" id="button">Back</a>
<a id="button" href="edit_specific.php?id=<?php echo $_GET['id']; ?>">Edit</a>

</div>

</body>

</html>
