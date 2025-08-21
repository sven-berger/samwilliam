<?php

$navLinks = [
  ['href' => '/', 'label' => 'Startseite'],
  ['href' => '/mein-wandel/', 'label' => 'Mein Wandel'],
  [
    'label' => 'Blogs',
    'children' => [
      ['href' => '/blog/', 'label' => 'Mein Blog'],
      ['href' => '/knowHow/', 'label' => 'KnowHow-DB'],
    ]
    ],
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
      ['href' => '../tinymce/', 'label' => 'TinyMCE Editor'],
      ['href' => '../web-kompakt/', 'label' => 'Web Kompakt', 'target' => '_blank'],
    ]
  ]
];

$footerLinks = [
  ['href' => '/impressum/', 'label' => 'Impressum'],
  ['href' => '/datenschutz/', 'label' => 'Datenschutzerklärung'],
  ['href' => '/kontakt/', 'label' => 'Kontakt']
];