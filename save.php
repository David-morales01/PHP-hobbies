<?php  
 
  
 

  if(empty($_POST['firstName']) || empty($_POST['lastName']) ){

    header('Location: index.php?error=siu');
    die();
  }



  if (!$f = fopen("db.txt", "r")){
   
    $f = fopen("db.txt", "x");  

    }else{

        $f = fopen("db.txt", "a");  
    }

    if( empty($_POST['hobbies']) ){

        $stringhobies =  "I am boring";  
        
    }else{
            
        $hobbies = $_POST['hobbies']; 

        $stringhobies = implode(", ",$hobbies);  
    }


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $value = "{ \"firstName\" : \"$firstName\" , \"lastName\" : \"$lastName \", \"hobbie\" :  \"$stringhobies\"}\n";

    fwrite($f, $value);
    fclose($f);

    header('Location: index.php');
 /*


 $postData = json_encode(($_POST));
 $loginInfo = fopen('db.txt', 'a');
 fwrite($loginInfo, $postData.PHP_EOL);
 fclose($loginInfo);
 
 header('Location: index.php');
 */