<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Personnel | Admin</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>66-APMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homered" href="addemp.php">Add Personnel</a></li>
                <li><a class="homeblack" href="viewemp.php">View Personnel</a></li>
                <!-- <li><a class="homeblack" href="assign.php">Assign Project</a></li> -->
                <!-- <li><a class="homeblack" href="assignproject.php">Project Status</a></li> -->
                <!-- <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>  -->
                <li><a class="homeblack" href="empleave.php">Personnel Leave</a></li>
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required="required">
                                </div>
                            </div>
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Service ID" name="service_id" required="required">
                                </div>
                            </div>
                        </div>

                        <p>Date of Birth</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="Date_of_Birth" name="birthday" required="required">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="status">
                                            <option disabled="disabled" selected="selected">Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorce">Divorce</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                 <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Address" name="address" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="battery">
                                            <option disabled="disabled" selected="selected">Battery</option>
                                            <option value="Alpha">Alpha</option>
                                            <option value="Bravo">Bravo</option>
                                            <option value="Charlie">Charlie</option>
                                            <option value="HQ">H.Q</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="rank">
                                            <option disabled="disabled" selected="selected">Rank</option>
                                            <option value="Gunner">Gunner</option>
                                            <option value="Lance">Lance Bombardier</option>
                                            <option value="Bombardier">Bombardier</option>
                                            <option value="Sergeant">Sergeant</option>
                                            <option value="Staff">Staff Sergeant</option>
                                            <option value="Warrant">Warrant Officer I</option>
                                            <option value="Officer">Warrant Officer II</option>
                                            <option value="Lieutenant">Lieutenant</option>
                                            <option value="LieutenanII">2nd Lieutenant</option>
                                            <option value="Captain">Captain</option>
                                            <option value="Major">Major</option>
                                            <option value="Lie_Colonel">Lieutenant Colonel</option>
                                            <option value="Colonel">Colonel</option>
                                            <option value="Brigadier">Brigadier</option>
                                            <option value="M_General">Major General</option>
                                            <option value="L_General">Lieutenent General</option>
                                            <option value="General">General</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="JHS Attended" name="jhs" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="SHS Attended" name="shs" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Tertiary Attended" name="tertiary">
                        </div>




                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
