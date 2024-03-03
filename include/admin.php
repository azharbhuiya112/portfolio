<?php
include './config.php';
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ./loginsystem.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#FDFEFE ;
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
        .t1{
            color:#f1cbff;
        }
        .t2{
            color:#f1cbff;
        }
        .t3{
            color:#f1cbff;
        }
        .t4{
            color:#f1cbff;
        }
        .t5{
            color:#f1cbff;
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
            border: 1px solid #aa22ff;
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
            background: #f1cbff;
        }
        button{
             background:#319273;
        }
        .A{


            color:#ffdab9;
        }
        .D{

            color:#66cccc;
        }
    </style>

</head>

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="../index.php">
                <i class='bx bx-home-circle'></i>
                    <span class="t1">Main Page</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <i class='bx bxs-dashboard'></i>
                    <span class="t2">About</span>
                </a>
            </li>
            <li>
                <a href="#project">
                <i class='bx bx-bar-chart-alt-2'></i>
                    <span class="t3">Project</span>
                </a>
            </li>
            <li>
                <a href="#message">
                    <i class='bx bxs-message-dots'></i>
                    <span class="t4">Message</span>
                </a>
            </li>
            <li class="logout">
                <a href="./logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="t5">Logout</span>
                </a>
            </li>
        </ul>
    </div>


    <div class="main--content">
        <div class="header--wraper">
            <div class="head-title">
                <span class="A"><h2>Admin Panel</h2></span>
                <h4 class="D">Dashboard</h4>
            </div>
        </div>

        <section id="about">
            <div class="main--title--div">
                <h3 class="main--title">About</h3>
            </div>
            <div class="form-container">
                <form action="./admin.php" method="post">
                    <?php
                    include './config.php';
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $bd = $_POST["bd"];
                        $website = $_POST["website"];
                        $phone = $_POST["phone"];
                        $city = $_POST["city"];
                        $age = $_POST["age"];
                        $degree = $_POST["degree"];
                        $email = $_POST["email"];
                        $freelance = $_POST["freelance"];

                        $sql = "INSERT INTO about (birthday, website, phone,city,age,degree,email,freelance) VALUES (?,?,?,?,?,?,?,?)";
                        $stmt = mysqli_prepare($conn, $sql);
                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "ssssssss", $bd, $website, $phone, $city, $age, $degree, $email, $freelance);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_close($stmt);
                        } else {
                            mysqli_error($conn);
                        }
                    }
                    ?>
                    <div class="form-group">
                        <label for="name">Birthday:</label>
                        <input type="text" name="bd" placeholder="Birthday:">
                    </div>

                    <div class="form-group">
                        <label for="name">Website:</label>
                        <input type="text" name="website" placeholder="Website:">
                    </div>

                    <div class="form-group">
                        <label for="name">Phone:</label>
                        <input type="text" name="phone" placeholder="Phone:">
                    </div>

                    <div class="form-group">
                        <label for="name">City:</label>
                        <input type="text" name="city" placeholder="City:">
                    </div>

                    <div class="form-group">
                        <label for="name">Age:</label>
                        <input type="text" name="age" placeholder="Age:">
                    </div>

                    <div class="form-group">
                        <label for="name">Degree:</label>
                        <input type="text" name="degree" placeholder="Degree:">
                    </div>

                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" name="email" placeholder="Email:">
                    </div>

                    <div class="form-group">
                        <label for="name">Freelance:</label>
                        <input type="text" name="freelance" placeholder="Freelance:">
                    </div>



                    <button type="submit" name="submit">Insert</button>
                </form>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Birthday</th>
                            <th>Website</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Age</th>
                            <th>Degree</th>
                            <th>Emial</th>
                            <!-- <th>Freelance</th> -->
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        include './config.php';

                        $sql = "SELECT * FROM about";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['sn'];
                                $bd = $row["birthday"];
                                $website = $row["website"];
                                $phone = $row["phone"];
                                $city = $row["city"];
                                $age = $row["age"];
                                $degree = $row["degree"];
                                $email = $row["email"];
                                $freelance = $row["freelance"];
                        ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $bd; ?></td>
                                    <td><?php echo $website; ?></td>
                                    <td><?php echo $phone; ?></td>
                                    <td><?php echo $city; ?></td>
                                    <td><?php echo $age; ?></td>
                                    <td><?php echo $degree; ?></td>
                                    <td><?php echo $email; ?></td>
                                    
                                    <td >
                                        <button>
                                            <a href="update_about.php?updateid=<?php echo $id; ?>">Update</a>
                                        </button>
                                        <button>
                                            <a href="Delete_about.php?deleteid=<?php echo $id; ?>">Delete</a>
                                        </button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </section>

        <section id="project">
            <div class="main--title--div">
                <h3 class="main--title">Project</h3>
            </div>
            <div class="form-container">
                <form action="./project.php" method="post">
                    
                    <div class="form-group">
                        <label for="name">Title:</label>
                        <input type="text" name="title" placeholder="Title:">
                    </div>

                    <div class="form-group">
                        <label for="name">Details:</label>
                        <input type="text" name="details" placeholder="Details:">
                    </div>

                    <div class="form-group">
                        <label for="name">Link:</label>
                        <input type="text" name="link" placeholder="Link:">
                    </div>                               
                    <button type="submit" name="submit">Insert</button>
                </form>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Details</th>                           
                            <th>Link</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        include './config.php';

                        $sql = "SELECT * FROM project";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['sn'];
                                $title = $row["title"];
                                $details = $row["details"];
                                $link = $row["link"];
                                
                        ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $details; ?></td>
                                    <td><?php echo $link; ?></td>
                                    <td>
                                        <button>
                                            <a href="./update_project.php?updateid=<?php echo $id; ?>">Update</a>
                                        </button>
                                        <button>
                                            <a href="Delete_project.php?deleteid=<?php echo $id; ?>">Delete</a>
                                        </button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </section>


        <section id="message">
            <div class="main--title--div">
                <h3 class="main--title">Message</h3>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT * FROM message";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['sn'];
                                $name = $row['username'];
                                $email = $row['email'];
                                $message = $row['message'];
                                $time = $row['time'];
                                echo '<tr>
<th scope="row">' . $id . '</th>
<td>' . $name . '</td>
<td>' . $email . '</td>
<td>' . $message . '</td>
<td>' . $time . '</td>
<td><button><a href="./delete_message.php ? deleteid=' . $id . '">Delete</td>
</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

</body>

</html>