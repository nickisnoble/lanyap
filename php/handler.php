<?php
session_start();
 
##  If There Was No Form Submission, Display The Form.  ##
if( empty( $_POST ) ){
    $_SESSION['token'] = $token = md5( $_SERVER['HTTP_USER_AGENT'].microtime( true ) );
    ?>
    <form action="?" method="post" id="contact-form">
      <input type="hidden" name="token" value="<?= $token ?>">
      <p>
        <label>Name: 
          <input type="text" name="name" required>
        </label>
      </p>
      <p>
        <label>E-mail: 
          <input type="email" name="email" required>
        </label>
      </p>
      <p>
        <label>Question:
          <textarea name="question" required></textarea>
        </label>
      </p>
      <p>
        <input type="submit" name="Submit" value="Send">
      </p>
    </form>
    <?php
}
## If There Was A Form Submission, Don't Process It UNLESS: ##
if( 
    ! empty( $_POST['token'] )                // the submission included a token
    && ! empty( $_SESSION['token'] )          // we have a token in the SESSION
    && $_SESSION['token'] === $_POST['token'] // the tokens match
){
    // only use the token once.
    unset( $_SESSION['token'] );
 
    // from the form
    $name = trim(strip_tags($_POST['name']));
    $email = $_POST['email'];
    $question = htmlentities($_POST['question']);
 
    ##  Check If Any Required Fields Are Empty  ##
    $error = array();  // this will hold any errors we find
    if( empty( $name ) ){
        $error[] = "Please provide your name.";
    }
    /* something similar for other required fields. */
    ##  Check that "email" is really an email  ##
    if( filter_var( $email,FILTER_VALIDATE_EMAIL ) === false ){
        $error[] = "We could not validate the email address you provided.";
    }
 
    ##  Only Send Email If There Were No Errors  ##
    if( empty( $error ) ){
        // set here
        $subject = "Letter From Site.";
        $to = "nick@lanyapcreative.com";
        $body = <<< TEXT
Name: $name
Email: $email
Message: $question
TEXT
;
        $headers = "From: noreply@mydomain.example.com\r\n";
        $headers .= "Reply-to: $email\r\n";
        // send the email
        print mail( $to,$subject,$body,$headers )?
            // success
            "<h2>Email Sent Successfully</h2>
                <p>I will be in touch within the next 24-48 hours.  
                Thanks for reaching out to me.</p>":
            // apologize
            "<h2>Something Went Wrong</h2>
                <p>We were unable to send your message.
                Please try again."
        ;
    }
    ## Show Errors If There Were Any Problems  ##
    else{
        $error_msg = "<h2>Please Try Again</h2>
            <p>".implode( "<p>",$error );
        print $error_msg;
    }
}