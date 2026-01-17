<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', '1');//https://pharmabag.in:3000/filter?skip=0&q={"gte":"","lte":"","city":"","category":"Ethical","limit":"12","sort":"_id"}
?>
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">

                    <?php 
require_once "./vendor/leafs/fetch/src/Fetch.php";

use function Leaf\fetch;
$res1 = fetch("https://pharmabag.in:3000/user/get/all/category");
$res2 = fetch("https://pharmabag.in:3000/user/get/all/subcategory");
$html='';
for ($i=0; $i <count($res1->data) ; $i++) { 
    $html.=<<<hhh
 <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="../shop.php?category={$res1->data[$i]->category_name}">{$res1->data[$i]->category_name}</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">
                                                <ul class="megamenu-list row">
hhh;
 for ($j=0; $j < count($res2->data); $j++) { 
    if($res2->data[$j]->parent==$res1->data[$i]->_id){
    $html.='<li class="col-6 col-md-3"><a href="../shop.php?subcategory='.$res2->data[$j]->subcategory_name.'">'.$res2->data[$j]->subcategory_name.'</a></li>';
          }                                          
                                                 
    }
    $html.="</ul></div></div></div></div></div></li>";


   
       


}
echo $html;
?>   
                       
 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

