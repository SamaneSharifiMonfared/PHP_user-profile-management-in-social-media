<div class="card shadow-sm">
            <div class="card-body">
                <form method="post" action="pages/seeprofile.php">
                <p>People you may know:</p>
                <?php
                foreach ($users as $user){
                    if($user[10]!="yes"){//if the user is the primary user we dont need it
                    $img=$user[5];
                    $name=$user[1];
                    $id=$user[0];

                    ?>
                    <img src="img/<?=$img?>" alt="img/<?=$img?>" class="rounded-circle ml-3 d-none d-md-block" width="32px" height="32px">
                    <p><?=$name?></p>

                    <button type="submit" name="submit" value="<?=$id?>" class="btn btn-outline-info  btn-sm" ><i class="fas fa-user"></i>See Profile <?=$name?></button>
<?php
                }}
                ?>
                </form>
            </div>

        </div>