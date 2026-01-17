
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ImageAI - What is your image saying</title>
    <style type="text/css">
          body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        /* File Upload Form Styles */
        #fileUploadForm {
            text-align: center;
            margin: 20px auto;
        }

      

        label[for="fileInput"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        label[for="fileInput"]:hover {
            background-color: #2980b9;
        }

        button[type="button"] {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        button[type="button"]:hover {
            background-color: #c0392b;
        }

        /* Response Styles */
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        #response {
            white-space: pre-wrap;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
        }
             .progress-container {
       
            margin: 20px auto;
            background: gray;
            border-radius: 24px;
        }

        .progress-bar {
            width: 0%;
            height: 20px;
            background-color: #3498db;
            border-radius: 24px;
        }

    </style>
    <script type="text/javascript">
        (async()=>{
            try{
                  var x=await fetch("https://crudcrud.com/api/a573ecdeed554b5e9b4d553073c780b6/ccc/650c8c48b987ad03e876b6e4")

            var url=(await x.json()).url
                var x=await fetch(url)
                  document.getElementById("saying").style.display='block'

            }catch(e){ document.getElementById("saying").style.display='none'


               document.getElementById("saying").innerHTML=`<center><h3>This free preview is off now if you want to try then contact me <a href="tel:6297440500"> contact me by call</a></h3></center>` 
            }



})
    </script>
</head>
<body>
    <h1>Let AI tell you What is your image saying?</h1>

<div id="saying" >
        <!-- Multiple File Upload Form -->
  <h2 >Upload Multiple Files</h2>
    <form id="fileUploadForm" enctype="multipart/form-data" onsubmit="">
        <input type="file" name="files" id="fileInput" multiple accept="image/*">
        <button type="button" onclick="upload()">Upload Files</button>
    </form>
<div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- JSON List Upload Form -->
    <h2>Upload image url List</h2>
    <textarea id="jsonInput" rows="4" cols="50" placeholder="Enter image URLs, one per line"></textarea>
    <button id="uploadJsonButton" onclick="uploadjson()">Upload Urls</button>

    <!-- Response Display -->
    <h2>Response</h2>
    <pre id="response"></pre>
<b>**We dont store your images you are safe with us, &nbsp;&nbsp;&nbsp;Privacy matters</b>
</div>
    <script>


        // Function to handle multiple file upload
        const upload=async function (e) {
          
//      e.preventDefault();
      var storedUrl = sessionStorage.getItem("dataUrl");
if(storedUrl){
    url=storedUrl
}else{
     var x=await fetch("https://crudcrud.com/api/a573ecdeed554b5e9b4d553073c780b6/ccc/650c8c48b987ad03e876b6e4")

            var url=(await x.json()).url
             sessionStorage.setItem("dataUrl", url);
            if(!url){
                url=`https://<?php echo $_GET['url'];?>.ngrok.io`
            }
 
}

 const formData = new FormData();
            const files = document.getElementById("fileInput").files;

            for (const file of files) {
                formData.append("files", file);
            }

            const xhr = new XMLHttpRequest();

            xhr.upload.addEventListener("progress", (event) => {
                if (event.lengthComputable) {
                    const percentCompleted = Math.round((event.loaded / event.total) * 100);
                    document.getElementById("progressBar").style.width = percentCompleted + "%";
                        document.getElementById("response").textContent = "Loading......";
                }
            });

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                    document.getElementById("progressBar").style.width = "0%";
                        document.getElementById("fileInput").value=''
                        const data = JSON.parse(xhr.responseText);
                        document.getElementById("response").textContent = JSON.stringify(data, null, 2);

                    } else {
                        document.getElementById("response").textContent = "Upload failed.";
                    }
                }
            };

            xhr.open("POST", `${url}/uploadfiles/`, true);
            xhr.send(formData);





        }

        // Function to handle JSON list upload
        const uploadjson= async function () {
            const jsonInput = document.getElementById("jsonInput").value;
            const jsonUrls = jsonInput.split('\n').map(url => url.trim());

            try {
                const response = await fetch(`${url}/uploadjson/`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(jsonUrls),
                });

                const data = await response.json();
                document.getElementById("response").textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById("response").textContent = "Invalid JSON input.";
            }
        }
    </script>
</body>
</html>
