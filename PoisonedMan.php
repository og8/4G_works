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
 * バイキンマン
 *
 * @category Mold
 * @package  PoisonedMan
 * @author   Unknown <unknown@anpanman.jp>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://anpanman.jp/index.html
 */
class PoisonedMan extends Heel
{

    protected $name="バイキンマン";
    protected $finish_echo='';
              
    /**
     * 茶々台詞を取得  
     *
     * @access public
     * @return string
     */
    public function getCatcall()
    {
	    return '~';
    }
}
?>
