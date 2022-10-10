<?php
    include("conect.php");
    session_start();
    if(empty($_SESSION['id']))
    {
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<center>
    <style>
        body
        {
            background-color : #f0f2f5;
        }
        table#a
        {
            width : 50%;
            margin : 5%;
            border: 2px solid black;
            border-radius: 25px;
        }
        nav#nav
        {
            top: 0.1;
            position: sticky;
            z-index: 1;
            position: fixed;
            width: 100%;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <div class="container">
            <a class="navbar-brand" href="insert.php">Go to Insert</a>
            <a class="navbar-brand" href="logout.php">logout</a>
        </div>
    </nav>
    <br>
    <table id="a" class="table">
        <tr>
            <th scope="col">ชื่อแพลตฟอร์ม</th>
            <th scope="col">รหัสผ่าน</th>
            <th scope="col">แก้ไข</th>
            <th scope="col">ลบ</th>
        </tr>
       
            <?php
            if(isset($_SESSION['id']))
            {
                $ids = $_SESSION['id'];
                $sql = "select idp,pn,pp from dataa where id ='$ids'";
                $result = mysqli_query($connect,$sql);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
            ?>
                     <tr>
                        <td scope="row"><?php print($row['pn'])?></td>
                        <td><?php print($row['pp'])?></td>
                        <td><a href="edit.php?idp=<?php print($row['idp'])?>"><button class="btn btn-secondary">แก้ไข</button></a><br></td>
                        <td><a href="del.php?idp=<?php print($row['idp'])?>"><button class="btn btn-danger">ลบ</button></a><br></td>
                    </tr>
                    
            <?php
            
                
                    }
                }
            }
            ?>
    </table>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>