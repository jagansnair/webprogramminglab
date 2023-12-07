<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT FORM</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="studentdetails.php" method="POST">
        <label for="fname">Name</label>
        <input type="text" name="fname" id="fname">

        <label for="mailid">Email</label>
        <input type="email" name="mailid" id="mailid">

        <label for="address">Address</label>
        <input type="text" name="address" id="address">

        <label for="gend">Gender</label>
        <input type="text" name="gend" id="gend">

        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob">

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_POST) {
        $fname = $_REQUEST["fname"];
        echo "Name= $fname" . "<br>";
        $mailid = $_REQUEST["mailid"];
        echo "Email= $mailid" . "<br>";
        $address = $_REQUEST["address"];
        echo "Address= $address" . "<br>";
        $gend = $_REQUEST["gend"];
        echo "Gender= $gend" . "<br>";
        $dob = $_REQUEST["dob"];
        echo "Date of Birth= $dob" . "<br>";
    }
    ?>
</body>
</html>
