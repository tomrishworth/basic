# This file is no longer needed as we've removed Compass support.
# see: http://drupal.org/node/1938280
#
# To automatically compile your SASS, paste the following line in your command line while in the "basic" folder:
# sass --watch sass:css
#
# This will automatically watch file changes within the "sass" directory and will compile to the "css" direectory.


# Set the Environment Variable
# Using :development enables the use of FireSass but will bloat the stylesheets
# with debug code, be sure to change to :production when moving from development
# to production servers.
environment = :development
#environment = :production

# Location of the theme's resources.
# Compass will overwrite the CSS files in the css_dir when set to watch.

css_dir = "css"
sass_dir = "sass"


