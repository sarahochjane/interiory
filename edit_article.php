<?php
require_once 'db_connect.php';

if(isset($_POST["action"])) {
	$action = $_POST["action"];

	if ($action == "save") {

		if (!empty($_GET['id'])) {
			$stmt = $DB->prepare("UPDATE article SET type = ?, name = ?, brand = ?, description = ?, price = ?
				WHERE id = ?");

			$stmt->bind_param('ssssii', $_POST['type'], $_POST['name'], $_POST['brand'], $_POST['description'], $_POST['price'], $_GET['id']);

			$stmt->execute();

		}
		else {
			$stmt = $DB->prepare("INSERT INTO article (type, name, brand, description, price)
				VALUES(?, ?, ?, ?, ?)");

			$stmt->bind_param('ssssi', $_POST['type'], $_POST['name'], $_POST['brand'], $_POST['description'], $_POST['price']);

			$stmt->execute();

			header("Location: success.html" );

			die();


		}
	}

	if ($action == "delete") {

		$stmt = $DB->prepare("DELETE FROM article WHERE id = ?");

		$stmt->bind_param('i', $_GET['id']);

		$stmt->execute();

		header("Location: index.php");
		die();
	}
}


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

<html>
<head>
	<title>Edit</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type= "text/css" rel= "stylesheet" href= "css/style.css"></link>
</head>

<body>

<div id= "wrapper">

<h2>Add or edit article</h2>

<form action="" method="POST">
	Type:<br />
	<input type="text" name="type" value="<?php echo htmlspecialchars($type); ?>"><br />
	Name:<br />
	<input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br />
    Brand:<br />
    <input type="text" name="brand" value="<?php echo htmlspecialchars($brand); ?>"><br />
	Description:<br />
	<textarea name="description" cols="40" rows="10"><?php echo htmlspecialchars($description); ?></textarea><br />
    Price:<br />
    <input type="text" name="price" value="<?php echo htmlspecialchars($price); ?>"><br />
	<button type="reset" name="reset" />Reset</button>
	<button type="submit" name="action" value="save"/>Save</button>
	<button type="submit" name="action" value="delete">Delete</button>
	<a href = "index.php" id="button">Back</a>
</form>

</div>

</body>

</html>
