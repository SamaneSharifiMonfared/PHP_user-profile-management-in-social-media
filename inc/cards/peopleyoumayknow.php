<div class="card shadow-sm">
            <div class="card-body">
                <p>People you may know:</p>
                <?php
                foreach ($users as $user){
                    $img=$user[5];
                    $name=$user[1];
                    ?>

                    <img src="img/<?=$img?>" alt="img/<?=$img?>" class="rounded-circle ml-3 d-none d-md-block" width="32px" height="32px">
                    <p><?=$name?></p>
                    <button type="button" class="btn btn-outline-info  btn-sm" ><i class="fas fa-user-friends"></i>Follow</button>
<?php

                }
                ?>

            </div>

        </div>