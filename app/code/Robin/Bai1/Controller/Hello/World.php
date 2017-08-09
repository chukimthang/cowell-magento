<?php 

namespace Robin\Bai1\Controller\Hello;

/**
* 
*/
class World extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        echo "Hello world";
        exit();
    }
}
