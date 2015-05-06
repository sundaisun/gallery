<?php
/* Set e-mail recipient */
$myemail  = "Alyson.Wells@iwgroupinc.com";

/* Check all form inputs using check_input function */
$Name = check_input($_POST['Name'], "Name");
$category = $_POST['category'];
$subject  = "IW Website Inquiry";
$Email    = check_input($_POST['Email']);
$Question = check_input($_POST['Question'], "Write your comments");


/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $Name
E-mail: $Email
Category: $category

Question:
$Question

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: index.php');
exit();


/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>