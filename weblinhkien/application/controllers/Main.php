<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        $data = $this->Type->getAll();
        $products = $this->Products->getAll();
        $count = 0;
        $newProducts = array();
        for ($i = $this->Products->getNumRow() - 1; $i >= 0; $i--) {
            if ($count < 5) {
                $newProducts[$count] = $products[$i];
                $count++;
            } else {
                break;
            }
        }

        $context = $this->load->view('trangchu', array('newProducts' => $newProducts), true);
        $this->load->view("layout_share", array('type' => $data, 'context' => $context));
    }

    public function product_list($type, $page)	
    {
        $data = $this->Type->getAll();
        $dataProduct = $this->Products->getByIDType($type);
        $numRow = $dataProduct['num_rows'];
        $products = $dataProduct['data'];
        $numpage = 0;
        for ($i = 0; $i < ($numRow / 32); $i++) {
            $numpage++;
        }
        $count = (32 * $page) - 32;
        $arrayProduct = array();
        if ($count >= 0 && $numRow > 0) {
            for ($count; $count < 32 * $page; $count++) {
                try {
                    if ($count < $numRow) {
                        $arrayProduct[] = $products[$count];
                    } else {
                        throw new Exception("Error Processing Request", 1);
                    }
                } catch (Exception  $th) {
                    break;
                }
            }
        }
        $context = $this->load->view('listProducts', array('numPage' => $numpage, 'products' => $arrayProduct), true);
        $this->load->view("layout_share", array('type' => $data, 'context' => $context));
    }

    public function ChiTiet()
    {
        $data = $this->Type->getAll();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            if ($this->Products->checkByID($id)) {
                $dataP = $this->Products->getByID($id);
                $context = $this->load->view('product', array('product' => $dataP), true);
            } else {
                $context = "<h1>Sản phẩm không tồn tại</h1>";
            }
        } else {
            $context = "<h1>Sản phẩm không tồn tại</h1>";
        }

        $this->load->view("layout_share", array('type' => $data, 'context' => $context));
    }
	public function AddUser(){
		$this->load->model('Customer'); 
		$username = $this->input->post('USER');
		$password = $this->input->post('PASSWORD');
		redirect("admin/index");
	}
}
