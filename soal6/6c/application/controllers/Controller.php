<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
    /**
     * Default controller
     *
     */

    // var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('controllermodel');
        $this->load->helper('form');
        // $this->API = getenv('APP_REST_URL');
    }


    //  Index Page
    public function index()
    {
        // Data for send to view
        $data['title'] = 'Home | Arkademy Test';
        $data['product'] = $this->controllermodel->getProduct();
        $data['cashier'] = $this->controllermodel->getCashier();
        $data['category'] = $this->controllermodel->getCategory();
        
        // Load view
        $this->load->view('layouts/header',$data);
        $this->load->view('home/index');
        $this->load->view('layouts/footer');
    }
    
    // Delete Product
    public function delete($id)
    {
        $delete = $this->controllermodel->deleteProduct($id);
        if($delete === 1) {   
            notif('success','Data Berhasil dihapus', '', '/');
        } else {
            notif('error', 'Data Gagal dihapus', '', '/');
        }
    }

    // Add Product
    public function add()
    {
        $data['id_cashier']  = htmlspecialchars($this->input->post('cashier', TRUE));
        $data['id_category'] = htmlspecialchars($this->input->post('category', TRUE));
        $data['name']        = htmlspecialchars($this->input->post('product', TRUE));
        $data['price']       = htmlspecialchars($this->input->post('harga', TRUE));

        if(is_numeric($data['price'])) {
            $add = $this->controllermodel->addProduct($data);
            if ($add === 1) {
                notif('success', 'Data Berhasil ditambah', '', '/');
            } else {
                notif('error', 'Data Gagal ditambah', '', '/');
            }
        } else {
            notif('warning', 'Data Gagal ditambah', 'Hanya bisa memasukan angka pada harga', '/');
        }
    }

    // 404 Not Found
    public function page_not_found()
    {
        $this->load->view('errors/404');
    }
    
}
