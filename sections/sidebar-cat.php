<aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i>
                    <span>categories</span>
                </h4>
                <button class="category-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="category-list">
                
                                  <?php 
require_once "./vendor/leafs/fetch/src/Fetch.php";

use function Leaf\fetch;
$res1 = fetch("https://pharmabag.in:3000/user/get/all/category");
$res2 = fetch("https://pharmabag.in:3000/user/get/all/subcategory");
$html='';
for ($i=0; $i <count($res1->data) ; $i++) { 
    $html.=<<<hhh
<li class="category-item">
                    <a class="category-link dropdown-link " >
                        <i class="fas fa-caret-down"></i>
                        <span onclick="location.href='../shop.php?category={$res1->data[$i]->category_name}'">{$res1->data[$i]->category_name}</span>
                    </a>
                    
               

<ul class="dropdown-list">

hhh;
 for ($j=0; $j < count($res2->data); $j++) { 
    if($res2->data[$j]->parent==$res1->data[$i]->_id){
    $html.='<li><a href="../shop.php?subcategory='.$res2->data[$j]->subcategory_name.'">'.$res2->data[$j]->subcategory_name.'</a></li>';
          }                                          
                                                 
    }
    $html.="</ul></li>";


   
       


}
echo $html;
?>  
            </ul>
            <div class="category-footer">
                <p>All Rights Reserved by <a href="#">Pharmabag</a></p>
            </div>
        </aside>
