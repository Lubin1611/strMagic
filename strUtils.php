<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:38
 */

class strUtils
{

    private $str;

    public function __construct($str)
    {

        $this->str = ("hello tout le monde");
}

        public
        function Bold()
        {
            return "<b>$this->str</b>";
        }

        public
        function italic()
        {
            return "<i>$this->str</i>";
        }
    public
    function uderline()
    {
        return "<u>$this->str</u>";
    }
    function capitalize()
    {
        return strtoupper($this->str);
    }
    function uglify()
    {
        return "<b>".'<i>'.'<u>'.strtoupper($this->str)."</b>".'</i>'.'</u>';
    }




}
