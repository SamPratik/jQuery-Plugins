<?php

	$connection = mysqli_connect("localhost","root","","test_text_editor");

?>

<?php

	$comment = mysqli_real_escape_string($connection,$_POST["comment"]);
	$name = $_POST["name"];
	
	//echo $comment . "\n" . $name;
	
	$insert = "INSERT INTO store_text (name,content) VALUES ('{$name}','{$comment}')";
	$result = mysqli_query($connection,$insert);
	
	if($result) {
		echo "success";
	} else {
		echo "failed";	
	}

?>