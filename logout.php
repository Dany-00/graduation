<?php
    session_start();
    session_destroy();

    header("index.php");
?>
<script>
    document.location.href="index.php";
</script>