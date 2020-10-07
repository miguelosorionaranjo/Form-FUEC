<?php
 
    function obtenerFuec() {
        include 'database.php';

        $query = "SELECT * FROM task";
        $result = mysqli_query($connection, $query);

        $json = array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'id' => $row['id'],
                'fuec' => $row['fuec'],
        
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

?>

