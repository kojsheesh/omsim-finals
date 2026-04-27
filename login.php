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
    $mysqli->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '')");
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
        <form method="POST" action="" autocomplete="off">

            <div class="pic">
            </div>
            <div class="logpage-text">
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
                            <div class="g-recaptcha" data-sitekey="6Le0DcssAAAAACPv1LdYyROfcxNimO0PaN-RXeiC"></div>
<br>
                            <input type="submit" name="login" value="Log in" />
                        </td>
                    </tr>
                    <tr>
                        <td> <br>Don't have an account?</td>
                        <td> <br><a href="signup.php">Sign Up</a></td>
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
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);

    // 1. Get the reCAPTCHA response from the form
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    // 2. Prepare the verification request
    $secret_key = '6Le0DcssAAAAAPs9yTX94AMR1gomfLiBN-H8lTLc'; // PASTE YOUR SECRET KEY HERE
    $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret_key . "&response=" . $recaptcha_response;

    // 3. Send request to Google
    $response = file_get_contents($verify_url);
    $response_keys = json_decode($response, true);

    if (!empty($email) && !empty($password)) {
        // 4. Check if reCAPTCHA was successful
        if (intval($response_keys["success"]) !== 1) {
            echo "<script>alert('Please complete the reCAPTCHA to prove you are not a robot.');</script>";
        } else {
            // 5. Proceed with your login query
            $q_login = $mysqli->query("SELECT id, email, password FROM users WHERE email='$email' AND password='$password'");

            if (!$q_login) {
                echo $mysqli->error;
                exit();
            } elseif ($q_login->num_rows == 0) {
                echo "<script>alert('Invalid Email or Password. Please try again.');</script>";
            } else {
                $r_login = $q_login->fetch_assoc();
                if ($r_login['email'] == $email && $r_login['password'] == $password) {
                    $_SESSION['user_email'] = $r_login['email'];
                    $_SESSION['id'] = $r_login['id'];
                    $_SESSION['session_status'] = 1;
                    echo "<script>window.location = 'test.php';</script>";
                }
            }
        }
    }
}
?>
        </form>
    </div>
