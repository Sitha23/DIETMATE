
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> DIETMATE </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:35px; margin-top: 1% !important;">DIETMATE
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="imdex.php">Home</a></li>
							<li><a href="#Blog">Blog</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIABETES MANAGEMENT GURU-let's dia-beat this!</title>
    <link rel="stylesheet" href="style.css">

</head>
<div class="content">
        <div class="heading">
            <h1>DIABETES</h1>
            <p>Everything you need to know about diabetes!</p>
        </div>
        <h2>WHAT IS DIABETES ?</h2>
        <p>Diabetes is a metabolic disorder in which pancreas in our body is not able to produce enough insulin or when the body cannot effectively use the insulin it produces.</p>
        <p>Our body mechanism breaks down the food we eat into glucose. The glucose enters the bloodstream. The body cells absorb glucose from the bloodstream. Cells use blood glucose (blood sugar) to burn and release energy.</p>
        <p>Insulin is a hormone that regulates blood glucose levels and their absorption into the body cells. The beta cells of the pancreas produce insulin.</p>
        <p>So, when the body becomes Insulin resistant or when there is insulin deficiency it results in diabetes.</p>
        <div class="photos">
            <p><img src="diabetes.jpg"></p>
            <h3>There are two types of Diabetes: </h3>
            <p><img src="typess.jpg" ><img src="types.jpg"></p>
        </div>
        <h2>KEY FACTS</h2>
        <ul>
            <li>The number of people with diabetes rose from 108 million in 1980 to 422 million in 2014. Prevalence has been rising more rapidly in low- and middle-income countries than in high-income countries.</li>
            <li>Diabetes is a major cause of blindness, kidney failure, heart attacks, stroke and lower limb amputation.</li>
            <li>Between 2000 and 2016, there was a 5% increase in premature mortality from diabetes.</li>
            <li>In 2019, diabetes was the ninth leading cause of death with an estimated 1.5 million deaths directly caused by diabetes.</li>
            <li>A healthy diet, regular physical activity, maintaining a normal body weight and avoiding tobacco use are ways to prevent or delay the onset of type 2 diabetes.</li>
            <li>Diabetes can be treated and its consequences avoided or delayed with diet, physical activity, medication and reg</li>
        </ul>
        <h2>HEALTH IMPACT</h2>
        <ul>
            <li>Over time, diabetes can damage the heart, blood vessels, eyes, kidneys, and nerves.</li>
            <li>Adults with diabetes have a two- to three-fold increased risk of heart attacks and strokes.</li>
            <li>Combined with reduced blood flow, neuropathy (nerve damage) in the feet increases the chance of foot ulcers, infection and eventual need for limb amputation.</li>
            <li>Diabetic retinopathy is an important cause of blindness, and occurs as a result of long-term accumulated damage to the small blood vessels in the retina. </li>
            <li>Close to 1 million people are blind due to diabetes.</li>
            <li>Diabetes is among the leading causes of kidney failure.</li>
        </ul>
        <h2>WHO Response</h2>
        <p>WHO aims to stimulate and support the adoption of effective measures for the surveillance, prevention and control of diabetes and its complications, particularly in low- and middle-income countries. To this end, WHO:</p>
        <ul>
            <li>provides scientific guidelines for the prevention of major noncommunicable diseases including diabetes;</li>
            <li>develops norms and standards for diabetes diagnosis and care;</li>
            <li>builds awareness on the global epidemic of diabetes, marking World Diabetes Day (14 November); and</li>
            <li>conducts surveillance of diabetes and its risk factors.</li>
        </ul>
        <br> <br>
        <marquee>Don't follow anything before doctor's suggestion and approval</marquee>
    </div>
</body>
</html>