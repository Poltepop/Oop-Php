<?php
    require_once "data/Category.php";

    use Data\Category;

    $category = new Category();
    $category->setName("Mangga");
    echo $category->getName();

    $category->setExpensive(TRUE);
    echo $category->getExpensive();

?>