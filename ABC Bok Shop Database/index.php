<?php

    $con = mysqli_connect("localhost", "root", "", "abc_book_shop");

    if(!$con){

        die ("Not Connected");

    }else{
        echo "connected";

        echo nl2br("\n");
        echo "<br>";
    }

    $sql = "INSERT INTO books(book_Id,title,author_id,genre_id,publication_date,price)
    VALUES
    ('$_POST[bkid]',
    '$_POST[bktitle]',
    '$_POST[aid]',
    '$_POST[gid]',
    '$_POST[pdate]',
    '$_POST[bprice]')
    ";

    $query = mysqli_query($con, $sql);

    if($query){
        echo "Data Added Sucussfull";

    }else{

        echo "Error";
    }

    mysqli_close($con);



?>