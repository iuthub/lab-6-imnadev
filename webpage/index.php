<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valid = preg_match('/^[a-zA-Z]{2,}$/i', $_POST["name"])
        && preg_match('/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{1,3}/i', $email = $_POST["email"])
        && preg_match('/^.{5,}$/i', $_POST["username"])
        && preg_match('/^.{8,}$/i', $_POST["password"])
        && $_POST["password"] == $_POST["confirmPassword"]
        && preg_match('/\d{2}\.\d{2}\.\d{4}/i', $_POST["dateOfBirth"])
        && preg_match('/^(Male|Female)$/i', $_POST["gender"])
        && preg_match('/^(Single|Married|Divorced|Widowed)$/i', $_POST["maritalStatus"])
        && preg_match('/^\d{6}$/i', $_POST["postalCode"])
        && preg_match('/^((\d{2}\s\d{7})|(\d{9}))$/i', $_POST["homePhone"])
        && preg_match('/^((\d{2}\s\d{7})|(\d{9}))$/i', $_POST["mobilePhone"])
        && preg_match('/^\d{16}$/i', $_POST["cardNumber"])
        && preg_match('/^\d{2}\.\d{2}\.\d{4}$/i', $_POST["expiryDate"])
        && preg_match('/^(UZS)\s\d+,\d+\.\d+$/i', $_POST["monthlySalary"])
        && preg_match('/^https?:\/\/[a-z0-9]+\.[a-zA-Z]{1,3}$/i', $_POST["url"])
        && preg_match('/^(([0-3]\.([0-9]{1,2}))|([4]\.[0-4][0-9])|^4.5$)$/i', $_POST["gpa"]);

    if ($valid) $result = "Success!";
    else $result = "Error!";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Validating Forms</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<h1>Registration Form</h1>

<p>
    This form validates user input and then displays "Thank You" page.
</p>

<hr/>

<h2>Please, fill below fields correctly</h2>
<form action="index.php" method="POST">
    <dl>
        <dt>Name</dt>
        <dd>
            <label>
                <input type="text" name="name" placeholder="Name" minlength="2" required>
            </label>
        </dd>

        <dt>Email</dt>
        <dd>
            <label>
                <input name="email" placeholder="Mail" required>
            </label>
        </dd>

        <dt>Username</dt>
        <dd>
            <label>
                <input type="text" name="username" placeholder="Username" minlength="5" required>
            </label>
        </dd>

        <dt>Password</dt>
        <dd>
            <label>
                <input type="password" name="password" placeholder="Password" minlength="8" required>
            </label>
        </dd>

        <dt>Confirm Password</dt>
        <dd>
            <label>
                <input type="password" name="confirmPassword" placeholder="Confirm Password" minlength="8" required>
            </label>
        </dd>

        <dt>Date of Birth</dt>
        <dd>
            <label>
                <input type="text" name="dateOfBirth" placeholder="dd.mm.yyyy" required>
            </label>
        </dd>

        <dt>Gender</dt>
        <dd>
            <label>
                <input type="text" name="gender" placeholder="Male/Female" required>
            </label>
        </dd>

        <dt>Marital Status</dt>
        <dd>
            <label>
                <input type="text" name="maritalStatus" placeholder="Single | Married | ..." required>
            </label>
        </dd>

        <dt>Address</dt>
        <dd>
            <label>
                <input type="text" placeholder="Address" name="address" required>
            </label>
        </dd>

        <dt>City</dt>
        <dd>
            <label>
                <input type="text" placeholder="City" name="city" required>
            </label>
        </dd>

        <dt>Postal Code</dt>
        <dd>
            <label>
                <input type="text" placeholder="Postal Code" name="postalCode" maxlength="6" required>
            </label>
        </dd>

        <dt>Home Phone</dt>
        <dd>
            <label>
                <input type="text" name="homePhone" placeholder="71 #######" required>
            </label>
        </dd>

        <dt>Mobile Phone</dt>
        <dd>
            <label>
                <input type="text" name="mobilePhone" placeholder="## #######" required>
            </label>
        </dd>

        <dt>Credit Card Number</dt>
        <dd>
            <label>
                <input type="text" name="cardNumber" placeholder="#### #### #### ####" required>
            </label>
        </dd>

        <dt>Credit Card Expiry Date</dt>
        <dd>
            <label>
                <input type="text" name="expiryDate" placeholder="dd.mm.yyyy" required>
            </label>
        </dd>

        <dt>Monthly Salary</dt>
        <dd>
            <label>
                <input type="text" name="monthlySalary" placeholder=" UZS 200,000.00" required>
            </label>
        </dd>

        <dt>Web Site URL</dt>
        <dd>
            <label>
                <input type="text" name="url" placeholder="http://github.com" required>
            </label>

        </dd>
        <dt>Overall GPA</dt>
        <dd>
            <label>
                <input type="text" name="gpa" placeholder="#.#/4.5" required>
            </label>
        </dd>

    </dl>

    <div>
        <input type="submit" value="Register">
    </div>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    <h1><?php echo $result; ?></h1>
<?php } ?>
</body>
</html>