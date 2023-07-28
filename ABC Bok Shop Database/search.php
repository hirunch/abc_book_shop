<?php



    $con = mysqli_connect("localhost", "root", "", "abc_book_shop");

    if(!$con){
        die ("Not Conneted" .mysqli_connect_error());

    }else{

        echo "conneted ";

        echo nl2br("\n");
        echo "<br> <br>";


    }



    $sql = "SELECT * FROM  books WHERE  book_Id  LIKE '$_GET[bookid]'";

    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);

    if($row){
        echo "Book Id : ". $row['book_Id'];
        echo nl2br("\n");
        echo "Book Title: " .$row['title'];
        echo nl2br("\n");
        echo "Author Id: " .$row['author_id'];
        echo nl2br("\n");
        echo "Genre ID: " .$row['genre_id'];
        echo nl2br("\n");
        echo "Publication Date: " .$row['publication_date'];
        echo nl2br("\n");
        echo "Price: " .$row['price'];
    }else{
        echo "Error";
    }

    mysqli_close($con);


?>