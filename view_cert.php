<?php
header('Content-Type: application/pdf');
require_once('tcpdf/tcpdf.php');
$currentsuffix = date('jS');  // Get the day with 'th', 'st', 'nd', 'rd' suffix
$currentMonth = date('F'); // Get the full month n
$currenttoday = date('d'); // Get the full month n
$currentyear = date('Y'); // Get the full month n
$currentDay = date('l');
$name = isset($_POST['nameapprove']) ? $_POST['nameapprove'] : '';
$certificate = isset($_POST['certificate']) ? $_POST['certificate'] : '';
$voters = isset($_POST['voters']) ? $_POST['voters'] : '';
$typecertifcate = isset($_POST['typecertificate']) ? $_POST['typecertificate'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
    // Check if the 'emailstats' key is set before using it
$emailarchive = isset($_POST['emailstats']) ? $_POST['emailstats'] : '';
$remarks = isset($_POST['remarks']) ? $_POST['remarks'] : '';
$purpose = isset($_POST['purpose']) ? $_POST['purpose'] : '';
$pic = isset($_POST['pic']) ? $_POST['pic'] : '';
$pname = isset($_POST['pname']) ? $_POST['pname'] : '';
$paddress = isset($_POST['paddress']) ? $_POST['paddress'] : '';
$page = isset($_POST['page']) ? $_POST['page'] : '';
$pliving = isset($_POST['pliving']) ? $_POST['pliving'] : '';

// Path to the PDF template
/*$templatePath = 'cert/indigency.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/indigency.jpg';  // Path to the image converted from the template*/

$fianceuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$schooluncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$burialuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$educuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$othersuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$meduncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$scholaruncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$socialuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$hospiuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path

$ResidencyuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$schooluncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$PWDuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$EducationaluncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$EmploymentuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$SenioruncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$BankuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$otherscertuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path
$hospiuncheckedImagePath = 'pic/unchecked.jpg'; // Replace with actual path

if($voters != "../pic/brgy_logo.jpg" && $typecertifcate == "Barangay Indigency"){
    $templatePath = 'cert/indigency.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/indigency.jpg';  // Path to the image converted from the template
$header ="This is to certify that <b><u><i>{$name}</i></u></b>, <b><u><i>{$age}</i></u></b> years old, is a registered voter and bonafide resident of this barangay with postal address <b><u><i>{$address}</i></u></b>. He/she is one of the indigents of this Barangay.<br><br>This certification is being issued upon the request of the bearer for the reason stated below and for whatever legal purpose it may serve. ";

}
if($voters == "../pic/brgy_logo.jpg" && $typecertifcate == "Barangay Indigency"){
    $templatePath = 'cert/indigency.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/indigency.jpg';  // Path to the image converted from the template
$header ="This is to certify that <b><u><i>{$name}</i></u></b>, <b><u><i>{$age}</i></u></b> years old, is a bonafide resident of this barangay with postal address <b><u><i>{$address}</i></u></b>.He/she is one of the indigents of this Barangay. <br><br>This certification is being issued upon the request of the bearer for the reason stated below and for whatever legal purpose it may serve. ";
}

if($typecertifcate == "Business Permit"){
$templatePath = 'cert/bpermit.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/bpermit.jpg';  // Path to the image converted from the template

$header ="TO WHOM IT MAY CONCERN:<br><br>This is to certify that  <b><u><i>{$purpose}</i></u></b>, with postal address <b><u><i>{$address}</i></u></b>.is hereby granted a permit to operate its business that is within the Territorial Jurisdiction of Barangay 781 Zone 85, pursuant to the provisions of Section 152 c, Republic Act No. 7160, otherwise known as the Government Code of 1991. <br><br> This permit is issued upon the request of <b><u><i>{$name}</i></u></b>whose signature and Community Tax No. are listed below.";
}
if($typecertifcate == "Business Cessation Permit"){
    $templatePath = 'cert/cessationb.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/cessationb.jpg';  // Path to the image converted from the template
$formattedDate  = $certificate;
$newdate= date("F j, Y", strtotime($formattedDate));
$header ="This is to certify that<b><u><i>{$purpose}</i></u></b>, owned by <b><u><i>{$name}</i></u></b> has already ceased its operation on <b><u><i>{$newdate}</i></u></b> within the jurisdiction of the Barangay with business address at <b><u><i>{$address}</i></u></b><br><br>This certification is being issued for whatever legal purpose it may serve.";
}
if($typecertifcate == "First Time job Seeker"){
    $templatePath = 'cert/ftj.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/ftj.jpg';  // Path to the image converted from the template
$header ="I, <b><u><i>{$name}</i></u></b> <b><u><i>{$age}</i></u></b> years of age, a resident of <b><u><i>{$address}</i></u></b> is a qualified availee of the benefits of Republic Act 11261, otherwise known as the First Time Job-seekers Assistance Act of 2019, do hereby declare, agree and undertake to abide and be bound by the following:";
}

if($voters != "../pic/brgy_logo.jpg" && $typecertifcate == "Application for Solo Parent"){
    $templatePath = 'cert/soloparent.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/soloparent.jpg';  // Path to the image converted from the template
$header ="This is to certify that <b><u><i>{$name}</i></u></b>, <b><u><i>{$age}</i></u></b> years old, is a registered voter and bonafide resident of this barangay with postal address <b><u><i>{$address}</i></u></b>.<br><br>This further certifies that the subject person is a SOLO PARENT living with his/her child/children, as follows:"; 
}                                      
if($voters == "../pic/brgy_logo.jpg" && $typecertifcate == "Application for Solo Parent"){
    $templatePath = 'cert/soloparent.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/soloparent.jpg';  // Path to the image converted from the template
$header ="This is to certify that <b><u><i>{$name}</i></u></b>, <b><u><i>{$age}</i></u></b> years old, is a bonafide resident of this barangay with postal address <b><u><i>{$address}</i></u></b>.<br><br>This further certifies that the subject person is a SOLO PARENT living with his/her child/children, as follows:";
}
if($typecertifcate == "Barangay Certificate"){
    if($voters != "../pic/brgy_logo.jpg" && $typecertifcate == "Barangay Certificate"){
    $templatePath = 'cert/barangaycert.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/barangaycert.jpg';  // Path to the image converted from the template
$header ="This is to certify that <b><u><i>{$name}</i></u></b>, <b><u><i>{$age}</i></u></b> years old, is a registered voter and bonafide resident of this barangay with postal address <b><u><i>{$address}</i></u></b>.<br><br>This certification is being issued upon the request of the bearer for the reason stated below and for what whatever legal purpose it may serve"; 
}                                      
if($voters == "../pic/brgy_logo.jpg" && $typecertifcate == "Barangay Certificate"){
    $templatePath = 'cert/barangaycert.pdf';  // Replace with your actual path to the template
$imagePath = 'cert/barangaycert.jpg';  // Path to the image converted from the template
$header ="This is to certify that <b><u><i>{$name}</i></u></b>, <b><u><i>{$age}</i></u></b> years old, is a bonafide resident of this barangay with postal address <b><u><i>{$address}</i></u></b>.<br><br>This certification is being issued upon the request of the bearer for the reason stated below and for what whatever legal purpose it may serve";

}
if($purpose == "Proof of Residency"){
    $ResidencyuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Local Employment"){
    $EmploymentuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "PWD ID Application"){
    $PWDuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Educational Assistance"){
    $EducationaluncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "School Requirement"){
    $SchooluncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Senior Citizen Application"){
    $SenioruncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Bank Account Opening"){
    $BankuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Hospital Requirement"){
    $hospiuncheckedImagePath = 'pic/checked.jpg';
}else{
   $otherscertuncheckedImagePath = 'pic/checked.jpg';
   $purposeothercert = $purpose;
}

// Convert PDF template to image using GD (requires Ghostscript)
if (!file_exists($imagePath)) {
    exec("gs -sDEVICE=jpeg -sOutputFile={$imagePath} -r300 {$templatePath}");
}
}

if($purpose == "Financial Assistance"){
    $fianceuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "School Requirement"){
    $schooluncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Scholarship Application"){
    $scholaruncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Burial Assistance"){
    $burialuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Educational Assistance"){
    $educuncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Social Pension Application For Indigent Senior Citizen"){
    $schooluncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Medical Assistance"){
    $meduncheckedImagePath = 'pic/checked.jpg';
}
else if($purpose == "Hospital Requirement"){
    $hospiuncheckedImagePath = 'pic/checked.jpg';
}else{
   $othersuncheckedImagePath = 'pic/checked.jpg';
   $purposeother = $purpose;
}


// Convert PDF template to image using GD (requires Ghostscript)
if (!file_exists($imagePath)) {
    exec("gs -sDEVICE=jpeg -sOutputFile={$imagePath} -r300 {$templatePath}");
}

class PDF extends TCPDF {
    function Header() {
        // Add your header content here if needed
        // Set document permissions to disable download and print
/*$pdf->SetProtection(['print', 'copy'], '', 'pass'); */ // Change 'pass' to your desired password, or leave it empty for no password
// Set the position for the dynamic data
}

function Footer() {
        // Add your footer content here if needed
}
}

// Create an instance of TCPDF
$pdf = new PDF();

$pdf->AddPage();
// Set protection to disable printing and copying
/*$pdf->SetProtection(['print', 'copy'], '', null, 0, 0);
*/
// Hide print header and footer
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
$xName = 80;
$yName = 63;

$xdate = 100;
$ydate = 120;
if($purpose == "First time job seeker"){
// Add the image as a background
    $pdf->Image($imagePath, 11, 0, 210);
}else{
    $pdf->Image($imagePath, 0, 0, 210);

}
// Use the built-in "helvetica" font
$pdf->SetFont('helvetica', '', 12);

if($typecertifcate == "Barangay Indigency"){
// Financial Assistance
    $pdf->Image($fianceuncheckedImagePath, $xName, $yName + 52, 12); 
    $pdf->Text($xName + 11, $yName + 54, "Financial Assistance");

// School Assistance
    $pdf->Image($schooluncheckedImagePath, $xName, $yName + 64, 12);
    $pdf->Text($xName + 11, $yName + 66, "School Requirements");

// Burial Assistance
    $pdf->Image($burialuncheckedImagePath, $xName, $yName + 76, 12);
    $pdf->Text($xName + 11, $yName + 78, "Burial Assistance");

// Educational Assistance
    $pdf->Image($educuncheckedImagePath, $xName, $yName + 88, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 11, $yName + 90, '<p style="font-size: 11.5px">Educational Assistance<p>',0, 1, false, true, 'J');

// Others
    $pdf->Image($othersuncheckedImagePath, $xName, $yName + 101, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 11, $yName + 103, 'Others: ',0, 1, false, true, 'J');

// Medical Assistance 
    $pdf->Image($meduncheckedImagePath, $xName+54, $yName + 52, 13); 
    $pdf->Text($xName + 66, $yName + 54, "Medical Assistance");

// Hospital Assistance
    $pdf->Image($hospiuncheckedImagePath, $xName+54, $yName + 64, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 66, $yName + 66, '<p style="font-size: 11.5px">Hospital Requirements<p>',0, 1, false, true, 'J');

// Scholarship Assistance
    $pdf->Image($scholaruncheckedImagePath, $xName+54, $yName + 76, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 66, $yName + 78, '<p style="font-size: 11.5px">Scholar Application<p>',0, 1, false, true, 'J');

// Social Assistance
    $pdf->Image($socialuncheckedImagePath, $xName+54, $yName + 88, 12);
    $pdf->writeHTMLCell(50, 0,$xName + 66, $yName + 88, '<p style="font-size: 11px">Social Pension Application For Indigent Senior Citizen
        <p>',0, 1, false, true, 'A');

    $pdf->writeHTMLCell(85, 0,$xName + 26, $yName + 93, '<div style="font-size: 11.5px; word-wrap: break-word;width: 1px; 
      border: 1px solid #000000;"><b><u><i><p >'.$purposeother.'<p></i></u></b></div>',0, 1, false, true, 'J');

// Place dynamic data at specific coordinates on the template
    $pdf->SetXY($xName, $yName);
    $pdf->writeHTMLCell(110, 0, $xName, $yName, $header, 0, 1, false, true, 'J');

$pdf->writeHTMLCell(110, 0, $xName, $yName+ 119, '<p style="font-size: 12px">   <b><i>SIGNED</i></b> and <b><i>ISSUED</i></b> this <b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b> at Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.</p>', 0, 1, false, true, 'J');  // 'J' for justify
}

if($typecertifcate == "Business Cessation Permit"){
    $pdf->SetXY($xName, $yName);
    $pdf->writeHTMLCell(110, 0, $xName, $yName+5, $header, 0, 1, false, true, 'J');
$pdf->writeHTMLCell(110, 0, $xName, $yName+50, '<p style="font-size: 12px">   <b><i>SIGNED</i></b> and <b><i>ISSUED</i></b> this <b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b> at Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.</p>', 0, 1, false, true, 'J');  // 'J' for justify

}
if($typecertifcate == "Business Permit"){
    $pdf->writeHTMLCell(110, 0, $xName, $yName+5, $header, 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName, $yName+80, '<p style="font-size: 12px">   <b><i>SIGNED</i></b> and <b><i>ISSUED</i></b> this <b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b> at Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.</p>', 0, 1, false, true, 'J');
 $pdf->writeHTMLCell(110, 0, $xName-25, $yName+ 140, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;"><b><u><i>'.$name.'</i></u></b><br>Owner/OIC – Manager', 0, 1, false, true, 'J');  // 'J' for j
}

if($typecertifcate == "First Time job Seeker" && $purpose == "First time job seeker" && $certificate == "First time job seeker"){
   $pdf->writeHTMLCell(190, 0, $xName-70, $yName-10, "This is to certify that Mr./Ms.<b><u><i>".$name."</i></u></b>, <b><u><i>".$age."</i></u></b> a resident of <b><u><i>".$address."</i></u></b> for <b><u><i>".$living."years</i></u></b>, is a qualified availed of RA 11261 or the First Time Jobseekers Assistance Act of 2019. I further certify the holder/bearer was informed of his/her rights, including the duties and responsibilities accorded by RA 11261 through the Oath of Undertaking he/she has signed and executed in the presence of the Barangay Officials.", 0, 1, false, true, 'J');
   $pdf->writeHTMLCell(180, 0, $xName-65, $yName+20, '<p style="font-size: 12px"><b><i>Signed this </i><b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b>, <b><u><i>'.$currentyear.'</i></u></b>in the City/Municipality of Manila.<br><br> This certification is valid only until '.$currentsuffix.'  day  of '.$currentMonth.' '.($currentyear+1).' one year from the issuance.</p>', 0, 1, false, true, 'J');
   $pdf->writeHTMLCell(110, 0, $xName+20, $yName+70, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;"><b><u><i>MANOLITO  S. DIAZ</i></u></b><br>Punong Barangay', 0, 1, false, true, 'J');
   $pdf->writeHTMLCell(110, 0, $xName+20, $yName+85, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;"><b><u><i>'.$currentMonth.' '.$currenttoday.', '.$currentyear.' </i></u></b><br>Date', 0, 1, false, true, 'J');
   $pdf->writeHTMLCell(110, 0, $xName+20, $yName+100, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;">Witnessed  by: <br><br><br><b><u><i>RHONA P. ROXAS</i></u></b><br>Barangay Secretary', 0, 1, false, true, 'J');
   $pdf->writeHTMLCell(110, 0, $xName+20, $yName+130, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;"><b><u><i>'.$currentMonth.' '.$currenttoday.', '.$currentyear.' </i></u></b><br>Date', 0, 1, false, true, 'J');
}

if($typecertifcate == "First Time job Seeker" && $purpose != "First time job seeker" && $certificate != "First time job seeker"){
    $pdf->writeHTMLCell(190, 0, $xName-70, $yName-10, $header, 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(190, 0, $xName-75, $yName+10, '<ol><li>That this is the first time I was actively look for a job, and therefore requesting that barangay certification be issued in my favor to avail the benefits of the law;</li>
        <li>That I am aware that the benefit and privilege/s under the said law shall be valid only for one (1) year from the date that the barangay certification is issued;</li>
        <li>That I can avail the benefits of the law only once;</li>
        <li>That I understand that my personal information shall be included in the Roster/List of First Time Jobseekers and will not be used for any unlawful purpose;</li>
        <li>That I will inform and/or report to the Barangay personally, through text or other means, through my family/relatives once I get employed; and</li>
        <li>That I am not a beneficiary of the Job Start Program under R.A. No. 10869 and other laws that give similar exemptions for the documents or transaction exempted under R.A. No. 11261;</li>
        <li>That if issued the requested Certification, I will not use the same in any fraud, neither falsify nor help and/or assist in the fabrication of the said certification;</li>
        <li>That this undertaking is made solely for the purpose of obtaining a Barangay Certification consistent with the objective of R. A. No. 11261 and not for any other purpose;</li>
        <li>That I consent to the use of my personal information pursuant to the Data Privacy Act and other applicable laws, rules, and regulations.</li>', 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(125, 0, $xName-30, $yName+110, '<p style="font-size: 12px"><b><i>Signed this </i><b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b>, <b><u><i>'.$currentyear.'</i></u></b>in the City of Manila.</p>', 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName-90, $yName+120, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;">Signed by: <br><br><b><u><i>'.$name.'</i></u></b><br>First time job seeker', 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName+20, $yName+120, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;">Witnessed  by: <br><br><b><u><i>RHONA P. ROXAS</i></u></b><br>Barangay Secretary', 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName+20, $yName+145, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;"><b><u><i>'.$currentMonth.' '.$currenttoday.', '.$currentyear.' </i></u></b><br>Date', 0, 1, false, true, 'J');
    if ($purpose == "First time job seeker minor") {
        $pdf->writeHTMLCell(190, 0, $xName-70, $yName-10, $header, 0, 1, false, true, 'J');
        $pdf->writeHTMLCell(190, 0, $xName-65, $yName+158, '<hr>For the applicants at least fifteen years old to less than 18 years of age:', 0, 1, false, true, 'J');
        $pdf->writeHTMLCell(190, 0, $xName-65, $yName+166, 'I, <b><u><i>'.$pname.'</i></u></b> <b><u><i>'.$page.'</i></u></b> years of age,parent/guardian of '.$name.' and a resident of <b><u><i>'.$paddress.'</i></u></b> for '.$pliving.' years,do hereby give my consent for my child/dependent to avail the benefits of Republic Act 11261 and be bound by the abovementioned conditions.', 0, 1, false, true, 'J');
        $pdf->writeHTMLCell(110, 0, $xName+20, $yName+185, '<p style="font-size: 12px; text-transform: uppercase; text-align:center;">Signed by:<br><br><b><u><i>'.$pname.'</i></u></b><br>Parent/Guardian', 0, 1, false, true, 'J');
    }
    $pdf->writeHTMLCell(190, 0, $xName, $yName+208, '<p style="font-size:6px;">(VALID 100 DAYS WITH BARANGAY DRY SEAL)</p>', 0, 1, false, true, 'J');
}
if($typecertifcate == "Application for Solo Parent"){
    $pdf->writeHTMLCell(110, 0, $xName, $yName, $header, 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName, $yName+35, 'NAME OF CHILD:', 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(88, 0, $xName+10, $yName+40, $pname, 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName, $yName+70, "This certification is hereby issued upon the request of the above- subject person for ".$purpose." Id Renewal purposes.", 0, 1, false, true, 'J');
    $pdf->writeHTMLCell(110, 0, $xName, $yName+55, '<p style="font-size: 12px">   <b><i>SIGNED</i></b> and <b><i>ISSUED</i></b> this <b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b> at Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.</p>', 0, 1, false, true, 'J');

}


if($typecertifcate == "Barangay Certificate"){
    $pdf->writeHTMLCell(110, 0, $xName, $yName+5, $header, 0, 1, false, true, 'J');

    $pdf->Image($ResidencyuncheckedImagePath, $xName, $yName + 52, 12); 
    $pdf->Text($xName + 11, $yName + 54, "Proof of Residency");

    // School Assistance
    $pdf->Image($EmploymentuncheckedImagePath, $xName, $yName + 64, 12);
    $pdf->Text($xName + 11, $yName + 66, "Local Employment");

// Burial Assistance
    $pdf->Image($PWDuncheckedImagePath, $xName, $yName + 76, 12);
    $pdf->Text($xName + 11, $yName + 78, "PWD ID Application");

// Educational Assistance
    $pdf->Image($EducationaluncheckedImagePath, $xName, $yName + 88, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 11, $yName + 90, 'Educational Assistance',0, 1, false, true, 'J');

// Others
    $pdf->Image($otherscertuncheckedImagePath, $xName, $yName + 101, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 11, $yName + 103, 'Others: ',0, 1, false, true, 'J');

// Medical Assistance 
    $pdf->Image($schooluncheckedImagePath, $xName+54, $yName + 52, 13); 
    $pdf->Text($xName + 66, $yName + 54, "School Requirement");

// Hospital Assistance
    $pdf->Image($SenioruncheckedImagePath, $xName+54, $yName + 64, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 66, $yName + 66, 'Senior Citizen Application',0, 1, false, true, 'J');

// Scholarship Assistance
    $pdf->Image($BankuncheckedImagePath, $xName+54, $yName + 76, 12);
    $pdf->writeHTMLCell(110, 0,$xName + 66, $yName + 78, 'Bank Account Opening',0, 1, false, true, 'J');

// Social Assistance
    $pdf->Image($hospiuncheckedImagePath, $xName+54, $yName + 88, 12);
    $pdf->writeHTMLCell(50, 0,$xName + 66, $yName + 88, 'Hospital Requirement',0, 1, false, true, 'A');
if ($othersuncheckedImagePath = 'pic/checked.jpg') {
    // code...
}
    $pdf->writeHTMLCell(85, 0,$xName + 26, $yName + 93, '<div style="font-size: 11.5px; word-wrap: break-word;width: 1px; 
      border: 1px solid #000000;"><b><u><i><p >'.$purposeothercert.'<p></i></u></b></div>',0, 1, false, true, 'J');


$pdf->writeHTMLCell(110, 0, $xName, $yName+ 119, '<p style="font-size: 12px">   <b><i>SIGNED</i></b> and <b><i>ISSUED</i></b> this <b><u><i>'.$currentsuffix.'</i></u></b> day of <b><u><i>'.$currentMonth.'</i></u></b> at Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.</p>', 0, 1, false, true, 'J');  // 'J' for justify


}

// Output the PDF
$pdfFilePath = $_SERVER['DOCUMENT_ROOT'] . '/barangay/cert/' . $name . '-' . 'Certificate.pdf';
$pdf->Output($pdfFilePath, 'F');

// Replace backslashes with forward slashes in the file path
$pdfFilePath = str_replace('\\', '/', $pdfFilePath);

// Return the PDF file path as JSON
echo json_encode(['pdfFilePath' => $pdfFilePath]);
?>

