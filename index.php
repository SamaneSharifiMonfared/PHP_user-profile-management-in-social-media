<?php


include_once "functions/connection.php";
include_once "functions/queries.php";
include_once "assets/header.php";


?>
<body>

<?php

include_once "inc/navigationbar.php";
include_once "inc/modal.php";
include_once "inc/leftcolumn.php";
include_once "inc/middlecolumn.php";
include_once "inc/rightcolumn.php";

?>


<?php
$sqlConn->CloseCon($conn);

?>


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