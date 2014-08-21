# enable CORS for the new Wordpress JSON API

until https://github.com/WP-API/WP-API/issues/144 is fixed, here is a standalone plugin that will enable CORS

You might want to restrict responses by running a string comparison of your get_http_origin() result.

## Usage

1. `cd wp-content/plugins`
2. `git clone https://github.com/bjoernklose/wordpress-api-cors.git wp-json-api-cors`
3. (if you have the excellent [wp-cli](http://wp-cli.org) installed `wp plugin activate wp-json-api-cors`
