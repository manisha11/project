<html>
<head>
<body background ="background.jpg">

<style type "text/css">
body
{
color:white;
}
img 
{
    position: absolute;
    top: 50; bottom:0; left: 150; right:0;
    margin: auto;

}
</style>
</head>

<img src="butterfly.gif" width="200" height="200" alt="" />
<?php
$item=$_POST ["District"];
$search_term_esc = AddSlashes($item);

mysql_connect("localhost","root","jyoti9185");
@mysql_select_db("project") or die("unable to select database");

$sql=mysql_query("SELECT * FROM finaldata1 WHERE `District` LIKE '%$item%'");



//echo "SERVICES  OFFERED  BY:$item"." "."District CSCs are :-"."<br> <br> <br>";


while($row=mysql_fetch_array($sql))
{ 
  echo "SERVICES  OFFERED  BY:$item"." "."District CSCs are :-"."<br> <br> <br>";

  if($row['Birth & Death Certificate']=="Yes")
  {
  echo "Birth & Death Certificate"."<br>";
  }
  if($row['Income Certificate']=="Yes")
  {
  echo "Income Certificate"."<br>";
  }
  if($row['PRC or Domicile Certificate']=="Yes")
  {
  echo " PRC or Domicile Certificate"."<br>";
  }
  if($row['Caste Certificate']=="Yes")
  {
  echo "Caste Certificate"."<br>";
  }
  if($row['Certified Copy of Electoral Roll, etc. certificates']=="Yes")
  {
  echo "Certified Copy of Electoral Roll, etc. certificates"."<br>";
  }
  if($row['Government Forms Submission']=="Yes")
  {
  echo "Government Forms Submission"."<br>";
  }
  if($row['Saakshar Bharat Data Entry Work']=="Yes")
  {
  echo "Saakshar Bharat Data Entry Work"."<br>";
  }
  if($row['IAY Data Entry & Photography']=="Yes")
  {
  echo "IAY Data Entry & Photography"."<br>";
  }
  if($row['NRHM Data Entry & MIS Posting']=="Yes")
  {
  echo "NRHM Data Entry & MIS Posting"."<br>";
  }
  if($row['Commercial Tax Services']=="Yes")
  {
  echo "Commercial Tax Services"."<br>";
  }
  if($row['Revision of Electoral Roll & Generation of EPIC']=="Yes")
  {
  echo "Revision of Electoral Roll & Generation of EPIC"."<br>";
  }
  if($row[' Preparation of MGNREGA Job Card']=="Yes")
  {
  echo " Preparation of MGNREGA Job Card"."<br>";
  }
  if($row['MGNREGA Data Entry Work']=="Yes")
  {
  echo " MGNREGA Data Entry Work"."<br>";
  }
  if($row['Election & Vote Counting Webcasting']=="Yes")
  {
  echo " Election & Vote Counting Webcasting"."<br>";
  }
  if($row['Training to Elected PRI Representatives']=="Yes")
  {
  echo "Training to Elected PRI Representatives"."<br>";
  }
  if($row['Business Correspondent']=="Yes")
  {
  echo "Business Correspondent"."<br>";
  }
  if($row['Life & Non-Life Insurance premium collection']=="Yes")
  {
  echo " Life & Non-Life Insurance premium collection"."<br>";
  }
  if($row['PFRDA Pension Services']=="Yes")
  {
  echo "PFRDA Pension Services"."<br>";
  }
  if($row['Mobile Top-Ups']=="Yes")
  {
  echo " Mobile Top-Ups"."<br>";
  }
   if($row['DTH Recharge and Booking']=="Yes")
  {
  echo "DTH Recharge and Booking"."<br>";
  }
  if($row['Railway Reservations']=="Yes")
  {
  echo "Railway Reservations"."<br>";
  }
  if($row['Affinity Marketing']=="Yes")
  {
  echo "Affinity Marketing"."<br>";
  }
  if($row['Retail Sales']=="Yes")
  {
  echo " Retail Sales"."<br>";
  }
  if($row['Power Bill Payment']=="Yes")
  {
  echo "Power Bill Payment "."<br>";
  }
  if($row['BSNL Bill Payment']=="Yes")
  {
  echo " BSNL Bill Payment"."<br>";
  }
  if($row['e-commerce']=="Yes")
  {
  echo "e-Commerce"."<br>";
  }
  if($row['Agricultural Diagnostics']=="Yes")
  {
  echo "Agricultural Diagnostics"."<br>";
  }
  if($row['IEC(Information,Education and Communication)']=="Yes")
  {
  echo " IEC (Information, Education and Communication)"."<br>";
  }
  if($row['On-call Consultation Services']=="Yes")
  {
  echo "On-call Consultation Services"."<br>";
  }

}


?>
</body>
</html>

