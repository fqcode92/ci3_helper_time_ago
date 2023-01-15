<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Time_ago extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('time_ago');
    }

    public function index()
    {
        echo time_ago('2022-12-26 23:28:10');
    }
}

/* End of file Time_ago.php */
