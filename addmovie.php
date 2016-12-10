<?php

if (isset($_POST['submit'])) {
	$user = 'root';
	$pass = '';
	$db   = 'CS157A_Database';
	$linkdb = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

	//$movieid 						=	mysqli_escape_string($linkdb, $_POST['movieid']);
	$query = 'select max(movieID) from movies;';
	$result = mysqli_query($linkdb, $query);
	$row = mysqli_fetch_row($result);
	$movieid = mysqli_escape_string($linkdb, $row[0]+1);
	$movieName						=	mysqli_escape_string($linkdb, $_POST['movieName']);
	$moviegenre						=	mysqli_escape_string($linkdb, $_POST['moviegenre']);
	$movieyear 						= 	mysqli_escape_string($linkdb, $_POST['movieyear']);
	$moviedescription				= 	mysqli_escape_string($linkdb, $_POST['moviedescription']);
	$movielocation					= 	mysqli_escape_string($linkdb, $_POST['movielocation']);


	$oneactorid						=	mysqli_escape_string($linkdb, $_POST['oneactorid']);
	$oneactor						=	mysqli_escape_string($linkdb, $_POST['oneactor']);
	$oneactorgender					= 	mysqli_escape_string($linkdb, $_POST['oneactorgender']);
	$oneactorrole					= 	mysqli_escape_string($linkdb, $_POST['oneactorrole']);

	$twoactorid						=	mysqli_escape_string($linkdb, $_POST['twoactorid']);
	$twoactor						=	mysqli_escape_string($linkdb, $_POST['twoactor']);
	$twoactorgender					= 	mysqli_escape_string($linkdb, $_POST['twoactorgender']);
	$twoactorrole					= 	mysqli_escape_string($linkdb, $_POST['twoactorrole']);

	$threeactorid					=	mysqli_escape_string($linkdb, $_POST['threeactorid']);
	$threeactor						=	mysqli_escape_string($linkdb, $_POST['threeactor']);
	$threeactorgender				= 	mysqli_escape_string($linkdb, $_POST['threeactorgender']);
	$threeactorrole					= 	mysqli_escape_string($linkdb, $_POST['threeactorrole']);

	$fouractorid					=	mysqli_escape_string($linkdb, $_POST['fouractorid']);
	$fouractor						=	mysqli_escape_string($linkdb, $_POST['fouractor']);
	$fouractorgender				= 	mysqli_escape_string($linkdb, $_POST['fouractorgender']);
	$fouractorrole					= 	mysqli_escape_string($linkdb, $_POST['fouractorrole']);

	$fiveactorid					=	mysqli_escape_string($linkdb, $_POST['fiveactorid']);
	$fiveactor						=	mysqli_escape_string($linkdb, $_POST['fiveactor']);
	$fiveactorgender				= 	mysqli_escape_string($linkdb, $_POST['fiveactorgender']);
	$fiveactorrole					= 	mysqli_escape_string($linkdb, $_POST['fiveactorrole']);

	$sixactorid						=	mysqli_escape_string($linkdb, $_POST['sixactorid']);
	$sixactor						=	mysqli_escape_string($linkdb, $_POST['sixactor']);
	$sixactorgender					= 	mysqli_escape_string($linkdb, $_POST['sixactorgender']);
	$sixactorrole					= 	mysqli_escape_string($linkdb, $_POST['sixactorrole']);

	$sevenactorid					=	mysqli_escape_string($linkdb, $_POST['sevenactorid']);
	$sevenactor						=	mysqli_escape_string($linkdb, $_POST['sevenactor']);
	$sevenactorgender				= 	mysqli_escape_string($linkdb, $_POST['sevenactorgender']);
	$sevenactorrole					= 	mysqli_escape_string($linkdb, $_POST['sevenactorrole']);

	$eightactorid					=	mysqli_escape_string($linkdb, $_POST['eightactorid']);
	$eightactor						=	mysqli_escape_string($linkdb, $_POST['eightactor']);
	$eightactorgender				= 	mysqli_escape_string($linkdb, $_POST['eightactorgender']);
	$eightactorrole					= 	mysqli_escape_string($linkdb, $_POST['eightactorrole']);

	$nineactorid					=	mysqli_escape_string($linkdb, $_POST['nineactorid']);
	$nineactor						=	mysqli_escape_string($linkdb, $_POST['nineactor']);
	$nineactorgender				= 	mysqli_escape_string($linkdb, $_POST['nineactorgender']);
	$nineactorrole					= 	mysqli_escape_string($linkdb, $_POST['nineactorrole']);

	$tenactorid						=	mysqli_escape_string($linkdb, $_POST['tenactorid']);
	$tenactor						=	mysqli_escape_string($linkdb, $_POST['tenactor']);
	$tenactorgender					= 	mysqli_escape_string($linkdb, $_POST['tenactorgender']);
	$tenactorrole					= 	mysqli_escape_string($linkdb, $_POST['tenactorrole']);
 
 	$onedirectorid					=	mysqli_escape_string($linkdb, $_POST['onedirectorid']);
	$onedirector 					=	mysqli_escape_string($linkdb, $_POST['onedirector']);
	$onedirectorgender				=	mysqli_escape_string($linkdb, $_POST['onedirectorgender']);

	$twodirectorid					=	mysqli_escape_string($linkdb, $_POST['twodirectorid']);
	$twodirector 					=	mysqli_escape_string($linkdb, $_POST['twodirector']);
	$twodirectorgender				=	mysqli_escape_string($linkdb, $_POST['twodirectorgender']);

	/*if(!$_POST['movieid']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie id')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}*/

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

	if($_POST['oneactorid']){
		if(!$_POST['oneactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['twoactorid']){
		if(!$_POST['twoactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['threeactorid']){
		if(!$_POST['threeactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['fouractorid']){
		if(!$_POST['fouractor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['fiveactorid']){
		if(!$_POST['fiveactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['sixactorid']){
		if(!$_POST['sixactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['sevenactorid']){
		if(!$_POST['sevenactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['eightactorid']){
		if(!$_POST['eightactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['nineactorid']){
		if(!$_POST['nineactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['tenactorid']){
		if(!$_POST['tenactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the actor id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['onedirectorid']){
		if(!$_POST['onedirector'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the director id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['twodirectorid']){
		if(!$_POST['twodirector'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the director id')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}
}
?>

<!-- summit into movie database -->
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


	if($_POST['oneactorid']){
		$queryactorone = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$oneactorid', '$oneactor', '$oneactorgender')";
		mysqli_query($linkactorone,$queryactorone);
	}

	if($_POST['twoactorid']){
		$linkactortwo = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactortwo = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$twoactorid', '$twoactor', '$twoactorgender')";
		mysqli_query($linkactortwo,$queryactortwo);
	}

	if($_POST['threeactorid']){
		$linkactorthree = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorthree = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$threeactorid', '$threeactor', '$threeactorgender')";
		mysqli_query($linkactorthree,$queryactorthree);
	}

	if($_POST['fouractorid']){
		$linkactorfour = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorfour = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$fouractorid', '$fouractor', '$fouractorgender')";
		mysqli_query($linkactorfour,$queryactorfour);
	}

	if($_POST['fiveactorid']){
		$linkactorfive = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorfive = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$fiveactorid', '$fiveactor', '$fiveactorgender')";
		mysqli_query($linkactorfive,$queryactorfive);
	}

	if($_POST['sixactorid']){
		$linkactorsix = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorsix = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$sixactorid', '$sixactor', '$sixactorgender')";
		mysqli_query($linkactorsix,$queryactorsix);
	}

	if($_POST['sevenactorid']){
		$linkactorseven = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactorseven = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$sevenactorid', '$sevenactor', '$sevenactorgender')";
		mysqli_query($linkactorseven,$queryactorseven);
	}

	if($_POST['eightactorid']){
		$linkactoreight = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactoreight = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$eightactorid', '$eightactor', '$eightactorgender')";
		mysqli_query($linkactoreight,$queryactoreight);
	}

	if($_POST['nineactorid']){
		$linkactornine = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryactornine = "INSERT INTO 
						Actors(actorID,name,gender) 
						VALUES ('$nineactorid', '$nineactor', '$nineactorgender')";
		mysqli_query($linkactornine,$queryactornine);
	}

	if($_POST['tenactorid']){
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

	if($_POST['onedirectorid']){
		$querydirectorone = "INSERT INTO 
						Directors(directorID,name,gender) 
						VALUES ('$onedirectorid', '$onedirector', '$onedirectorgender')";
		mysqli_query($linkdirectorone,$querydirectorone);
	}

	if($_POST['twodirectorid']){
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

	if($_POST['onedirectorid']){
		$querydirectone = "INSERT INTO 
						Directs(directorID,movieID) 
						VALUES ('$onedirectorid', '$movieid')";
		mysqli_query($linkdirectone,$querydirectone);
	}

	if($_POST['twodirectorid']){
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


	if($_POST['oneactorid']){
		$queryperformone = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$oneactorid', '$movieid', '$oneactorrole')";
		mysqli_query($linkperformone,$queryperformone);
	}

	if($_POST['twoactorid']){
		$linkperformtwo  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformtwo = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$twoactorid', '$movieid', '$twoactorrole')";
		mysqli_query($linkperformtwo,$queryperformtwo);
	}

	if($_POST['threeactorid']){
		$linkperformthree  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformthree = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$threeactorid', '$movieid', '$threeactorrole')";
		mysqli_query($linkperformthree,$queryperformthree);
	}

	if($_POST['fouractorid']){
		$linkperformfour  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformfour = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$fouractorid', '$movieid', '$fouractorrole')";
		mysqli_query($linkperformfour,$queryperformfour);
	}

	if($_POST['fiveactorid']){
		$linkperformfive  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformfive = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$fiveactorid', '$movieid', '$fiveactorrole')";
		mysqli_query($linkperformfive,$queryperformfive);
	}

	if($_POST['sixactorid']){
		$linkperformsix  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformsix = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$sixactorid', '$movieid', '$sixactorrole')";
		mysqli_query($linkperformsix,$queryperformsix);
	}

	if($_POST['sevenactorid']){
		$linkperformseven  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformseven = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$sevenactorid', '$movieid', '$sevenactorrole')";
		mysqli_query($linkperformseven,$queryperformseven);
	}

	if($_POST['eightactorid']){
		$linkperformeight  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformeight = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$eightactorid', '$movieid', '$eightactorrole')";
		mysqli_query($linkperformeight,$queryperformeight);
	}

	if($_POST['nineactorid']){
		$linkperformnine  = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
		$queryperformnine = "INSERT INTO 
						performs(actorID,movieid,role) 
						VALUES ('$nineactorid', '$movieid', '$nineactorrole')";
		mysqli_query($linkperformnine,$queryperformnine);
	}

	if($_POST['tenactorid']){
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