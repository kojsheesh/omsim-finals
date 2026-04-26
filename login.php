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
//redirect to omsim.php if the user
//already logged in to the system
if (isset($_SESSION['session_status']) && $_SESSION['session_status'] == 1) {
?>
    <script type="text/javascript">
        window.location = "omsim.php";
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
                src="https://media.discordapp.net/attachments/1496377481652076586/1497614928008450158/logo.jpg?ex=69ee2a17&is=69ecd897&hm=aaa80ee66571838b6d3b92bef5219aed8a871dac8bec03f94f49e1de8b497ab6&=&format=webp&width=703&height=703"
                alt="Logo" />
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_email'])): ?>
                <a href="omsim.php">Reserve Now</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
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
                        <td>Email:</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="email" placeholder="example@gmail.com" required /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="password" required /></td>
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
                        <td colspan="2"><p>------------------- or ----------------------</p></td>
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
                $email = $_POST['email'];
                $password = $_POST['password'];

                if (!empty($email) && !empty($password)) {
                    $q_login = $mysqli->query("SELECT id, email, password FROM users WHERE email='$email' and password='$password'");

                    if (!$q_login) {
                        echo $mysqli->error;
                        exit();
                    } elseif ($q_login->num_rows == 0) {
                       echo "<script>alert('Invalid Email or Password. Please try again.');</script>";
                    } else {
                        $r_login = $q_login->fetch_assoc();
                        //check the entered email and password
                        //is the same from the table users
                        if ($r_login['email'] == $email and $r_login['password'] == $password) {
                            $_SESSION['user_email'] = $r_login['email'];
                            $_SESSION['id'] = $r_login['id'];
                            $_SESSION['session_status'] = 1;
            ?>
                            <script type="text/javascript">
                                window.location = "test.php";
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