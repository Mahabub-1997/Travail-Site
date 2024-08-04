<?php
require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;
use App\classes\Student;

$product= new Product();

$student = new Student();
$student=$student->student();


$category= new Category();
$category=$category->allCategory();


$product=$product->allProduct();

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        $product= new Product();
        $product=$product->allProduct();
        include 'pages/home.php';
    }elseif ($_GET['page']=='details'){
        $product_id=$_GET['id'];
        $product = new Product();
         $product = $product->detailsProduct($product_id);
        include 'pages/details.php';
    }
    elseif ($_GET['page']=='category'){
        $category_id=$_GET['id'];
        $product= new Product();
        $products = $product->productByCategory($category_id);
      include ('pages/category.php');
    }
}