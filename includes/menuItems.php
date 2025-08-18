<?php

$navLinks = [
  ['href' => '/', 'label' => 'Startseite'],
  ['href' => '/mein-wandel/', 'label' => 'Mein Wandel'],
  ['href' => '/blog/', 'label' => 'Mein Blog'],

  [
    'label' => 'Spielereien',
    'children' => [
      ['href' => '/zahlen-raten/', 'label' => 'Zahlen raten'],
      ['href' => '/eintrittspreise/', 'label' => 'Eintrittspreis-Rechner']
    ]
  ],
  [
    'label' => 'Sonstiges',
    'children' => [
      ['href' => '../web-kompakt/', 'label' => 'Web Kompakt', 'target' => '_blank'],
    ]
  ]
];

$footerLinks = [
  ['href' => '/impressum/', 'label' => 'Impressum'],
  ['href' => '/datenschutz/', 'label' => 'Datenschutzerklärung'],
  ['href' => '/kontakt/', 'label' => 'Kontakt']
];