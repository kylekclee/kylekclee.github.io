<?php
$action=$_REQUEST['action'];
<?php
$name = $email  = $message = $subject "";
if ($_SERVER["REQUEST_METHOD"] == "POST")  /* display the contact form */
    {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
        $subject = test_input($_POST["subject"]);
    if (($name=="")||($email=="")||($message=="") || ($subject==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="$subject";
		mail("kylekclee@gmail.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