<!-- ===================== -->
<!-- FAQ FLOATING WIDGET   -->
<!-- ===================== -->
<style>
    .faq-fab {
        position: fixed;
        bottom: 28px;
        right: 28px;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: #ffcc00;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        transition: transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 4px 16px rgba(0,0,0,0.35);
    }
    .faq-fab:hover { transform: scale(1.08); }

    .faq-panel {
        position: fixed;
        bottom: 94px;
        right: 28px;
        width: 340px;
        max-height: 480px;
        background: #1a1a1a;
        border-radius: 16px;
        border: 1px solid rgba(255,204,0,0.25);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        z-index: 9998;
        opacity: 0;
        transform: translateY(16px) scale(0.97);
        pointer-events: none;
        transition: opacity 0.25s, transform 0.25s;
    }
    .faq-panel.faq-open {
        opacity: 1;
        transform: translateY(0) scale(1);
        pointer-events: all;
    }
    .faq-header {
        padding: 16px 20px 12px;
        border-bottom: 1px solid rgba(255,255,255,0.08);
        background: rgba(255,204,0,0.07);
    }
    .faq-header h2 { margin: 0 0 2px; font-size: 15px; font-weight: 600; color: #ffcc00; }
    .faq-header p { margin: 0; font-size: 12px; color: rgba(255,255,255,0.45); line-height: 1.4; }
    .faq-list { overflow-y: auto; flex: 1; padding: 10px 0; }
    .faq-item { border-bottom: 1px solid rgba(255,255,255,0.06); }
    .faq-item:last-child { border-bottom: none; }
    .faq-question {
        width: 100%;
        background: none;
        border: none;
        padding: 13px 20px;
        text-align: left;
        color: #fff;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        transition: background 0.15s;
    }
    .faq-question:hover { background: rgba(255,204,0,0.06); }
    .faq-question.faq-active { color: #ffcc00; }
    .faq-chevron { flex-shrink: 0; width: 16px; height: 16px; transition: transform 0.25s; opacity: 0.5; }
    .faq-question.faq-active .faq-chevron { transform: rotate(180deg); opacity: 1; }
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.2s;
        padding: 0 20px;
        font-size: 12.5px;
        color: rgba(255,255,255,0.6);
        line-height: 1.6;
    }
    .faq-answer.faq-ans-open { max-height: 200px; padding: 0 20px 14px; }
    .faq-footer {
        padding: 12px 20px;
        border-top: 1px solid rgba(255,255,255,0.08);
        text-align: center;
        font-size: 11.5px;
        color: rgba(255,255,255,0.3);
    }
</style>

<button class="faq-fab" id="faqBtn" aria-label="Open FAQ">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/>
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
        <line x1="12" y1="17" x2="12.01" y2="17"/>
    </svg>
</button>

<div class="faq-panel" id="faqPanel">
    <div class="faq-header">
        <h2>Sikatan Sikada Cafe — FAQ</h2>
        <p>Common questions answered for you</p>
    </div>
    <div class="faq-list" id="faqList"></div>
    <div class="faq-footer">Tuloy po kayo! We're happy to help.</div>
</div>

<script>
    const faqs = [
        { q: "What are your operating hours?", a: "We are open every day from 6:00 AM to 1:00 AM, so whether you're an early riser or a late-night diner, we've got you covered!" },
        { q: "Do you offer dine-in and takeout?", a: "We currently offer dine-in only. Come visit us and enjoy your meal in the relaxing ambiance of Sikatan Sikada Cafe!" },
        { q: "Do you accommodate dietary restrictions?", a: "Yes! If you have any food allergies or dietary needs, please inform our staff upon ordering and we will do our best to guide you to safe and suitable menu options." },
        { q: "How do I make a reservation?", a: "Simply log in to your account and click 'Reserve Now' in the navigation bar. Choose your preferred date, time, and party size." },
        { q: "Where are you located?", a: "You can find our full address and a map on our Contact page. We are easily accessible by public transport and have parking available." },
    ];

    const faqList = document.getElementById('faqList');
    faqs.forEach((f, i) => {
        const item = document.createElement('div');
        item.className = 'faq-item';
        item.innerHTML = `
            <button class="faq-question" onclick="toggleFaq(${i}, this)">
                ${f.q}
                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer" id="faqAns${i}">${f.a}</div>
        `;
        faqList.appendChild(item);
    });

    function toggleFaq(i, btn) {
        const ans = document.getElementById('faqAns' + i);
        const isOpen = ans.classList.contains('faq-ans-open');
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('faq-ans-open'));
        document.querySelectorAll('.faq-question').forEach(b => b.classList.remove('faq-active'));
        if (!isOpen) {
            ans.classList.add('faq-ans-open');
            btn.classList.add('faq-active');
        }
    }

    const faqBtn = document.getElementById('faqBtn');
    const faqPanel = document.getElementById('faqPanel');
    let faqOpen = false;

    faqBtn.addEventListener('click', () => {
        faqOpen = !faqOpen;
        faqPanel.classList.toggle('faq-open', faqOpen);
        faqBtn.innerHTML = faqOpen
            ? `<svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" width="22" height="22"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>`
            : `<svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" width="26" height="26"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>`;
    });
