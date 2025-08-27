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
  <li class="mb-10">
    <?php echo date("d.m.Y"); ?>
  </li>
</ul>

