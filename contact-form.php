<?php
$subjectPrefix = 'Question';
$emailTo = 'Alyson.Wells@iwgroupinc.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['form-name']));
    $email    = stripslashes(trim($_POST['form-email']));
    $subject  = stripslashes(trim($_POST['form-category']));
    $message  = stripslashes(trim($_POST['form-question']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $subject && $message){
        $subject = "$subjectPrefix $subject";
        $body = "Name: $name <br /> Email: $email <br /> Message: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?>

    <?php if(!empty($emailSent)): ?>
    <meta http-equiv="refresh" content="0; url=http://staging.iwgroupinc.com/2014/IW/redesign/thank-you.php" />

    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="small-12 columns">
            <div class="text-center">Message is not sent</div>
        </div>
        <?php endif; ?>

 <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" role="form" method="post">
            <!-- end -->
                <div class="row">
<!--                   <div class="large-4 columns">Question Category</div>-->
                    <div class="large-12 columns">
                            <select id="form-category" name="form-category">
                                <option value="default">Question Category</option>
                                <option value="Are you hiring?">Are you hiring?</option>
                                <option value="Would like to work together">Would you like to work together?</option>
                                <option value="I'm curious about">I'm curious about...</option>
                            </select>
                    </div>             
                </div>
                <div class="row">
                    <div class="small-12 large-4 columns">
                        <input type="text" id="form-name" name="form-name" placeholder="Name" required/>
                    </div>
                    <div class="small-12 large-8 columns">
                        <input type="text" id="form-email" name="form-email" class="form-control" placeholder="Email" required />
                    </div>
                    <div class="large-12 columns">
                        <textarea rows="4" name="form-question" id="form-question" required placeholder="Question"></textarea>
                    </div>
                    <button type="submit" value="Send">Submit</button></a>
                </div>  
            </form>
             
                 

    <?php endif; ?>

    <!--[if lt IE 9]>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
