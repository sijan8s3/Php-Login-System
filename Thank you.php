<?php
// if submit is not set, we want to render the form.
if( !isset($_POST['submit']) ) { ?>

<!-- leave PHPlandia -->

<form method="post" action="">
  <div class="field half first">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" />
  </div>
  <div class="field half">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" />
  </div>
  <div class="field">
    <label for="message">Message</label>
    <textarea name="message" id="message" rows="5"></textarea>
  </div>
  <input class="button submit" type="submit" name="submit" value="Submit">
  </form>
<?php
} else {
    $email_to = "field25farming@gmail.com";
    $email_subject = "Field 25 Contact Form";

    // ... rest of your email sending code here ...

    echo "Thanks! We'll get back to you soon.";
}

?>
