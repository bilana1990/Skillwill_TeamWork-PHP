<?php
    if (isset($_POST['submit'])){
        $PatientName=$_POST['PatientName'];
        $DoctorsName=$_POST['DoctorsName'];
        $DepartmentsName=$_POST['DepartmentsName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $Symptoms=$_POST['Symptoms'];
       

        echo "Your data is sacsesfuli recived and our operator will call you soon :" .$PatientName."<br>";
        echo "Your data is sacsesfuli recived and our operator will call you soon :" .$DoctorsName."<br>";
        echo "Your data is sacsesfuli recived and our operator will call you soon :" .$DepartmentsName."<br>";
        echo "Your data is sacsesfuli recived and our operator will call you soon :" .$PhoneNumber."<br>";
        echo "Your data is sacsesfuli recived and our operator will call you soon :" .$Symptoms."<br>";
        
        
    }




?>
<?php

    if (isset($_POST['send'])){
        $sendback=$_POST['sendback'];


        echo "Your for is submetted. :";
    }
?> 
