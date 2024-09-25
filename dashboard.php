<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location_href='index.php';</script>";

    echo $_SESSION;
}
