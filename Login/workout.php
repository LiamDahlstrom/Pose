<?php
  require "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          type="text/css"
          href="style_workout.css" />
    <title>Workout</title>
</head>
<body>
<div id="content">

<form method="POST"
       action=""
       enctype="multipart/form-data">
     <input type="file"
            name="uploadfile"
            value="" />

<form method="POST"
       action=""
       enctype="multipart/form-data">
     <input type="file"
            name="uploadfile"
            value="" />

     <div>
         
     </div>
 </form>

 <?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "image/".$filename;
		
	//$db = mysqli_connect("localhost", "root", "", "pose_db");

		// Get all the submitted data from the form
		$sql = "INSERT INTO image (filename) VALUES ('$filename')";

		// Execute query
		mysqli_query($conn, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
$result = mysqli_query($db, "SELECT * FROM image");
?>

<form method="post"> <input type="text" name="comment" placeholder="Comment" action="" enctype="multipart/form-data"><br><br>

<select name="pets" id="pet-select" name="musclegroup" action="" enctype="multipart/form-data">
    <option value="">--Choose your musclegroup--</option>
    <option value="Back">Back</option>
    <option value="Stomach">Stomach</option>
    <option value="Bicep">Bicep</option>
    <option value="Tricep">Tricep</option>
    <option value="Legs">Legs</option>
    <option value="Shoulders">Shoulders</option>
</select><br><br>

<form method="post"> <input type="text" name="date" placeholder="Date (YYYYMMDD)" action="" enctype="multipart/form-data"><br>

<form method="post"> <input type="text" name="feeling" placeholder="Feeling" action="" enctype="multipart/form-data"><br>

<?php
if (isset($_POST['upload'])) {

	$comment = $_FILES["comment"];
	$musclegroup = $_FILES["musclegroup"];
  $date = $_FILES["date"];
  $feeling = $_FILES["feeling"];

		
	//$db = mysqli_connect("localhost", "root", "", "pose_db");

		// Get all the submitted data from the form
		$sql = "INSERT INTO content (`contentid`, `contentdate`, `contentcomment`, `contentmuscle`, `contentfeeling`) VALUES ('$id','$date','$comment','$musclegroup','$feeling')";

		// Execute query
		mysqli_query($conn, $sql);
}
$result = mysqli_query($db, "SELECT * FROM content");
?>

<button type="submit"
        name="upload">
    UPLOAD
</button>

</div>
</body>
</html>