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
	<B>Genre:</B>
	<?php
	$query = "SELECT * from movies";
	$genremessage= "Genre: All";
	if(isset($_POST['All'])){
    	$genremessage= "Genre: All";
		$query = "SELECT * from movies;";
    }
	if(isset($_POST['Horror'])){
    	$genremessage= "Genre: Horror";
		$query = "SELECT * from movies WHERE genre = 'Horror';";
    }
	if(isset($_POST['Action'])){
    	$genremessage= "Genre: Action";
		$query = "SELECT * from movies WHERE genre = 'Action';";
    }
	if(isset($_POST['Comedy'])){
    	$genremessage= "Genre: Comedy";
		$query = "SELECT * from movies WHERE genre = 'Comedy';";
    }
    if(isset($_POST['Romance'])){
    	$genremessage= "Genre: Romance";
		$query = "SELECT * from movies WHERE genre = 'Romance';";
    }
	?>
	<form  method="post">
    <!--<input type="text" name="txt" value="<?php if(isset($genremessage)){ echo $genremessage;}?>" >-->
	<input type="submit" name="All" value="All">
    <input type="submit" name="Horror" value="Horror">
    <input type="submit" name="Action" value="Action">
	<input type="submit" name="Comedy" value="Comedy">
    <input type="submit" name="Romance" value="Romance">
    </form>
	<p><?php if(isset($genremessage)){ echo $genremessage;}?></p>
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