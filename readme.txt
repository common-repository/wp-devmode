=== WP Devmode ===
Contributors: mazzcris
Tags: development, cache
Requires at least: 2.6
Tested up to: 4.1.7
Stable tag: 0.0.1


This plugin disables caching for enqueued styles and scripts to allow faster development process.


== Description ==

This plugin disables caching for enqueued styles and scripts to allow faster development process.
It replaces the 'ver' parameter appended to every resource's URL, with a current timestamp.
This is a simple workaround to have the resources reloaded every time.
Just activate it and start editing your theme or plugin.
For performance reasons, you'll want to deactivate this plugin after development and/or in production environments


== Installation ==

After you've downloaded and extracted the files:

1. Upload the complete 'wp-devmode' folder to the '/wp-content/plugins/' directory OR install via the plugin installer
2. Activate the plugin through the 'Plugins' menu in WordPress
3. For performance reasons, you'll want to deactivate this plugin after development and/or in production environments