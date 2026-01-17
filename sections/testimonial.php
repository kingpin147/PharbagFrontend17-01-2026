<?php 

// error_reporting(E_ALL);
// ini_set('display_errors', '1');
use function Leaf\fetch;
//==============================================
$res = fetch("https://pharmabag.in:3000/user/get/all/banar");
$html=<<<sds
<section class="section testimonial-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>Offers Only for You!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider slider-arrow">


sds;
if (count($res->data)==0) {
    $html=<<<hhhj
    <section>
        <div>
                    <div>
                <div>
            <div>
hhhj;
}
for ($i=0; $i < count($res->data); $i++) { 
    $img=str_replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/",$res->data[$i]->image);
    if(count($res->data)==1){
$img=$res->data[$i]->image;

    }
    $html.=<<<hhh
   <div class="testimonial-card">

                               <img src="{$img}">
                                
                            </div>
    
hhh;
}
echo $html.<<<fg
    </div>
                    </div>
                </div>
            </div>
        </section>


fg;

  
    
?>
