<?php
error_reporting(E_ALL);

require_once 'db_connect.php';

?><!DOCTYPE html>

<head>
	<title>www.interiory.se</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type= "text/css" rel= "stylesheet" href= "css/style.css"></link>
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'>
</head>

<body>

<div id= "wrapper">
<a class="noDecoration" href="index.php"><h1>Interiory.se</h1></a>

<p>Inspiring interior for intellectual individuals</p>

<div class="clearfix">
    <div id="add">
        <a href="edit_article.php">Add item</a>
    </div>
</div>

<div class ="hr"></div>

<div id="list">
<ul>
	<?php
	$result = $DB->query("SELECT * FROM article");

	while ($row = $result->fetch_object()) {
		?>
		<li><a href="show_article.php?id=<?php echo $row->id; ?>"><?php echo htmlspecialchars($row->name ?: ''); ?></a></li>
		<?php
	}
	?>
</ul>
</div>

<div class ="hr"></div>


</div>

</body>
</html>

