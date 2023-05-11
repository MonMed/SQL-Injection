<?php   
    include("config.php");

    if(!isset($_SESSION)) 
    { 
        $session = session_start();
    } 

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // Input categorization
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $keywords = array("OR", "UNION", "SELECT");
        $specialChars = array("/", ",", "$", "(", ")", "\"", "//", "?", "+", "!", "@", "=", "'");
        $alphabets = range('a', 'z');
        $alphabets = array_merge($alphabets, range('A', 'Z'));
        $numbers = range(0, 9);
        
        //input verifier
        $isSafe = true;
        $inputSet = array(str_split($username), str_split($password));
        foreach ($inputSet as $input) {
            foreach ($input as $char) {
                if (in_array($char, $keywords) || in_array($char, $specialChars)) {
                    $isSafe = false;
                    break;
                }
                else if (!in_array($char, $alphabets) && !in_array($char, $numbers)) {
                    $isSafe = false;
                    break;
                }
            }
        }
        
        if ($isSafe) {
            $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";

            $result = mysqli_query($db,$sql);

            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            if ($row != NULL) {

                $active = $row['id'];

                $count = mysqli_num_rows($result);
                // If result matched $myusername and $mypassword, table row must be 1 row

                $sql = "SELECT firstname, username FROM users WHERE username = '$username' and password = '$password'";
                $result = mysqli_query($db,$sql);

                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $displayName = $row['firstname'];
                $loginName = $row['username'];

                if($count >= 1) {
                    $_SESSION['login_user'] = $loginName;
                    $_SESSION['display_name'] = $displayName;
                    $_SESSION['id'] = $active;
                    header("location: user_account.php");
                } else {
                    echo "Your Login Name or Password is invalid";
                }
            } else {
                echo "Your Username or Password is invalid";
            }
        }
        else {
            echo "Invalid input. Please try again.";
        }
    }
?>
