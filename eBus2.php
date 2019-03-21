
<?php
session_start();
$fullNameValue = "";
$totalValue2="";
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] =$fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
 ?>     
<!DOCTYPE html>
        <html>
            <HEAD>
                <TITLE>Personal Details</TITLE>
            </HEAD>
             <link rel="stylesheet" href="Ebusiness.css" type="text/css" />
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
                <a href ="Ebusiness1.php">Back</a>
                <div class ="form">
                   
                    <form name =" Details" method="post" action="eBus3.php">
                        <center>
                            <table cellspacing="10" style='padding-top:40px'>
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Please Enter your Details Below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value=""/></td> 
                                </tr>
                                 <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" id="txtNum" name="txtNum" value=""/></td> 
                                </tr>
                                 <tr>
                                    <td>Password</td>
                                    <td><input type="text" id="txtPassword" name="txtPassword" value=""/></td> 
                                </tr>
                                <tr>                              
                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue ;?>"/></td> 
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" name="btnContinue" id="btnContinue" oneclick="" value="Continue"/>
                        </Center>
                    </form>
                </div>
            </body>


