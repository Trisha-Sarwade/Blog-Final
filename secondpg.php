<?php
include 'dbconnect.php';

echo 
'<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="secondpg1.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/applause-button/dist/applause-button.css">
    <title>Hello, world!</title>
</head>

<body>
    <h1 class="text-center my-5 heading">Desired Heading</h1>
    <div class="everything">
        <div class="loq">
            <button id="btton">Questions</button>
            <aside id="mainAside" class="Aside animation">
                <ul class="navbar-nav pl-3">';
                $idobtained=$_GET['blogid'];
                $sql = "SELECT * FROM `conversation`";
                $result = mysqli_query($conn, $sql);
                while($row =  mysqli_fetch_assoc($result))
                {
                $id = $row['blogid'];
                if($id == $idobtained)
                    {
                        $SNo = $row['S.No'];
                        $QSummary = $row['QSummary'];
                        $Question = $row['Question'];
                        $Answer = $row['Answer'];
                        echo '<li class="links nav-item"><a class="nav-link"href="index.html"><span class="py-1" id="nl1"><details><summary class="summ">'.$QSummary.'</summary><p>'.$Question.'</p></details></span></a></li>';
                    }
                }
                echo '
                </ul>
            </aside>
        </div>


        <div class="text-center cntnt " id="cntnt">

            <div class="contactinfo">
                <div style="width: 33.33%;" id="l1">Priyanshu Gautam</div>
                <div style="width: 33.33%;" id="l2">Intern at home</div>
                <div style="width: 33.33%;" class="linked" id="l3"><span><i class="fab fa-facebook-square ico"></i></span>
                    <i class="fab fa-linkedin ico"></i> <i class="fab fa-instagram ico"></i>
                </div>
            </div>
            <p class="lead m-0" style="text-align: end;"><i>Interviewed By: Salman khan</i> </p>
            
            <div class="conv">';
            $idobtained=$_GET['blogid'];
            $sql = "SELECT * FROM `conversation`";
            $result = mysqli_query($conn, $sql);
            while($row =  mysqli_fetch_assoc($result))
            {   
            $id = $row['blogid'];
            if($id == $idobtained)
            {
                $SNo = $row['S.No'];
                $QSummary = $row['QSummary'];
                $Question = $row['Question'];
            
                $Answer = $row['Answer'];

                echo '<div class="qna allblur">
                <div class="q">';
                echo $Question.'
                </div><br>
                <div class="a pb-3">';
                echo $Answer.'
                </div>
                <hr class="separator">
                </div>';
            }
            
            }
              
              
    echo'
    <div class="container-fluid " id="b1">
        <div class="row d-flex">

            <div class="col-12 c1">
                <button type="button" id="btton1" onclick="window.location="#"">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <h6 class="btl">Back to list</h6>
            </div>
            <script type="text/javascript" src="https://unpkg.com/applause-button/dist/applause-button.js"></script>
            <script type="text/javascript" src="secondpg.js"></script>
            <script src="https://kit.fontawesome.com/c6d6973d4d.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
</body>

</html>';
?>