<?php 
require_once('../../config.php');
require_once 'includes/admin_sessions.php'; 
require_once('includes/functions.php');
$_SESSION['message'] = 'Delete menu item feature coming soon.';
header("Location: admin.php");
?>