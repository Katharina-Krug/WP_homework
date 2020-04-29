<?php
   $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    //new input
    if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["message"]) && preg_match($re,$_POST['email']) && !empty($_POST['fname'])&& !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['message']))
    {
        $newentry = "<br>First name: ".$_POST["fname"]."<br>Last name: ".$_POST["lname"]."<br>Email: ".$_POST["email"]."<br>Message: ".$_POST["message"]."<br><br>";
        // not first time entering input
       if (isset($_SESSION["lastInput"]) && $_SESSION["lastInput"]!=""){
                $output = "<h2>You received the following from the contact form:</h2>".$newentry."<h3>Your last messages</h3>".$_SESSION["lastInput"];
                $_SESSION["lastInput"] = $newentry.$_SESSION["lastInput"];
            }
        //first time entering input
        else{
            $output = "<h2>You received the following from the contact form:</h2>".$newentry;
            $_SESSION["lastInput"] = $newentry.$_SESSION["lastInput"];
        }

    }
    // just clicking website
    else{
            //when there are already some messages
            if (isset($_SESSION["lastInput"]) && $_SESSION["lastInput"]!=""){
                $output = "<h3>Your last messages</h3>".$_SESSION["lastInput"];
            }
            // no messages yet
            else{
                $output = "<h2>Sorry, you don't have any valid messages yet.</h2>";
            }

        }

    
?>

<?php echo $output;?>
<br><br>

<a href="https://www.krugprojects.de">Back to Home</a>