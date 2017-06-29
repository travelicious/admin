<?php
if (isset($_SESSION['logged_in'])) {
	session_destroy();
}

 ?>