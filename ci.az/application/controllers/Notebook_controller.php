<?php
/**
 *
 */
class Notebook_controller extends CI_Controller
{
  public $type;
  public $brand;
  public $model;
  public $cpu;
  public $gpu;
  public $ram;
  public $hdd;
  public $ssd;
  public $description;
  public $price;


  function __construct()
  {
    parent::__construct();

    $this->load->model('Notebook_model','model');
  }
  public function index()
  {
    $view_data['notebook_datas']=$this->get_all_notebooks();
    $this->load->view('notebook/index',$view_data);
  }
  public function add_new_notebook()
  {
    //id	type	brand	model	cpu	gpu	ram	hdd	ssd	description	price
    $notebook=new Notebook_controller();
    $notebook->type=$this->input->post('type');
    $notebook->brand=$this->input->post('brand');
    $notebook->model=$this->input->post('model');
    $notebook->cpu=$this->input->post('cpu');
    $notebook->gpu=$this->input->post('gpu');
    $notebook->ram=$this->input->post('ram');
    $notebook->hdd=$this->input->post('hdd');
    $notebook->ssd=$this->input->post('ssd');
    $notebook->description=$this->input->post('description');
    $notebook->price=$this->input->post('price');
    $result=$this->model->add_new_notebook($notebook);
    if ($result) {
      redirect(base_url('notebooks'));
    }
  }
  public function get_all_notebooks()
  {
    $result=$this->model->get_all_notebooks();
    if ($result != null) {
      return $result;
    }
  }
  public function add_new_notebook_page()
  {
    $this->load->view('notebook/add_new_notebook');
  }


  }

 ?>
