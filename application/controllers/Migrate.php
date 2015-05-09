<?php
/**
 * Created by PhpStorm.
 * User: akhfa
 * Date: 09/05/15
 * Time: 20:23
 */

class Migrate extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');
    }
    public function index()
    {
        if($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
        else
        {
            echo 'success';
        }
    }
}