<?php

// Check if values where passed by url, if not then defaul to today date

if (isset($_GET['day']) && $_GET['month'] && $old_year = $_GET['year'] ) {
    
    $old_day = $_GET['day'];
    $old_month = $_GET['month'];
    $old_year = $_GET['year'];
    
} else {
    
   // set the default timezone to use.
    date_default_timezone_set('America/Chicago');

    $today = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
    
    $old_day = date("d", $today);
    $old_month = date("m", $today);
    $old_year = date("Y", $today);
   
}
 

    //Este bloque es para probar que la fecha que estamos recibiendo sea la correcta.

    $last_date = mktime(0, 0, 0, date("$old_month"), date("$old_day"), date("$old_year"));
    
    //Convierte la fecha al formato MM-DD-YYYY
    $last_date_mdy = date("m-d-Y ", $last_date);

    //Convierte el dia de la fecha al formato escrito (ej: Lunes)
    $last_date_l = date("l", $last_date);

    //Convierte el Mes a formato escrito y el dia en numeros (ej: Marzo 20)
    $last_date_l_m = date("M d", $last_date);



// +7
$new_date_7 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+7, date("$old_year"));
$new_date_mdy_7 = date("m-d-Y", $new_date_7);
$new_date_l_7 = date("l", $new_date_7);
$new_date_l_m_7 = date("M d", $new_date_7); 

// +6 
$new_date_6 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+6, date("$old_year"));
$new_date_mdy_6 = date("m-d-Y", $new_date_6);
$new_date_l_6 = date("l", $new_date_6);
$new_date_l_m_6 = date("M d", $new_date_6);

// +5
$new_date_5 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+5, date("$old_year"));
$new_date_mdy_5 = date("m-d-Y", $new_date_5);
$new_date_l_5 = date("l", $new_date_5);   
$new_date_l_m_5 = date("M d", $new_date_5);

// +4
$new_date_4 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+4, date("$old_year"));
$new_date_mdy_4 = date("m-d-Y", $new_date_4);
$new_date_l_4 = date("l", $new_date_4);
$new_date_l_m_4 = date("M d", $new_date_4);

// +3
$new_date_3 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+3, date("$old_year"));
$new_date_mdy_3 = date("m-d-Y", $new_date_3);
$new_date_l_3 = date("l", $new_date_3);
$new_date_l_m_3 = date("M d", $new_date_3);

// +2
$new_date_2 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+2, date("$old_year"));
$new_date_mdy_2 = date("m-d-Y", $new_date_2);
$new_date_l_2 = date("l", $new_date_2);
$new_date_l_m_2 = date("M d", $new_date_2);

// +1
$new_date_1 = mktime(0, 0, 0, date("$old_month")  , date("$old_day")+1, date("$old_year"));
$new_date_mdy_1 = date("m-d-Y", $new_date_1);
$new_date_l_1 = date("l", $new_date_1);
$new_date_l_m_1 = date("M d", $new_date_1);



// genero las variables para pasar el dia a la pagina correspondiente

$d_p = date("d", $last_date)-1;   //  << Previous
$m_p = date("m", $last_date);
$y_p = date("Y", $last_date);

$d_n = date("d", $last_date)+1;    //  Next >>
$m_n = date("m", $last_date);
$y_n = date("Y", $last_date);

// variables para generar los botones con el dia y la fecha

$d = date("d", $last_date);
$m = date("m", $last_date);
$y = date("Y", $last_date);

$d_1 = date("d", $new_date_1);
$m_1 = date("m", $new_date_1);
$y_1 = date("Y", $new_date_1);

$d_2 = date("d", $new_date_2);
$m_2 = date("m", $new_date_2);
$y_2 = date("Y", $new_date_2);

$d_3 = date("d", $new_date_3);
$m_3 = date("m", $new_date_3);
$y_3 = date("Y", $new_date_3);

$d_4 = date("d", $new_date_4);
$m_4 = date("m", $new_date_4);
$y_4 = date("Y", $new_date_4);

$d_5 = date("d", $new_date_5);
$m_5 = date("m", $new_date_5);
$y_5 = date("Y", $new_date_5);

$d_6 = date("d", $new_date_6);
$m_6 = date("m", $new_date_6);
$y_6 = date("Y", $new_date_6);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Making the menu dynamic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="date-active.php?<?php echo 'month=' . $m_p . '&day=' . $d_p . '&year=' . $y_p; ?>"><?php echo "<<"; ?></a></li>
         
        <li><a class="active" href="date-active.php?<?php echo 'month=' . $m . '&day=' . $d . '&year=' . $y; ?>"><?php echo $last_date_l; ?>  <br>  <?php echo $last_date_l_m; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_1 . '&day=' . $d_1 . '&year=' . $y_1; ?>"><?php echo $new_date_l_1; ?>  <br>  <?php echo $new_date_l_m_1; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_2 . '&day=' . $d_2 . '&year=' . $y_2; ?>"><?php echo $new_date_l_2; ?>  <br>  <?php echo $new_date_l_m_2; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_3 . '&day=' . $d_3 . '&year=' . $y_3; ?>"><?php echo $new_date_l_3; ?>  <br>  <?php echo $new_date_l_m_3; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_4 . '&day=' . $d_4 . '&year=' . $y_4; ?>"><?php echo $new_date_l_6; ?>  <br>  <?php echo $new_date_l_m_4; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_5 . '&day=' . $d_5 . '&year=' . $y_5; ?>"><?php echo $new_date_l_5; ?>  <br>  <?php echo $new_date_l_m_5; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_6 . '&day=' . $d_6 . '&year=' . $y_6; ?>"><?php echo $new_date_l_6; ?>  <br>  <?php echo $new_date_l_m_6; ?></a></li>
        
        <li><a href="date-active.php?<?php echo 'month=' . $m_n . '&day=' . $d_n . '&year=' . $y_n; ?>"><?php echo ">>"; ?></a></li>
    </ul>

</nav>

</body>
</html> 