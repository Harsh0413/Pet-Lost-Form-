<!DOCTYPE html>
<head>
    <title>
        My Pet Got Lost - Report a Lost Pet
    </title>
</head>
<body>
    <h2>My Pet Got Lost - Report a Lost Pet</h2>
    <?php 
    $name= $_POST["firstName"] .' '. $_POST["LastName"];
    $when= $_POST["when"];
    $how_long= $_POST["howLong"];
    $id_Tag=$_POST["idTag"];
    $pet_description=$_POST["petDescription"];
    $pet_name=$_POST["petName"];
    $max_seen=$_POST["maxSeen"];
    $email=$_POST["email"];
    $Other_Info= $_POST["otherInfo"];
    $to='HP95@myscc.ca';
    $subject="My Pet Got Lost - Report a Lost Pet";
    $msg="My name is $name.\n". 
         "My pet, $pet_name, was lost $when and was gone for $how_long.\n".
         "pet ID tag: $id_Tag\n".
         "pet description: $pet_description\n".
         "your pet\'s name: $pet_name\n".
         "Max seen: $max_seen\n".
         "Other information: $Other_Info";
         mail($to,$subject,$msg,$email);


         echo('Thanks for submitting the form.<br/>');
         echo('Your pet was lost'.$when);
         echo('and been gone for'. $how_long .'<br/>');
         echo('Pet id tag:' .$id_Tag.'<br/>');
         echo('Describe your pet:'.$pet_description. '<br/>');
         echo('your pet\'s name:'. $pet_name.'<br/>');
         echo('have you seen Max?'.$max_seen.'<br/>');
         echo('Other information:'.$Other_Info.'<br/>');
         echo('Your name is'. $name);
         echo('your email address is' . $email);
    ?>
</body>
</html>
