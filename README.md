# Yocto Theme

Yocto is a lightweight and hyper-fast Grav theme that is built for professional writers, bloggers and content marketers.

Yocto is a Grav conversion of [the Wordpress theme of the same name](https://humblethemes.com/themes/yocto).

# Installation

Installing the Yocto theme can be done in one of two ways. <!--Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file.-->

<!--
## GPM Installation (Preferred)

The simplest way to install this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install yocto

This will install the Yocto theme into your `/user/themes` directory within Grav. Its files can be found under `/your/site/grav/user/themes/yocto`.
-->

## Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `/your/site/grav/user/themes`. Then, rename the folder to `yocto`. You can find these files either on [GitHub](https://github.com/getgrav/grav-theme-yocto) or via [GetGrav.org](http://getgrav.org/downloads/themes).

You should now have all the theme files under

    /your/site/grav/user/themes/yocto

## Manual Installation via Admin Panel

The [admin plugin](https://github.com/getgrav/grav-plugin-admin) provides an easy-to-use web-based user interface to install this theme.

Before installing this theme, you must follow the steps to allow installing packages outside the official GPM (Grav Package Manager).

#### With Admin Panel
* Navigate to **Configuration** page from the sidebar.
* Set **Official GPM Only** option inside "Advanced" section to **No**.
* Save your changes.

#### Without Admin Panel

* Navigate to `/your/site/grav/user/config`.
* Open the **system.yaml** file.
* Change the `official_gpm_only:` setting inside `gpm` to `official_gpm_only: false`.
* Save your changes.

Then, go to **Tools** page from the sidebar. You can copy the url https://github.com/vrabe/grav-theme-yocto/archive/master.zip , paste it to the input field, and click **Install** button.

This will install the Yocto theme into your `/user/themes` directory within Grav. Its files can be found under `/your/site/grav/user/themes/yocto`.


# Updating

As development for the Yocto theme continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. <!--Updating Yocto is easy, and can be done through Grav's GPM system, as well as manually.-->

<!--
## GPM Update (Preferred)

The simplest way to update this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update yocto

This command will check your Grav install to see if your Yocto theme is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The theme will automatically update and clear Grav's cache.
-->

## Manual Update

Manually updating Yocto is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/themes/yocto` directory.
* Downalod the new version of the Yocto theme from either [GitHub](https://github.com/getgrav/grav-plugin-yocto) or [GetGrav.org](http://getgrav.org/downloads/themes#extras).
* Unzip the zip file in `your/site/user/themes` and rename the resulting folder to `yocto`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/themes`) will remain intact.

## Manual Update via Admin Panel

Manually updating Yocto via Admin Panel is also pretty simple. Just follow steps listed in [Manual Installation via Admin Panel](#manual_installation_via_admin_panel).
