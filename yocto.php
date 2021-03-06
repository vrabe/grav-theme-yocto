<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\File\File;
use RocketTheme\Toolbox\File\YamlFile;

class Yocto extends Theme
{
    // Access plugin events in this class
    /**
    * Initialize plugin and subsequent events
    *
    * @return array
    */
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0]
        ];
    }

    /**
     * Register events and route with Grav
     *
     * @return void
     */
    public function onThemeInitialized()
    {
        $config = $this->config();
        if($config['regenerate_css']){
            $color = $config['primary_color'];
            $css = <<<EOF
.site-header {
	border-top: 10px solid $color;
}

blockquote,
.entry-content .wp-block-quote:not(.is-large),
.page-header {
	border-left: 8px solid $color;
}

abbr[title],
acronym {
	border-bottom: 2px dotted $color;
}

::selection,
mark,
ins,
.entry-terms a:hover,
.entry-terms a:focus,
.primary-menu .sub-menu .menu-item a:hover,
.primary-menu .sub-menu .menu-item a:focus {
	background: $color;
}

.footer-widgets a:hover,
.page-numbers.current,
.widget a,
.entry-content a {
	border-color: $color;
}

.site-info a:hover,
.entry-title a:hover,
.post-navigation a:hover .post-title,
.widget-area-footer a:hover,
.widget-area-footer a:focus,
.entry-title:hover,
.primary-menu .menu-item.current-menu-item > a,
.primary-menu .menu-item a:hover,
.primary-menu .menu-item a:focus {
	color: $color;
}

.site-header {
	border-top: 10px solid $color;
}

.site-title a,
.calendar_wrap a,
.mejs-horizontal-volume-slider:hover,
.widget_meta a:hover,
.widget_pages a:hover,
.widget_tag_cloud a:hover,
.widget_recent_entries a:hover,
.widget_archive a:hover,
.widget_categories a:hover,
.widget_recent_comments a:hover {
	border-bottom: 2px solid $color;
}

.menu-toggle {
	border: 1px solid $color;
	background: $color;
}
EOF;
            // save css file
            $filePath = $this->grav['locator']->findResource('user://themes/yocto/css', true) . '/color.css';
            $fileInstance = File::instance($filePath);
            $fileInstance->save($css);
            $fileInstance->free();
            $config['regenerate_css'] = false;
            $configFilePath = 'config://themes/yocto.yaml';
            $fileInstance = YamlFile::instance($this->grav['locator']->findResource($configFilePath, true, true));
            $fileInstance->save($config);
            $fileInstance->free();
        }
    }
}
