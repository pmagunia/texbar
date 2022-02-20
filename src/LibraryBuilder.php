<?php

namespace Drupal\texbar;

/**
 * Markitup library builder.
 */
class LibraryBuilder implements LibraryBuilderInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $library = [
      'remote' => 'http://markitup.jaysalvat.com/home/',
      'version' => '1.1.15',
      'license' => [
        'name' => 'MIT',
        'url' => 'https://raw.githubusercontent.com/markitup/1.x/master/MIT-LICENSE',
        'gpl-compatible' => TRUE,
      ],
    ];

    $assets = [
      'js' => [
        'markitup/jquery.markitup.js',
      ],
    ];

    $prefix = static::LIBRARY_PATH;

    foreach ($assets['js'] as $file) {
      $library['js'][$prefix . $file] = [];
    }

    return $library;
  }

}
