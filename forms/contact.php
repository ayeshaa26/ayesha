


<?php
include "connection.php";
if(isset($_POST["btnsubmit"]))
{
$name= $_POST["name"];
$mail = $_POST["mail"];
$message=$_POST["message"];
     


 
  echo $name;
  echo $mail;

  

 
$query = "insert into contactus(name,email,message) values('.$name.','.$mail.','.$message.')";
$query="INSERT INTO `contact`(`Name`, `Email`, `Message`) VALUES ('.$name.','.$mail.','.$message.')";
  $result=mysqli_query($conn,$query);
  if($result){
  ?>
  <script>
  $(document).ready(function() {
        swal({
            title: "User created!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 2000
        });
    });
    </script>

<?php
  }
  else
  {
    ?>
    <script>
    $(document).ready(function() {
        swal({
            title: "User created!",
            text: "Suceess message sent!!",
            icon: "error",
            button: "Ok",
            timer: 2000
        });
    });
      </script>
  
  <?php
  } 
}
?>

