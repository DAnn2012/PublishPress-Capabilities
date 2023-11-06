<?php
/**
 * Forminator Capabilities class.
 *
 * Generated by Capabilities Extractor
 */
class Publishpress_Capabilities_Forminator
{
    private static $instance = null;

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Publishpress_Capabilities_Forminator();
        }

        return self::$instance;
    }

    public function __construct()
    {
        //Forminator Capabilities
        add_filter('cme_plugin_capabilities', [$this, 'cme_forminator_capabilities']);
    }

    /**
     * Forminator Capabilities
     *
     * @param array $plugin_caps
     * 
     * @return array
     */
    public function cme_forminator_capabilities($plugin_caps)
    {

        if (defined('FORMINATOR_PLUGIN_BASENAME')) {
            $plugin_caps['Forminator'] = apply_filters(
                'cme_forminator_capabilities',
                [
                    'manage_forminator'
                ]
            );
        }

        return $plugin_caps;
    }
}
Publishpress_Capabilities_Forminator::instance();
?>
