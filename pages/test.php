<?php
session_start();
echo "wkwkwk";
echo "<hr>";
echo $_SESSION['id'];
echo "<hr>";
echo $_SESSION['username'];
echo "<hr>";
echo $_SESSION['role'];
echo "<hr>";

if (!empty($_SESSION['id']) && !empty($_SESSION['username']) && !empty($_SESSION['role'])) {
    echo "Ini Ketika Sudah Login";
} else {
    echo "Ini Ketika Belum Login";
}
