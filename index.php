<?php
 // check if User Coming From a Request 
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        //Assign Variables    
        $user = $_POST['username'];
        $mail = $_POST['E-mail'];
        $cell = $_POST['mobile'];
        $msg  = $_POST['msg'];
        //creating Array of errors 
        $formErrors = array();
        if (strlen($user) < 3){
            $formErrors[] = 'Username must be larger than <strong>3</strong> charcters';
        }
        if (strlen($mail) < 10){
            $formErrors[] = 'Email must be larger than <strong>10</strong> charcters';
        }
       

        /*
    echo $_POST['username'] . '<br>'; 
    echo $_POST['E-mail'] . '<br>'; 
    echo $_POST['mobile'] . '<br>'; 
    echo $_POST['msg'] . '<br>'; 
    */
 }
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Contact Form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/contact.css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,800,900" rel="stylesheet">



    </head>
    <body>
            <!-- start form -->
            <div class="container">
                <h1 class="text-center">Contact Me</h1>
               
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    
                    
                    
                        <?php 
                            if(isset($formErrors)) {
                        ?>
                         <div class="alert alert-danger" role="start">
                             <?php
                             {
                                foreach($formErrors as $error){
                                    echo $error . '<br/>';
                                }
                            }
                             ?>
                        </div>
                        <

                           
                
                    



                    <input class="form-control" type="text"     name="username" placeholder="Type Your Username"/>
                    <input class="form-control" type="text"     name="E-mail"placeholder="type a valid Email" />
                    <input class="form-control" type="text"     name="mobile" placeholder="type your cellphone" />
                    <textarea class="form-control" type="text"  name="msg" placeholder="type your message"></textarea>
                    <input class="btn btn-success btn-block"    type="submit" value="Send Message"></input>
                </form>

            </div>
            


        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
<head>