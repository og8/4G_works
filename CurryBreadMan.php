<?php
/**
 * ファイルのコメントブロック
 *
 * PHP versions 5
 *
 * @category  Example
 * @package   Example
 * @author    Mr.Jam <mrjam@anpanman.jp>
 * @copyright 1997-2006 The PHP Group
 * @license   http://www.php.net/license/3_0.txt  PHP License 3.0
 * @link      http://homepage3.nifty.com/renoiv/php/phpcs/execute.html
 */
 
/**
 * カレーパンマン
 *
 * @category Bread
 * @package  CurryBreadMan
 * @author   Mr.Jam <mrjam@anpanman.jp>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://anpanman.jp/index.html
 */
class CurryBreadMan extends Hero
{

    protected $name='カレーパンマン';
    protected $finish_echo='';
              
    /**
     * 紹介文
     *
     * @access public
     * @return string
     */
    public function getIntro()
    {
        return '見せて貰おうか。連邦軍のモビルスーツの性能とやらを！';
    }
}
?>
