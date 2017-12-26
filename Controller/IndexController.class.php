<?php
require './Controller/Controller.class.php';
class IndexController extends Controller{
    public function index(){
        
        $data = M("Admin")->getAdminList();

        $this->smarty->assign("list",$data);
        $this->smarty->display("index.tpl");
    }
    
}
