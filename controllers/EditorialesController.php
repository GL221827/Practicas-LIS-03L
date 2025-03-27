<?php
require_once 'Controller.php';
require_once 'models/EditorialesModel.php';

class EditorialesController extends Controller{
    private $model;

    function __construct(){
        $this->model= new EditorialesModel();
    }

    public function index(){
      //echo "Lista de editoriales";
      $viewBack=[];
      $viewBack['editoriales']=$this->model->get();
      $this->render("index.php",$viewBack);
    }


    public function create(){
        //echo "Creando nueva editorial";
        $this->render("new.php");

    }
}

?>