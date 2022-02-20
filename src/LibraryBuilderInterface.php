<?php

namespace Drupal\texbar;

/**
 * Markitup library builder interface.
 */
interface LibraryBuilderInterface {

  const CDN_URL = 'https://raw.githubusercontent.com/markitup/1.x/1.1.15/markitup/jquery.markitup.js';

  const LIBRARY_PATH = '/libraries/markitup/';

  /**
   * Builds a definition for Markitup library.
   *
   * @return array
   *   Markitup library definition.
   */
  public function build();

}
