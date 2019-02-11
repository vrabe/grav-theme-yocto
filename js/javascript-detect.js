/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @package Yocto
 */

(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);
