<?php
    if(isset($success_msg)){
        foreach($success_msg as $success_msg) {
            echo '<script>swal("'.$success_msg.'", "", "success");</script>';
        }
    }
    if(isset($warning_msg)){
        foreach($warning_msg as $warning_msg) {
            echo '<script>swal("'.$warning_msg.'", "", "success");</script>';
        }
    }
    if(isset($info_msg)){
        foreach($info_msg as $info_msg) {
            echo '<script>swal("'.$info_msg.'", "", "success");</script>';
        }
    }
    if(isset($erorr_msg)){
        foreach($erorr_msg as $erorr_msg) {
            echo '<script>swal("'.$erorr_msg.'", "", "success");</script>';
        }
    }
?>