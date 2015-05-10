<?php
/**
 * Created by PhpStorm.
 * User: akhfa
 * Date: 09/05/15
 * Time: 19:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Listpaper extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('paper','',TRUE);
    }
    public function index()
    {
        $this->load->view('list');
    }
}