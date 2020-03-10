<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="icon" type="image/png" href="assets/image/fav-icon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?ver=1">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<div id="back"></div>
<div id="front"></div>
<section class="login-sec">
    <div class="container">

        <div class="col-md-11 col-sm-12 col-xs-12 center">
            <img src="assets/images/logo.png" alt="logo" class="img-fluid center" />
            <div class="row">
                <form name="myForm" onsubmit="return validateForm()" action="index_form_submit.php" class="row" method="post">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



                        <div class="form-group">
                            <input type="text" class="form-control" name="firstname" placeholder="FIRST NAME" required>
                        </div>

                        <div class="form-group">
                            <label class="inline pr-30" for="sel1">GENDER</label>
                            <div class="form-check-inline">
                                <label class="customradio"><span class="radiotextsty">Male</span>
                                    <input type="radio" value="male" name="radio" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="customradio"><span class="radiotextsty">Female</span></span>
                                    <input type="radio" checked="checked" value="female" name="radio" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="useremail" placeholder="EMAIL" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="ADDRESS" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="CITY" required>
                        </div>

                        <p class="mob">By selecting the "Sign Up" button you agree that you are over 18 years of age and agree to the terms and conditions of Qantum Loyalty.</p>


                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="LAST NAME" required>
                        </div>
                        <?php
                        $date = date("Y-m-d");
                        $day = date("d",strtotime($date));
                        $month = date("m",strtotime($date));
                        $year = date("y",strtotime($date));
                        ?>

                        <div class="form-group">
                            <label class="inline pr-70" for="sel1">DOB</label>
                            <span class="inline-block">
                           <select class="form-control" name="date" id="days" required>
                              <option value="" selected disabled>DAY</option>
                              <option value="1" <?php echo ($day == 1)? 'selected': ''?>>1</option>
                              <option value="2" <?php echo ($day == 2)? 'selected': ''?>>2</option>
                              <option value="3" <?php echo ($day == 3)? 'selected': ''?>>3</option>
                              <option value="4" <?php echo ($day == 4)? 'selected': ''?>>4</option>
                              <option value="5" <?php echo ($day == 5)? 'selected': ''?>>5</option>
                              <option value="6" <?php echo ($day == 6)? 'selected': ''?>>6</option>
                              <option value="7" <?php echo ($day == 7)? 'selected': ''?>>7</option>
                              <option value="8" <?php echo ($day == 8)? 'selected': ''?>>8</option>
                              <option value="9" <?php echo ($day == 9)? 'selected': ''?>>9</option>
                              <option value="10" <?php echo ($day == 10)? 'selected': ''?>>10</option>
                              <option value="11" <?php echo ($day == 11)? 'selected': ''?>>11</option>
                              <option value="12" <?php echo ($day == 12)? 'selected': ''?>>12</option>
                              <option value="13" <?php echo ($day == 13)? 'selected': ''?>>13</option>
                              <option value="14" <?php echo ($day == 14)? 'selected': ''?>>14</option>
                              <option value="15" <?php echo ($day == 15)? 'selected': ''?>>15</option>
                              <option value="16" <?php echo ($day == 16)? 'selected': ''?>>16</option>
                              <option value="17" <?php echo ($day == 17)? 'selected': ''?>>17</option>
                              <option value="18" <?php echo ($day == 18)? 'selected': ''?>>18</option>
                              <option value="19" <?php echo ($day == 19)? 'selected': ''?>>19</option>
                              <option value="20" <?php echo ($day == 20)? 'selected': ''?>>20</option>
                              <option value="21" <?php echo ($day == 21)? 'selected': ''?>>21</option>
                              <option value="22" <?php echo ($day == 22)? 'selected': ''?>>22</option>
                              <option value="23" <?php echo ($day == 23)? 'selected': ''?>>23</option>
                              <option value="24" <?php echo ($day == 24)? 'selected': ''?>>24</option>
                              <option value="25" <?php echo ($day == 25)? 'selected': ''?>>25</option>
                              <option value="26" <?php echo ($day == 26)? 'selected': ''?>>26</option>
                              <option value="27" <?php echo ($day == 27)? 'selected': ''?>>27</option>
                              <option value="28" <?php echo ($day == 28)? 'selected': ''?>>28</option>
                              <option value="29" <?php echo ($day == 29)? 'selected': ''?>>29</option>
                              <option value="30" <?php echo ($day == 30)? 'selected': ''?>>30</option>
                              <option value="31" <?php echo ($day == 31)? 'selected': ''?>>31</option>
                           </select>
                        </span>
                            <span class="inline-block">
                           <select class="form-control" name="month" id="" required>
                              <option value="" selected disabled>MONTH</option>
                              <option value='01' <?php echo ($month == '01') ? 'selected' : '' ?>>Janaury</option>
                              <option value='02' <?php echo ($month == '02') ? 'selected' : '' ?>>February</option>
                              <option value='03' <?php echo ($month == '03') ? 'selected' : '' ?>>March</option>
                              <option value='04' <?php echo ($month == '04') ? 'selected' : '' ?>>April</option>
                              <option value='05' <?php echo ($month == '05') ? 'selected' : '' ?>>May</option>
                              <option value='06' <?php echo ($month == '06') ? 'selected' : '' ?>>June</option>
                              <option value='07' <?php echo ($month == '07') ? 'selected' : '' ?>>July</option>
                              <option value='08' <?php echo ($month == '08') ? 'selected' : '' ?>>August</option>
                              <option value='09' <?php echo ($month == '09') ? 'selected' : '' ?>>September</option>
                              <option value='10' <?php echo ($month == '10') ? 'selected' : '' ?>>October</option>
                              <option value='11' <?php echo ($month == '11') ? 'selected' : '' ?>>November</option>
                              <option value='12' <?php echo ($month == '12') ? 'selected' : '' ?>>December</option>
                           </select>
                        </span>
                            <span class="inline-block">
                           <select class="form-control" name="year" id="years" required>
                              <option value="" selected disabled>YEAR</option>
                           </select>
                        </span>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" name="mobile" placeholder="MOBILE">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="subrub" placeholder="SUBURB">
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" name="postcode" placeholder="POST CODE">
                        </div>

                        <p class="res">By selecting the "Sign Up" button you agree that you are over 18 years of age and agree to the terms and conditions of Qantum Loyalty.</p>

                        <?php if(isset($_REQUEST['error'])){
                            echo '<p class="text-danger">Something went wrong, try again later.</p>';
                        } ?>
                        <button type="submit" class="btn-submit">SIGN UP</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/css3-animate-it.js"></script>
</body>
</html>
