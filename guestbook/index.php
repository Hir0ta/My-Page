<div class="panel-body center">
	<div id="container">
		<form>
			<div class="form-group">
				<label for="nickname">Nickname:</label><br>
				<input type="text" class="form-control" id="nickname" style="width: 30%;">
			</div>
			<div class="form-group">
				<label for="comment">Comment:</label><br>
				<textarea class="form-control" id="comment" rows="5" style="width: 30%;"></textarea>
			</div>
			<div class="form-group"><input type="submit"></div>
		</form>
		<?php
		    //error handle
			ERROR_REPORTING(E_PARSE | E_ERROR);
	
			$sql = "SELECT * FROM guestbook ORDER BY date_added DESC";
			
			$result = mysqli_query($db, $sql);
			
			while ($row = mysqli_fetch_assoc($result)) {
				// Dátum formátum
				//$row['date_added'] = str_replace("-", ".", $row['date_added']);
				//$row['date_added'] = str_replace(" ", ". ", $row['date_added']);
				
				// Kicseréljük a smiley jelét a képre
				/*$row['comment'] = str_replace(":)", "<img src='images/01.png' alt=':)' title=':)'>", $row['comment']);
				$row['comment'] = str_replace(":(", "<img src='images/02.png' alt=':(' title=':('>", $row['comment']);
				$row['comment'] = str_replace(";)", "<img src='images/03.png' alt=';)' title=';)'>", $row['comment']);
				$row['comment'] = str_replace(":@", "<img src='images/04.png' alt=':@' title=':@'>", $row['comment']);
				$row['comment'] = str_replace(":P", "<img src='images/05.png' alt=':P' title=':P'>", $row['comment']);
				$row['comment'] = str_replace(":O", "<img src='images/06.png' alt=':O' title=':O'>", $row['comment']);
				$row['comment'] = str_replace(":D", "<img src='images/07.png' alt=':D' title=':D'>", $row['comment']);
				$row['comment'] = str_replace("<3", "<img src='images/10.png' alt='<3' title='<3'>", $row['comment']);*/
				
				print "<div class='usersComment'><b>" . $row['name'] . " | " . $row['date_added'] . "</b><br>" . $row['comment'] . "</div>" . "\n";
			}
			
			mysqli_close($db);
		?>
	</div>
</div>

