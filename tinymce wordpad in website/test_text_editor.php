<?php

	$connection = mysqli_connect("localhost","root","","test_text_editor");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!------------START: tinymce.min.js----------->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<!------------END: tinymce.min.js----------->

<!------------START: init-tinymce.js(all the styles and tools of tinymce)----------->
<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
<!------------END: init-tinymce.js(all the styles and tools of tinymce)----------->

<title>Untitled Document</title>
</head>

<body class="container">

<form id="formId">
    <div class="form-group">
        <label for="email">Name:</label>
        <input  name="name" type="name" class="form-control" id="nameId">
    </div>
    <div>
        <label for="comment">Comment:</label>
        <textarea class="tinymce" name="comment" class="form-control" rows="5" id="texteditor"></textarea>
    </div> 
    <button type="button" class="btn btn-default" onClick="sendData()">Submit</button>
</form>



<!-----------START: showig from database---------->
<div class="show">
<?php
	$sql = "SELECT name,content FROM store_text";
	$result = mysqli_query($connection,$sql);
	
	while($row = mysqli_fetch_assoc($result)) {
		echo "<strong>" . $row["name"] . "</strong><br/>";
		echo $row["content"];
	}
?>	
</div>
<!-----------END: showig from database---------->


<script>
	
	function sendData() {
		
		var name = document.getElementById("nameId").value;
		var content = tinymce.get("texteditor").getContent();  
		
		
		$.post(
		
			"textProcess.php",
			{
				name: name,
				comment: content
			},
			function(e) {
				
				if(e.indexOf("success") != -1) {
					alert("Successfully Posted!");	
					document.getElementById("texteditor").innerHTML = "";
					document.getElementById("formId").reset();
				}if(e.indexOf("failed") != -1) {
					alert("Failed to Post!");	
				}
				
			}
		
		);
			
	}
	
</script>



</body>
</html>