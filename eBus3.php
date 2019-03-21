 <!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" type="text/css" href="Ebusiness2.css" />
        
 <style>
           
     .navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 30%;
  
}
h1{
    font-size:220%;
}
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}
 </style>
        
    </head>
   <body  background="bgim.jpg" style =
            "-webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;">
        
        <div class="navbar">
  <a href="CV.html">CV</a>
  <a href="ConsultingService.html">Creamfields Consultancy</a>
  <a href="index.html">Home Page</a>
</div>
        <a href ="Ebus2.php">Back</a>
    <center>
        <?php
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue =$_POST['txtName'];
                echo "<br></br>";
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " The payment needed is  " .$totalValue2.".";
                

        ?>
        </center>   
   <br>
   <center>
             <input type="submit" name="btnbACK" id="btnBack" onclick="location.href='eBus2.php'" value="Back"/>
             <input type="submit" name="btnCancel" id="btnBack" onclick="location.href='eBus1.php'" value="Restart"/>

   </center>
    </body>
</html>
	
