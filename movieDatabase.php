<!DOCTYPE html>
	<head>
		<title>CS157A Project</title>
                <meta http-equiv="Content-Type" content="text/html 
                    charset=UTF-8" />
                <meta name="Author" content="Charles Bocage" />
                <meta name="description" content="This is a CS157A sample
			page" />
	</head>
	<body>
		<h1>CS157A Project</h1>
		<B>Team Members:</B>Myat Noe, Enkhtur Badamsaikhan, David Lerner, Luan Nguyen<br /><br />
		<hr>
		<B>Relations:</B>
		<ol>
			<li><a href="/Project157/movieDatabase.php/?query=select * from movies;" >Movies</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from actors;" >Actors</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from users;" >Users</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from studios;" >Studios</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from languages;" >Languages</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from directors;" >Directors</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from critics;" >Critics</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from audience;" >Audience</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from professional;" >Professional</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from performs;" >Performs</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from likes;" >Likes</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from reviews;" >Reviews</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from owns;" >Owns</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from has;" >Has</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from directs;" >Directs</a></li>
		</ol>
		<hr>
		<B>Queries:</B>
		<ol>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT * from movies WHERE year > 2000;" >Query 1</a>&nbsp;Find all Movies that were released after 2000</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT name from movies ORDER BY name;" >Query 2</a>&nbsp;Find the Movie title in ascending order</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT name, languageName FROM movies m 
			JOIN has h ON m.movieId = h.movieID 
			WHERE h.languageName = 'ENGLISH';" >Query 3</a>&nbsp;Find which movies are available with English Language?</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT a.name, m.name as 'Movie Title', p.role FROM actors a 
			JOIN performs p ON p.actorID = a.actorID 
			JOIN movies m ON m.movieID = p.movieID 
			WHERE m.genre = 'Horror';" >Query 4</a>&nbsp;Find all actors who performed in horror movies and what their role was</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT c.name, m.name as 'Movie Title', review, rating FROM reviews r 
			JOIN movies m ON m.movieID = r.movieID 
			JOIN audience a ON r.criticID = a.criticID 
			JOIN critics c ON c.criticID = a.criticID 
			WHERE m.name = '2001: A Space Odyssey';" >Query 5</a>&nbsp;Find all audience reviews and ratings for a specific movie</li>
		</ol>
		<hr>
		<B>Ad-hoc Query:</B>
		<FORM METHOD=GET ACTION="">
			<table>
				<tr>
					<td align = left>
						<strong>Please enter your query here<br></strong>
                          (We support Select, Insert, <br>Update and Delete queries)
					</td>
					<td>
                          <textarea rows="10" cols="50" name="query"></textarea>
                    </td>
				</tr>
			<tr align = right>
                    <td>
                    </td>
                    <td>
                          <input type=reset value="Clear">
                          <input type=submit value="Submit" name="btnQuery">
                    </td>
			</table>
		</FORM>

		<hr>
		<h3> Setting </h3>
		<FORM>
			<button><a href= "newform.html"> Add new movie </a></button>
		</FORM>

		<div id="results">
		<hr>
			<table width= "600" border= "1" cellpadding = "1" cellspacing= "1">
			  <tr>
				<th>movieID</th>
				<th>name</th>
				<th>description</th>
				<th>genre</th>
				<th>year</th>
				<th>location</th>
			  </tr>
 			  <?php
				$user = 'root';
				$pass = '';
				$db   = 'CS157A_Database';
				$link = mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");

				if(mysqli_connect_error()){

					die("Could not connect to database");
				}

				if (isset($_REQUEST['query']))
				{
					$query = $_REQUEST['query'];
				}
				else
				{
					print "We have no query";
				}

				if($result = mysqli_query($link,$query)){
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";

					echo "<td>".$row['movieID']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['description']."</td>";
					echo "<td>".$row['genre']."</td>";
					echo "<td>".$row['year']."</td>";
					echo "<td>".$row['location']."</td>";
					
					echo "</tr>";
				// echo '<pre>',print_r($row,true),'</pre>';
				}

				}else{
					echo "Query failed";
				}

			  ?>
			</table>
		</div>
	</body>
</html>
