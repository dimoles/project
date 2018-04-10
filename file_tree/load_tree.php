<li style="list-style-type: none;"><a href="../ParseXML/index.php"><---RETURN</a></li>

<?php
include("php_file_tree.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Example using PHP File Tree for the Web</title>
		<meta http-equiv="Content-Type" content="text/html;charset=windows-1251" />
		<meta xmlns="" name="KEYWORDS" content="">
		<link href="styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- Makes the file tree(s) expand/collapsae dynamically -->
		<script src="php_file_tree.js" type="text/javascript"></script>
		
	</head>

	<body>
		
		
		<?php
		
	
		echo php_file_tree("files", "[link]");
		
		?>
		
	</body>
	
</html>
