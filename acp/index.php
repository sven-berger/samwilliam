<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
<?php
$page = $_GET['page'] ?? 'index';
$filePath = __DIR__ . "/libary/{$page}.lib.php";

if (is_file($filePath)) {
    include $filePath;
} else {
    $filePath404 = __DIR__ . "/libary/errors/404.lib.php";
    if (is_file($filePath404)) {
        include $filePath404;
    } else {
        echo "<h2 class='text-xl font-semibold'>Seite nicht gefunden</h2>";
    }
}
?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>