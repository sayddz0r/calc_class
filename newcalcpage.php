<?php
session_start();
if (!empty($_SESSION['latestExpression'])) {
    echo "Latest calculations:  "   . $_SESSION['latestExpression'];
}
?>
