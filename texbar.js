/**
 * @file
 * Javascript behaviors for LaTeX Toolbar module.
 */

/* global texbar, Drupal, jQuery, document */

(function ($, Drupal, document) {

  'use strict';

  /**
   * Attaches behaviors for TeXBar.
   */
  Drupal.behaviors.texbar = {
    attach: function (context, settings) {
      if (!$(drupalSettings.texbar.selector).hasClass('markItUpEditor')) {
        $(drupalSettings.texbar.selector).markItUp(myTexbarSettings);
      }
    }
  };
}(jQuery, Drupal, document));

