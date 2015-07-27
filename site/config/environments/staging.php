<?php
/* Staging */
//ini_set('display_errors', 0);
//define('WP_DEBUG_DISPLAY', false);
//define('SCRIPT_DEBUG', false);
//define('DISALLOW_FILE_MODS', true); // this disables all file modifications including updates and update notifications



//added all the below and commented out all the above to try find reason for site not loading after deploy to remote droplet, got the below code from https://css-tricks.com/snippets/wordpress/turn-on-wordpress-error-reporting/, changed last two to true

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 1);
