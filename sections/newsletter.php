<section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>Get Exciting Discount for Subscriber</h2>
                            <p>Pharmabag always launch exciting events so don't miss it give your email</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form" onsubmit="event.preventDefault()">
                            <input type="text" placeholder="Enter Your Email Address" id="email_subscribe">
                            <button onclick="subscribe()"><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            
async function subscribe(){
if(document.getElementById("email_subscribe").value){

var xx=await fetch("https://pharmabag.in:3000/newsletter",{method:"POST",headers:{"content-type":"application/json"},body:JSON.stringify({email:document.getElementById("email_subscribe").value})})
if (xx.status!=200){alert("Please Try again!! ")}else{alert("Thanks for Subscribing.");document.getElementById("email_subscribe").value=''}

}else{
    document.getElementById("email_subscribe").style.border="1px solid red"
    document.getElementById("email_subscribe").placeholder="Please enter email"
    document.getElementById("email_subscribe").addEventListener("click",()=>{document.getElementById("email_subscribe").style.border=""})
    return 0
}


}


        </script>