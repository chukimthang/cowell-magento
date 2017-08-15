<?php

namespace Robin\Bai2\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute()
    {
        /**
         * Insert data
         */
//        $extension = ['.png', '.jpg', '.gif'];
//        $url = ['https://www.google.com.vn/', 'http://www.w3schools.com/'];
//
//        for ($i = 1; $i <= 20; $i++) {
//            $banner = $this->_objectManager->create('Robin\Bai2\Model\Banner');
//
//            // Insert data
//            $banner->addData([
//                'link' => $url[rand(0, 1)],
//                'image' => 'image' . $i . $extension[rand(0, 2)],
//                'sort_order' => $i,
//                'status' => rand(0, 1)
//            ])->save();
//        }

        /**
         * Select, update, delete data
         */
        $banner = $this->_objectManager->create('Robin\Bai2\Model\Banner');
        $data = $banner->load(1); //get data id = 1
        echo "<pre>";
        print_r($data->getData());

        $data->setImage("thang.png")->save();
        echo "<pre>";
        print_r($data->getData());

        $data->delete();

        echo "<br/>Done.";
        exit;
    }
}
