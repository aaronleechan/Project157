<!DOCTYPE html>
	<head>
		<link href="http://localhost/Project157/styles.css" rel="stylesheet">
		<title>CS157A Project</title>
                <meta http-equiv="Content-Type" content="text/html 
                    charset=UTF-8" />
                <meta name="Author" content="Charles Bocage" />
                <meta name="description" content="This is a CS157A sample
			page" />
	</head>
	<body>
		<h1>S.V. Movie Database</h1>
		<B>Team Members:</B>Myat Noe, Enkhtur Badamsaikhan, David Lerner, Luan Nguyen<br /><br />
		<hr>
		<B>Relations:</B>
		<ol>
			<li><a href="/Project157/movieDatabase.php/?query=select * from movies;#results" >Movies</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from actors;#results" >Actors</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from users;#results" >Users</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from studios;#results" >Studios</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from languages;#results" >Languages</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from directors;#results" >Directors</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from critics;#results" >Critics</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from audience;#results" >Audience</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from professional;#results" >Professional</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from performs;#results" >Performs</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from likes;#results" >Likes</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from reviews;#results" >Reviews</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from owns;#results" >Owns</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from has;#results" >Has</a></li>
			<li><a href="/Project157/movieDatabase.php/?query=select * from directs;#results" >Directs</a></li>
		</ol>
		<hr>
		<B>Queries:</B>
		<ol>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT * FROM movies 
			WHERE year > 2000 ORDER BY year;#results" >Query 1</a>&nbsp;Find all Movies that were released after 2000 ordered by date</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT DISTINCT location AS countries 
			FROM movies;#results" >Query 2</a>&nbsp;Find all countries which produced the movies</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT languageName, COUNT(languageName) AS numberOfMovies 
			FROM has h JOIN movies m ON h.movieID = m.movieID 
			GROUP BY languageName;#results" >Query 3</a>&nbsp;Find how many movies are available for each language</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT a.name, m.name AS 'Movie Title', p.role FROM actors a 
			JOIN performs p ON p.actorID = a.actorID 
			JOIN movies m ON m.movieID = p.movieID 
			WHERE m.genre = 'Horror';#results" >Query 4</a>&nbsp;Find all actors who performed in horror movies and what their role was</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT c.name, m.name AS 'Movie Title', review, rating FROM reviews r 
			JOIN movies m ON m.movieID = r.movieID 
			JOIN audience a ON r.criticID = a.criticID 
			JOIN critics c ON c.criticID = a.criticID 
			WHERE m.name = '2001: A Space Odyssey';#results" >Query 5</a>&nbsp;Find all audience reviews and ratings for a specific movie</li>
			<li><a href="/Project157/movieDatabase.php/?query=SELECT m.name as 'Movie Title',u.userName as User FROM Movies m,Likes l,Users u WHERE m.movieID = l.movieID AND l.userID = u.userId" >Query 6</a>&nbsp;Collect all Movies title which is related with each user favorite list</li>
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
                          <textarea class="input"rows="10" cols="50" name="query"></textarea>
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
		<h3> More </h3>
		<FORM>
			<button><a href= "http://localhost/Project157/newform.html"> Add new movie </a></button>
			<button><a href= "http://localhost/Project157/movieList.php"> Movie List </a></button>
		</FORM>

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

				if (isset($_REQUEST['query']))
				{
					$query = $_REQUEST['query'];
				}
				else
				{
					$query = '';
				}

				function sql_to_html_table($result) {
					// starting table
					$delim="\n";
					$htmltable =  "<table>" . $delim ;   
					$counter = 0 ;
					// make sure data exists
					if (is_bool($result)) {
						$htmltable .=   "</table>"   . $delim ; 
						return( $htmltable ) ; 
					} 
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
