<?php
  include "conect.php";
  if(isset($_GET['idp']))
  {
    $idp = $_GET['idp'];
    $sql = "DELETE FROM dataa WHERE idp = $idp";
    $result = mysqli_query($connect,$sql);
    mysqli_close($connect);
    header('location: main.php');
  }