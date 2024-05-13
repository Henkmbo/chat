<?php
// Start the session
session_start();
session_unset();
// Destroy the session
session_destroy();
// Redirect to the auth page
session_write_close();
header('Location: ./auth.php');
?>