<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($_judul, $_tema, $_penulis, $_univ,
                            $_tahun, $_abstrak, $_bidang)
    {
        $data = array(
            'judul'         => $_judul,
            'tema'          => $_tema,
            'penulis'       => $_penulis,
            'universitas'   => $_univ,
            'tahun'         => $_tahun,
            'abstrak'       => $_abstrak,
            'bidang'        => $_bidang
        );
        return $this->db->insert('papers', $data);
    }

    public function getPaper()
    {

    }
}