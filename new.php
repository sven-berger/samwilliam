<?php
  ob_start();
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/db.php");
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/apiList.php");
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SamWilliam.de</title>
    <link rel="stylesheet" href="/stylesheet/global.css">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!-- Font Awesome 6 Free einbinden -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">

    <style>
        body {
            font-family: "Lato", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
  <div class="container mx-auto max-w-5xl p-4">
    <div class="flex flex-col md:flex-row gap-4 md:gap-6 min-h-screen">
        <aside class="w-full md:w-1/3 flex flex-col">
            <div class="block bg-white rounded-lg navBox p-4 flex-1 shadow-lg">
                <div id="MySkills" data-Skills-target="Skills">
                    <div class="mb-4">
                        <p class="mb-2">Platzhalter</p>
                        <div class="w-full bg-gray-200 rounded h-5">
                            <div class="bg-teal-600 h-5 rounded text-center text-white text-sm font-bold" style="width: 90%" data-Skills-target="SkillPercent">90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <main class="w-full md:w-2/3">
            <div class="flex flex-col space-y-4">
                <section class="bg-white rounded contentContent p-4 shadow-lg">
                    <p>Hallo</p>
                </section>
                <section class="bg-white rounded contentContent p-4 shadow-lg">
                    <p>Hallo 2</p>
                </section>
            </div>
        </main>
    </div>
  </div>
</body>
<!--- Stimulus einbinden --->
<script type="module" src="../assets/stimulus-bootstrap.js"></script>
</html>