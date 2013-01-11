## WP-Transclude

[Transcludes](http://en.wikipedia.org/wiki/Transclusion) only the content of WordPress posts or pages within another page or post. Add <code>[page title="myniceslug"]</code> to your post or page. Inspired by [mediawiki.org Help:Templates](http://www.mediawiki.org/wiki/Help:Template)

Left off all surrounding and additional classes and markup.

### Parameter
You can handle over simple parameter.

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
