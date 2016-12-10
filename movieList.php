<!DOCTYPE html>
<html>
<head>
	<link href="http://localhost/Project157/styles.css" rel="stylesheet">
	<title>Add New Movie</title>
</head>
<body>
    <center> Movie List </center>
	<button> <a href = "http://localhost/Project157/movieDatabase.php"> Go Back </a></button>
	<br>
	<?php
	$base = "SELECT m.name as 'Movie Title', m.description, m.genre, m.year, m.location, h.languageName, o.studioName FROM movies m 
			JOIN has h ON m.movieID = h.movieID
			JOIN owns o ON m.movieID = o.movieID";

	if(isset($_POST['All'])){
    	$genremessage= "Genre: All";
		$genre = "";
    }
	if(isset($_POST['Horror'])){
    	$genremessage= "Genre: Horror";
		$genre = " WHERE genre = 'Horror'";
    }
	if(isset($_POST['Action'])){
    	$genremessage= "Genre: Action";
		$genre = " WHERE genre = 'Action'";
    }
	if(isset($_POST['Comedy'])){
    	$genremessage= "Genre: Comedy";
		$genre = " WHERE genre = 'Comedy'";
    }
    if(isset($_POST['Romance'])){
    	$genremessage= "Genre: Romance";
		$genre = " WHERE genre = 'Romance'";
    }

	if(isset($_POST['title'])){
    	$orderbymessage= "Order By: Title";
		$orderby = "  ORDER BY 'Movie Title'";
    }
	if(isset($_POST['year'])){
    	$orderbymessage= "Order By: Year";
		$orderby = "  ORDER BY year";
    }

	if(!isset($genre))
		$genre = "";
	if(!isset($orderby))
		$orderby = "";
	if(!isset($genremessage))
		$genremessage= "Genre: ";
	if(!isset($orderby))
		$orderbymessage= "Order By: n/a";
	$query = $base . $genre . $orderby . ";";
	?>

	<B>Genre:</B>
	<form  method="post">
    <!--<input type="text" name="txt" value="<?php if(isset($genremessage)){ echo $genremessage;}?>" >-->
	<input type="submit" name="All" value="All">
    <input type="submit" name="Horror" value="Horror">
    <input type="submit" name="Action" value="Action">
	<input type="submit" name="Comedy" value="Comedy">
    <input type="submit" name="Romance" value="Romance">
    </form>
	<B>Order By:</B>
	<form  method="post">
	<input type="submit" name="title" value="title">
    <input type="submit" name="year" value="year">
    </form>
	<p><?php 
	if(isset($genremessage)) { 
		echo $genremessage . " "; 
	}
	if(isset($orderbymessage)) { 
		echo $orderbymessage;
	}
	?></p>

	<div id="results">
			<hr>
 			<?php
				$user = 'root';
				$pass = '';
				$db   = 'CS157A_Database';
				$link = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

				if(mysqli_connect_error()){

					die("Could not connect to database");
				}

				//$query = "SELECT * from movies;";

				function sql_to_html_table($result) {
					// starting table
					$delim="\n";
					$htmltable =  "<table>" . $delim ;   
					$counter = 0 ;
					// putting in lines
					while( $row = $result->fetch_assoc()){
						if ( $counter===0 ) {
							// table header
							$htmltable .=   "<tr>"  . $delim;
							foreach ($row as $key => $value ) {
								$htmltable .=   "<th>" . $key . "</th>"  . $delim ;
							}
						$htmltable .=   "</tr>"  . $delim ; 
						$counter = 22;
						} 
						// table body
						$htmltable .=   "<tr>"  . $delim ;
						foreach ($row as $key => $value ) {
							$htmltable .=   "<td>" . $value . "</td>"  . $delim ;
						}
						$htmltable .=   "</tr>"   . $delim; 
					}
					// closing table
					$htmltable .=   "</table>"   . $delim ; 
					// return
					return( $htmltable ) ; 
				}
				
				if ($query != '') {
					if($result = mysqli_query($link,$query)){
						echo sql_to_html_table($result);
					} else {
						echo "Query failed";
					}
				} else {
					echo "No Query";
				}
			?>
		</div>
</body>
</html>