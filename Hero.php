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
 * クリームパンダ
 *
 * @category Bread
 * @package  CreamBread
 * @author   Mr.Jam <mrjam@anpanman.jp>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://anpanman.jp/index.html
 */
abstract class Hero 
{

    protected $name;
    protected $finish_echo;
              
    abstract public function getIntro();

    public function getName()
    {
	return $this->name;
    }

    /**
     * 登場
     *
     * @access public
     * @return string
     */
    public function hello()
    {
	echo $this->getName()."「".$this->getIntro().$this->getName()."!!!」\n\n";
    }

    /**
     * 必殺技
     *
     * @access public
     * @return string
     */
    public function finish()
    {
	echo $this->getName()."「".$this->finish_echo."」\n\n";
    }
}
?>
