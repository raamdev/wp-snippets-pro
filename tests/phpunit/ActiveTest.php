<?php
/**
 * Tests.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSnippets\Pro;

use WebSharks\WpSharks\WpSnippets\Pro\Classes;
use WebSharks\WpSharks\WpSnippets\Pro\Interfaces;
use WebSharks\WpSharks\WpSnippets\Pro\Traits;
#
use WebSharks\WpSharks\WpSnippets\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\WpSnippets\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpSnippets\Pro\Classes\CoreFacades as c;
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

class ActiveTest extends \PHPUnit_Framework_TestCase
{
    public function testActive()
    {
        $this->assertSame(true, c::app() instanceof Classes\App);
    }
}
