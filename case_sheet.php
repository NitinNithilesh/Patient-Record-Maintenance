<title>Case Sheet</title>
<body>

  <style>
  select#soflow{
    box-sizing: border-box;
    display: block;
    width: 100%;
    border-width: 1px;
    border-style: solid;
    padding: 16px;
    outline: 0;
    font-family: inherit;
    font-size: 0.95em;
    color:rgba(10, 10, 10, 0.5) ;
    border-radius: 5px;
    background: rgba(, 500, 0, 0.6);
    opacity: 0.3;
      color:black ;
    border-color: transparent;
  }

  textarea {
    margin-top: 20px;
    margin-bottom: 20px;
  	width: 400px;
  	height: 100px;
  	border: transparent;
    border-radius: 5px;
  	padding: 5px;
    font-size: 15px;
    font-weight: 100;
  	font-family: Tahoma, sans-serif;
    background: rgba(, 500, 0, 0.6);
    opacity: 0.3;
    color:black;
    border-color: transparent;
  }
</style>
<link rel="stylesheet" type="text/css" href="style.css">
  <nav>

  <ul>

    <li><a href="pass1.php">Home</a></li>
    <li><a href="#">Patients</a>
      <ul>
        <li><a href="viewpatients.php">Old Patients</a></li>
        <li><a href="patient.php">New Patients</a></li>
      </ul>
    </li>
    <li><a href="#">Information</a>
      <ul>
        <li><a href="pass1.php">General Info</a></li>
        <li><a href="passmedical.php">Medical Info</a></li>
        <li><a href="passoral.php">Oral Health Info</a></li>
      </ul>
    </li>
    <li><a href="#">Case Sheet</a>
      <ul>
        <li><a href="passpatient.php">General Info</a></li>
        <li><a href="oralhealthh.php">Oral Health</a></li>

      </ul>
    </li>



    <li><a href="passpayment.php">Payment</a></li>
  </ul>
</nav>

<div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Chief Complaint</h2>
  <form action="add_case_sheet.php" type="text" method="post">

    <textarea rows="3" cols="50" name="complaint" placeholder="Chief Complaint..."></textarea><br>


  <div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Medical History</h2>
    <ul class="checkbox-grid">




      <li><label class="container">Asthma<input type="checkbox" name="disease[]" value="Asthma"><span class="checkmark"></span></label></li>
      <li><label class="container">Liver Disease<input type="checkbox" name="disease[]" value="Liver Disease"><span class="checkmark"></span></label></li>
      <li><label class="container">Thyroid Problems<input type="checkbox" name="disease[]" value="Thyroid Problems"><span class="checkmark"></span></label></li>
      <li><label class="container">Arthritis<input type="checkbox" name="disease[]" value="Arthritis"><span class="checkmark"></span></label></li>
      <li><label class="container">Jaundice<input type="checkbox" name="disease[]" value="Jaundice"><span class="checkmark"></span></label></li>
      <li><label class="container">Kidney Disease<input type="checkbox" name="disease[]" value="Kidney Disease"><span class="checkmark"></span></label></li>
      <li><label class="container">Bleeding Disorders<input type="checkbox" name="disease[]" value="Bleeding Disorders"><span class="checkmark"></span></label></li>
      <li><label class="container">Hepatitis<input type="checkbox" name="disease[]" value="Hepatitis"><span class="checkmark"></span></label></li>
      <li><label class="container">Ulcer<input type="checkbox" name="disease[]" value="Ulcer"><span class="checkmark"></span></label></li>
      <li><label class="container">Epilepsy<input type="checkbox" name="disease[]" value="Epilepsy"><span class="checkmark"></span></label></li>
      <li><label class="container">Cancer<input type="checkbox" name="disease[]" value="Cancer"><span class="checkmark"></span></label></li>
      <li><label class="container">Heart Problems<input type="checkbox" name="disease[]" value="Heart Problems"><span class="checkmark"></span></label></li>
      <li><label class="container">Rheumatic Fever<input type="checkbox" name="disease[]" value="Rheumatic Fever"><span class="checkmark"></span></label></li>
      <li><label class="container">Corticosteroid Treatment<input type="checkbox" name="disease[]" value="Corticosteroid Treatment"><span class="checkmark"></span></label></li></ul>
      <input type="text" name="blood" placeholder="Blood Pressure"><br>
      <input type="text" name="diabetes" placeholder="Diabetes"><br>
      <input type="text" name="disease[]" placeholder="Other.."><br>




Woman:<br>


      <p><select name="pregnant" id="soflow">
            <option value="" selected>Are You Pregnant</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
         </select></p>


             <p><select name="nursing" id="soflow">
                   <option value="" selected>Are You Nursing a Child</option>
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
                </select></p>

Habits:<br>
<ul class="checkbox-grid">
    <li><label class="container">Alcohol<input type="checkbox" name="habit[]" value="Alcohol"><span class="checkmark"></span></label></li>
    <li><label class="container">Smoking<input type="checkbox" name="habit[]" value="Smoking"><span class="checkmark"></span></label></li>
    <li><label class="container">Tobacco Chewing<input type="checkbox" name="habit[]" value="Tobacco Chewing"><span class="checkmark"></span></label></li></ul>
      <input type="text" name="habit[]" placeholder="Other.."><br>

  <br>

    <h2 class="login-header">Medication</h2>

    <textarea rows="1" cols="50" name="drug" placeholder="Drug History.."></textarea>
    <textarea rows="3" cols="50" name="surgery" placeholder="History of previous surgery.."></textarea><br>

    Drug Allergy:
    <ul class="checkbox-grid">
      <li><label class="container"><input type="checkbox" name="allergy[]" value="Penicillin">Penicillin<span class="checkmark"></span></label></li>
      <li><label class="container"><input type="checkbox" name="allergy[]" value="Sulfa">Sulf<span class="checkmark"></span></label></li>
      <li><label class="container"><input type="checkbox" name="allergy[]" value="Asprin">Asprin<span class="checkmark"></span></label></li>
      <li><label class="container"><input type="checkbox" name="allergy[]" value="Iodine">Iodine<span class="checkmark"></span></label></li>
      <li><label class="container"><input type="checkbox" name="allergy[]" value="Local Anaesthia">Local Anaesthia<span class="checkmark"></span></label></li>
      <li><label class="container"><input type="checkbox" name="allergy[]" value="Ibuprofen">Ibuprofen<span class="checkmark"></span></label></li></ul>
    <input type="text" name="allergy[]" placeholder="Others.."><br>



    <h2 class="login-header">Past Dental History</h2>

      <textarea rows="3" cols="50" name="history" placeholder="Past Dental History.."></textarea><br>
      <h2 class="login-header">Investigation</h2>

        <textarea rows="3" cols="50" name="investigation" placeholder="X-ray and Others.."></textarea><br>




  <input type="submit" name="submit" value="Submit">
</form>
