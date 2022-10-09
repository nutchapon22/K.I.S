<?php
    session_start();
    $idp = $_GET['idp'];
    include("conect.php");
    $idd = $_SESSION['id'];
    $sql = "SELECT * FROM dataa WHERE idp = $idp";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row == 0)
    {
      echo "error ".$sql."<br>".mysqli_error($connect);
    }
    else
    {
?>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Edit</title>
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
            margin : 10%;
        }
    </style>
        <center>
        <div class="row">
            <div class="col-xl-12">
                <div id="ff">
                    <h2 id="log">edit</h2>
                    <form action="" method="post" id="f">
                        <div class="form-group">
                            <input type="text" class="form-control" name="pnp" value="<?php print($row['pn'])?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ppp" value="<?php print($row['pp'])?>">
                        </div>
                        <input type="submit" value="Submit" name="s"  class="btn btn-primary btn-lg btn-block">
                        <input type="reset" value="Reset"  class="btn btn-primary btn-lg btn-block">
                    </form>
                    <a href="main.php">Back</a>
                </div>
            </div>
        </div>
        </center>
        <?php
            if(isset($_POST['s']))
            {
                $s = $row['idp'];
                $pnp = $_POST['pnp'];
                $ppp = $_POST['ppp'];
                $sql = "update dataa set pn = '$pnp', pp = '$ppp' where idp = $idp";
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
<?php
    }
?>