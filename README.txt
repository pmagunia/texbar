CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Recommended Modules
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

This module adds a basic LaTeX toolbar to all textareas with the chosen jQuery
selector.

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/texbar

 * To submit bug reports and feature suggestions, or to track changes:
   https://www.drupal.org/project/issues/texbar


REQUIREMENTS
------------

This module requires no modules outside of Drupal core.

This module requires the Markitup library file (jquery.markitup.js) from
http://markitup.jaysalvat.com/home to Drupal's libraries/markitup directory.
Optionally, you may install the Markitup JavaScript file to the libraries folder
using Drush: `drush texbar:download`.


RECOMMENDED MODULES
-------------------

 * The CodeMirror editor - https://www.drupal.org/project/codemirror_editor
 * MathJax: LaTeX for Drupal - https://www.drupal.org/project/mathjax

Each recommended module has specific configurations:

 * CodeMirror Editor: Enable the TeX language mode. Enable the CodeMirror
   filter. Disable "Limit allowed HTML tags and correct faulty HTML" filter.
   Wrap TeX code between "<code data-mode="stex"></code>".
 * MathJax: Be sure to enable the MathJax filter on the selected text format.


INSTALLATION
------------

    1. Install the LaTeX Toolbar module as you would normally install a
       contributed Drupal module. Visit https://www.drupal.org/node/1897420 for
       further information.
    2. Install the Markitup JavaScript file to the libraries folder.


CONFIGURATION
-------------

    1. Navigate to Administration > Extend and enable the module.
    2. Navigate to Administration > Configuration > Content Authoring > Text
       editors and formats, and disable the default CKEditor toolbar for
       text formats the LaTeX Toolbar module will be used with.
    3. Navigate to Administration > Configuration > Content authoring > LaTeX
       Toolbar.
    4. Enter the jQuery selector for which the LaTeX Toolbar should be added to.


MAINTAINERS
-----------

 * Parag Magunia (pmagunia) - https://www.drupal.org/user/763420
   https://pmagunia.com

Supporting organizations:

 * North Penn Networks Limited
   https://www.northpenn.net
