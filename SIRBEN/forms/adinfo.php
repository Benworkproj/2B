<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .Form {
      margin-left: 100px;
    }
  </style>

  <?php
      session_start();
      $conn = mysqli_connect("localhost","root","","user");
      $que = mysqli_query($conn, "SELECT * FROM admissioninfo");   
      $row = mysqli_fetch_array($que);
      if (isset($_POST['saveInfo'])) {
        $ins = mysqli_query($conn, "UPDATE admissioninfo SET 
          Branch='".$_POST['branch']."',Entry='".$_POST['entry']."',TypeOfStudent='".$_POST['newStudentType']."',ApplicantType='".$_POST['applicantType']."',Strand='".$_POST['strand']."',LRN='".$_POST['lrn']."',Course='".$_POST['course']."' WHERE cid = '".$_SESSION['cid']."' ");
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

  <br>
  <br>

  <div class="Form">
    <form class="needs-validation" novalidate="" action="" name="form_information" id="form_information" method="post">
      * - required fields
      <h5>Admission Information</h5>
      <div class="row">
        <div class="col-md-3">
          <input class="form-control" name="branch" id="branch" value="CvSU-Imus" readonly="">
        </div>
        <div class="col-md-3">
          <a href="branch.php">Change Branch</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          *Entry<br>
          <select class="form-select" id="entry" aria-label="Default select example" name="entry">
            <option>
            <?php  
              if (!empty($row['Entry'])) {
                echo $row['Entry'];
              }
            ?></option>
            <option value="New">New</option>
            <option value="Transferee">Transferee</option>
            <option value="2nd Courser">2nd Courser</option>
            <option value="TCP">TCP</option>
          </select>
          <div class="invalid-feedback">
            Entry type is required
          </div>
        </div>
        <div class="col-md-3" style="display: inline" id="newClassificationDiv">
          *Type of New Student<br>
          <select class="form-select" id="newStudentType" aria-label="Default select example" name="newStudentType">
            
            <option value="Grade 12 student">Grade 12 student</option>
            <option value="SHS Graduate">SHS Graduate</option>
            <option value="Als Passer">ALS Passer</option>
            <option value="Associate, Certificate, Vocational, or Diploma Degree Holder">Associate, Certificate, Vocational, or Diploma Degree Holder</option>
          </select>
        </div>
        <div class="col-md-3">
          *Applicant Type<br>
          <select class="form-select" aria-label="Default select example" name="applicantType">
           
            <option value="Filipino Applicant">Filipino Applicant</option>
            <option value="Foreign Applicant">Foreign Applicant</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row" id="SHSDiv">
        <div class="col-md-3" id="SHSDiv1">
          <label for="strand">SHS Strand:</label><br>
          <select class="form-select" id="strand" onchange="updatePreferredCourses(this.value)" name="strand">
            <option value="">Select</option>
            <option value="ABM">ABM</option>
            <option value="GAS">GAS</option>
            <option value="HUMSS">HUMSS</option>
            <option value="TVL">TVL</option>
            <option value="STEM">STEM</option>
          </select>
          <div class="invalid-feedback">
            Strand is required
          </div>
        </div>
        <div class="col-md-3" id="SHSDiv2">
          Learner\'s Reference Number<br>
          <input class="form-control" name="lrn" id="lrn" placeholder="" type="text" pattern="[0-9]{12}" maxlength="12">
          <span class="help-block" style="font-size: 12px">Optional for those who do not have it yet.</span>
          <div class="invalid-feedback">
            LRN can only contain 12-digits
          </div>
        </div>
      </div>

      <hr>
      <h5>Preferred Course</h5>

      <div class="row" id="preferredCourses">
        <div class="col-md-4">
          Program Name<br>
          <select id="course" class="form-control" name="course">
            
          </select>
          <div class="invalid-feedback">
            First choice of course is required
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <br>
          <button class="btn btn-success btn-md" name="saveInfo" id="saveInfo">Save Admission Information</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    function updatePreferredCourses(strand) {
      var courseDropdown = document.getElementById("course");

      // Clear existing options
      courseDropdown.innerHTML = "";

      // Add options based on selected strand
      if (strand === "ABM") {
        addOption(courseDropdown, "BS Entrepreneurship", "BSE");
        addOption(courseDropdown, "BS Business Management", "BSBM");
        addOption(courseDropdown, "BS Hospitality Management", "BSHM");
        addOption(courseDropdown, "BS Office Administration", "BSOA");
      } else if (strand === "GAS") {
        addOption(courseDropdown, "Bachelor of Arts In Journalism", "BAJ");
        addOption(courseDropdown, "Bachelor of Early Childhood Education", "BECE");
        addOption(courseDropdown, "Bachelor of Elementary Education", "BEE");
        addOption(courseDropdown, "BS Entrepreneurship", "BSE");
        addOption(courseDropdown, "BS Office Administration", "BSOA");
        addOption(courseDropdown, "BS Psychology", "BSPS");
        addOption(courseDropdown, "Bachelor of Secondary Education Major In English", "BSEME");
        addOption(courseDropdown, "Bachelor of Secondary Education Major In Mathematics", "BSEMM");
      } else if (strand === "HUMSS") {
        addOption(courseDropdown, "Bachelor of Arts In Journalism", "BAJ");
        addOption(courseDropdown, "Bachelor of Early Childhood Education", "BECE");
        addOption(courseDropdown, "Bachelor of Elementary Education", "BEE");
        addOption(courseDropdown, "BS Psychology", "BSPS");
        addOption(courseDropdown, "Bachelor of Secondary Education Major In English", "BSEME");
        addOption(courseDropdown, "Bachelor of Secondary Education Major In Mathematics", "BSEMM");
      } else if (strand === "TVL") {
        addOption(courseDropdown, "BS Information Technology", "BSIT");
        addOption(courseDropdown, "BS Computer Science", "BSCS");
        addOption(courseDropdown, "BS Hospitality Management", "BSHM");
      } else if (strand === "STEM") {
        addOption(courseDropdown, "Bachelor of Early Childhood Education", "BECE");
        addOption(courseDropdown, "Bachelor of Elementary Education", "BEE");
        addOption(courseDropdown, "BS Business Management", "BSBM");
        addOption(courseDropdown, "BS Computer Science", "BSCS");
        addOption(courseDropdown, "BS Psychology", "BSPS");
        addOption(courseDropdown, "Bachelor of Secondary Education Major In English", "BSEME");
        addOption(courseDropdown, "Bachelor of Secondary Education Major In Mathematics", "BSEMM");
      }
    }

    function addOption(dropdown, text, value) {
      var option = document.createElement("option");
      option.text = text;
      option.value = value;
      dropdown.add(option);
    }

    function hideElement(elementId) {
      var element = document.getElementById(elementId);
      element.style.display = "none";
    }

    function showElement(elementId) {
      var element = document.getElementById(elementId);
      element.style.display = "block";
    }

    function toggleElementVisibility(elementId) {
      var element = document.getElementById(elementId);
      if (element.style.display === "none") {
        element.style.display = "block";
      } else {
        element.style.display = "none";
      }
    }


    document.addEventListener("DOMContentLoaded", function() {
      var entryDropdown = document.getElementById("entry");
      var newClassificationDiv = document.getElementById("newClassificationDiv");
      var SHSDiv = document.getElementById("SHSDiv");
      var newStudentTypeDropdown = document.getElementById("newStudentType");
      var lrnDiv = document.getElementById("SHSDiv2");

      entryDropdown.addEventListener("change", function() {
        var selectedEntry = entryDropdown.value;

        if (selectedEntry === "New") {
          showElement("newClassificationDiv");
          showElement("SHSDiv");
        } else {
          hideElement("newClassificationDiv");
          hideElement("SHSDiv");
        }
      });

      newStudentTypeDropdown.addEventListener("change", function() {
        var selectedType = newStudentTypeDropdown.value;

        if (selectedType === "Als Passer" || selectedType === "Associate, Certificate, Vocational, or Diploma Degree Holder") {
          hideElement("lrn");
        } else {
          showElement("lrn");
        }
      });
    });
  </script>
</body>
</html>