<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Admission form with PDF preview able..</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <?php  
      session_start();
      $conn = mysqli_connect("localhost","root","","user");
      $que = mysqli_query($conn, "SELECT * FROM personalinfo");   
      $row = mysqli_fetch_array($que);
      if (isset($_POST['save'])) {
        $ins = mysqli_query($conn, "UPDATE personalinfo SET
          fname='".$_POST['fname']."',mname='".$_POST['mname']."',lname='".$_POST['lname']."',suffix='".$_POST['suffix']."',Region='".$_POST['region']."',Province='".$_POST['province']."',Town='".$_POST['town']."',Barangay='".$_POST['barangay']."',Street='".$_POST['street']."',ZipCode='".$_POST['zipcode']."',Contact='".$_POST['cellphone']."',Lnum='".$_POST['landline']."',CivilStat='".$_POST['civil_status']."',Sex='".$_POST['sex']."',DoB='".$_POST['birthday']."',PoB='".$_POST['birthplace']."',Religion='".$_POST['religion']."',Tribe='".$_POST['indigenous']."', status = 'completed'
           WHERE cid = '".$_SESSION['cid']."' ");
        header("Location: ../dash.php");

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
     <form action="pinfo.php" method="POST">
<main role="main" class="container">
<div class="container mt-5">
  
  *-required fields
    <h3>Personal Information</h3>
    
    <div class="row">
      <div class="col-md-4">
      *First Name<br>
      <input type="text" class="form-control" name="fname" 
      <?php  
        if (!empty($row['fname'])) {
            echo "value ='".$row['fname']."'";
        }
      ?> required>
          <div class="invalid-feedback">
            First name is required
          </div>
      </div>
      <div class="col-md-4">
      Middle Name<br>
      <input type="" class="form-control" name="mname" 
      <?php  
        if (!empty($row['mname'])) {
            echo "value ='".$row['mname']."'";
        }
      ?> required>
      </div>
      <div class="col-md-3">
      *Last Name<br>
      <input type="" class="form-control" name="lname" 
      <?php  
        if (!empty($row['lname'])) {
            echo "value ='".$row['lname']."'";
        }
      ?> required>
          <div class="invalid-feedback">
            Last name is required
          </div>
      </div>
      <div class="col-md-1">
      Suffix <br>
    
      <select class="form-control" name="suffix" id = "suffix" required>
          <option><?php  
            if (!empty($row['suffix'])) {
                echo $row['suffix'];
            }
          ?></option>
          <option value="">None</option>
          <option value="JR.">JR.</option>
          <option value="SR.">SR.</option>
          <option value="II">II</option>
          <option value="III">III</option>
          <option value="IV">IV</option>
          <option value="V">V</option>
          <option value="VI">VI</option>
      </select>
    
      </div>
    </div>

<br>
    <div class="row">
      <div class="col-md-2">
      *Region<br>
      <select name="region" class="custom-select" onchange="loadprovince(this.value)" required>
          <option><?php  
            if (!empty($row['Region'])) {
                echo $row['Region'];
            }
          ?></option>
          <option value="NCR (Metro Manila)">NCR (Metro Manila)</option>
          <option value="REGION 1 - ILOCOS REGION">REGION 1 - ILOCOS REGION</option>
          <option value="REGION 2 - CAGAYAN VALLEY">REGION 2 - CAGAYAN VALLEY</option>
          <option value="REGION 3 - CENTRAL LUZON">REGION 3 - CENTRAL LUZON</option>
          <option value="REGION 4A - CALABARZON">REGION 4A - CALABARZON</option>
          <option value="REGION 4B - MIMAROPA">REGION 4B - MIMAROPA</option>
          <option value="REGION 5 - BICOL REGION">REGION 5 - BICOL REGION</option>
          <option value="REGION 6 - WESTERN VISAYAS">REGION 6 - WESTERN VISAYAS</option>
          <option value="REGION 7 - CENTRAL VISAYAS">REGION 7 - CENTRAL VISAYAS</option>
          <option value="REGION 8 - EASTERN VISAYAS">REGION 8 - EASTERN VISAYAS</option>
          <option value="REGION 9 - ZAMBOANGA PENINSULA">REGION 9 - ZAMBOANGA PENINSULA</option>
          <option value="REGION 10 - NORTHERN MINDANAO">REGION 10 - NORTHERN MINDANAO</option>
          <option value="REGION 11 - DAVAO REGION">REGION 11 - DAVAO REGION</option>
          <option value="REGION 12 - SOCCSKSARGEN">REGION 12 - SOCCSKSARGEN</option>
          <option value="REGION 13 - CARAGA">REGION 13 - CARAGA</option>
          <option value="REGION 14 - CAR">REGION 14 - CAR</option>
          <option value="REGION 15 - ARMM">REGION 15 - ARMM</option>
          <option value="REGION 18 - NIR">REGION 18 - NIR</option>              
        </select>
      </div>  
      <div class="col-md-2">
      *Province<br>
      <input class="form-control" type="text" name="province" 
      <?php  
        if (!empty($row['Province'])) {
            echo "value ='".$row['Province']."'";
        }
      ?> required>      
      </div>                        
      <div class="col-md-2">
      *Town<br>
      <input class="form-control" type="text" name="town" 
      <?php  
        if (!empty($row['Town'])) {
            echo "value ='".$row['Town']."'";
        }
      ?> required>
      </div>
      <div class="col-md-2">
      *Barangay<br>
      <input class="form-control" type="text" name="barangay" 
      <?php  
        if (!empty($row['Barangay'])) {
            echo "value ='".$row['Barangay']."'";
        }
      ?> required>
          <div class="invalid-feedback">
            Barangay name is required
          </div>
      </div>            
      <div class="col-md-2">
      *Street<br>
      <input type="" class="form-control" name="street" 
      <?php  
        if (!empty($row['Street'])) {
            echo "value ='".$row['Street']."'";
        }
      ?> required>
          <div class="invalid-feedback">
            Street name is required
          </div>
      </div>
      <div class="col-md-2">
      *Zip Code<br>
      <input type="text"  maxlength="4" class="form-control" name="zipcode" 
      <?php  
        if (!empty($row['ZipCode'])) {
            echo "value ='".$row['ZipCode']."'";
        }
      ?> required>
      </div>
    </div>
<br>
    <div class="row">
      <div class="col-md-4">
      *Cellphone Number (11-digit format)<br>
      <input type="tel" class="form-control" name="cellphone" required pattern="[0]{1}[9]{1}[0-9]{9}" maxlength="11"
      <?php  
        if (!empty($row['Contact'])) {
            echo "value ='".$row['Contact']."'";
        } else {
            echo "placeholder='09123456789'";
        }
      ?> >
          <div class="invalid-feedback">
            Must be a valid cellphone number
          </div>
      </div>
      <div class="col-md-4">
      Landline Number<br>
      <input type="tel" class="form-control" pattern="\d*" name="landline" maxlength="11" minlength="7"
      <?php  
        if (!empty($row['Lnum'])) {
            echo "value ='".$row['Lnum']."'";
        }
      ?> >
      <div class="invalid-feedback">
            Must be a valid landline number
          </div>
      </div>
      <div class="col-md-2">
      Civil Status<br>
      <select name="civil_status" id="civil_status" class="custom-select">
          <option><?php  
          if (!empty($row['CivilStat'])) {
            echo $row['CivilStat'];
          }?></option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Separated">Separated</option>
          <option value="Widowed">Widowed</option>
      </select>
      </div>
      <div class="col-md-2">
      Sex<br>
      <select name="sex" id="sex" class="custom-select">
          <option><?php  
          if (!empty($row['Sex'])) {
            echo $row['Sex'];
          }?></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
      </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
      *Date of Birth<br>
      <input type="date" class="form-control" id="bdaypicker" name="birthday" max="2012-12-31" min ="1942-01-01" 
      <?php  
        if (!empty($row['DoB'])) {
            echo "value ='".$row['DoB']."'";
        }
      ?> required>
          <div class="invalid-feedback">
            Must be a valid date of birth
          </div>
      </div>
      <div class="col-md-3">
      *Place of Birth<br>
      <input type="text" class="form-control" id="birthplace" name="birthplace" required
      <?php  
        if (!empty($row['PoB'])) {
            echo "value ='".$row['PoB']."'";
        }
      ?> >
          <div class="invalid-feedback">
            Place of birth is required
          </div>
      </div>         
      <div class="col-md-3">
      Religion<br>
      <input type="text" class="form-control" name="religion"
      <?php  
        if (!empty($row['Religion'])) {
            echo "value ='".$row['Religion']."'";
        }
      ?> >
      </div>
      <div class="col-md-3">
      *Are you from an indigenous tribe?<br>
          <select class="form-control" name="indigenous">
              <option><?php  
              if (!empty($row['Tribe'])) {
                echo $row['Tribe'];
              }?></option>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
          </select>
      </div> 
  </div>
    </div>         

<br>
     <div class="row">
      <div class="col-lg-3">
          <button class="btn btn-success " type="submit" name="save" id="savePersonal" > 
            <?php  
              if (!empty($row['fname'])) {
                echo "Update your Personal information";
              }else{
                echo "Mark as Complete";
              }          
            ?>
          </button>            </div>
      <div class="col-lg-9"><input type="hidden" class="form-control" id="applicanttype" name="applicanttype" value="0"></div>
    </div>
  </form>
</main>
</body>
</html>
