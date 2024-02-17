<?php
    function custom_date_format() {
        $formatted_date = date("d-F-Y");
        return $formatted_date;
    }

   
    echo "Hari ini : " . custom_date_format();
?>