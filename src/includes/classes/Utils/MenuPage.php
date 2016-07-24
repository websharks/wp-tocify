<?php
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
 * Menu page utils.
 *
 * @since 160724.1960 Initial release.
 */
class MenuPage extends SCoreClasses\SCore\Base\Core
{
    /**
     * Adds menu pages.
     *
     * @since 160718.59682 Menu page utils.
     */
    public function onAdminMenu()
    {
        s::addMenuPageItem([
            'auto_prefix'   => false,
            'parent_page'   => 'options-general.php',
            'page_title'    => $this->App->Config->©brand['©name'],
            'menu_title'    => $this->App->Config->©brand['©name'],
            'template_file' => 'admin/menu-pages/settings/default.php',

            'tabs' => [
                'default' => sprintf(__('%1$s', 'wp-tocify'), esc_html($this->App->Config->©brand['©name'])),
            ],
        ]);
    }
}