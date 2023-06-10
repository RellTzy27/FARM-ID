<?php

session_start();

unset($_SESSION['username']);

session_destroy();

echo "
<script>
    document.location = 'login.php'
</script>";


?>