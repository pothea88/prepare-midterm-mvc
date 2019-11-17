<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['view'] = get_data();
        $data['page'] = "exam/view";
    }
    function add(&$data){
        $data['page'] = "exam/add";
    }
    function get_add(&$data){
        $result = m_add($_POST);
        if($result == true){
            $action = 'view';
        }else{
            $action = 'add';
        }
        header("Location: index.php?action=$action");
    }
?>