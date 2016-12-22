<?php
/**
 * Facades.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
// @codingStandardsIgnoreFile

declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSnippets\Pro\Traits\Facades;

error_reporting(-1);
ini_set('display_errors', 'yes');

if (PHP_SAPI !== 'cli') {
    exit('Requires CLI access.');
}
$Facades = '<?php
/**
 * Facades.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSnippets\Pro\Classes\Base;

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

/**
 * Facades.
 *
 * @since 161222.28602
 */
abstract class Facades
{
';
foreach (dir_recursive_regex(__DIR__, '/\.php$/ui') as $_file) {
    if (mb_strpos(basename($_sub_path_name = $_file->getSubPathname()), '.') !== 0) {
        $Facades .= '    use Traits\\Facades\\'.str_replace(['/', '.php'], ['\\', ''], $_file->getSubPathname()).';'."\n";
    }
} // unset($_file); // Housekeeping.

$Facades .= '}'."\n"; // Close the class.
file_put_contents(dirname(__FILE__, 3).'/classes/Base/Facades.php', $Facades);
echo $Facades; // Print for debugging purposes.

function dir_recursive_regex(string $dir, string $regex): \RegexIterator
{
    $DirIterator      = new \RecursiveDirectoryIterator($dir, \FilesystemIterator::KEY_AS_PATHNAME | \FilesystemIterator::CURRENT_AS_SELF | \FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS);
    $IteratorIterator = new \RecursiveIteratorIterator($DirIterator, \RecursiveIteratorIterator::CHILD_FIRST);
    $RegexIterator    = new \RegexIterator($IteratorIterator, $regex, \RegexIterator::MATCH, \RegexIterator::USE_KEY);

    return $RegexIterator;
}
