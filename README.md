# Craft Essence Plugin

A plugin that integrates the [Essence](https://github.com/felixgirault/essence) (oEmbed) library in Craft CMS.

Full docs coming soon.

## Usage

### Embed

    {% set tweet = essence_embed('https://twitter.com/joelbradbury/status/444426341514248192') %}
    
    {% if tweet %}
    
	    {{ tweet.html | raw }}
    
    {% endif %}

