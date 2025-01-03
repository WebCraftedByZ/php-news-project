<?php 

	if ($_SESSION['role'] == '0') {
    header("Location: {$hostname}/admin/post.php");
  }


 ?>