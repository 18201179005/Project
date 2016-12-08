<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

    public function web_app($id){
        $id = intval($id);
        $this->load->model('web_app');
        //get info
        $info_result = $this -> web_app -> getInfoToDetails($id);

        //404
        if(!$info_result){
            $this->load->view('common/404');
            return;

        }

        //get link
        $link_result = $this -> web_app -> getLinkToDetails($id);

        $data = array(
            'info_result' => $info_result,
            'link_result' => $link_result,
        );
        $this->load->view('details/web_app', $data);
    }


}
