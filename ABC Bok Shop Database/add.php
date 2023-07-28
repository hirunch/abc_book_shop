<?php

    $con =mysqli_connect("localhost", "root", "", "abc_book_shop");

    if(!$con){
        die ("Not connected" .mysqli_connect_error());

    }else{
        echo "Conneted";

    }


    $update = "UPDATE books SET title = '$_POST[bktitle]', author_id = '$_POST[aid]', genre_id ='$_POST[gid]', publication_date = '$_POST[pdate]', price = '$_POST[bprice]' WHERE book_Id = '$_POST[bkid]'";

    $query = mysqli_query($con, $update);

    if($query){
        echo "update Sucsussfull";
    }else{
        echo "error";
    }

    mysqli_close($con);


?>