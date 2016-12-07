<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller {

    public function web_app(){

        $this->load->model('web_app');
        //get list
        $list_result = $this -> web_app -> getInfoToLists();

        //get banner
        $banner_result = $this -> web_app -> getBannerToLists();

        $data = array(
            'list_result' => $list_result,
            'banner_result' => $banner_result,
        );

        $this->load->view('lists/web_app', $data);
    }

}
