<?php
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
if ($name == "ADMIN" && $surname = "ADMIN") {
    header("Location: Admin.html");
}else {
    header("Location: Main.html");
}
?>