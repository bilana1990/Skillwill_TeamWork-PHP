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
<?php
    $sliders=[
        [
        'img' => 'images/slider-img.jpg',
        'header' => 'Mico <br><span>Hospital</span>',
        'paragrap' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to', 
        ],
    ]
?>
<?php
    $blocks=[
        [
        'img'=>'images/t1.png',
        'h4'=>'Nephrologist Care',
        ],
        [
            'img'=>'images/t2.png',
            'h4'=>'Eye Care',  
        ],
        [
            'img'=>'images/t3.png',
            'h4'=>'Pediatrician Clinic',  
        ],
        [
            'img'=>'images/t4.png',
            'h4'=>'Parental Care',  
        ],
    ]
    
?>

<?php
    $doctors=[
        ['img'=>'images/team1.jpg',
            'h5'=>'Hennry',
        ],
        [
            'img'=>'images/team2.jpg',
            'h5'=>' Jenni',
        ],
        [
            'img'=>'images/team3.jpg',
            'h5'=>' Morco',
        ],
    ]
?>
<?php
    $Testimonials=[
        [
            'h5'=>'Morijorch',
            'p'=>'editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various',
        ],
        [
            'h5'=>'Rochak',
            'p'=>' Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.',
        ],
        [
            'h5'=>'Brad Johns',
            'p'=>'Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various'
        ],
    ]
?>