<HTML>
<BODY bgcolor="#FFFFFF">

<?php

//include charts.php to access the InsertChart function
include "charts.php";
//$chart [ 'chart_border' ] = array ( 'top_thickness'=>0, 'bottom_thickness'=>4, 'left_thickness'=>4, 'right_thickness'=>4 );
echo InsertChart ( "charts.swf", "charts_library", "sample.php", 400, 400 );

?>

</BODY>
</HTML>
