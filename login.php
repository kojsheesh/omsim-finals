<?php
include 'connection.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Get user info
    $google_oauth = new Google\Service\Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // Use the $mysqli connection you built in connection.php
    $email = $mysqli->real_escape_string($google_account_info->email);
    $name = $mysqli->real_escape_string($google_account_info->name);

    // Check if user exists in your it5_login database
    $checkUser = $mysqli->query("SELECT * FROM users WHERE email = '$email'");

    if ($checkUser->num_rows == 0) {
        // Insert new user if they don't exist
        $mysqli->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    }

    $_SESSION['user_email'] = $email;
    header("Location: test.php");
    exit();
}
?>

<?php
//redirect to reservationform.php if the user
//already logged in to the system
if (isset($_SESSION['session_status']) && $_SESSION['session_status'] == 1) {
?>
    <script type="text/javascript">
        window.location = "reservationform.php";
    </script>
<?php
}
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>

<body>
    <header>
        <div class="logo">
            <img
                src="Photos\logo.jpg"
                alt="Logo" />
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact</a>
            <a href="reservationform.php">Reserve Now</a>
        </nav>
    </header>
    <div class="logpage">
        <form method="POST" action="">

            <div class="pic">
            </div>
            <div class="logpage-text">
                <h2>LOGIN</h2><br>
                <table>
                    <tr>
                        <td>Username:</td>

                    </tr>
                    <tr>

                        <td colspan="2"><input type="text" name="username" /></td>
                    </tr>

                    <tr>
                        <td>Password:</td>

                    </tr>

                    <tr>
<<<<<<< Updated upstream

                        <td colspan="2"><input type="password" name="password" /></td>
=======
                        <td colspan="2"><input type="password" name="password" required /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>
                            <div class="g-recaptcha" data-sitekey="6Le0DcssAAAAACPv1LdYyROfcxNimO0PaN-RXeiC"></div>
<br>
                            <input type="submit" name="login" value="Log in" />
                        </td>
                    </tr>
                    <tr>
                        <td> <br>Don't have an account?</td>
                        <td> <br><a href="signup.php">Sign Up</a></td>
>>>>>>> Stashed changes
                    </tr>

                    <tr>
                        <td colspan="2">
                            <br><br>
                            <input type="submit" name="login" value="Log in" />

                        </td>
                    </tr>
                    <tr>

                        <td> <br>Don't have an account?</td>
                        <td> <br><a href="signup.php">Sign Up</a></td>
                    </tr>
                    <tr>
                        <td colspan="2">
          
                            <p>------------------- or ----------------------</p>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
          
                            <a href="<?php echo $client->createAuthUrl(); ?>" style="text-decoration:none;">
                                <button type="button" style="display: flex; align-items: center; justify-content: center; margin: 20px auto; padding: 10px; border: 1px solid #ccc; background: white; border-radius: 4px; cursor: pointer;">
                                    <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" width="20" style="margin-right: 10px;">
                                    Sign in with Google
                                </button>
                            </a>

                        </td>
                    </tr>

                </table>
                <br />


            </div>




            <?php
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if (!empty($username) && !empty($password)) {
                    $q_login = $mysqli->query("SELECT uid, username, password FROM users_tbl WHERE username='$username' and password='$password'");

                    if (!$q_login) {
                        echo $mysqli->error;
                        exit();
                    } elseif ($q_login->num_rows == 0) {
                        echo "Invalid Username or Password.";
                    } else {
                        $r_login = $q_login->fetch_assoc();
                        //check the entered username and password
                        //is the same from the table users
                        if ($r_login['username'] == $username and $r_login['password'] == $password) {
                            $_SESSION['uid'] = $r_login['uid'];
                            $_SESSION['session_status'] = 1;
            ?>
                            <script type="text/javascript">
                                window.location = "home.php";
                            </script>
            <?php
                        }
                    }
                }
            }
            ?>
        </form>
    </div>
</body>

</html>