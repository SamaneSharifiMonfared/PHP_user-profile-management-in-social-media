<!-------------------------------------------Start Grids layout for lg-xl-3 columns and (xs-lg 1 columns)--------------------------------->


<div class="container">
    <div class="row">


        <!--------------------------left columns  start-->

        <div class="col-12 col-lg-3">

            <div class="left-column">


                <div class="card card-left1 mb-4" >
                    <img src="img/photo-1455448972184-de647495d428.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body text-center ">
                        <img src="../img/<?=$users[6][5]; ?>" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
                        <h5 class="card-title"><?=$users[6][1]; ?></h5>
                        <p class="card-text text-justify mb-2"><?=$users[6][7];?></p>


                    </div>




                </div>


                <div class="card shadow-sm card-left2 mb-4">

                    <div class="card-body">

                        <h5 class="mb-3 card-title">Profile <small><a href="pages/editprofile.php" class="ml-1">Edit</a></small></h5>

                        <ul class="justify-content-center">

                            <li class="nav-item">Email <br> <strong><?= $users[6][2]; ?></strong></li>
                            <li class="nav-item">Phone <br> <strong><?= $users[6][4]; ?></strong></li>
                            <li class="nav-item">Birthdate <br> <strong><?= $users[6][6]; ?></strong></li>
                            <li class="nav-item">Following <br> <strong><?php

                                    foreach($users as $u) {
                                        if($u[0]==$users[6][10]){
                                            echo $u[1];
                                        }

                                    }
                                    ?></strong></li>

                        </ul>


                    </div>


                </div>




                <div class="card shadow-sm card-left3 mb-4">

                    <div class="card-body">
                        <h5 class="card-title">Photos<small class="ml-2"><a href="#">.Edit </a></small></h5>

                        <div class="row">
                            <div class="col-6 p-1">
                                <a href="img/left1.jpg" data-lightbox="id" ><img src="img/left1.jpg" alt="img" class="img-fluid my-2"></a>
                                <a href="img/left2.jpg"data-lightbox="id"><img src="img/left2.jpg" alt="img" class="img-fluid my-2"></a>
                                <a href="img/left3.jpg"data-lightbox="id"><img src="img/left3.jpg" alt="img" class="img-fluid my-2"></a>

                            </div>


                            <div class="col-6 p-1">
                                <a href="img/left4.jpg"data-lightbox="id"><img src="img/left4.jpg" alt="img" class="img-fluid my-2"></a>
                                <a href="img/left5.jpg"data-lightbox="id"><img src="img/left5.jpg" alt="img" class="img-fluid my-2"></a>
                                <a href="img/left6.jpg"data-lightbox="id"><img src="img/left6.jpg" alt="img" class="img-fluid my-2"></a>

                            </div>

                        </div>

                    </div>







                </div>












            </div>





        </div>








        <!--------------------------Ends Left columns-->
