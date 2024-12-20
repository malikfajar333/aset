<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mDashboard');
        $this->load->model('mPengajuan');
    }

    public function index()
    {

        $data = array(
            'jml' => $this->mDashboard->total(),
            'pengajuan' => $this->mPengajuan->select()
        );
        $this->load->view('User/Layout/head');
        $this->load->view('User/Layout/aside');
        $this->load->view('User/vDashboard', $data);
        $this->load->view('User/Layout/footer');
    }
}

/* End of file cDashboard.php */
