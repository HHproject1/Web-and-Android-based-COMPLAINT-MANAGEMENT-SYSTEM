<?php 
require_once("includes/config.php");
if(!empty($_POST["idno"])) {
	$idno= $_POST["idno"];
	
		$result =mysqli_query($con,"SELECT idNumber FROM users WHERE idNumber='$idno'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> idno already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> idno available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>




