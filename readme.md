# Scentric, a responsive development system for Wordpress

## Overview

Scentric is a responsive development system for Wordpress sites or blogs that is based on Automattic's _s theme, which is a starter theme meant for hardcore themers and CSS artists. I strongly disagree with some of the choices they have made with the foundations of _s, so I replaced the foundations of _s with Normalize.css and the helper classes from HTML5 Boilerplate. I think this makes Scentric a much saner place to begin theming for people who code using developer tools in their browsers.

I also am adding cool new features for coder-types like fancy code highlighting for technical bloggers, a customizable development grid overlay, useful custom WP functions, and possibly more. I want this to become a theme that has everything you'd want for WP theming and nothing you don't.

Please submit patches on Github if you find bugs or would like to make improvements.

## How to Start Developing with Scentric

### Getting Started

1. Scentric is not suitable for parent theming, it is meant to be updated directly.

### Customizing JavaScript

1. If you want code highlighting, look at the settings in style.css for Rainbow code colors. If you don't need it, remove those styles and also the Rainbow plugin from plugins.js. It's only 1.2K. Use `<code data-language="generic"></code>` to set the language type. The generic highlighter is suprisingly good for most applications and I used it as is to save space, but you can add support for specific languages. Visit the Rainbow website for more documentation, languages, and themes. If you post a lot of code, it's worth customizing this.
2. All scripts are loaded from scentric_scripts() in functions.php. Modernizr is loaded in the head, jQuery is loaded the default way, and js/plugins.js and js/scripts.js are loaded in the footer. If want to use something else, change it here.
3. jQuery plugins go into plugins.js and custom scripts go in scripts.js.

## Scentric Changelog

__v0.1__

* Switched the reset from Blueprint's to Normalize.css, which is superior for developer tools and arguably for developers too
* Switched some of the header elements over to Boilerplate style and CSS style as well as fixing most CSS collisions

__v0.2__

* Added Rainbow.js for code theming out of the box. This jQuery plugin is located in plugins.js
* Moved all the Boilerplate style loading over to be handled by WordPress, like it wants

__v0.3__

* Many small bugfixes including fixing the buttons and input sizing from _s defaults

__v0.4__

* Brought in tons of bugfixes from _s 1.1

__v0.5__

* Updated content.php and removed Google Analytics snippet from footer.php

__v0.7__

* Switched all CSS to Compass format for easier management. Files are located in `sass/` and are compiled from `style.scss` to `style.css` in the root directory. I still use Normalize rather than Compass reset but that may change before 1.0.

## Features from the original _s theme:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A sample custom header implementation in inc/custom-header.php that can be activated by uncommenting one line in functions.php and adding the code snippet found the comments of inc/custom-header.php to your header.php template.
* Custom template tags in inc/template-tags that keep your templates clean and neat and prevent code duplication.
* Sample theme options in /inc/theme-options/ that can can be activated by uncommenting one line in functions.php.
* Some small tweaks in /inc/tweaks.php that can improve your theming experience. They can be activated by uncommenting one line in functions.php.
* Keyboard navigation for image attachment templates. The script can be found in js/keyboard-navigation.js. It’s enqueued in functions.php.
* 5 sample CSS layouts in /layouts: Two sidebars on the left, two sidebars on the right, a sidebar on either side of your content, and two-column layouts with sidebars on either side.
* Smartly organized starter CSS in style.css that will help you to quickly get your design off the ground.
* The GPL license in license.txt. :) Use it to make something cool.

## Planned Additions

* I need to think about the inclusion of the menu system from _s. I've removed it for now, but I might put it back if I find myself reaching for it.
* total cleanup of the _s code to remove unneeded styles
* vertical and horitzontal grid guides defined by you
* semantic grid using less?
* pulling in additional useful PHP into functions.php
* I may make another version of this based on Bootstrap or bring the features of Bootstrap into this

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
