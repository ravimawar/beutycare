<?php 
session_start();
require 'dbconnect.php';
// if(isset($_SESSION['user']))
// {
//   header("location:dashboard.php");
// }
// if(isset($_COOKIE['user']))
// {
//   $us=$_COOKIE['user'];
//   $ps=$_COOKIE['pass'];
// }
// else
// {
//   $us="";
//   $ps="";
// }
$msg="";
if (isset($_GET["msg"])) 
{
  $msg=$_GET["msg"];
}

?>

<!DOCTYPE html>

<head>
 <!--  <script src="js/jquery.js"></script>
  <script>
    $(document).ready(function() {
      alert("hi");
       $("#insert_data").click(function(e){
        e.preventDefault();
        $.ajax({
          type:"POST",
          url:"dbprocess.php",
          data:$("#stu_form").serialize(),
          dataType: "html",
          success:function(response){
            alert(response);
            $("#display").html(response);
            $("#id_txtfn").val("");
          }
        });
       });
    });
  </script>
-->
</head>
<body>
  <section id="" class="">    
    <div class="">
      <a class="" href="newpassword.php">New Password</a>
      <section class="">
        <header class="">
          <strong>New Password</strong>
        </header>
        <form action="newpasswordprocess.php" class="" method="post" name="lgnfrm">



        <!-- <input type="hidden" name="mail" value="<?php //echo $_SESSION['user']; ?>">-->



            <label class="">New Password</label>
            <input type="password" placeholder="Password" class="" name="txt_np" autofocus required>
            <label class="">Retype New Password</label>
            <input type="password" id="inputPassword" placeholder="Password" class="" name="txt_cnp" required>
              <input type="submit" name="btn_sb" class="">
        
          </form>
         <!-- <div id="display"></div> -->
     <!--<footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Web app framework base on Bootstrap<br>&copy; 2013</small>
      </p>
    </div>
  </footer>-->
  <!-- / footer -->
  
</body>
</html> 



