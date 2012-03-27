# Scentric, a responsive development system for Wordpress

## Overview

### How to Start Developing with Scentric

__Getting Started__

1. Scentric is not suitable for parent theming, it is meant to be updated directly.

__Customizing JavaScript__

1. If you want code highlighting, look at the settings in style.css for Rainbow code colors. If you don't need it, remove those styles and also the Rainbow plugin from plugins.js. It's only 1.2K.
2. All scripts are loaded from scentric_scripts() in functions.php. Modernizr is loaded in the head, jQuery is loaded the default way, and js/plugins.js and js/scripts.js are loaded in the footer. If want to use something else, change it here.
3. jQuery plugins go into plugins.js and custom scripts go in scripts.js.

### Scentric Changelog

__v0.1__

* Switched the reset from Blueprint's to Normalize.css, which is superior for developer tools and arguably for developers too
* Switched some of the header elements over to Boilerplate style and CSS style as well as fixing most CSS collisions

__v0.2__

* Added Rainbow.js for code theming out of the box. Use `<code data-language="generic"></code>` to set the language type. The generic highlighter is suprisingly good for most applications and I used it as is to save space (only 1.2k!), but you can add support for specific languages. Visit the Rainbow website for more documentation, languages, and themes. This jQuery plugin is located in plugins.js
* Moved all the Boilerplate style loading over to be handled by WordPress, like it wants.

### Features from the original theme documentation:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A sample custom header implementation in inc/custom-header.php that can be activated by uncommenting one line in functions.php and adding the code snippet found the comments of inc/custom-header.php to your header.php template.
* Custom template tags in inc/template-tags that keep your templates clean and neat and prevent code duplication.
* Sample theme options in /inc/theme-options/ that can can be activated by uncommenting one line in functions.php.
* Some small tweaks in /inc/tweaks.php that can improve your theming experience. They can be activated by uncommenting one line in functions.php.
* Keyboard navigation for image attachment templates. The script can be found in js/keyboard-navigation.js. It’s enqueued in functions.php.
* A script at js/small-menu.js that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It’s enqueued in functions.php.
* 5 sample CSS layouts in /layouts: Two sidebars on the left, two sidebars on the right, a sidebar on either side of your content, and two-column layouts with sidebars on either side.
* Smartly organized starter CSS in style.css that will help you to quickly get your design off the ground.
* The GPL license in license.txt. :) Use it to make something cool.

## Planned Additions

* total cleanup of the _s code to remove unneeded styles
* vertical and horitzontal grid guides defined by you
* semantic grid using less?
* pulling in additional useful PHP into functions.php

## Components

* [Normalize.css](http://necolas.github.com/normalize.css/)
* [HTML5 Boilerplate](http://html5boilerplate.com)
* [_s WordPress theme](https://github.com/Automattic/_s)
* [Rainbow.js](http://craig.is/making/rainbows)

## License

Copyright (C) 2011 Paul Edmon Graham

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.