<?php
	//database config file
	include 'config.php';
	
	if ($_POST) {
		// Is there any empty area
		if (empty($_POST['username'])) die("<script>alert('A felhasználó név mező nem lehet üres!'); location.href = location.href</script>");
		
		if (empty($_POST['comment'])) die("<script>alert('A megjegyzés mező nem lehet üres!'); location.href = location.href</script>");
		
		// anti-troll
		$_POST['comment'] = strip_tags($_POST['comment']);
		
		// insert into table
		$sql = "INSERT INTO guestbook (id, name, comment, ip_address, date_added) VALUES ('" . $_POST['nickname'] . "', '" . $_POST['comment'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', NOW())";
		
		exit($sql); // Debug
		
		mysqli_query($db, $sql);
		
		mysqli_close($db);
		
		header("Location: /index.php?lap=guestbook");
	}
?>