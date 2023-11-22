<?php 
include "header.php";
   

   //Isi atau Content 
    if(isset($_GET['menu'])){
        if($_GET['menu']==1){
            include "hasil.php";
        }else if($_GET['menu']==2){
            include "form.php";
        }else if($_GET['menu']==3){
            include "kurs.php";
        }else{
            echo "Pilih Menu";
        }
    }else{
        include "form.php";
    }
    


include "footer.php";

?>


    
