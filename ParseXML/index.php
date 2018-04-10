<?php include 'deletedXML.php';?> 
<?php include 'insertedXML.php';?>


<html>

	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <link rel="stylesheet" href="./styles/style.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<img src="http://kb4images.com/images/book-wallpaper/36696482-book-wallpaper.jpg" alt="Nature" class="responsive">

		<nav class="navbar navbar-inverse" style="background-color:rgb(104, 4, 4); ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Your books</a>
				</div>
				<ul class="nav navbar-nav" >
					<li class="active"><a href="#">Home</a></li>
					<li><a href="../file_tree/load_tree.php">Directories</a></li>
					<li><a href="readXML.php">Catalog</a></li>
					

				</ul>
			</div>
		</nav>

		<div class="row">
			<div class="col-9" style="margin-right: -100px;">
				<form action="index.php" method="GET" style="color:black">
					Author:<input type="text" name="author" placeholder="insert author"> <br/>
					Name:  <input type="text" name="name" placeholder="insert name" style='margin-left: 2px;'><br/>

					<input type="submit" name="insert" value="add">
					<input type="submit" name="delete" value="delete" action='deleted()'>
				</form>
			</div>

			<div class="col-3">
				<?php include 'livesearchShow.php';?>
			</div>

		</div>		
	</body>
</html>