<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:40
 */

include "strUtils.php";

$gras = new strUtils('hello');

echo $gras->bold();
echo $gras->italic();
echo $gras->uderline();
echo $gras->capitalize();
echo $gras->uglify();
