# A Sample WP Dev Env

## Create a new git repo
* use a good WP gitignore
```
# ignore everything in the root except the "wp-content" directory.
!wp-content/

# ignore everything in the "wp-content" directory, except:
# "mu-plugins", "plugins", "themes" directory
wp-content/*
!wp-content/mu-plugins/
!wp-content/plugins/
!wp-content/themes/

# ignore these plugins
wp-content/plugins/hello.php

# ignore specific themes
wp-content/themes/twenty*/

# ignore node dependency directories
node_modules/

# ignore log files and databases
*.log
*.sql
*.sqlite
```

## Install wp-cli via Composer (global)
* see [the handbook](https://make.wordpress.org/cli/handbook/installing/) for alternat installs
* `cd ~/AppData/Roaming/Composer`
* edit composer.json: `code composer.json`
* add: `"wp-cli/wp-cli-bundle": "*"`
* i.e.:
```
{
    "require": {
        "squizlabs/php_codesniffer": "^3.5",
        "wp-cli/wp-cli-bundle": "^2.4",
        "laravel/installer": "^3.0"
    }
}
```
* update composer: `composer global update`
* try wp-cli: `wp help`
* Update PATH if needed: `C:\Users\you\AppData\Roaming\Composer\vendor\bin`

# Install WP
* view the [quickstart guide](https://make.wordpress.org/cli/handbook/) for more examples
* Download WP to current folder: `wp core download`
* (optional) specify new folder: `wp core download --path=wp-dev.ca`
* Create a new wp-config.php: `wp config create` [doc](https://developer.wordpress.org/cli/commands/config/create/):
```
$ cd wpclidemo.dev
$ wp config create --dbname=wpdev --dbuser=root --prompt=dbpass
```
* OR With DEBUG:
```
wp config create --dbname=wpdev --dbuser=root --dbpass= --extra-php <<PHP
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
PHP
```
* Create the actual DB (if needed): `wp db create`
* Run the Install: `wp install core` [doc](https://developer.wordpress.org/cli/commands/core/install/):
```
$ wp core install --url=wp-dev.ca --title="NSCC WP Dev" --admin_user=redmondo --admin_password=*kw*5ZI13kmb --admin_email=info@wp-dev.ca
```

