<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();

if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='RequesterLogin.php'; </script>";
    exit();
}

if(isset($_REQUEST['submitrequest'])){
    // Checking for Empty Fields
    if(empty($_REQUEST['requestinfo']) || empty($_REQUEST['requestdesc']) || empty($_REQUEST['requestername']) || empty($_REQUEST['requesteradd1']) || empty($_REQUEST['requesteradd2']) || empty($_REQUEST['requestercity']) || empty($_REQUEST['requesterstate']) || empty($_REQUEST['requesterzip']) || empty($_REQUEST['requesteremail']) || empty($_REQUEST['requestermobile']) || empty($_REQUEST['requestdate'])){
        // msg displayed if required field missing
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    } else {
        // Assigning User Values to Variables
        $rinfo = $_REQUEST['requestinfo'];
        $rdesc = $_REQUEST['requestdesc'];
        $rname = $_REQUEST['requestername'];
        $radd1 = $_REQUEST['requesteradd1'];
        $radd2 = $_REQUEST['requesteradd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate = $_REQUEST['requesterstate'];
        $rzip = $_REQUEST['requesterzip'];
        $remail = $_REQUEST['requesteremail'];
        $rmobile = $_REQUEST['requestermobile'];
        $rdate = $_REQUEST['requestdate'];
        
        // SQL Query to Insert Data
        $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, request_date) VALUES ('$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";

        if($conn->query($sql) === TRUE){
            // Fetching the auto-generated ID
            $genid = $conn->insert_id;
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Request Submitted Successfully. Your Request ID is: ' . $genid . '</div>';
            
            // Storing the ID in session for potential future use
            $_SESSION['myid'] = $genid;

            // Redirecting to the success page
            echo "<script> location.href='submitrequestsuccess.php'; </script>";
            // Fallback PHP header redirection in case JavaScript fails
            header("Location: submitrequestsuccess.php");
            exit();
        } else {
            // Displaying any SQL error encountered
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Your Request. Error: ' . $conn->error . '</div>';
        }
    }
}
?>
<div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="" method="POST">
    <div class="form-group">
      <label for="inputRequestInfo">Pet Info</label>
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
    </div>
    <div class="form-group">
      <label for="inputRequestDescription">Pet Description</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
    </div>
    <div class="form-group">
      <label for="inputName">Your Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requestername">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requesteradd2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="requestercity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="requesterstate">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requesteremail">
      </div>
      <div class="form-group col-md-2">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-2">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="requestdate">
      </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
  <!-- Display the message if form submission was successful or failed -->
  <?php if(isset($msg)) { echo $msg; } ?>
</div>
</div>
</div>

<!-- Only allow numbers for certain input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
include('includes/footer.php'); 
$conn->close();
?>
