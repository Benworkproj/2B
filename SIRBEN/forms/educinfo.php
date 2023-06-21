<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<style>
.Form1 {
margin-left:130px;
margin-right:130px;
}
</style>
<?php  
  session_start();
  $conn = mysqli_connect("localhost","root","","user");

  if (isset($_POST['saveEducation'])) {
    $ins = mysqli_query($conn, "UPDATE educationalbackground SET 
        Elemname='".$_POST['elemname']."',ElemAdd='".$_POST['elemaddress']."',ElemYG='".$_POST['elemyear']."',ElemType='".$_POST['elemtype']."',HSname='".$_POST['hsname']."',HSAdd='".$_POST['hsaddress']."',HSYg='".$_POST['hsyear']."',HSType='".$_POST['hstype']."',SHSname='".$_POST['shsname']."',SHSAdd='".$_POST['shsaddress']."',SHSYG='".$_POST['shsyear']."',SHSType='".$_POST['shstype']."',Vocname='".$_POST['vocname']."',VocAdd='".$_POST['vocaddress']."',VocYG='".$_POST['vocyear']."',VocType='".$_POST['voctype']."' WHERE cid = '".$_SESSION['cid']."' ");
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
<div class="Form1">
<form class="needs-validation" novalidate="" method="post">
        * - required fields
            <h5>Educational Background</h5>
            <h6>Elementary</h6>
         <div class="row">
              <div class="col-md-4">
              *School Name<br>
              <input type="" class="form-control" name="elemname" required="">
              <div class="invalid-feedback">
                  Elementary name is required
                </div>
              </div>
              <div class="col-md-4">
              *School Address<br>
              <input type="" class="form-control" name="elemaddress" required="">
              <div class="invalid-feedback">
                  Elementary address is required
                </div>
              </div>
              <div class="col-md-2">
              *Year Graduated<br>            
                <input name="elemyear" type="number" min="1900" max="2099" placeholder="YYYY" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"maxlength = "4">
              </div>
              <div class="col-md-2">
              *Type<br>
               <select name="elemtype" id="elemtype" class="form-control">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                </select>
              </div>
          </div>
          <hr>
            <h6>High School</h6>
         <div class="row">
              <div class="col-md-4">
              *School Name<br>
              <input type="" class="form-control" name="hsname" required="">
              <div class="invalid-feedback">
                  High School name is required
                </div>
              </div>
              <div class="col-md-4">
              *School Address<br>
              <input type="" class="form-control" name="hsaddress" required="">
              <div class="invalid-feedback">
                  High School address is required                
                </div>
              </div>
              <div class="col-md-2">
              *Year Graduated<br>
                <input name="hsyear" type="number" min="1900" max="2099" placeholder="YYYY" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"maxlength = "4">
              </div>
              <div class="col-md-2">
              *Type<br>
               <select name="hstype" id="hstype" class="form-control">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                    </select>
              </div>
          </div>
          <hr>      
                  <h6>Senior High School</h6>

        <!-- <span class="help-block" style="font-size: 14px">Put N/A if you did not attend Senior High S</span> -->
         <div class="row">
              <div class="col-md-4">
              School Name<br>
              <input type="" class="form-control" name="shsname" id="shsname" required="">
              <div class="invalid-feedback">
                  Senior High School name is required                
                </div>
              </div>
              <div class="col-md-4">
              School Address<br>
              <input type="" class="form-control" name="shsaddress" id="shsaddress" required="">
              <div class="invalid-feedback">
                  Senior High School address is required                
                </div>              
              </div>
              <div class="col-md-2">
              Year Graduated<br>
                <input name="shsyear" type="number" min="1900" max="2099" placeholder="YYYY" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"maxlength = "4">
              </div>
              <div class="col-md-2">
              Type<br>
               <select name="shstype" id="shstype" class="form-control">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                    </select>
              </div>
          </div>
          <hr>            
        <h6>Vocational</h6>
         <div class="row">
              <div class="col-md-4">
              School Name<br>
              <input type="" class="form-control" name="vocname">
              </div>
              <div class="col-md-4">
              School Address<br>
              <input type="" class="form-control" name="vocaddress">
              </div>
              <div class="col-md-2">
              Year Graduated<br>
                <input name="vocyear" type="number" min="1900" max="2099" placeholder="YYYY" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"maxlength = "4">
              </div>
              <div class="col-md-2">
              Type<br>
               <select name="voctype" id="voctype" class="form-control">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                    </select>
              </div>
          </div>
         
                     
          <br>
           <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-success " type="submit" name="saveEducation" id="saveEducation"> Mark as Complete</button>            
            </div>            
          </div>
        </form>
</div>
</body>
</html>