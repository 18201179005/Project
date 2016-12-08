<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

    public function web_app($id){
        $this->load->view('details/web_app');
    }


}
