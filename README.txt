== WP-Transclude ==

Contributors: mg klml
Donate link: 
Tags: include transclude
Requires at least: 3.3
Tested up to: 3.5
Stable tag: 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



== Description ==

[Transcludes](http://en.wikipedia.org/wiki/Transclusion) only the content of WordPress posts or pages within another page or post. Add the <code>[page title="myniceslug"]</code> with the wished [Slug](http://codex.wordpress.org/Glossary#Slug) to your post or page. Inspired by [mediawiki.org Help:Templates](http://www.mediawiki.org/wiki/Help:Template).
Left off all surrounding and additional classes and markup.

This plugin differs from [WP Advanced Include](http://wordpress.org/extend/plugins/wp-advanced-include/) in:

* slugs instead of postids
* no text limit (might do that sometimes)
* but free parameters

You cant cascade pages into pages. Calling an page or post with an transclude to its self, you will only get the code (<code>[page title="myniceslug"]</code>) without an function.

=== Usage ===

With <code>[page title="myniceslug"]</code> you get all the content from this page or post into the position of this [shortcode](http://codex.wordpress.org/Shortcode).

Additionally you can handle over simple parameter.
Just write 

<code>
65% of people believe in ghosts.
[page title="citation-needed" reason="this is a rumor" ]
</code>

with the page or post 'citation-needed'

<code>
This Article needs a ciation: {{reason}}.
</code>

You will get

<code>
65% of people believe in ghosts.
This Article needs a ciation: this is a rumor.
</code>

All code on [github.com wp-transclude](https://github.com/klml/wp-transclude)

== Installation ==

1. Upload `wp-transclude/wp-transclude.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

or auto install in Admin plugin menue

== Frequently asked questions ==

== Changelog ==
= 0.9 =
* init


== Upgrade notice ==
