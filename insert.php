<?php
    session_start();
    include("conect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>
        body
        {
            background-color : #f0f2f5;
        }
        div#ff
        {
            width: 40%;
            height : auto;
            margin-top: 5%;
            border: 1px solid black;
            border-radius: 25px;
            background-color : white;
        }
        h2#log
        {
            margin: 5%;
            font-size : 401%;
        }
        form#f
        {
            margin : 20px;
        }
    </style>
    <center>
    <div class= "row">
        <div class ="col-xl-12">
            <div id="ff">
            <h2 id="log">insert</h2>
            <form action="" method="post" id="f">
                <div class="form-group">
                    <input type="text" class="form-control" name="pn" placeholder="Platform Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="pp" placeholder="Platform Password">
                </div>
                <!-- <input type="text" name="pn" id=""><br>
                <input type="text" name="pp" id=""><br> -->
                <input type="submit" value="Submit" name="s" class="btn btn-primary btn-lg btn-block">
                <input type="reset" value="Reset" class="btn btn-primary btn-lg btn-block">
            </form>
            <a href="main.php">Back</a>
            </div>
        </div>
    </div>
    </center>
    <?php
        if(isset($_POST['s']))
        {
            $pn = $_POST['pn'];
            $pp = $_POST['pp'];
            $idd = $_SESSION['id'];
            $sql = "insert into dataa (pn,pp,id)
                        values ('$pn','$pp','$idd')";
                $result = mysqli_query($connect,$sql);
                if($result)
                {
                    header('Location: main.php');
                    exit(0);
                }
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>