<?php

// check for header injections
	function has_header_injection($str) {
		return preg_match( "/[\r\n]/", $str);
	}

	if (isset($_POST['contact_submit'])) {

		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$lname = $_POST['lname'];
		$aname = $_POST['fname'];
		$genre = $_POST['genre'];
		$link = $_POST['link'];
		$about = $_POST['about'];

		// check to see if 
		if (has_header_injection($fname) || has_header_injection($lname)) {
			die();
		}

		if ( !$fname || !$lname || !$aname || !$email ) {

			echo '<h4 class="error">All fields requeired.</h4><a href="index.html" class="button">Go back and try again</a>';
			exit;

		}

		// Add the recipient email to variable
		$to = "kjorecs@gmail.com";

		// Create a subject
		$subject = "$fname sent you a message via form";

		// Construct the message
		$message  = "First Name: $fname\r\n";
		$message .= "Last Name: $lname\r\n";
		$message .= "Arist Name: $aname\r\n";
		$message .= "Arist Name: $aname\r\n";
		$message .= "Genre: $genre\r\n";
		$message .= "Links: $link\r\n";
		$message .= "About: \r\n$about";

		$message = wordwrap($message, 82);

		//set the mail headers into a variable
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: $name <$email> \r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "X-MSMail-Priority: High\r\n\r\n";

		//send mail to
		mail($to, $subject, $message, $headers );
?>

<!-- Show success message after email sent -->
<h5>Thanks for submitting to --Records</h5>
<p>An email will be sent back soon</p>
<p><a href="/index.html"></a></p>


<?php } else { ?>

<?php } ?>