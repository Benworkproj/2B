<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Medical</title>
<?php  
      session_start();
      $conn = mysqli_connect("localhost","root","","user");
      $que = mysqli_query($conn, "SELECT * FROM medhinfo");   
      $row = mysqli_fetch_array($que);
      if (isset($_POST['saveMedical'])) {
        $ins = mysqli_query($conn, "UPDATE medhinfo SET meds = '".$_POST['meds']."', pwd = '".$_POST['pwd']."' WHERE cid = '".$_SESSION['cid']."' ");
        if (!empty($_POST['allergy'])) {          
          $ins = mysqli_query($conn, "UPDATE medhinfo SET allergy = '".$_POST['allergy']."' WHERE cid = '".$_SESSION['cid']."' ");
          if (!empty($_POST['specificallergy'])) {
            $ins = mysqli_query($conn, "UPDATE medhinfo SET allergytype = '".$_POST['specificallergy']."' WHERE cid = '".$_SESSION['cid']."' ");
          }
        }

        if (!empty($_POST['scoliosis'])) {
          $ins = mysqli_query($conn, "UPDATE medhinfo SET phycon = '".$_POST['scoliosis']."' WHERE cid = '".$_SESSION['cid']."' ");
          if (!empty($_POST['specificcondition'])) {
            $ins = mysqli_query($conn, "UPDATE medhinfo SET phycontype = '".$_POST['specificcondition']."' WHERE cid = '".$_SESSION['cid']."' ");
          }
        }

        if (!empty($_POST['condition'])) {
          $cond = $_POST['condition'];
          $chs = implode(", ", $cond);
          $ins = mysqli_query($conn, "UPDATE medhinfo SET healthcon = '".$chs."' WHERE cid = '".$_SESSION['cid']."' ");
        }        
        
        if (!empty($_POST['others'])) {          
          if (!empty($_POST['specificothers'])) {
            $ins = mysqli_query($conn, "UPDATE medhinfo SET otherhealthcon = '".$_POST['specificothers']."' WHERE cid = '".$_SESSION['cid']."' ");
          }
        }

        if (!empty($_POST['pwddetails'])) {
          $cond2 = $_POST['pwddetails'];
          $chs2 = implode(", ", $cond2);        
          $ins = mysqli_query($conn, "UPDATE medhinfo SET pwdcon = '".$chs2."' WHERE cid = '".$_SESSION['cid']."' ");
        }

        if (!empty($_POST['pwdothers'])) {                  
          if (!empty($_POST['specificpwdothers'])) {
            $ins = mysqli_query($conn, "UPDATE medhinfo SET pwdcontype = '".$_POST['specificpwdothers']."' WHERE cid = '".$_SESSION['cid']."' ");
          }
        }
        
      }
  ?>  
</head>
<body>

  <div class="row" style="height: 15vh;">
        <div class="col-sm-4" style="background-color: #36444E;">
          <div class="row">
          <div class="col-sm-6" style="background-color: #36444E;">
            <!--Logo-->
            <img src="../logo.png" style="width: 60%;margin-left: 15%;">
          </div>
          <div class="col-sm-6" style="background-color: #36444E;color: white">
            <h3 style="margin-left: -20%;margin-top: 10%;">CvSu - Imus<br>Student Portal</h3>
          </div>
          </div>
        </div>
        <div class="col-sm-8" style="background-color: #01C867;">
          <h1 style="float: right;margin-right: 5%;margin-top: 3%;">Welcome,<?php echo $_SESSION['name'];
                ?> </h1>
        </div>
    </div>
<main role="main" class="container">

