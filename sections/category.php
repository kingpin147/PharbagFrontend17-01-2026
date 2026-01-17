<div class="category-header">
    <h4 class="category-title">
        <i class="fas fa-align-left"></i>
        <span>Popular categories</span>
    </h4>
</div>



 <?php 
use function Leaf\fetch;
//==============================================
$res = fetch("https://pharmabag.in:3000/user/popular/category");
$html='<ul class="category-list" style="overflow:visible; height: auto;">
';

for ($i=0; $i < count($res->data); $i++) { 
    
    $html.=<<<hhh
    <li class="category-item">
        <a class="category-link" href="https://pharmabag.in/shop.php?category={$res->data[$i]->_id}">
            <i class="fa-solid fa-pills"></i>
            <span>{$res->data[$i]->_id}({$res->data[$i]->count})</span>
        </a>
    </li>
    
hhh;
}
echo $html.'</ul>';

  
    
?>
    

