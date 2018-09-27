<?php
session_name('my_app');
session_start();
session_destroy();
header('Location: index.php?message=You have been logged out.');
session_write_close();
?>