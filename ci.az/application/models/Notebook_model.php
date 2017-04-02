<?php
/**
 *
 */
class Notebook_model extends CI_Model
{
  public $table='notebooks';
  public $images_table='notebooks_image';
  function __construct()
  {
    parent::__construct();
    $this->load->library('dbase');
  }
  public function get_all_notebooks()
  {
      $order['column']='id';
      $order['type']='DESC';
      $result=$this->dbase->get_all($this->table,$order);
      if ($result != null ) {
        return $result;
      }
  }
  public function add_new_notebook(Notebook_controller $notebook)
  {
    //add($table,$data)
    // $notebook->type=$this->input->post('type');
    // $notebook->brand=$this->input->post('brand');
    // $notebook->model=$this->input->post('model');
    // $notebook->cpu=$this->input->post('cpu');
    // $notebook->gpu=$this->input->post('gpu');
    // $notebook->ram=$this->input->post('ram');
    // $notebook->hdd=$this->input->post('hdd');
    // $notebook->ssd=$this->input->post('ssd');
    // $notebook->description=$this->input->post('description');
    // $notebook->price=$this->input->post('price');
    $data['type']=$notebook->type;
    $data['brand']=$notebook->brand;
    $data['model']=$notebook->model;
    $data['cpu']=$notebook->cpu;
    $data['gpu']=$notebook->gpu;
    $data['ram']=$notebook->ram;
    $data['hdd']=$notebook->hdd;
    $data['ssd']=$notebook->ssd;
    $data['description']=$notebook->description;
    $data['price']=$notebook->price;
    $result=$this->dbase->add($this->table,$data);
    if ($result) {
        return true;
    }

  }
}
 ?>
