<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS.css">
    
    <style>
        body{
            border:30px;
            padding: 50px;
            justify-content: center;
            
            background-image: linear-gradient(rgb(6, 6, 80), rgb(40, 20, 20));
            color: deepskyblue;
        }
        
   
</style>

</head>

<body>
    <form method="POST", action="">
    <div class="form">
        <form action="process form.php" method="post"></form>
        <h1>REGISTRATION FORM</h1>
        <h2>prof ram meghe collage of engineering and management badnera</h2>
        <p>required field marked by *</p>
        <p>*name: <input type="text" name="name" id="nameInput"required placeholder=""></p>
        <legend>GENDER</legend>
        <p>
            <input type="text" placeholder="Enter Gender" name="gender"/>
        </p>
        </fieldset>
        <p>ADDRESS: <textarea name="address" id="address" cols="20" rows="10"></textarea></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <fieldset>
            <p>Pincode: <input type="number" name="pincode" id="pincode"></p>
        </fieldset>
        <fieldset>
            <p>Phone-no.: <input type="number" name="phoneno" id="phone"></p>
        </fieldset>
        <P><h4> ENTRENCE EXAM: </h4>
            <select name="exam" id="ENTRENCE-EXAM">
                <option value="">-- <h4> select the ENTRENCE-EXAM</h4> --</option>
                <option value="MHT-CET">MHT-CET</option>
                <option value="JEE">JEE</option>
                <option value="OTHER">OTHER</option>
            </select>
        </P>
        <h1>Click the Button</h1>

        <!-- Creating a button -->
        <button name="submit">SUBMIT</button>

    </form>

        <script>
            function myFunction() {
                var name = document.getElementById("nameInput").value;
                var gender = document.querySelector('input[name="gender"]:checked');
                var address = document.getElementById("address").value;
                var email = document.getElementById("email").value;
                var pincode = document.getElementById("pincode").value;
                var phone = document.getElementById("phone").value;
                var entranceExam = document.getElementById("ENTRENCE-EXAM").value;

                if (name.trim() !== "") {
                    alert("Name: " + name +
                        "\nGender: " + (gender ? gender.value : "Not specified") +
                        "\nAddress: " + address +
                        "\nEmail: " + email +
                        "\nPincode: " + pincode +
                        "\nPhone: " + phone +
                        "\nEntrance Exam: " + (entranceExam ? entranceExam : "Not specified")
                    );
                } else {
                    alert("Please enter your name!");
                }
            }
        </script>
    </div>
</body>

</html>

<?php
include 'first.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $pincode=$_POST['pincode'];
    $phonenumber=$_POST['phoneno'];
    $exam=$_POST['exam'];

    $coneb="insert into register(name,gender,address,email,pincode,phoneno,exam) values('$name','$gender','$address','$email','$pincode','$phonenumber','$exam')";
    $pn=mysqli_query($con,$coneb);
    if($pn){
      ?>
      <script>
        alert("SucessFully Added")
        </script>
        <?php
    }
}
?>