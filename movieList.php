<!DOCTYPE html>
<html>
<head>
	<link href="http://localhost/Project157/styles.css" rel="stylesheet">
	<title>Movie List</title>
</head>
<body>
    <center> Search for movies </center>
	<button> <a href = "http://localhost/Project157/movieDatabase.php"> Go Back </a></button>
	<br/><br/>
	<?php
	$base = "SELECT m.name AS 'Movie Title', m.description, m.genre, m.year, m.location, o.studioName, AVG(rating) AS rating FROM movies m 
	LEFT JOIN owns o ON m.movieID = o.movieID
	LEFT JOIN reviews r ON m.movieID = r.movieID";

	$title = "";
	$qtitle = "";
	$genre = "";
	$qgenre = "";
	$orderby= "";
	$qorderby = "";

	if(isset($_POST['submit'])){
		$title = $_POST['Title'];
		$qtitle = " WHERE m.name LIKE '%" . $title . "%'";
		$genre = $_POST['Genre'];
		if ($genre == "All") {
			$qgenre = "";
		} else {
			$qgenre = " AND genre = '" . strtolower($genre) . "'";
		}
		$orderby = $_POST['Orderby'];
		if ($orderby == "None") {
			$qorderby = "";
		} else {
			$qorderby = " ORDER BY " . strtolower($orderby);
		}
	}

	$query = $base . $qtitle . $qgenre . " GROUP BY m.movieID " . $qorderby . ";";
	?>

	<B>Name:</B>
	<form  method="post">
    <input type="text" placeholder="Enter movie name"  name="Title" value="<?php if(isset($title)){ echo $title;}?>" >
	<br/>
	<B>Genre:</B>
	<br/>
	<select name="Genre">
	<option value="All" <?php if($genre == "All") echo "selected"; ?>>All</option>
	<option value="Horror" <?php if($genre == "Horror") echo "selected"; ?>>Horror</option>
	<option value="Action" <?php if($genre == "Action") echo "selected"; ?>>Action</option>
	<option value="Comedy" <?php if($genre == "Comedy") echo "selected"; ?>>Comedy</option>
	<option value="Romance" <?php if($genre == "Romance") echo "selected"; ?>>Romance</option>
	<option value="Sci-Fi &amp Fantasy" <?php if($genre == "Sci-Fi & Fantasy") echo "selected"; ?>>Sci-Fi &amp Fantasy</option>
	</select>
	<br/>
	<B>Order By:</B>
	<br/>
	<select name="Orderby">
	<option value="None" <?php if($orderby == "None") echo "selected"; ?>></option>
	<option value="Name" <?php if($orderby == "Name") echo "selected"; ?>>Name</option>
	<option value="Year" <?php if($orderby == "Year") echo "selected"; ?>>Year</option>
	<option value="Rating DESC" <?php if($orderby == "Rating DESC") echo "selected"; ?>>Rating</option>
	</select>
	<br/><br/>
	<input type="submit" name="submit" value="Submit" />
	</form>

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