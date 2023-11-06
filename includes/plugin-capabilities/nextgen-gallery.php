<?php
/**
 * NextGEN Gallery Capabilities class.
 *
 * Generated by Capabilities Extractor
 */
class Publishpress_Capabilities_Nextgen_Gallery
{
    private static $instance = null;

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Publishpress_Capabilities_Nextgen_Gallery();
        }

        return self::$instance;
    }

    public function __construct()
    {
        //NextGEN Gallery Capabilities
        add_filter('cme_plugin_capabilities', [$this, 'cme_nextgen_gallery_capabilities']);
    }

    /**
     * NextGEN Gallery Capabilities
     *
     * @param array $plugin_caps
     * 
     * @return array
     */
    public function cme_nextgen_gallery_capabilities($plugin_caps)
    {

        if (defined('NGG_PLUGIN')) {
            $plugin_caps['NextGEN Gallery'] = apply_filters(
                'cme_nextgen_gallery_capabilities',
                [
                    'NextGEN Attach Interface',
                    'NextGEN Change options',
                    'NextGEN Change style',
                    'NextGEN Edit album',
                    'NextGEN Gallery overview',
                    'NextGEN Manage gallery',
                    'NextGEN Manage others gallery',
                    'NextGEN Manage tags',
                    'NextGEN Upload images',
                    'NextGEN Use TinyMCE'
                ]
            );
        }

        return $plugin_caps;
    }
}
Publishpress_Capabilities_Nextgen_Gallery::instance();
?>
