<?php

// Plugin definition
$plugin = array(
  'title' => t('Bootstrap 3 column grid for widgets'),
  'category' => t('AES'),
  'icon' => 'bsthreebytwo.png',
  'theme' => 'bsthreebytwo',
  'css' => 'bsthreebytwo.css',
  'regions' => array(
    'one' => t('Top Left'),
    'two' => t('Top Middle'),
    'three' => t('Top Right'),
      'four' => t('Bottom left'),
    'five' => t('Bottom Middle'),
    'six' => t('Bottom Right')
   ),
);
