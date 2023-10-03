<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // get the rest of the data for the form
    $password = filter_input(INPUT_POST, 'password');
    $phonenumber = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT );

    // for the heard_from radio buttons,
    $heardform = filter_input(INPUT_POST, 'heard_form');
    // display a value of 'Unknown' if the user doesn't select a radio button
    if($heardform === NULL)
    {
        $heardform = 'Unknown';
    }
    // for the wants_updates check box,
    $checkbox = filter_input(INPUT_POST, 'wants_updates');
    if( isset ($checkbox))
    {
    // display a value of 'Yes' or 'No'
        $checkbox = 'Yes';
    } else $checkbox = 'No';
    
    //the rest data
    $contactvia = filter_input(INPUT_POST, 'contact_via');

    $comments = filter_input(INPUT_POST, 'comments');
    $comments = htmlspecialchars($comments);  
    $comments = nl2br($comments, false); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phonenumber); ?></span><br>

        <label>Heard From:</label>
        <span><?php echo $heardform; ?></span><br>

        <label>Send Updates:</label>
        <span><?php echo $checkbox; ?></span><br>

        <label>Contact Via:</label>
        <span> <?php echo htmlspecialchars($contactvia); ?></span><br><br>

        <span>Comments:</span><br>
        <span> <?php echo $comments; ?></span><br>        
    </main>
</body>
</html>