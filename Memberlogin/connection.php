<?php
	$db=mysqli_connect("localhost","root","","makeitlouder");
	if(!$db)
		{
			die("Connection Failed: " . mysqli_connect_error());
		}
		
?>
<script type="text/javascript">
document.getElementsByClassName("logout").addEventListener("onclick", model);

function model() {
    alert("Are you sure?????")
}
</script>