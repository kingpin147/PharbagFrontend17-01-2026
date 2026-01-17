<div class="category-header">
    <h4 class="category-title">
        <i class="fas fa-align-left"></i>
        <span>Popular Manufacture</span>
    </h4>
</div>
<?php 
use function Leaf\fetch;
//==============================================
$res = fetch("https://pharmabag.in:3000/user/popular/manufacture");
$html='<ul class="category-list" style="overflow:visible; height: auto;">
';
$largest=0;
for ($i=0; $i < count($res->data); $i++) { 
    if((int)($res->data[$i]->count)<=$largest){$largest=$i;
        echo $largest;
        echo $res->data[$i]->count;
echo $res->data[$largest]->_id;
    }

    $html.=<<<hhh
    <li class="category-item" onclick="loadmanu('{$res->data[$i]->_id}')">
        <a class="category-link" >
            <i class="fa-solid fa-pills"></i>
            <span>{$res->data[$i]->_id}({$res->data[$i]->count})</span>
        </a>
    </li>
    
hhh;
}
echo $html.'</ul><script>setTimeout(()=>{loadmanu("'.$res->data[$largest]->_id.'")},500)</script>';

  
    
?>