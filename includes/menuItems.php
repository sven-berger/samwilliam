<?php

$navLinks = [
  ['href' => '/', 'label' => 'Startseite'],
  ['href' => '/mein-wandel/', 'label' => 'Mein Wandel'],

  [
    'label' => 'Spielereien',
    'children' => [
      ['href' => '/zahlen-raten/', 'label' => 'Zahlen raten'],
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