<?php
session_start();
require 'dbconnect.php';
$qry = "SELECT * FROM security_question_tbl WHERE isactive=1";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1 = "SELECT * FROM area_tbl WHERE isactive=1";
$rs1=mysqli_query($conn,$qry1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Hantus, Responsive, SPA Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/new image/favicon.png" type="image/x-icon" />
    <title>Beauty Retreat</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/parsley.js"></script>
</head>
<body>
    <div class="preloader">        
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
        <h1>Loading&hellip;</h1>
    </div>
   <section id="appoinment" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="opening-hours">
                        <h3>REGISTRATION</h3>
                        </ul>
                    </div>
                    <div class="appoinment-wrapper">
                        <form action="dbprossesartist.php" mathod="get" id="demo-form" data-parsley-validate="">
                           FIRST NAME: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" name="txt_fn" placeholder="first name" id="input-08" required autofocus/>
                               </span>

                            LAST NAME: <span class="input input--hantus">
                                                            <input class="input__field input__field--hantus" type="text" name="txt_ln" placeholder="last name" id="input-08" required/>
                                                           </span>

                             SKILL: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" name="txt_skill" placeholder="skill" id="input-08" required/>
                               </span>


                            EMAIL: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="email" name="txt_email" placeholder="email" id="input-08" required/>
                              </span>

                           GENDAR: <input  type="radio" name="gen" id="input-08" value="male" />MALE
                            <input  type="radio"name="gen" id="input-08" value="female" required/>FEMALE
                            <br>
                            <br>
                           PASSWORD: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="password" name="txt_pass" placeholder="password" id="input-08" required/>
                               </span>

                           CONFORM PASSWORD: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="password" placeholder="conform password" name="txt_cpass" id="input-08" required/>
                              </span>
 							AREA: <span class="input input--hantus">
                                 <select name="area_id">
		<?php
		if(mysqli_num_rows($rs1)>0)
		{
			while($row1=mysqli_fetch_assoc($rs1))
			{
		?>
		<option value="<?php echo $row1['area_id']; ?>"><?php echo $row1['area_name']; ?></option>
		<?php
			}
		} 
		?>
	</select>
	                        </span>

                        <?php
                          $qry1="SELECT * FROM security_question_tbl WHERE isactive=1";
                          $rs1=mysqli_query($conn,$qry1);
                            if(mysqli_num_rows($rs1)>0)
                              {
                                while($row1=mysqli_fetch_assoc($rs1))
                                  {
                                    ?>
                     
                        SECURITY QUESTION <?php echo $row1['sq_id']; ?>
                          <span class="input input--hantus">
                        <input class="input__field input__field--hantus" type="text" data-required="true" id="input-08"  id="sq1" name="sq<?php echo $row1['sq_id']; ?>" value="<?php echo $row1['sq'];?>" readonly>
                        </span>
        <br>
        <br>
         
SECURITY ANSWER <?php echo $row1['sq_id']; ?>
					<span class="input input--hantus">
                                <input class="input__field input__field--hantus" data-required="true" placeholder="Enter Answer" type="text"  id="input-08" name="sa<?php echo $row1['sq_id']; ?>" required/>

                               </span>
 <?php }}?>                            
                           MOBILE NO: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="number" size="10" placeholder="phone" id="input-09" name="txt_mobile" required/>
                               </span>
        
                           ADDRESS: <span class="input input--hantus textarea" >
                                <textarea class="input__field input__field--hantus" rows="5" id="input-10" placeholder="address" name="txt_area" required></textarea>
                               </span>

                             DISCRIPTION: <span class="input input--hantus textarea" >
                                <textarea class="input__field input__field--hantus" rows="5" id="input-10" placeholder="enter year expriance and other discription" name="txt_dis" required></textarea>
                            </span>

                            <button type="submit" name="btn_sb" class="boxed-btn">Submit Now</button>
                        </form>
                         <script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script sr0c="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/custom.js"></script>
    </body>
</html>