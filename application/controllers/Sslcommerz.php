<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        isLogin();
        isKena();
        $this->load->model('main');
    }



}