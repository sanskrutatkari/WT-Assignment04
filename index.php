<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Example for Data Class</title>
</head>
<body>
<div class="rel">

<div id="main">
			<ul>
				
			</ul>
        </div>
        <div id="free">
</div>
<div id="logo">
			<img src="4.jpg" alt="hotel"
			width="400" height="154">
		</div>
		<div id="logo1">
			<img src="logo.png" alt="royal"
			width="250" height="152">
        </div>
        
      <div id="title">
         <h1>Hotel Royal</h1>
         <h2>Select Menu To Display Its Details</h2>
      </div>

<select id="sel">
        <option value="">Select MENU</option>
    </select>
   
    <table id="table" class="table table-hover">
            <tr>
              <th>Name</th>
              <td id="menuname"></td>
            </tr>
            <tr>
              <th>ID</th>
              <td id="id"></td>
            </tr>
            <tr>
              <th>Short Name</th>
              <td id="sname"></td>
            </tr>
            <tr>
              <th>Description</th>
              <td id="descp"></td>
            </tr>
            <tr>
              <th>Price Small</th>
              <td id="psmall"></td>
            </tr>
            <tr>
              <th>Price Large</th>
              <td id="plarge"></td>
            </tr>
            <tr>
              <th>Small Portion Name</th>
              <td id="spname"></td>
            </tr>
            <tr>
              <th>Large Portion Name</th>
              <td id="lpname"></td>
            </tr>
          </table>
    
      
    <div id="footer">
      <p><a href="https://www.instagram.com/rohitshevate/">All copyrights Reserved &copy; 2020</p>
         
         
   </div>
   </div>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        let base_url = "http://localhost/Rohit/student.php";

        $("document").ready(function(){
            getMenuNameList();
            document.querySelector("#sel").addEventListener("change",getMenuById);
         });

        function getMenuNameList() {
            let url = base_url + "?req=name_list";
            $.get(url,function(data,success){
        
        for (const item in data) {
               
                let opt=document.createElement("option");
                opt.textContent=data[item].name;
                opt.value=data[item].id;
                document.querySelector('#sel').appendChild(opt);
    
            }
    });
}
    

            function getMenuById(i) {
                let index=i.target.value;
                
            let url = base_url + "?req=menu_data&id="+index;
            $.get(url,function(data,success){
                let x = data;
                document.querySelector("#menuname").textContent = x.name;
                        document.querySelector("#id").textContent = x.id;
                        document.querySelector("#sname").textContent = x.short_name;
                        document.querySelector("#descp").textContent = x.description;
                        document.querySelector("#psmall").textContent = x.price_small;
                        document.querySelector("#plarge").textContent = x.price_large;
                        document.querySelector("#spname").textContent = x.small_portion_name;
                        document.querySelector("#lpname").textContent = x.large_portion_name;
                        document.getElementById("table").style.display = "block";
            });
        }
    
    </script>
</body>
</html>