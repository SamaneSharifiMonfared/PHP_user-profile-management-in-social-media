<?php

include_once "../functions/connection.php";
include_once "../functions/queries.php";
include_once "../assets/header.php";

if(isset($_POST["submit"])) {  //This is the value recieved from the button
    $id = $_POST["submit"];
    $id= $id-1; //because this is the id and it is always 1 less that the iterration
}else{
    die();
}


?>
<body>

<!-------------------------------NAvigation Starts------------------>

<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">
    <a href="../index.php" class="navbar-brand"><img src="../img/brand-white.png" alt="logo" class="img-fluid" width="80px" height="100px"></a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>


    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">
            <li class="nav-item"><a href="../index.php" class="nav-link active">home</a></li>


        </ul>

    </div>


</nav>

<!---------------------------------------------Ends navigation------------------------------>


<div class="col-12 col-lg-6">

    <div class="left-column">
        <div class="card card-left1 mb-4" >
            <img src="../img/photo-1455448972184-de647495d428.jpg" alt="" class="card-img-top img-fluid">
            <div class="card-body text-center ">
                <img src="../img/<?=$users[$id][5]; ?>" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
                <h5 class="card-title"><?=$users[$id][1]; ?></h5>

            </div>

        </div>
        <div class="card shadow-sm card-left2 mb-4">

            <div class="card-body">
                <?php //if this user is followed already we will not show follow , we will show unfollow

                if($users[$id][9]!="yes"){
                    ?>
                <form method="post" action="follow.php">
                <button type="submit" name="submit" value="<?=$id+1?>" class="btn btn-outline-info  btn-sm"  ><i class="fas fa-user"></i>Follow <?=$name?></button>

                </form>
                <br>
                <?php }else{ //showing the unfollow button
                ?>
                <form method="post" action="unfollow.php">
                    <button type="submit" name="submit" value="<?=$id+1?>" class="btn btn-outline-info  btn-sm"  ><i class="fas fa-user"></i>Unfollow <?=$name?></button>

                </form>
                <?php }?>
                <br>

                <ul class="justify-content-center">

                    <li class="nav-item">Name <p><?= $users[$id][1]; ?></p></li>
                    <li class="nav-item">Email <p><?= $users[$id][2]; ?></p></li>
                    <li class="nav-item">Phone  <p><?= $users[$id][4]; ?></p></li>
                    <li class="nav-item">Birthdate <p><?= $users[$id][6]; ?></p></li>
                    <li class="nav-item">Bio<p><?= $users[$id][7]; ?></p></li>
<!--                        <button type="button" name="deleteimage()" class="btn btn-sm btn-primary">Delete Image</button>-->
                </ul>

            </div>


        </div>

    </div>
</div>



<!------------------------Light BOx OPtions------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>