<?php
    $con=mysqli_connect("localhost", "root", "", "mabellelingerie");

    // Pegando os dados da Categoria

function getCats() {

    global $con;

        $get_cats = "select * from categoria";
        $run_cats = mysqli_query($con, $get_cats);

while ($row_cats = mysqli_fetch_array($run_cats)) {
            
            $cat_id = $row_cats['cat_id'];
            $cat_title = $row_cats['cat_title'];

        echo "<li <a href='$'>$cat_title</a></li>";
    }
}

function getMarca() {

    global $con;

        $get_marca = "select * from marcas";
        $run_marca = mysqli_query($con, $get_marca);

while ($row_marca = mysqli_fetch_array($run_marca)) {
            
            $marca_id = $row_marca['marca_id'];
            $marca_title = $row_marca['marca_title'];

        echo "<li <a href='$'>$marca_title</a></li>";
    }
}

?>