<div class="container mt-5">
          <form class="needs-validation" novalidate action="" method="post" id="formmedical" name="formmedical">
      <h5>Medical History Information</h5>
      
   <div class="row">
        <div class="col-md-5">
        List any medications you are taking:<br>

        <input type="text" class="form-control" name="meds" 
        <?php  
        if (!empty($row['meds'])) {
            echo "value ='".$row['meds']."'";
        }
        ?> required="">
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-md-5">Do you have any of the following? Kindly put a check<br>
            <div>
              <input type="checkbox" name="allergy" id="check" onclick="enable()" value="allergy">
              <label for="allergy">Allergy</label>
            </div>
             <input type="text" class="form-control" name="specificallergy" id="btn" disabled="true">
            <div>
              <input type="checkbox" name="scoliosis" id="checka" onclick="enable()" value="Scoliosis or physical condition">
              <label for="scoliosis">Scoliosis or physical condition</label>
            </div>
             <input type="text" class="form-control" name="specificcondition" id="btna" disabled="true">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="condition1" name="condition[]" value="Asthma">
              <label class="custom-control-label" for="condition1">Asthma</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="condition2" name="condition[]" value="Hypertension">
              <label class="custom-control-label" for="condition2">Hypertension</label>
            </div>  
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="condition3" name="condition[]" value="Diabetes">
              <label class="custom-control-label" for="condition3">Diabetes</label>
            </div>  
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="condition4" name="condition[]" value="Insomnia">
              <label class="custom-control-label" for="condition4">Insomnia</label>
            </div>  
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="condition5" name="condition[]" value="Vertigo">
              <label class="custom-control-label" for="condition5">Vertigo</label>
            </div>  
              <div>
              <input type="checkbox" name="others" id="checkb" onclick="enable()" value="others">
              <label for="others">Others</label>
            </div>  
            <input type="text" class="form-control" name="specificothers" id="btnb" disabled="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-3">
      *Are you a PWD?<br>
          <select class="form-control" name="pwd" id="pwd"  onclick="enterPWD()">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
          </select>
      </div>
    </div>
    <div class="row" id="PWDdetails" >
        <div class="col-md-5">If yes, type of disability:<br>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="pwd1" name="pwddetails[]" value="Deaf/Hard of Hearing">
              <label class="custom-control-label" for="pwd1">Deaf/Hard of Hearing</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="pwd2" name="pwddetails[]" value="Orthopedic Disability">
              <label class="custom-control-label" for="pwd2">Orthopedic Disability</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="pwd3" name="pwddetails[]"  value="Physical Disability">
              <label class="custom-control-label" for="pwd3">Physical Disability</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="pwd4" name="pwddetails[]"  value="Speech and Language Impairment">
              <label class="custom-control-label" for="pwd4">Speech and Language Impairment</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="pwd5" name="pwddetails[]"  value="Visual Disability">
              <label class="custom-control-label" for="pwd5">Visual Disability</label>
            </div>
              <div>
              <input type="checkbox" name="pwdothers" id="checkc" onclick="enable()" value="Others">
              <label  for="pwdothers">Others</label>
            </div>  
            <input type="" class="form-control" name="specificpwdothers" id="btnc" disabled="true">
        </div>
    </div>
    <br>
     <div class="row">
      <div class="col-lg-3">
          <button class="btn btn-success " name="saveMedical" id="saveMedical"> Mark as Complete</button>            </div>
      <div class="col-lg-9"></div>
    </div>
  </form>
   <br>
   <div class="row">
      <div class="col-lg-3">
        <form method="post" id="resetmed" name="resetmed">
          <input type="hidden" name="resetMedicaltxt">
                          </form>
      </div>
      <div class="col-lg-9"></div>
    </div>
  
  </div>
</main>
<script type="text/javascript">
  function enable(){
    var check = document.getElementById("check");
    var btn = document.getElementById("btn");
    if (check.checked) {
      btn.removeAttribute("disabled");
      
    }
    else{
      btn.disabled = "true";
    }

    var checka = document.getElementById("checka");
    var btna = document.getElementById("btna");
    if (checka.checked) {
      btna.removeAttribute("disabled");
    }
    else{
      btna.disabled = "true";
    }

    var checkb = document.getElementById("checkb");
    var btnb = document.getElementById("btnb");
    if (checkb.checked) {
      btnb.removeAttribute("disabled");
    }
    else{
      btnb.disabled = "true";
    }

    var checkc = document.getElementById("checkc");
    var btnc = document.getElementById("btnc");
    if (checkc.checked) {
      btnc.removeAttribute("disabled");
    }
    else{
      btnc.disabled = "true";
    }
  }
</script> 
</body>
</html>