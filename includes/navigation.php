<?php include("includes/menuItems.php"); ?>

<!-- Sidebar (Desktop) -->
<aside class="hidden lg:flex flex-col bg-red-600 text-white p-6 text-left min-h-screen">
      <h3 class="text-lg font-bold lg:mb-10">Company Name</h3>
    <nav class="space-y-2">
      <?php foreach ($navLinks as $link): ?>
        <a href="<?= $link['href'] ?>" class="block hover:underline"><?= $link['label'] ?></a>
      <?php endforeach; ?>
    </nav>
    <div class="flex-grow"></div>
    <div class="mt-auto space-y-2 text-sm border-t border-white/30 pt-4">
      <?php foreach ($footerLinks as $link): ?>
        <a href="<?= $link['href'] ?>" class="block hover:underline"><?= $link['label'] ?></a>
      <?php endforeach; ?>
    </div>
  </aside>

  <!-- Top Navigation (Mobile) -->
  <div class="lg:hidden bg-red-600 text-white sticky top-0 z-50 text-left">
    <div class="mx-auto max-w-6xl px-4 flex items-center justify-between py-3">
      <span class="font-semibold text-lg">Company Name</span>
      <details class="relative">
        <summary class="list-none cursor-pointer p-2 -m-2 rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60">☰</summary>
        <div class="absolute right-0 mt-2 w-48 rounded-md bg-white text-gray-900 shadow-lg z-50">
          <?php foreach ($navLinks as $link): ?>
            <a href="<?= $link['href'] ?>" class="block px-4 py-2 hover:bg-gray-100"><?= $link['label'] ?></a>
          <?php endforeach; ?>
          <hr class="my-1 border-gray-300">
          <?php foreach ($footerLinks as $link): ?>
            <a href="<?= $link['href'] ?>" class="block px-4 py-2 text-sm hover:bg-gray-100"><?= $link['label'] ?></a>
          <?php endforeach; ?>
        </div>
      </details>
    </div>
  </div>