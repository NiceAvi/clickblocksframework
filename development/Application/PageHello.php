<?php
namespace ClickBlocks\MVC;

class PageHello extends Page
{
    public function __construct()
    {
        self::display();
    }

    public function init()
    {
        $this->head->name = 'Hello World';
    }

    function display() {
        return "Hello";
    }
}
?>
