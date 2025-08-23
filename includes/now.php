<!-- <div class="justify-start now-box flex flex-row gap-6 max-w-screen-md mx-auto">
<div class="now-box flex flex-row gap-6">
    <div class="flex-1 font-bold">
      <?php
        // $tag = date("l");
        // $tage = [
        //   "Monday" => "Montag",
        //   "Tuesday" => "Dienstag",
        //   "Wednesday" => "Mittwoch",
        //   "Thursday" => "Donnerstag",
        //   "Friday" => "Freitag",
        //   "Saturday" => "Samstag",
        //   "Sundy" => "Sonntag"
        // ];
       // echo $tage[$tag] ?? $tag; // Falls ein unbekannter Tag kommt, Standard-Wert zurückgeben
      ?>
    </div>
    <div class="flex-1 font-bold">
        <?php // echo date("d.m.Y"); ?>
    </div>
    <div class="flex-1 font-bold">
        <?php // echo date("H:i") . " " . "Uhr"; ?>
    </div>
</div> -->

<ul class="now-box font-bold">
  <li class="flex flex-row gap-6">
    <span>
      <?php
        $tag = date("l");
        $tage = [
          "Monday" => "Montag",
          "Tuesday" => "Dienstag",
          "Wednesday" => "Mittwoch",
          "Thursday" => "Donnerstag",
          "Friday" => "Freitag",
          "Saturday" => "Samstag",
          "Sunday" => "Sonntag"
        ];
        echo $tage[$tag] . "," ?? $tag . ",";
      ?>
    </span>
    <span>
      <?php echo date("H:i") . " Uhr"; ?>
    </span>
  </li>
  <li class="mt-1 mb-10">
    <?php echo date("d.m.Y"); ?>
  </li>
</ul>

