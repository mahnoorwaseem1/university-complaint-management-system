
<?php
include "config.php";
?>
<?php
if($_GET['id'])
{
 $id=$_GET['id'];

$del="DELETE FROM complaint where Id='$id'";
mysqli_query($conn,$del);
header("location:detframe.php");
}
?>
<script type="text/javascript">
	alert('Data Deleted...!');
</script>
