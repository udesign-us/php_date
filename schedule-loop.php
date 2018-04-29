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
 
    //Este bloque es para generar las variables de la fecha seleccionada por el ususario o dia de hoy por default.

    $last_date = mktime(0, 0, 0, date("$old_month"), date("$old_day"), date("$old_year"));
    
    //Convierte la fecha al formato MM-DD-YYYY
    $last_date_mdy = date("m-d-Y ", $last_date);

    //Convierte el dia de la fecha al formato escrito (ej: Lunes)
    $last_date_l = date("l", $last_date);

    //Convierte el Mes a formato escrito y el dia en numeros (ej: Marzo 20)
    $last_date_l_m = date("M d", $last_date);


// aqui comienza el loop para creear las variable que seran usadas para determinar los dias del menu

$i = 1;

while($i <= 6) {
    
    // variables para generar los botones con el dia y la fecha
    
    ${'new_date_' . $i} = mktime(0, 0, 0, date("$old_month"), date("$old_day")+$i, date("$old_year"));
    ${'new_date_mdy_' . $i} = date("m-d-Y", ${'new_date_' . $i});
    ${'new_date_l_' . $i} = date("l", ${'new_date_' . $i});
    ${'new_date_M_d_' . $i} = date("M d", ${'new_date_' . $i}); 
    
    // divido la fecha por dia, mes y ano para pasar los argumentos en el url
    
    ${'d_' . $i} = date("d", ${'new_date_' . $i});
    
    ${'m_' . $i} = date("m", ${'new_date_' . $i});

    ${'y_' . $i} = date("Y", ${'new_date_' . $i});

    
$i++;
} 

// genero las variables para pasar el dia a la pagina correspondiente


$d = date("d", $last_date);       // Dia seleccionado
$m = date("m", $last_date);
$y = date("Y", $last_date);

$d_p = date("d", $last_date)-1;   //  << Previous
$m_p = date("m", $last_date);
$y_p = date("Y", $last_date);

$d_n = date("d", $last_date)+1;    //  Next >>
$m_n = date("m", $last_date);
$y_n = date("Y", $last_date);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Making the menu dynamic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="topBar">
    <p>Pools Pro</p>
    <nav id="topMenu">
        <ul>
            <li> <a href="oficina.php">Oficina</a> </li>
            <li> <a href="clientes.php">Clientes</a> </li>
            <li> <a href="schedule.php">Calendario</a> </li> 
            <li> <a href="trabajos.php">Trabajos</a> </li>
            <li> <a href="estimadps.php">Estimados</a> </li>
            <li> <a href="invoices.php">Invoices</a> </li>
            <li> <a href="reportes.php">Reportes</a> </li>
        </ul>
            
    </nav>
</div>
<nav id="schedule">
    <ul id="schedule">
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_p . '&day=' . $d_p . '&year=' . $y_p; ?>"><?php echo "<<" . "<br>" . ". ";; ?></a></li>
         
        <li><a class="active" href="schedule-loop.php?<?php echo 'month=' . $m . '&day=' . $d . '&year=' . $y; ?>"><?php echo $last_date_l; ?>  <br>  <?php echo $last_date_l_m; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_1 . '&day=' . $d_1 . '&year=' . $y_1; ?>"><?php echo $new_date_l_1; ?>  <br>  <?php echo $new_date_M_d_1; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_2 . '&day=' . $d_2 . '&year=' . $y_2; ?>"><?php echo $new_date_l_2; ?>  <br>  <?php echo $new_date_M_d_2; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_3 . '&day=' . $d_3 . '&year=' . $y_3; ?>"><?php echo $new_date_l_3; ?>  <br>  <?php echo $new_date_M_d_3; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_4 . '&day=' . $d_4 . '&year=' . $y_4; ?>"><?php echo $new_date_l_6; ?>  <br>  <?php echo $new_date_M_d_4; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_5 . '&day=' . $d_5 . '&year=' . $y_5; ?>"><?php echo $new_date_l_5; ?>  <br>  <?php echo $new_date_M_d_5; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_6 . '&day=' . $d_6 . '&year=' . $y_6; ?>"><?php echo $new_date_l_6; ?>  <br>  <?php echo $new_date_M_d_6; ?></a></li>
        
        <li><a href="schedule-loop.php?<?php echo 'month=' . $m_n . '&day=' . $d_n . '&year=' . $y_n; ?>"><?php echo ">>" . "<br>" . ". "; ?></a></li>
    </ul>

</nav>

</body>
</html> 