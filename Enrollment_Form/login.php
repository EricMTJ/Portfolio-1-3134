<!DOCTYPE html>
<html>
<head>
    <title>User Login Form</title>
</head>
<body>

<div>
    <?php
    if(isset($_POST['create'])){
        echo 'Submitted';
        }
    ?>
</div>

<div>
    <form action="login.php" method="post">
        <div class="container">
            <h1>Enrollment</h1>
            <p>Please login</p>
            
            <label for="firstname"> <b>First Name</b> </label>
            <input type="text" name="firstname" required>

            <label for="lastname"> <b>Last Name</b> </label>
            <input type="text" name="lastname" required>

            <input type="submit" name="submit" value="Enroll">

        </div>
    </form>
</div>

</body>
</html>