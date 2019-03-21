<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Home Page</title>
       
        <style>
            
H1 {
                text-align:center; 
                font-size:65px;
                color:#9643af;
                font-stretch: 120%
            }
h3{
                padding-left:240px;
               
}
 .container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.8s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.5s;
}

.sidenav a:hover {
  color:#9643af
}

.sidenav .closebtn {
  position: absolute;
  top: 0px;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding-left: 32px;
  right: 0px
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  padding-left: 216px;
  
}


.column {
  -ms-flex: 50%; 
  flex: 50%;
  padding-left: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}


.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>



<body background ="home.jpg"
      style = background-size:cover;>
    
    
<div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
        <h1>Home Page</h1>   
        <hr width =76%> 
        

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a>My Webpages</a>
  <a href="CV.html">CV</a>
  <a href="Interests.html">Interests</a>
  <a href="Sports.html">Sports</a>
  <a href="Travel.html">Travel</a>
  <a href="ConsultingService.html">Creamfields Consultancy</a>
  <a href="eBus1.php">eBusiness</a>
  
  <hr>
  <a>Useful Links</a>
  <a href="https://www.ucc.ie/">UCC</a>
  <a href="https://www.smgsblarney.ie/">SMGS Blarney</a>
  <a href="https://www.w3schools.com/">W3 Schools</a>
  <a href="https://phpproject118372296.herokuapp.com/">Heroku</a>
  <a href="https://github.com/DM-118372296/Project118372296">GitHub</a>
    
  
</div>


<span style="font-size:30px; cursor:pointer; padding-top:200px; color:#9643af;padding-left: 10px;" onclick="openNav()">&#9776; Shortcuts</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "230px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<h3>
    Welcome to my home page. Here you will find links to the web-sites 
    that I have created for my IS1113 Project.
</h3>

  <div class="row"> 
  <div class="column">
  <div class="container">
      <a href="CV.html">
  <img src="9CV.jpg" style="width:550px; height: 300px; border:4px solid black;">
  <div class="centered" style="font-size:75px; color:#9643af">CV</div></a>
      </div>
       <div class="container">
           <a href=eBus1.php>
  <img src="9SC.webp" style="width:550px; height: 300px;border: 4px solid black;">
  <div class="centered" style="font-size:75px; color:#9643af">eBusiness</div></a>
      </div>
       <div class="container">
           <a href="ConsultingService.html">
  <img src="9CS.jpg" style="width:550px; height: 300px;border: 4px solid black;">
  <div class="centered" style="font-size:75px; color:#9643af">Consultancy Service</div></a>
      </div>
  </div>

   <div class="column">
        <div class="container">
            <a href="Interests.html">
                <img src="8IN.png" style="width:550px; height: 300px;border: 4px solid black;">
  <div class="centered" style="font-size:75px; color:#9643af">Interests</div></a>
      </div>
        <div class="container">
            <a href="Travel.html">
  <img src="8TV.jpg" style="width:550px; height: 300px;border: 4px solid black;">
  <div class="centered" style="font-size:75px; color:#9643af">Travel</div></a>
      </div>
        <div class="container">
            <a href="Sports.html">
                <img src="8IS.jpg" style="width:550px; height: 300px;border: 4px solid black;">
  <div class="centered" style="font-size:75px; color:#9643af">Sports</div></a>
      </div>
  
   </div>
       