<?php
/**
 * Shortcode utils.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpTocify\Classes\Utils;

use WebSharks\WpSharks\WpTocify\Classes;
use WebSharks\WpSharks\WpTocify\Interfaces;
use WebSharks\WpSharks\WpTocify\Traits;
#
use WebSharks\WpSharks\WpTocify\Classes\AppFacades as a;
use WebSharks\WpSharks\WpTocify\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpTocify\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Shortcode utils.
 *
 * @since 160724.1960 Initial release.
 */
class Shortcode extends SCoreClasses\SCore\Base\Core
{
    /**
     * `[toc /]` shortcode.
     *
     * @since 160724.1960 Initial release.
     *
     * @param array|string $atts      Shortcode attributes.
     * @param string|null  $content   Shortcode content.
     * @param string       $shortcode Shortcode name.
     */
    public function onShortcode($atts = [], $content = '', $shortcode = ''): string
    {
        $default_atts = [
            'float' => 'none',
            'style' => 'default',
        ];
        $atts      = (array) $atts;
        $content   = (string) $content;
        $shortcode = (string) $shortcode;

        $atts  = shortcode_atts($default_atts, $atts, $shortcode);
        $class = $this->App->Config->©brand['©slug'].'-toc-shortcode';

        if (!a::isApplicable()) {
            return ''; // Not applicable.
        }
        return '<div class="'.esc_attr($class).'" data-atts="'.esc_attr(json_encode($atts)).'" style="display:none;"></div>';
    }
}
