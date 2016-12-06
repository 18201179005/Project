<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller {

    public function web_app(){
        $this->load->view('lists/web_app');
    }

}
