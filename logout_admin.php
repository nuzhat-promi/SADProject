<?php
session_name('my_admin');
session_start();
session_destroy();
header('Location: /SAD/admin.php?message=You have been logged out.');
session_write_close();
?>