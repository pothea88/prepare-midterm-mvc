<?php
    function get_data() {
        $query = "SELECT * FROM student";
        include_once "connection.php";
        $data = mysqli_query($database,$query);
        $rows = [];
        if($data && mysqli_num_fields($data) > 0 ){
            foreach ($data as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }
    function m_add($get){
        $fullname = $_POST['user'];
        $class = $_POST['class'];
        $mark = $_POST['num'];
        $sex = $_POST['sex'];
        include_once "connection.php";
        $query = "INSERT INTO student(name, class, mark, sex) VALUES('$fullname','$class','$mark','$sex')";
        $add = mysqli_query($database,$query);
        return $add;
    }
?>
