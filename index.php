<?php
    include('database.php');



    $query = "SELECT * FROM users WHERE name='Eswar'";


    $query_result = mysqli_query($connection, $query); // executes query and returns a query object.

    if(mysqli_num_rows($query_result) > 0){  // gives number of rows available in query object
        while($rows = mysqli_fetch_assoc($query_result)){ //fetches rows(if any)from query object one after another.
            foreach($rows as $row){
                echo $row,'<br>';
            }
        };
    }
    else{
        echo 'No User Found';
    };
    
    
    mysqli_close($connection);

?>