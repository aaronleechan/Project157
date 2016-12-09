<?php

if (isset($_POST['submit'])) {
	$movieid 						=	mysql_escape_string($_POST['movieid']);
	$movieName						=	mysql_escape_string($_POST['movieName']);
	$moviegenre						=	mysql_escape_string($_POST['moviegenre']);
	$movieyear 						= 	mysql_escape_string($_POST['movieyear']);
	$moviedescription				= 	mysql_escape_string($_POST['moviedescription']);
	$movielocation					= 	mysql_escape_string($_POST['movielocation']);


	$oneactorid						=	mysql_escape_string($_POST['oneactorid']);
	$oneactor						=	mysql_escape_string($_POST['oneactor']);
	$oneactorgender					= 	mysql_escape_string($_POST['oneactorgender']);
	$oneactorrole					= 	mysql_escape_string($_POST['oneactorrole']);

	$twoactorid						=	mysql_escape_string($_POST['twoactorid']);
	$twoactor						=	mysql_escape_string($_POST['twoactor']);
	$twoactorgender					= 	mysql_escape_string($_POST['twoactorgender']);
	$twoactorrole					= 	mysql_escape_string($_POST['twoactorrole']);

	$threeactorid					=	mysql_escape_string($_POST['threeactorid']);
	$threeactor						=	mysql_escape_string($_POST['threeactor']);
	$threeactorgender				= 	mysql_escape_string($_POST['threeactorgender']);
	$threeactorrole					= 	mysql_escape_string($_POST['threeactorrole']);

	$fouractorid					=	mysql_escape_string($_POST['fouractorid']);
	$fouractor						=	mysql_escape_string($_POST['fouractor']);
	$fouractorgender				= 	mysql_escape_string($_POST['fouractorgender']);
	$fouractorrole					= 	mysql_escape_string($_POST['fouractorrole']);

	$fiveactorid					=	mysql_escape_string($_POST['fiveactorid']);
	$fiveactor						=	mysql_escape_string($_POST['fiveactor']);
	$fiveactorgender				= 	mysql_escape_string($_POST['fiveactorgender']);
	$fiveactorrole					= 	mysql_escape_string($_POST['fiveactorrole']);

	$sixactorid						=	mysql_escape_string($_POST['sixactorid']);
	$sixactor						=	mysql_escape_string($_POST['sixactor']);
	$sixactorgender					= 	mysql_escape_string($_POST['sixactorgender']);
	$sixactorrole					= 	mysql_escape_string($_POST['sixactorrole']);

	$sevenactorid					=	mysql_escape_string($_POST['sevenactorid']);
	$sevenactor						=	mysql_escape_string($_POST['sevenactor']);
	$sevenactorgender				= 	mysql_escape_string($_POST['sevenactorgender']);
	$sevenactorrole					= 	mysql_escape_string($_POST['sevenactorrole']);

	$eightactorid					=	mysql_escape_string($_POST['eightactorid']);
	$eightactor						=	mysql_escape_string($_POST['eightactor']);
	$eightactorgender				= 	mysql_escape_string($_POST['eightactorgender']);
	$eightactorrole					= 	mysql_escape_string($_POST['eightactorrole']);

	$nineactorid					=	mysql_escape_string($_POST['nineactorid']);
	$nineactor						=	mysql_escape_string($_POST['nineactor']);
	$nineactorgender				= 	mysql_escape_string($_POST['nineactorgender']);
	$nineactorrole					= 	mysql_escape_string($_POST['nineactorrole']);

	$tenactorid						=	mysql_escape_string($_POST['tenactorid']);
	$tenactor						=	mysql_escape_string($_POST['tenactor']);
	$tenactorgender					= 	mysql_escape_string($_POST['tenactorgender']);
	$tenactorrole					= 	mysql_escape_string($_POST['tenactorrole']);
 
 	$onedirectorid					=	mysql_escape_string($_POST['onedirectorid']);
	$onedirector 					=	mysql_escape_string($_POST['onedirector']);
	$onedirectorgender				=	mysql_escape_string($_POST['onedirectorgender']);

	$twodirectorid					=	mysql_escape_string($_POST['twodirectorid']);
	$twodirector 					=	mysql_escape_string($_POST['twodirector']);
	$twodirectorgender				=	mysql_escape_string($_POST['twodirectorgender']);

	if(!$_POST['movieid']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

	if(!$_POST['movieName']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

	if(!$_POST['movieyear']){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
	exit();
	}

	if($_POST['oneactorid']){
		if(!$_POST['oneactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['twoactorid']){
		if(!$_POST['twoactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['threeactorid']){
		if(!$_POST['threeactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['fouractorid']){
		if(!$_POST['fouractor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['fiveactorid']){
		if(!$_POST['fiveactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['sixactorid']){
		if(!$_POST['sixactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['sevenactorid']){
		if(!$_POST['sevenactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['eightactorid']){
		if(!$_POST['eightactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['nineactorid']){
		if(!$_POST['nineactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['tenactorid']){
		if(!$_POST['tenactor'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['onedirectorid']){
		if(!$_POST['onedirector'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
		window.location.href='newform.html'
		</SCRIPT>");
		exit();
		}
	}

	if($_POST['twodirectorid']){
		if(!$_POST['twodirector'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You need to add the movie name')
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