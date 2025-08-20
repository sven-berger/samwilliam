<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/menuItems.php"); ?>

<!-- Sidebar (Desktop) -->
<aside class="hidden lg:flex flex-col bg-red-600 text-white p-6 text-left min-h-screen">
      <h3 class="text-lg font-bold lg:mb-10">Sven Bergers aktuelles Projekt</h3>
    <nav class="space-y-2">
      <?php foreach ($navLinks as $link): ?>
        <?php if (!isset($link['children'])): ?>
          <a href="<?= $link['href'] ?>" class="block hover:underline" <?= isset($link['target']) ? ' target="' . $link['target'] . '"' : '' ?>>
            <?= $link['label'] ?>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <div class="mt-10 space-y-4">
      <?php foreach ($navLinks as $link): ?>
        <?php if (isset($link['children'])): ?>
          <hr class="border-white/20 my-4">
          <span class="block text-xs tracking-wider font-semibold uppercase text-white/60"><?= $link['label'] ?></span>
          <div class="space-y-1 pl-2">
            <?php foreach ($link['children'] as $child): ?>
              <a href="<?= $child['href'] ?>" class="block hover:underline" <?= isset($child['target']) ? ' target="' . $child['target'] . '"' : '' ?>>
                <?= $child['label'] ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    
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
      <span class="font-semibold text-lg">Sven Bergers aktuelles Projekt</span>
      <details class="relative">
        <summary class="list-none cursor-pointer p-2 -m-2 rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60">☰</summary>
        <div class="absolute right-0 mt-2 w-48 rounded-md bg-white text-gray-900 shadow-lg z-50">
          <?php foreach ($navLinks as $link): ?>
            <?php if (isset($link['children'])): ?>
              <span class="block px-4 py-2 text-xs uppercase text-gray-400 mt-4"><?= $link['label'] ?></span>
              <?php foreach ($link['children'] as $child): ?>
                <a href="<?= $child['href'] ?>" class="block px-4 py-2 hover:bg-gray-100 pl-4" <?= isset($child['target']) ? ' target="' . $child['target'] . '"' : '' ?>>
                  <?= $child['label'] ?>
                </a>
              <?php endforeach; ?>
            <?php else: ?>
              <a href="<?= $link['href'] ?>" class="block px-4 py-2 hover:bg-gray-100" <?= isset($link['target']) ? ' target="' . $link['target'] . '"' : '' ?>>
                <?= $link['label'] ?>
              </a>
            <?php endif; ?>
          <?php endforeach; ?>
          <hr class="my-1 border-gray-300">
          <?php foreach ($footerLinks as $link): ?>
            <a href="<?= $link['href'] ?>" class="block px-4 py-2 text-sm hover:bg-gray-100"><?= $link['label'] ?></a>
          <?php endforeach; ?>
        </div>
      </details>
    </div>
  </div>