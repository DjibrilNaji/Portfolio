<?php

function visiteur($record)
{
    $db_host = "sio-hautil.eu";
    $db_username = "najid";
    $db_password = "Djibs785";
    $db_name = "najid";
    $db_table = "compteurVisitePortfolio";
    $counter_page = "access_page";
    $counter_field = "access_counter";

    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or ("Host non disponible");
    $sql_call = "INSERT INTO " . $db_table . " (" . $counter_page . ", " . $counter_field . ") VALUES ('" . $record . "', 1) ON DUPLICATE KEY UPDATE " . $counter_field . " = " . $counter_field . " + 1";
    mysqli_query($db, $sql_call) or die("erreur d‘insertion");
    $sql_call = "SELECT " . $counter_field . " FROM " . $db_table . " WHERE " . $counter_page . " = '" . $record . "'";
    $sql_result = mysqli_query($db, $sql_call) or ("SQL-demande refusée");
    $row = mysqli_fetch_assoc($sql_result);
    $x = $row[$counter_field];

    mysqli_close($db);
    return $x;
}



