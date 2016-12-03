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
		<B>Team Members:</B> Myat Noe , Eddy, David, Luan<br /><br />
		<hr>
		<B>Relations:</B>
		<ol>
			<li><a href="/Project157/movieDatabase.php/?query=select * from movies;" >Movies</a></li>
		</ol>
		<hr>
		<B>Queries:</B>
		<ol>
			<li><a href="/Project157/movieDatabase.php/?query=select * from movies where year = 2008;" >Query 1</a>&nbsp;Find all Movies that were released after 2005 and remove duplicates</li>
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
					print "We have no query";
				}

				if($result = mysqli_query($link,$query)){
				while($row = mysqli_fetch_array($result)){
				echo '<pre>',print_r($row,true),'</pre>';
				}

				}else{
					echo "It failed";
				}

			?>
		</div>
	</body>
</html>
