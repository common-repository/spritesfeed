=== Plugin Name ===
Contributors: SPRITES SOFTWARE, s.r.o. (Pavel Karfík, Kryštof Rainisch)
Website: http://sprites.co/
Requires at least: 4.7
Tested up to: 4.9.3
Stable tag: 0.3.5
Tags: social, feed, listing, cron, custom
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

SpritesFeed is a social feed plugin that allows you to setup your API's and fetch posts from your Facebook, Instagram, Twitter, Youtube or Flickr accounts and display the feed using a shortcode or customize the output by filling the posts into one of your post types and by using custom theme queries.

== Description ==

Are you a theme developer? Set up your API keys in the plugin settings and you can output the feed in your templates using a custom query, add your own style and create beautiful customizable social feeds.

Are you a wordpress user? Don't worry, you can still make use of the plugin even if you're not developing the theme yourself, just setup the API keys with your social sites and output the feed by using the shortcode [sprites-feed], this will automatically fetch posts from the selected post type and display them on your page or post.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)


== Frequently Asked Questions ==

= I don't like the shortcode output =

Sorry to hear that, tell us what you don't like and we can make it better via a plugin update

= I activated the plugin but don't see any posts =

Note that you also have to enable your social feeds, navigate to the appropriate settings and check enable, make sure to fill in all the keys you have and save the settings, this should automatically load your posts. Or click import now if the function doesn't run immediately.

If you're using instagram only, make sure to click "Authenticate" to get your api access key and run the import again. Instagram API has a better protection, so don't worry to include your username and password.

= How do I output the feed on my page =

Just add the [sprites-feed] shortcode into your page editor and publish the post. Voilá, your posts should be visible automatically.

= How does the plugin work? =

Our plugin makes use of the wp_cron function and automatically fetches posts from the enabled API's every hour, note that wp_cron runs based on your site traffic, so if there's literally no traffic, some posts may not be fetched. In order to import the posts immediately, you can use the import button in each of the API's settings.

== Changelog ==

= 0.3.4 =
* Shortcode
* Facebook API
* Instagram API
* Flickr API
* Youtube API
* Twitter API
* Import functions, WP Cron
