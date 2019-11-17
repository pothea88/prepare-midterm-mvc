<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <a href="index.php?action=add" class="btn btn-success">Add New</a>
        </div>
    </div>
    <table class="table table-bordered table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Mark</th>
                <th>Sex</th>
            </tr>
        </thead>
        <?php
            if(isset($data['view'])){
                foreach($data['view'] as $result){
        ?>
        <tbody>
            <tr>
                <td><?php echo $result['id'];?></td>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['class'];?></td>
                <td><?php echo $result['mark'];?></td>
                <td><?php echo $result['sex'];?></td>
            </tr>
        </tbody>
        <?php
               }
            }
        ?>
    </table>
    </div>
</body>
</html>