# Pivotal Groups Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

The **Pivotal Groups** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). Pivotal Groups (PG) allows content to be further divided into groups with inheritable access permissions.  It is inspired by the [Organic Groups](https://www.drupal.org/project/og) Drupal module. 

## Installation

Installing the Pivotal Groups plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install pivotal-groups

This will install the Pivotal Groups plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/pivotal-groups`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `pivotal-groups`. You can find these files on [GitHub](https://github.com/jgonyea/grav-plugin-pivotal-groups) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/pivotal-groups
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/jgonyea/grav-plugin-pivotal-groups/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/pivotal-groups/pivotal-groups.yaml` to `user/config/plugins/pivotal-groups.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named pivotal-groups.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

**Describe how to use the plugin.**

## Testing
This was developed using ddev platform.  Copy the `PLUGIN_DIR/tests/docker-compose.selenium.ARCH.yaml` to your `GRAV_ROOT/.ddev` folder and run `ddev restart`.  This will build the appropriate selenium runners for the codeception tests.

Run `composer install` within the `PLUGIN_DIR` to install the appropriate dev dependencies.

Run `PLUGIN_DIR/vendor/bin/codecept run --debug` or `composer test` from within the `PLUGIN_DIR` folder to initiate the test suite.

## Credits

Pivotal Groups is inspired by functionality found in the [Organic Groups](https://www.drupal.org/project/og) Drupal module.

## To Do

- [ ] Future plans, if any

