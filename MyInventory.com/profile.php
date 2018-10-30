
<?php

            session_start();
            $conn = new mysqli("localhost", "root", "", "mi");
            $uname = $_GET["uname"];
            $pwd = $_GET["pwd"];
            $sql = "SELECT * FROM signup";
            $result = $conn->query($sql);
            $f = 0;
            while ($row = $result->fetch_assoc()) {
                if ($uname == $row["uname"]) {
                    if ($pwd == $row["pwd"]) {
                        $conn->close();
                        $f = 1;
                        exit;
                    }
                }
            }
            $_SESSION['$f'] = $f;
            if ($f == 0)
                header('Location: http://localhost/MyInventory.com/login.php');
            else
                echo "<script type='text/javascript'>alert(<?php echo " . "Hello" . " ?>);</script>";
            


            ?>

