<?php
require_once("dbconnect.php");
$id=(int)$_REQUEST['id'];
$sql="select * from guestbook where id=" . $id;
if ($results=mysqli_query($conn,$sql) ) {
	$rs=mysqli_fetch_array($results);
?>
<table border=1>
<tr><td>id</td><td><?php echo $rs['id']; ?></td></tr>
	<tr><td>title</td><td><?php echo  $rs['title'];?></td></tr>
	<tr><td>author</td><td><?php echo $rs['name'];?></td></tr>
	<tr><td>message</td><td><?php echo $rs['msg'];?></td></tr>
</table>
<?php
}
?>