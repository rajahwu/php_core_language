<a href="..">&lt; &lt; back</a>

<style>
    .alert {
        color: red;
    };
</style>

<h2>Contact</h2>
<?php
$form_complete = null;

?> 
   <form name="contact" method="POST" action="process.php">
       <div>
        <?php 
        if (isset( $_POST['name']) && empty(trim($_POST['name']))) {
            echo "<p class=\"alert\">Name is Required</p>"; 
            $form_complete = false;
        }
        ?>
        <label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" 
        required
        />
    </div>
    <div>
        <?php
        $email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^'; 
        if (isset( $_POST['email']) && empty($_POST['email'])) {
            echo "<p class=\"alert\">Email is Required</p>"; 
            $form_complete = false;
        } else if (isset( $_POST['email']) && !preg_match($email_regex, $_POST['email'])) {
            echo "<p class=\"alert\">Please enter a valid email</p>"; 
            $form_complete = false;
        }
        ?>
           <label for="name">Email:</label> <input type="text" name="email" placeholder="Your Email" 
           required
           />
        </div>
        <div>
            <p>Reason for Contact:</p>
            <input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
            <input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
            <input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
        </div>
        <div>
        <?php 
        if (isset( $_POST['message']) && empty($_POST['message'])) {
            echo "<p class=\"alert\">Message is Required</p>"; 
            $form_complete = false;
        }
        ?>
           <label for="message">What's your message?</label>
           <textarea name="message" required></textarea>
       </div>
       <div><input type="submit" name="submit" value="Submit" /></div>
   </form>

<?php 
$form_complete ?: true;
    if( $form_complete ) {
        foreach( $_POST as $name => $value ) {
        if ( 'submit' != $name ) {
            if ( is_array( $value ) ) {
                $value = implode( ', ', $value );
            }
            echo "<p><b>" . ucfirst( $name ) ."</b> is $value.</p>";
        }
     }
}

?>