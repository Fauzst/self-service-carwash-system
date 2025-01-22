<?php
    
    if(isset($_POST["finish_transact"]))
    {
        echo "<script> alert('Transaction Completed!') </script>";
        header("Location: ../index.php");
        exit;
    }

    
?>