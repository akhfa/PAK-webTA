<?php
/**
 * Created by PhpStorm.
 * User: akhfa
 * Date: 09/05/15
 * Time: 16:35
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index()
    {
        $this->load->view('login');
    }
}