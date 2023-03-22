<?php
    @include_once './header.php';
    @include('./connect.php');
    session_start();
    if(!isset($_SESSION['employee_id'])){
        header('location:login.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reddys files</title>
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
    <link rel="stylesheet" href="./CSS/style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">

</head>
<body>
    <h1> Monthly Report</h1>
    <div class="reports">
        <div class="form">
            <div class="input_field">
            <label for="new_profiles">No of New profiles</label>
             <input type="text" name="new_profiles" id="new_profiles" placeholder="No of New profiles">
             </div>
             
             <div class="input_field">
                <label for="verified">No of New Verified</label>
                <input type="text" name="verified" id="verified" placeholder="No of Verifed profiles">
             </div>

             <div class="input_field">
             <label for="ifm">No of IFM </label>
             <input type="text" name="ifm" id="ifm" placeholder="No of IFMs">
             </div>
             
             <div class="input_field">
             <label for="fm">No of FM </label>
             <input type="text" name="fm" id="fm" placeholder="No of FM's">
             </div>
             
             <div class="input_field">
             <label for="number_given">No of Number givens </label>
             <input type="text" name="number_given" id="number_given" placeholder="No of Numbergivens">
             </div>

             <div class="input_field">
             <label for="pms">No of PM's </label>
             <input type="text" name="pms" id="pms" placeholder="No of PM's and Video calls">
             </div>

             <div class="input_field">
             <label for="both_ok">No of Both ok's </label>
             <input type="text" name="both_ok" id="both_ok" placeholder="Enter No of Both oks">
             </div>

             <div class="input_field">
             <label for="fees">Total Fees </label>
             <input type="text" name="fees" id="fees" placeholder="Enter fees Amount">
             </div>

             <div class="input_field">
             <label for="settlement_amount">Total Settlement Amount </label>
             <input type="text" name="settlement_amount" id="settlement_amount" placeholder="Enter Your Settlement Amount">
             </div>

             <div class="input_field">
             <label for="mata_muchata">No of Mata Muchata </label>
             <input type="text" name="mata_muchata" id="mata_muchata" placeholder="Enter no of Mata Muchata">
             </div>

             <div class="input_field">
             <label for="engagement">No of Engagement Date fixed </label>
             <input type="text" name="engagement" id="engagement" placeholder="Enter no of Engagement Date fixed">
             </div>

             <div class="input_field">
             <label for="mrg_complted">No of Marriage Complted </label>
             <input type="text" name="mrg_complted" id="mrg_complted" placeholder="Enter no of Marriage complted">
             </div>

             
             
        </div>

        <input type="button" class="btn" value="submit">

        </div>
    </div>
    <?php @include_once './footer.php' ?>
</body>
    </html>