
<script>

          /** we dont need it here in api bu need it on the client side.
             * Creates a json object including fields in the form
             *
             * @param {HTMLElement} form The form element to convert
             * @return {Object} The form data
             */
            const Form2JSON = (form) => {
                const data = new FormData(form);
                return Array.from(data.keys()).reduce((result, key) => {
                    if (result[key]) {
                        result[key] = data.getAll(key)
                        return result
                    }
                    result[key] = data.get(key);
                    return result;
                }, {});
            };



function validateform(formid){
   var wrongcount=0
    var rightcount=0
for(let i=0;i<document.forms[formid].elements.length-1;i++){
if((!document.forms[formid].elements[i].value || ["add some details","add address","select location","Select Medicine Type","Select Category","Select Subcategory","Select Discount Type","No Product Selected"].includes(document.forms[formid].elements[i].value) )&& document.forms[formid].elements[i].dataset.exclude!="true" ){
document.forms[formid].elements[i].style.border="3px solid red"    
    wrongcount+=1
}else{
document.forms[formid].elements[i].style.border=""
    rightcount+=1
}
}
    return wrongcount
} 







</script>




