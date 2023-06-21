<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <?php  
      session_start();
      $conn = mysqli_connect("localhost","root","","user");      
      $que = mysqli_query($conn, "SELECT * FROM familybackground");   
      $row = mysqli_fetch_array($que);

      if (isset($_POST['savefam'])) {
        $ins = mysqli_query($conn, "UPDATE familybackground SET
            Fname='".$_POST['fname']."',Fcon='".$_POST['fcon']."',Fjob='".$_POST['fjob']."',Mname='".$_POST['mname']."',Mcon='".$_POST['mcon']."',Mjob='".$_POST['mjob']."',EMFI='".$_POST['income']."',noSiblings='".$_POST['nosiblings']."',BOrder='".$_POST['birthorder']."',Gname='".$_POST['gname']."',Gcon='".$_POST['gcon']."',Gjob='".$_POST['gjob']."',Sparent='".$_POST['soloparent']."',FamAb= '".$_POST['familyabroad']."', status = 'completed'
            WHERE cid = '".$_SESSION['cid']."' ");
          
      }
  ?>
  </head>
<body>
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
<div class="container">
        <form class="needs-validation" novalidate="" action="faminfo.php" method="post">
        * - required fields
            <h5>Family Background</h5>
         <div class="row">
              <div class="col-md-4">
              Father\'s Name<br>
              <input type="text" class="form-control" name="fname" 
              <?php  
                if (!empty($row['Fname'])) {
                    echo "value ='".$row['Fname']."'";
                }
              ?> >
              </div>
              <div class="col-md-4">
              Contact Number<br>
              <input type="tel" class="form-control" name="fcon" pattern="[0]{1}[9]{1}[0-9]{9}" placeholder="09123456789" maxlength="11"
              <?php  
                if (!empty($row['Fcon'])) {
                    echo "value ='".$row['Fcon']."'";
                }
              ?> >
              </div>
              <div class="col-md-4">
              Occupation<br>
              <input type="" class="form-control" name="fjob"
              <?php  
                if (!empty($row['Fjob'])) {
                    echo "value ='".$row['Fjob']."'";
                }
              ?> >
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-4">
              Mother\'s Name<br>
              <input type="" class="form-control" name="mname"
              <?php  
                if (!empty($row['Mname'])) {
                    echo "value ='".$row['Mname']."'";
                }
              ?> >
              </div>
              <div class="col-md-4">
              Contact Number<br>
              <input type="tel" class="form-control" name="mcon" pattern="[0]{1}[9]{1}[0-9]{9}" placeholder="09123456789" maxlength="11"
              <?php  
                if (!empty($row['Mcon'])) {
                    echo "value ='".$row['Mcon']."'";
                }
              ?> >
              </div>
              <div class="col-md-4">
              Occupation<br>
              <input type="" class="form-control" name="mjob"
              <?php  
                if (!empty($row['Mjob'])) {
                    echo "value ='".$row['Mjob']."'";
                }
              ?> >
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-4">
                *Estimated Monthly Family Income <br>
                <select name="income" class="form-control" required>
                  <option><?php  
                if (!empty($row['EMFI'])) {
                    echo $row['EMFI'];
                }
              ?> </option>
                  <option value="below 10,000">below 10,000</option>
                  <option value="11,000-20,000">11,000-20,000</option>
                  <option value="21,000-30,000">21,000-30,000</option>
                  <option value="31,000-40,000">31,000-40,000</option>
                  <option value="41,000-50,000">41,000-50,000</option>
                  <option value="above 50,000">above 50,000</option>
                </select>
                <div class="invalid-feedback">
                  Estimated Monthly Family Income is required
                </div>
              </div>              
              <div class="col-md-4">
              Number of siblings<br>
              <input type="text" name="nosiblings" class="form-control"
              <?php  
                if (!empty($row['noSiblings'])) {
                    echo "value ='".$row['noSiblings']."'";
                }
              ?> >
              </div>
              <div class="col-md-4">
              Birth Order<br>
              <select name="birthorder" class="form-control">
                <option><?php  
                if (!empty($row['BOrder'])) {
                    echo $row['BOrder'];
                }
              ?> </option>
                <option value="Eldest">Eldest</option>
                <option value="Second">Second</option>
                <option value="Middle">Middle</option>
                <option value="Youngest">Youngest</option>
                <option value="Only Child">Only Child</option>
              </select>
              </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
            *Guardian\'s Name<br>
            <input type="text" class="form-control" name="gname" required
            <?php  
                if (!empty($row['Gname'])) {
                    echo "value ='".$row['Gname']."'";
                }
            ?> >
            <span class="help-block" style="font-size: 12px">Either the father or mother or any individual that acts as the guardian.</span>
                <div class="invalid-feedback">
                  Guardian\'s name is required
                </div>
            </div>
            <div class="col-md-4">
              *Contact Number<br>
              <input type="tel" class="form-control" name="gcon" pattern="[0]{1}[9]{1}[0-9]{9}" placeholder="09123456789" maxlength="11" required
              <?php  
                if (!empty($row['Gcon'])) {
                    echo "value ='".$row['Gcon']."'";
                }
              ?> >
              <div class="invalid-feedback">
                  Guardian\'s contact number is required
                </div>
              </div>
            <div class="col-md-4">
            *Occupation<br>
            <input type="" class="form-control" name="gjob" required
            <?php  
                if (!empty($row['Gjob'])) {
                    echo "value ='".$row['Gjob']."'";
                }
            ?> >
                <div class="invalid-feedback">
                  Guardian occupation field is required
                </div>
            </div>
          </div>
            <h5>Additional Family Information</h5>
         <div class="row">
              <div class="col-md-4">
              Are you a solo parent?<br>
                <select class="form-control" name="soloparent">
                  <option><?php  
                if (!empty($row['Sparent'])) {
                    echo $row['Sparent'];
                }
              ?> </option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
              </div>
              <div class="col-md-4">
              Do you have family members working abroad?<br>
                <select class="form-control" name="familyabroad" id="familyabroad" onchange="enterfam()">
                    <option><?php  
                if (!empty($row['Sparent'])) {
                    echo $row['Sparent'];
                }
              ?> </option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
              </div>
        </div>
          
          <br>
          <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-success " type="submit" name="savefam" id="saveFamily">
                  <?php  
              if (!empty($row['fname'])) {
                echo "Update your Personal information";
              }else{
                echo "Mark as Complete";
              }          
            ?>
                </button>            </div>
            <div class="col-lg-9"></div>
          </div>
        </form>
                 
        </div>
</body>

</html>