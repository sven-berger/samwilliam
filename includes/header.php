<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/db.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/apiList.php");
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Sam William</title>
    <link rel="stylesheet" href="/stylesheet/stylesheet.css">
    <link rel="stylesheet" href="/stylesheet/global.css">
    <link rel="icon" type="image/png" href="/images/favicon.png" sizes="32x32">
</head>

<body class="bg-gray-300 text-center p-0 m-0 text-lg">

    <script>
        // Alle Codeblöcke hervorheben
        document.addEventListener('DOMContentLoaded', function() {
            if (window.hljs) hljs.highlightAll();
        });
    </script>

    <!-- Responsive Layout Wrapper -->

    <div class="lg:grid lg:grid-cols-[16rem_1fr] min-h-screen">
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.php"); ?>
        <!-- Content Wrapper -->
        <main class="bg-gray-100 p-10 text-left text-lg min-h-screen">