</script>
<!-- GENERAL T&C MODAL-->
<style>
    .tnc-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .tnc-modal {
        background: #1a1a1a;
        border: 1px solid rgba(255, 204, 0, 0.3);
        border-radius: 16px;
        width: 100%;
        max-width: 520px;
        max-height: 90vh;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    .tnc-header {
        padding: 20px 24px 14px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 204, 0, 0.07);
    }
    .tnc-header h2 {
        margin: 0 0 4px;
        font-size: 18px;
        font-weight: 700;
        color: #ffcc00;
    }
    .tnc-header p {
        margin: 0;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
    }
    .tnc-body {
        padding: 20px 24px;
        overflow-y: auto;
        flex: 1;
        font-size: 13px;
        line-height: 1.7;
    }
    .tnc-body h3 {
        color: #ffcc00;
        font-size: 13px;
        font-weight: 600;
        margin: 18px 0 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .tnc-body h3:first-child { margin-top: 0; }
    .tnc-body p {
        margin: 0 0 8px;
        color: rgba(255, 255, 255, 0.65);
    }
    .tnc-footer {
        padding: 16px 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        background: #1a1a1a;
    }
    .tnc-checkbox-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 14px;
    }
    .tnc-checkbox-row input[type="checkbox"] {
        margin-top: 2px;
        width: 16px;
        height: 16px;
        accent-color: #ffcc00;
        flex-shrink: 0;
        cursor: pointer;
    }
    .tnc-checkbox-row label {
        font-size: 12.5px;
        color: rgba(255, 255, 255, 0.6);
        cursor: pointer;
        line-height: 1.5;
    }
    .tnc-btn-row { display: flex; gap: 10px; }
    .tnc-decline {
        flex: 1;
        padding: 11px;
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        background: transparent;
        color: rgba(255, 255, 255, 0.5);
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s;
    }
    .tnc-decline:hover { border-color: rgba(255,255,255,0.35); color: #fff; }
    .tnc-accept {
        flex: 2;
        padding: 11px;
        border-radius: 50px;
        border: none;
        background: #ffcc00;
        color: #000;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s;
        opacity: 0.4;
        pointer-events: none;
    }
    .tnc-accept.enabled { opacity: 1; pointer-events: all; }
    .tnc-accept.enabled:hover { background: #e6b800; }
    .tnc-scroll-hint {
        text-align: center;
        font-size: 11px;
        color: rgba(255, 255, 255, 0.3);
        margin-top: 10px;
        transition: opacity 0.3s;
    }
</style>

<div class="tnc-overlay" id="tncOverlay">
    <div class="tnc-modal">
        <div class="tnc-header">
            <h2>Terms & Conditions</h2>
            <p>Please read and accept before continuing to login.</p>
        </div>

        <div class="tnc-body" id="tncBody">

            <h3>1. Acceptance of Terms</h3>
            <p>By accessing and using the Sikatan Sikada Cafe website and reservation system, you agree to be bound by these Terms & Conditions. If you do not agree, please exit the site immediately.</p>

            <h3>2. User Account</h3>
            <p>You are responsible for maintaining the confidentiality of your login credentials. Any activity that occurs under your account is your sole responsibility. Please notify us immediately of any unauthorized use.</p>

            <h3>3. Use of the Platform</h3>
            <p>This platform is intended solely for making reservations and accessing information about Sikatan Sikada Cafe. Any misuse, including submitting false reservations, is strictly prohibited and may result in account termination.</p>

            <h3>4. Reservation Rules</h3>
            <p>All reservations made through this platform are subject to our Reservation Policy, including minimum spend requirements, cancellation rules, and arrival time policies which will be shown prior to confirming a booking.</p>

            <h3>5. Data Privacy</h3>
            <p>We collect personal information such as your name and email address solely for reservation and communication purposes. Your data is handled in compliance with the <strong style="color:#ffcc00;">Data Privacy Act of 2012 (RA 10173)</strong> and will never be shared with third parties without your consent.</p>

            <h3>6. Intellectual Property</h3>
            <p>All content on this website including logos, images, and text are the property of Sikatan Sikada Cafe. Unauthorized reproduction or use of any content is strictly prohibited.</p>

            <h3>7. Limitation of Liability</h3>
            <p>Sikatan Sikada Cafe shall not be held liable for any inconvenience, loss, or damages arising from the use of this platform, including technical issues or reservation errors caused by user input.</p>

            <h3>8. Changes to Terms</h3>
            <p>We reserve the right to update these Terms & Conditions at any time without prior notice. Continued use of the platform after changes constitutes your acceptance of the new terms.</p>

            <p class="tnc-scroll-hint" id="scrollHint">↓ Scroll down to read all terms</p>
        </div>

        <div class="tnc-footer">
            <div class="tnc-checkbox-row">
                <input type="checkbox" id="tncCheck" onchange="toggleAccept(this)">
                <label for="tncCheck">I have read and agree to the Terms & Conditions of Sikatan Sikada Cafe.</label>
            </div>
            <div class="tnc-btn-row">
                <button class="tnc-decline" onclick="declineTerms()">Decline</button>
                <button class="tnc-accept" id="tncAcceptBtn" onclick="acceptTerms()">Accept & Continue</button>
            </div>
        </div>
    </div>
</div>

<script>
    /* Hide scroll hint when user reaches bottom */
    const tncBody = document.getElementById('tncBody');
    const scrollHint = document.getElementById('scrollHint');
    tncBody.addEventListener('scroll', () => {
        const atBottom = tncBody.scrollHeight - tncBody.scrollTop <= tncBody.clientHeight + 10;
        if (atBottom) scrollHint.style.opacity = '0';
    });

    /* Enable Accept button only when checkbox is ticked */
    function toggleAccept(checkbox) {
        document.getElementById('tncAcceptBtn').classList.toggle('enabled', checkbox.checked);
    }

    /* Accept: close modal and show login page */
    function acceptTerms() {
        document.getElementById('tncOverlay').style.display = 'none';
    }

    /* Decline: go back to home */
    function declineTerms() {
        window.location.href = 'index.php';
    }
</script>
</body>

</html>