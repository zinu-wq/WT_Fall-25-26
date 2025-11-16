<!DOCTYPE HTML>
<HTML>
<BODY>
<TITLE>Participant Registration</TITLE>
<style>
 body{
    font-family:Arial,sans-serif;
    padding: 30px;
    background-colour.#fof8ff
 }
 
    h2 {
      text-align: center;
      color: #003366;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
 
  <h2>Registration Form</h2>
 
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label>
    <input type="text" id="fname" />
 
    <label>Email:</label>
    <input type="text" id="email" />
 
    <label>Phone Number:</label>
    <input type="number" id="pnumber" />
 
    <label>Password:</label>
    <input type="number" id="pass" />

     <label>Confirm Password:</label>
    <input type="number" id="cpass" />

    <select id="department">
      <option value="">-- Select Department --</option>
      <option value="CSE">CSE</option>
      <option value="EEE">EEE</option>
      <option value="BBA">BBA</option>
    </select>
 
    <button type="submit">Submit</button>
  </form>
<!-- Output Section -->
  <div id="error"></div>
  <div id="output"></div>
 
  <script>
    function handleSubmit() {
      // Get values from form
      var fname = document.getElementById("fname").value.trim();
      var email = document.getElementById("studentId").value.trim();
      var pnumber = document.getElementById("pnumber").value.trim();
      var pass = document.getElementById("pass").value;
      var cpassword = document.getElementById("cpassword").value;
      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
       // Clear previous messages
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
       // Validation
      if (fname === "" || email === "" || pnumber === "" || pass === "" || cpassword === "" ||) {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
 
      if (!email.includes("@")) {
        errorDiv.innerHTML = " email must contain '@' ";
        return false;
      }
 
      if (pass! ==cpass) {
        errorDiv.innerHTML = " passward do not match.";
        return false;
      }
  outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
       Full Name: ${fname}<br>
        Email: ${email}<br>
        Phone Number: ${pnumber}<br>
        Password: ${pass}<br>
        Confirm Password: ${cpassword}<br>
        ;
 
      return false;
    }
  </script>
 
</body>
</html>
