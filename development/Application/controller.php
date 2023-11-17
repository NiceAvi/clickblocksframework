<?php
namespace ClickBlocks\MVC;


require_once('../../connect.php');
use ClickBlocks\Core;

class Controller extends \ClickBlocks\MVC\MVC
{
    public function __construct() {
        
    }
    public function getPage()
    {       
        return new PageHello();
    }

   
}

(new Controller())->execute();
?>