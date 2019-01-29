<?php
session_start();
unset($_SESSION['check']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bottstrap css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans:400,700" rel="stylesheet">




  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Firebrand</title>
</head>

<body>
  <div class="container-fluid" >

    <nav class="navbar navbar-expand-lg navbar-dark">
      <h1 class="heading-name">FIREBRAND DRAMA UNIT</h1>

        <div class="navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <button id="navlinkid" class="btn btn-danger onclickmember">Members</button>
                  </li>
                  <li class="nav-item">
                    <button id="navlinkid" class="btn btn-warning onclickmarshall">Marshalls</button>
                  </li>
                </ul>
              </div>
    </nav>

      <!-- Members form -->
    <div class="formembers">


    <h2 class="heading-2-name">Members Data Collection Form</h3>
      <h6 class= "heading-6-name notice">Kindly click the Marshalls button if you're a marshall and not a member</h6>

  <div class="form-div">
    <form action="receivedata.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">First Name</label>
          <input type="text" class="form-control form-control-sm" name="fName" required autofocus>
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Middle Name</label>
          <input type="text" class="form-control form-control-sm" name="mName">
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Surname</label>
          <input type="text" class="form-control form-control-sm" name="sName" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Phone Number</label>
          <input type="text" name="pNumber" class="form-control form-control-sm numvalidaton" maxlength="11" required>
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Next of Kin Number</label>
          <input type="text" name="nokNumber" class="form-control form-control-sm noknumvalidaton" maxlength="11" required>
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">State of Origin</label>
          <select name="stateOfOrigin" class="form-control form-control-sm" required>
            <option value="" selected="selected"></option>
            <option value="Abia">Abia</option>
            <option value="Adamawa">Adamawa</option>
            <option value="Akwa Ibom">Akwa Ibom</option>
            <option value="Anambra">Anambra</option>
            <option value="Bauchi">Bauchi</option>
            <option value="Bayelsa">Bayelsa</option>
            <option value="Benue">Benue</option>
            <option value="Borno">Borno</option>
            <option value="Cross River">Cross River</option>
            <option value="Delta">Delta</option>
            <option value="Ebonyi">Ebonyi</option>
            <option value="Edo">Edo</option>
            <option value="Ekiti">Ekiti</option>
            <option value="Enugu">Enugu</option>
            <option value="FCT">FCT</option>
            <option value="Foreign">Foreign</option>
            <option value="Gombe">Gombe</option>
            <option value="Imo">Imo</option>
            <option value="Jigawa">Jigawa</option>
            <option value="Kaduna">Kaduna</option>
            <option value="Kano">Kano</option>
            <option value="Katsina">Katsina</option>
            <option value="Kebbi">Kebbi</option>
            <option value="Kogi">Kogi</option>
            <option value="Kwara">Kwara</option>
            <option value="Lagos">Lagos</option>
            <option value="Nasarawa">Nasarawa</option>
            <option value="Niger">Niger</option>
            <option value="Ogun">Ogun</option>
            <option value="Ondo">Ondo</option>
            <option value="Osun">Osun</option>
            <option value="Oyo">Oyo</option>
            <option value="Plateau">Plateau</option>
            <option value="Rivers">Rivers</option>
            <option value="Sokoto">Sokoto</option>
            <option value="Taraba">Taraba</option>
            <option value="Yobe">Yobe</option>
            <option value="Zamfara">Zamfara</option>

          </select>
        </div>

        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Birthday Day</label>
          <select name="bDay" class="form-control form-control-sm" required>
            <option value="" selected="selected"></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>

          </select>
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Birthday Month</label>
          <select name="bMonth" class="form-control form-control-sm" required>
            <option value="" selected="selected"></option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>

          </select>
        </div>



        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Course</label>
          <select name="course" class="form-control form-control-sm" required>
            <option></option>
            <option>

              B.Ed. Adult Education

            </option>
            <option>

              B.Ed. Primary Education

            </option>

            <option>

              Bachelor of Agriculture

            </option>
            <option>

              Bachelor of Art Education English

            </option>
            <option>

              Bachelor of Art Education French

            </option>
            <option>

              Bachelor of Art Education Hausa

            </option>
            <option>

              Bachelor of Art Education History

            </option>
            <option>

              Bachelor of Art Education Islamic Studies

            </option>
            <option>

              Bachelor of Arts Arabic

            </option>
            <option>

              Bachelor of Arts Archeology

            </option>
            <option>

              Bachelor of Arts English Language

            </option>
            <option>

              Bachelor of Arts French

            </option>
            <option>

              Bachelor of Arts Hausa

            </option>
            <option>

              Bachelor of Arts History

            </option>
            <option>

              Bachelor of Arts Islamic Studies

            </option>
            <option>

              Bachelor of Arts Linguistics

            </option>
            <option>

              Bachelor of Arts Literature in English

            </option>
            <option>

              Bachelor of Engineering Civil

            </option>
            <option>

              Bachelor of Engineering Electrical and Electronics

            </option>
            <option>

              Bachelor of Engineering Mechanical

            </option>
            <option>

              Bachelor of Fisheries

            </option>
            <option>

              Bachelor of Forestry

            </option>
            <option>

              Bachelor of Medical Laboratory Science

            </option>
            <option>

              Bachelor of Nursing Science

            </option>
            <option>

              Bachelor of Pharmacy

            </option>
            <option>

              Bachelor of Science Accounting

            </option>
            <option>

              Bachelor of Science Agricultural Extension and Community Development

            </option>
            <option>

              Bachelor of Science Applied Chemistry

            </option>
            <option>

              Bachelor of Science Biochemistry

            </option>
            <option>

              Bachelor of Science Biology

            </option>
            <option>

              Bachelor of Science Botany

            </option>
            <option>

              Bachelor of Science Business Administration

            </option>
            <option>

              Bachelor of Science Computer Science

            </option>
            <option>

              Bachelor of Science Economics

            </option>
            <option>

              Bachelor of Science Economics online

            </option>
            <option>

              Bachelor of Science Education Biology

            </option>
            <option>

              Bachelor of Science Education Chemistry

            </option>
            <option>

              Bachelor of Science Education Economics

            </option>
            <option>

              Bachelor of Science Education Geography

            </option>
            <option>

              Bachelor of Science Education Mathematics

            </option>
            <option>

              Bachelor of Science Education Physics

            </option>
            <option>

              Bachelor of Science Geography

            </option>
            <option>

              Bachelor of Science Geology

            </option>
            <option>

              Bachelor of Science Mathematics

            </option>
            <option>

              Bachelor of Science Microbiology

            </option>
            <option>

              Bachelor of Science Physics

            </option>
            <option>

              Bachelor of Science Political Science

            </option>
            <option>

              Bachelor of Science Public Administration

            </option>
            <option>

              Bachelor of Science Pure Chemistry

            </option>
            <option>

              Bachelor of Science Radiography

            </option>
            <option>

              Bachelor of Science Sociology

            </option>
            <option>

              Bachelor of Science Statistics

            </option>
            <option>

              Bachelor of Science Zoology

            </option>
            <option>

              Doctor of Human Medicine

            </option>
            <option>

              Others
            </option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Level</label>
          <select name="level" class="form-control form-control-sm" required>
            <option>
            </option>
            <option>100</option>
            <option>200</option>
            <option>300</option>
            <option>400</option>
            <option>500</option>
            <option>Others</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label class=".col-form-label-sm">Year Joined</label>
          <select name="yearJoined" class="form-control form-control-sm" required>
            <option>
            </option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
          </select>
        </div>
      </div>

      <div>
        <label for="files" class=".col-form-label-sm">Select Profile Picture</label>
        <!-- <p class="imagename" style="display:inline;">No Image Selected</p> -->
        <input id="files" class="form-control form-control-sm" type="file" name="files" accept="image/*" required>
        </div>
      <input type="submit" name="submit" value="Submit" id="submit" class="center-button btn btn-danger ">

    </form>
  </div>
    </div>


<!-- Marshalls form -->
    <div class="formarshalls">

          <h2 class="heading-2-name">Marshalls Data Collection Form</h3>
            <h6 class= "heading-6-name notice">Kindly click the Members button if you're a member and not a marshall</h6>


        <div class="form-div">
          <form action="receivedata-marshall.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">First Name</label>
                <input type="text" class="form-control form-control-sm" name="fName" required autofocus>
              </div>
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Middle Name</label>
                <input type="text" class="form-control form-control-sm" name="mName">
              </div>
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Surname</label>
                <input type="text" class="form-control form-control-sm" name="sName" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Phone Number</label>
                <input type="text" name="pNumber" class="form-control form-control-sm numvalidatonmarsh" maxlength="11" required>
              </div>
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Birthday Day</label>
                <select name="bDay" class="form-control form-control-sm" required>
                  <option value="" selected="selected"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>

                </select>
              </div>
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Birthday Month</label>
                <select name="bMonth" class="form-control form-control-sm" required>
                  <option value="" selected="selected"></option>
                  <option>January</option>
                  <option>Febuary</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>

                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">State of Origin</label>
                <select name="stateOfOrigin" class="form-control form-control-sm" required>
                  <option value="" selected="selected"></option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="Akwa Ibom">Akwa Ibom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Foreign">Foreign</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>

                </select>
              </div>

              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Current location</label>
                <select name="currentLocation" class="form-control form-control-sm" required>
                  <option value="" selected="selected"></option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="Akwa Ibom">Akwa Ibom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Foreign">Foreign</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>

                </select>
              </div>

              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Course Studied</label>
                <select name="course" class="form-control form-control-sm valCourse" required >
                  <option></option>
                  <option>

                    B.Ed. Adult Education

                  </option>
                  <option>

                    B.Ed. Primary Education

                  </option>

                  <option>

                    Bachelor of Agriculture

                  </option>
                  <option>

                    Bachelor of Art Education English

                  </option>
                  <option>

                    Bachelor of Art Education French

                  </option>
                  <option>

                    Bachelor of Art Education Hausa

                  </option>
                  <option>

                    Bachelor of Art Education History

                  </option>
                  <option>

                    Bachelor of Art Education Islamic Studies

                  </option>
                  <option>

                    Bachelor of Arts Arabic

                  </option>
                  <option>

                    Bachelor of Arts Archeology

                  </option>
                  <option>

                    Bachelor of Arts English Language

                  </option>
                  <option>

                    Bachelor of Arts French

                  </option>
                  <option>

                    Bachelor of Arts Hausa

                  </option>
                  <option>

                    Bachelor of Arts History

                  </option>
                  <option>

                    Bachelor of Arts Islamic Studies

                  </option>
                  <option>

                    Bachelor of Arts Linguistics

                  </option>
                  <option>

                    Bachelor of Arts Literature in English

                  </option>
                  <option>

                    Bachelor of Engineering Civil

                  </option>
                  <option>

                    Bachelor of Engineering Electrical and Electronics

                  </option>
                  <option>

                    Bachelor of Engineering Mechanical

                  </option>
                  <option>

                    Bachelor of Fisheries

                  </option>
                  <option>

                    Bachelor of Forestry

                  </option>
                  <option>

                    Bachelor of Medical Laboratory Science

                  </option>
                  <option>

                    Bachelor of Nursing Science

                  </option>
                  <option>

                    Bachelor of Pharmacy

                  </option>
                  <option>

                    Bachelor of Science Accounting

                  </option>
                  <option>

                    Bachelor of Science Agricultural Extension and Community Development

                  </option>
                  <option>

                    Bachelor of Science Applied Chemistry

                  </option>
                  <option>

                    Bachelor of Science Biochemistry

                  </option>
                  <option>

                    Bachelor of Science Biology

                  </option>
                  <option>

                    Bachelor of Science Botany

                  </option>
                  <option>

                    Bachelor of Science Business Administration

                  </option>
                  <option>

                    Bachelor of Science Computer Science

                  </option>
                  <option>

                    Bachelor of Science Economics

                  </option>
                  <option>

                    Bachelor of Science Economics online

                  </option>
                  <option>

                    Bachelor of Science Education Biology

                  </option>
                  <option>

                    Bachelor of Science Education Chemistry

                  </option>
                  <option>

                    Bachelor of Science Education Economics

                  </option>
                  <option>

                    Bachelor of Science Education Geography

                  </option>
                  <option>

                    Bachelor of Science Education Mathematics

                  </option>
                  <option>

                    Bachelor of Science Education Physics

                  </option>
                  <option>

                    Bachelor of Science Geography

                  </option>
                  <option>

                    Bachelor of Science Geology

                  </option>
                  <option>

                    Bachelor of Science Mathematics

                  </option>
                  <option>

                    Bachelor of Science Microbiology

                  </option>
                  <option>

                    Bachelor of Science Physics

                  </option>
                  <option>

                    Bachelor of Science Political Science

                  </option>
                  <option>

                    Bachelor of Science Public Administration

                  </option>
                  <option>

                    Bachelor of Science Pure Chemistry

                  </option>
                  <option>

                    Bachelor of Science Radiography

                  </option>
                  <option>

                    Bachelor of Science Sociology

                  </option>
                  <option>

                    Bachelor of Science Statistics

                  </option>
                  <option>

                    Bachelor of Science Zoology

                  </option>
                  <option>

                    Doctor of Human Medicine

                  </option>
                  <option>
                    Others
                  </option>

                </select>
              </div>
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Served As</label>
                <select name="servedAs" class="form-control form-control-sm" required >
                  <option>
                  </option>
                  <option>Member</option>
                  <option>Co-ordinator</option>
                  <option>Dept Co-ordinator</option>
                  <option>Secretary</option>
                  <option>Financial Secretary</option>
                  <option>Treasurer</option>
                  <option>Prayer 1</option>
                  <option>Prayer 2</option>
                  <option>Script 1</option>
                  <option>Script 2</option>
                  <option>Stage 1</option>
                  <option>Stage 2</option>
                  <option>Costume 1</option>
                  <option>Costume 2</option>
                  <option>Security 1</option>
                  <option>Security 2</option>
                  <option>Technical 1</option>
                  <option>Technical 2</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label class=".col-form-label-sm">Year Graduated</label>
                <select name="yearGraduated" class="form-control form-control-sm" required>
                  <option>
                  </option>
                  <option>1995</option>
                  <option>1996</option>
                  <option>1997</option>
                  <option>1998</option>
                  <option>1999</option>
                  <option>2000</option>
                  <option>2001</option>
                  <option>2002</option>
                  <option>2003</option>
                  <option>2004</option>
                  <option>2005</option>
                  <option>2006</option>
                  <option>2007</option>
                  <option>2008</option>
                  <option>2009</option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                </select>
              </div>
            </div>

            <div>
              <label for="filesmarsh" class=".col-form-label-sm">Select Profile Picture</label>
              <!-- <p class="imagename" style="display:inline;">No Image Selected</p> -->
              <input id="filesmarsh" class="form-control form-control-sm" type="file" name="filesmarsh" accept="image/*" required>
            </div>
            <input type="submit" name="submit" value="Submit" id="submitmarsh" class="btn btn-danger center-button">

          </form>
        </div>
          </div>
    </div>
    </div>
  <script src="index.js" charset="utf-8"></script>
</body>

</html>
