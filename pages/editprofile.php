<?php
include_once "../functions/connection.php";
include_once "../functions/queries.php";
include_once "../assets/header.php";

//saving the information
if(isset($_POST["name"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];
    $image = $_POST['image'];
    $birthdate = $_POST['birthdate'];


    $q="UPDATE `socialmedia`.`users` SET `name` = '$name', `email` = '$email', `img` = '$image', `birthdate` = '$birthdate', `bio` = '$bio' WHERE (`id` = '7');";

    if ($conn->query($q) === TRUE) {
       echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
}

    $sqlConn->CloseCon($conn);

}
//if(isset($_POST["submit"])){

//}



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
                <img src="../img/<?=$users[6][5]; ?>" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
                <h5 class="card-title"><?=$users[6][1]; ?></h5>



            </div>




        </div>
        <div class="card shadow-sm card-left2 mb-4">

            <div class="card-body">

                <h5 class="mb-3 card-title">Edit Profile</h5>

                <ul class="justify-content-center">


                    <form action="editprofile.php" method="POST">

                    <li class="nav-item">Name <input type="text" name="name" value="<?= $users[6][1]; ?>"></li>
                    <li class="nav-item">Email <input type="email" name="email" value="<?= $users[6][2]; ?>"></li>
                    <li class="nav-item">Phone  <input type="text" name="phone" value="<?= $users[6][4]; ?>"></li>
                    <li class="nav-item">Birthdate <input type="date" name="birthdate" value="<?= $users[6][6]; ?>"></li>
                    <li class="nav-item">Bio <input type="text" name="bio" value="<?= $users[6][7]; ?>"></li>
                     <li class="nav-item">Change Profile Picture <input type="file" name="image" accept="image/*" value="<?= $users[6][5]; ?>" /></li>


                        <input type="submit" name="Save" value="save">


                    </form>
                </ul>


            </div>


        </div>

    </div>
</div>




<!------------------------Light BOx OPtions------------->
<script>
    lightbox.option({

    })
</script>

<!------------------------Light BOx OPtions------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>