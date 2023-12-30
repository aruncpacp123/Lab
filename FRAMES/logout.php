<?php
session_start();
session_unset();
session_destroy();
//header("location:../FRAMES");
echo "<script>top.window.location='../FRAMES'</script>";

?>