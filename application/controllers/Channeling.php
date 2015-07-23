<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Channeling extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('channeling_model');
    }

    public function index(){
        $data = $this->get_numbering();
        $dynamic_data = array(
            'title' => 'Channeling Queue',
            'channeling_data' => $data
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/channeling_view');
        $this->load->view('common/footer');
    }

    public function get_numbering(){
        return $this->channeling_model->get_channel_queue();
    }
}