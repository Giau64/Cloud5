<?php 
    $conn = pg_connect("postgres://fgvagbwtbigacm:344dc83ac14b1ecdc8c6fbd8705bbff0ce2dc7b8a2249caec69bceb51474c3c1@ec2-34-226-18-183.compute-1.amazonaws.com:5432/d8lg8vuvtkkrvi");
            or die("Can not connect database".pg_connect_errormessage());
?>