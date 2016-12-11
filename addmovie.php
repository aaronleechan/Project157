<?php

if (isset($_POST['submit'])) {
	$user = 'root';
	$pass = '';
	$db   = 'CS157A_Database';
	$linkdb = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	$query = 'select max(movieID) from movies;';
	$result = mysqli_query($linkdb, $query);
	$row = mysqli_fetch_row($result);
	$movieid = mysqli_escape_string($linkdb, $row[0]+1);
	$movieName						=	mysqli_escape_string($linkdb, $_POST['movieName']);
	$moviegenre						=	mysqli_escape_string($linkdb, $_POST['moviegenre']);
	$movieyear 						= 	mysqli_escape_string($linkdb, $_POST['movieyear']);
	$moviedescription				= 	mysqli_escape_string($linkdb, $_POST['moviedescription']);
	$movielocation					= 	mysqli_escape_string($linkdb, $_POST['movielocation']);


	$query = 'select max(actorID) from actors;';
	$result = mysqli_query($linkdb, $query);
	$row = mysqli_fetch_row($result);
	$oneactorid = mysqli_escape_string($linkdb, $row[0]+1);
	$oneactor						=	mysqli_escape_string($linkdb, $_POST['oneactor']);
	$oneactorgender					= 	mysqli_escape_string($linkdb, $_POST['oneactorgender']);
	$oneactorrole					= 	mysqli_escape_string($linkdb, $_POST['oneactorrole']);

	$twoactorid = mysqli_escape_string($linkdb, $row[0]+2);
	$twoactor						=	mysqli_escape_string($linkdb, $_POST['twoactor']);
	$twoactorgender					= 	mysqli_escape_string($linkdb, $_POST['twoactorgender']);
	$twoactorrole					= 	mysqli_escape_string($linkdb, $_POST['twoactorrole']);

	$threeactorid = mysqli_escape_string($linkdb, $row[0]+3);
	$threeactor						=	mysqli_escape_string($linkdb, $_POST['threeactor']);
	$threeactorgender				= 	mysqli_escape_string($linkdb, $_POST['threeactorgender']);
	$threeactorrole					= 	mysqli_escape_string($linkdb, $_POST['threeactorrole']);

	$fouractorid = mysqli_escape_string($linkdb, $row[0]+4);
	$fouractor						=	mysqli_escape_string($linkdb, $_POST['fouractor']);
	$fouractorgender				= 	mysqli_escape_string($linkdb, $_POST['fouractorgender']);
	$fouractorrole					= 	mysqli_escape_string($linkdb, $_POST['fouractorrole']);

	$fiveactorid = mysqli_escape_string($linkdb, $row[0]+5);
	$fiveactor						=	mysqli_escape_string($linkdb, $_POST['fiveactor']);
	$fiveactorgender				= 	mysqli_escape_string($linkdb, $_POST['fiveactorgender']);
	$fiveactorrole					= 	mysqli_escape_string($linkdb, $_POST['fiveactorrole']);

	$sixactorid	 = mysqli_escape_string($linkdb, $row[0]+6);
	$sixactor						=	mysqli_escape_string($linkdb, $_POST['sixactor']);
	$sixactorgender					= 	mysqli_escape_string($linkdb, $_POST['sixactorgender']);
	$sixactorrole					= 	mysqli_escape_string($linkdb, $_POST['sixactorrole']);

	$sevenactorid = mysqli_escape_string($linkdb, $row[0]+7);
	$sevenactor						=	mysqli_escape_string($linkdb, $_POST['sevenactor']);
	$sevenactorgender				= 	mysqli_escape_string($linkdb, $_POST['sevenactorgender']);
	$sevenactorrole					= 	mysqli_escape_string($linkdb, $_POST['sevenactorrole']);

	$eightactorid = mysqli_escape_string($linkdb, $row[0]+8);
	$eightactor						=	mysqli_escape_string($linkdb, $_POST['eightactor']);
	$eightactorgender				= 	mysqli_escape_string($linkdb, $_POST['eightactorgender']);
	$eightactorrole					= 	mysqli_escape_string($linkdb, $_POST['eightactorrole']);

	$nineactorid = mysqli_escape_string($linkdb, $row[0]+9);
	$nineactor						=	mysqli_escape_string($linkdb, $_POST['nineactor']);
	$nineactorgender				= 	mysqli_escape_string($linkdb, $_POST['nineactorgender']);
	$nineactorrole					= 	mysqli_escape_string($linkdb, $_POST['nineactorrole']);

	$tenactorid = mysqli_escape_string($linkdb, $row[0]+10);
	$tenactor						=	mysqli_escape_string($linkdb, $_POST['tenactor']);
	$tenactorgender					= 	mysqli_escape_string($linkdb, $_POST['tenactorgender']);
	$tenactorrole					= 	mysqli_escape_string($linkdb, $_POST['tenactorrole']);
 
	$query = 'select max(directorID) from directors;';
	$result = mysqli_query($linkdb, $query);
	$row = mysqli_fetch_row($result);
	$onedirectorid = mysqli_escape_string($linkdb, $row[0]+1);
	$onedirector 					=	mysqli_escape_string($linkdb, $_POST['onedirector']);
	$onedirectorgender				=	mysqli_escape_string($linkdb, $_POST['onedirectorgender']);

	$twodirectorid = mysqli_escape_string($linkdb, $row[0]+2);
	$twodirector 					=	mysqli_escape_string($linkdb, $_POST['twodirector']);
	$twodirectorgender				=	mysqli_escape_string($linkdb, $_POST['twodirectorgender']);

	if(!$_POST['movieName']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

	if(!$_POST['movieyear']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie year')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

	if(!$_POST['moviegenre']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie genre')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

	if(!$_POST['movielocation']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie location')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

}
?>

<!-- submit into movie database -->
<?php
$user = 'root';
$pass = '';
$db   = 'CS157A_Database';
$linkmovie = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	if(mysqli_connect_error()){

		die("Could not connect to database");
	}


	$querymovie = "INSERT INTO 
					Movies(movieId,name,description,genre,year,location) 
					VALUES ('$movieid', '$movieName', '$moviedescription','$moviegenre','$movieyear','$movielocation')";

	mysqli_query($linkmovie,$querymovie);

?>

<!-- summit into actor database -->
<?php

$user = 'root';
$pass = '';
$db   = 'CS157A_Database';
$linkactorone = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	if(mysqli_connect_error()){

		die("Could not connect to database");
	}


	if($_POST['oneactor']){
		$queryactorone = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$oneactorid', '$oneactor', '$oneactorgender')";
		mysqli_query($linkactorone,$queryactorone);
	}

	if($_POST['twoactor']){
		$linkactortwo = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactortwo = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$twoactorid', '$twoactor', '$twoactorgender')";
		mysqli_query($linkactortwo,$queryactortwo);
	}

	if($_POST['threeactor']){
		$linkactorthree = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorthree = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$threeactorid', '$threeactor', '$threeactorgender')";
		mysqli_query($linkactorthree,$queryactorthree);
	}

	if($_POST['fouractor']){
		$linkactorfour = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorfour = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$fouractorid', '$fouractor', '$fouractorgender')";
		mysqli_query($linkactorfour,$queryactorfour);
	}

	if($_POST['fiveactor']){
		$linkactorfive = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorfive = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$fiveactorid', '$fiveactor', '$fiveactorgender')";
		mysqli_query($linkactorfive,$queryactorfive);
	}

	if($_POST['sixactor']){
		$linkactorsix = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorsix = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$sixactorid', '$sixactor', '$sixactorgender')";
		mysqli_query($linkactorsix,$queryactorsix);
	}

	if($_POST['sevenactor']){
		$linkactorseven = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorseven = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$sevenactorid', '$sevenactor', '$sevenactorgender')";
		mysqli_query($linkactorseven,$queryactorseven);
	}

	if($_POST['eightactor']){
		$linkactoreight = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactoreight = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$eightactorid', '$eightactor', '$eightactorgender')";
		mysqli_query($linkactoreight,$queryactoreight);
	}

	if($_POST['nineactor']){
		$linkactornine = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactornine = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$nineactorid', '$nineactor', '$nineactorgender')";
		mysqli_query($linkactornine,$queryactornine);
	}

	if($_POST['tenactor']){
		$linkactorten = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorten = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$tenactorid', '$tenactor', '$tenactorgender')";
		mysqli_query($linkactorten,$queryactorten);
	}
?>

<!-- summit into director database database -->
<?php

$user = 'root';
$pass = '';
$db   = 'CS157A_Database';
$linkdirectorone = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	if(mysqli_connect_error()){

		die("Could not connect to database");
	}

	if($_POST['onedirector']){
		$querydirectorone = "INSERT INTO 
						Directors(directorID,name,gender) 
						VALUES ('$onedirectorid', '$onedirector', '$onedirectorgender')";
		mysqli_query($linkdirectorone,$querydirectorone);
	}

	if($_POST['twodirector']){
		$linkdirectortwo 	= mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$querydirectortwo 	= "INSERT INTO 
							Directors(directorID,name,gender)
							VALUES ('$twodirectorid', '$twodirector', '$twodirectorgender')";
		mysqli_query($linkdirectortwo,$querydirectortwo);
	}

?>

<!-- summit into direct database -->
<?php
$user = 'root';
$pass = '';
$db   = 'CS157A_Database';
$linkdirectone = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	if(mysqli_connect_error()){

		die("Could not connect to database");
	}

	if($_POST['onedirector']){
		$querydirectone = "INSERT INTO 
						Directs(directorID,movieID) 
						VALUES ('$onedirectorid', '$movieid')";
		mysqli_query($linkdirectone,$querydirectone);
	}

	if($_POST['twodirector']){
		$linkdirecttwo 	= mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$querydirecttwo 	= "INSERT INTO 
							Directs(directorID,movieID) 
							VALUES ('$twodirectorid', '$movieid')";
		mysqli_query($linkdirecttwo,$querydirecttwo);
	}
?>

<!--summit into perform database-->
<?php

$user = 'root';
$pass = '';
$db   = 'CS157A_Database';
$linkperformone = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	if(mysqli_connect_error()){

		die("Could not connect to database");
	}


	if($_POST['oneactor']){
		$queryperformone = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$oneactorid', '$movieid', '$oneactorrole')";
		mysqli_query($linkperformone,$queryperformone);
	}

	if($_POST['twoactor']){
		$linkperformtwo  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformtwo = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$twoactorid', '$movieid', '$twoactorrole')";
		mysqli_query($linkperformtwo,$queryperformtwo);
	}

	if($_POST['threeactor']){
		$linkperformthree  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformthree = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$threeactorid', '$movieid', '$threeactorrole')";
		mysqli_query($linkperformthree,$queryperformthree);
	}

	if($_POST['fouractor']){
		$linkperformfour  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformfour = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$fouractorid', '$movieid', '$fouractorrole')";
		mysqli_query($linkperformfour,$queryperformfour);
	}

	if($_POST['fiveactor']){
		$linkperformfive  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformfive = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$fiveactorid', '$movieid', '$fiveactorrole')";
		mysqli_query($linkperformfive,$queryperformfive);
	}

	if($_POST['sixactor']){
		$linkperformsix  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformsix = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$sixactorid', '$movieid', '$sixactorrole')";
		mysqli_query($linkperformsix,$queryperformsix);
	}

	if($_POST['sevenactor']){
		$linkperformseven  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformseven = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$sevenactorid', '$movieid', '$sevenactorrole')";
		mysqli_query($linkperformseven,$queryperformseven);
	}

	if($_POST['eightactor']){
		$linkperformeight  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformeight = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$eightactorid', '$movieid', '$eightactorrole')";
		mysqli_query($linkperformeight,$queryperformeight);
	}

	if($_POST['nineactor']){
		$linkperformnine  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformnine = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$nineactorid', '$movieid', '$nineactorrole')";
		mysqli_query($linkperformnine,$queryperformnine);
	}

	if($_POST['tenactor']){
		$linkperformten  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformten = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$tenactorid', '$movieid', '$tenactorrole')";
		mysqli_query($linkperformten,$queryperformten);
	}

?>

<script>
     
      window.alert('Data is successfully added');
      window.location.href = 'http://localhost/Project157/movieDatabase.php';
</script>