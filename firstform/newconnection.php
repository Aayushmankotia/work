<?php
 include "configer.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>submit form
    </title>
</head>

<body>
    <style type="text/css">
        body {
            background: #56f7fe38;
        }

        h1 {
            background: blue;
            margin: 0px;
            color: white;
            text-align: left;
            padding-left: 25px;


        }

        .cen {
            background-image: linear-gradient(215deg, black, black, black, cyan, cyan, white, white, white);

            border: solid gray 2px;
            width: 20%;

            margin: 10% auto;
        }

        label {
            position: absolute;
            padding: 3px 10px;
            height: 25px;
            font-size: 18px;

        }

        p {
            text-align: left;
        }

        input {
            margin-left: 20px;
            color: black;
            margin-left: 40%;
            height: 25px;
            border-radius: 7px;
        }

        .btn {
            height: 30px;
            width: 100%;
            margin-left: 0%;
            border-radius: 7px;
            background: blue;
            color: white;
            font-size: 18px;
        }

        input:hover {
            background: lightgray;
            color: black;
            border-color: blue;
        }
    </style>
    <div class="cen">

        <h1>FORM</h1>
        <form action="#" method="post">


            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName" placeholder="ENTER FIRSTNAME" required>
            </p>


            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName" placeholder="ENTER LASTNAME" required>
            </p>


            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender" placeholder=" ENTER GENDER" required>
            </p>


            <p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address" placeholder="ADDRESS" required>
            </p>


            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress" placeholder=" ENTER USERNAME" required>
            </p>

            <input class="btn" type="submit" value="Submit" name="submit">

        </form>
    </div>
    <?php
   

    // Taking all 5 values from the form data(input)
    if (isset($_POST['submit'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO students (first_name, last_name, gender, address, email)
               VALUES ('" . $first_name . "', '" . $last_name . "', '" . $gender . "', '" . $address . "', '" . $email . "')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: action.php");

        } else {
            echo "ERROR";
        }
    }

    ?>



</body>

</html>