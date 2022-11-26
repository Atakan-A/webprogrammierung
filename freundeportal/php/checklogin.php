<?php
    //var_dump($_POST);

    $username="";
    $password="";
    $fa2code="";

    if (isset($_POST['username'])) 
    {
        $username=$_POST['username'];
    }
    if (isset($_POST['password'])) 
    {
        $password=$_POST['password'];
    }
    if (isset($_POST['code2fa'])) 
    {
        $fa2code=$_POST['code2fa'];
    }

    if($username!=="" && $password!=="" && $fa2code!==""){
        // echo "alles ok <br>";
        // echo "username:".$username."<br>";
        // echo "password:".$password."<br>";
        // echo "fa2code:".$fa2code."<br>";

        include 'dbsettings.php';

        try
        {
            include 'dbsettings.php';
            require_once '../extern/google_auth/PHPGangsta/GoogleAuthenticator.php';
            $conn=new PDO("mysql:host=localhost;dbname=".$dbDatabasename,$dbLoginUsername,$dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql="SELECT * FROM fpuser WHERE username='".$username."' AND password='".$password."'";

            $dbPassword="";
            $dbSecret="";
            $dbID=0;
            $dbFirstname="";
            $dbLastname="";
            $dbUsername="";

            foreach ($conn->query($sql) as $row) 
            {
                $dbPassword=$row['password'];
                $dbSecret=$row['2facode'];
                $dbID=$row['id'];
                $dbFirstname=$row['firstname'];
                $dbLastname=$row['lastname'];
                $dbUsername=$row['username'];
            }

            if($dbPassword===$password)
            {
                echo "Password OK!";
                $ga = new PHPGangsta_GoogleAuthenticator();
                $checkResult = $ga->verifyCode($dbSecret, $fa2code, 1);

                if($checkResult){
                    echo "Code OK";
                }
                else
                {
                    echo "Code WRONG!";
                }
            }
            else
            {
                echo "Falsches Passwort";
            }

            
            //Verbindung schließen
            $conn=null;

        }   
        catch(Exception $e)
        {
            //echo "Fehler: ".$e;
        }

    }


?>