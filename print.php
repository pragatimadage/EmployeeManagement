<?php
session_start();
if(isset($_SESSION['flag']))
{
include_once("connection.php");
require_once("fpdf.php");
$pdf=new FPDF ();
$pdf->AddPage ();
$pdf->SetFont("Times","B","30",'c');
$pdf->Cell(10,10,"Employee Details:",0,1);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(15,10,"Srno.",1);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(35,10,"NAME",1);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(35,10,"ADDRESS",1);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(40,10,"CONTACT",1);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(30,10,"SALARY",1,1);
$pdf->SetFont("Arial","","10");
  $sql1 = "SELECT * FROM `add1` ORDER BY Address_id desc"; 
   $result= $conn->query($sql1);
  $i=0; while($row= $result->fetch_assoc()){ 
      $i++;
      
      $pdf->SetFont("Arial","","15");
$pdf->Cell(15,10,$i,1);
$pdf->SetFont("Arial","","15");
 $pdf->Cell(35,10,$row['name'],1);
$pdf->SetFont("Arial","","15");
 $pdf->Cell(35,10,$row['address'],1);
      $pdf->SetFont("Arial","","15");
 $pdf->Cell(40,10,$row['contact'],1);
      $pdf->SetFont("Arial","","15");
  $pdf->Cell(30,10,$row['salary'],1,1);
  }
$pdf->Output();
}else{header("location:index.php");}?>