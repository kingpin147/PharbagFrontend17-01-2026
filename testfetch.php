<?php
               ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require __DIR__ . "/vendor/leafs/fetch/src/Fetch.php";
use function Leaf\fetch;
//==================================




$res = fetch("https://jsonplaceholder.typicode.com/todos/");

# data returned is saved in the $data property just like axios
echo count($res->data);
print_r($res->data[0]->title);
$res = fetch("https://pharmabag.in:3000/user/get/all/category");
$html='<option selected>Select Category</option>';
for ($i=0; $i < count($res->data); $i++) { 
    $html.=<<<hhh
    <option value="{$res->data[$i]->_id}">{$res->data[$i]->category_name}</option>
hhh;
echo $html;
}
?>
