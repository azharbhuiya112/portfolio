<?php
include './config.php';

if (isset($_GET['updateid']) && is_numeric($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM `about` WHERE `sn`=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $bd = $row["birthday"];
        $website = $row["website"];
        $phone = $row["phone"];
        $city = $row["city"];
        $age = $row["age"];
        $degree = $row["degree"];
        $email = $row["email"];
        $freelance = $row["freelance"];
    } else {
        exit;
    }
} else {
    exit;
}

if (isset($_POST['submit'])) {
    $bd = $_POST["bd"];
    $website = $_POST["website"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $age = $_POST["age"];
    $degree = $_POST["degree"];
    $email = $_POST["email"];
    $freelance = $_POST["freelance"];

    $sql = "UPDATE `about` SET `birthday`=?, `website`=?, `phone`=?, `city`=?, `age`=?, `degree`=?, `email`=?,`freelance`=? WHERE `sn`=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssi", $bd, $website, $phone, $city, $age, $degree, $email,$freelance, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("location:./admin.php");
        exit;
    } else {
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .logo {
            height: 60px;
            background-color: #343a40;
        }

        .menu {
            padding: 0;
        }

        .menu li {
            list-style: none;
        }

        .menu li a {
            display: block;
            padding: 15px 20px;
            color: #fff;
            transition: background-color 0.3s;
        }

        .menu li a:hover {
            background-color: #495057;
        }

        .menu li.active a {
            background-color: #495057;
        }

        .main--content {
            margin-left: 250px;
            padding: 20px;
        }

        .header--wraper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .head-title {
            color: #212529;
        }

        .user--info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .search--box {
            position: relative;
        }

        .search--box input {
            width: 200px;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            outline: none;
        }

        .search--box i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .table-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            height: 100px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>

    <div class="main--content">


        <section id="about">
            <div class="main--title--div">
                <h3 class="main--title">Education</h3>
            </div>
            <div class="form-container">
                <form method="post">
                    <div class="form-group">
                        <label for="name">Birthday:</label>
                        <input type="text" name="bd" placeholder="Birthday:" value="<?php echo $bd  ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Website:</label>
                        <input type="text" name="website" placeholder="Website:" value="<?php echo $website  ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Phone:</label>
                        <input type="text" name="phone" placeholder="Phone:" value="<?php echo $phone  ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">City:</label>
                        <input type="text" name="city" placeholder="City:" value="<?php echo $city  ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Age:</label>
                        <input type="text" name="age" placeholder="Age:" value="<?php echo $age ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Degree:</label>
                        <input type="text" name="degree" placeholder="Degree:" value="<?php echo $degree  ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" name="email" placeholder="Email:" value="<?php echo $email  ;?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Freelance:</label>
                        <input type="text" name="freelance" placeholder="Freelance:" value="<?php echo $freelance  ;?>">
                    </div>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </section>
    </div>

</body>

</html>