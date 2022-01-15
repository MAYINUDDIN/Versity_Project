<?php
include_once 'data/database.php';
$result = mysqli_query($con,"SELECT * FROM proposal_form_data order by roll_no ASC");
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo justify-content-center">
                    <a href="index.html">
                        <img class="ml-5" src="logo.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
                    data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <h2 class="text-center">Dhaka International University</h2>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="proposal_form.php" class="nav-link"><i
                                    class="far fa-address-card"></i><span>Proposal Form</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="teacher_profile.html" class="nav-link"><i class="fas fa-user"></i><span>Teacher
                                    Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="project_committe.html" class="nav-link"><i class="fas fa-users"></i><span>Project
                                    Committee</span></a>
                        </li>


                        <li class="nav-item">
                            <a href="notice.html" class="nav-link"><i
                                    class="fas fa-exclamation-circle"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="contact.html" class="nav-link"><i
                                    class="fas fa-diagnoses"></i><span>Contact</span></a>

                        </li>

                        <li class="nav-item ">
                            <a href="about.html" class="nav-link"><i class="fas fa-diagnoses"></i><span>About
                                    us</span></a>

                        </li>




                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">

                <div class="row mt-4">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-xl-12 col-md-12 sol-sm-12">
                        <div class="card">
                            <div class="shadow-lg p-2 mb-3 bg-body rounded">
                                <h3 class="text-center mb-4 mt-3 h"
                                    style="font-style: bold; text-shadow: 0px 1px 1px #000000; ">
                                    <i style="margin-right: 8px;" class="far fa-address-card text-success"></i>STUDENT
                                    <span style="color: rgb(77, 129, 24);">PROJECT PROPOSAL</span> LIST <span> <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="font-size:16px; margin-left:10px"> <i class="fas fa-users" style="margin-right:7px;"></i>Create Group</button> </span>
                                </h3>
                            </div>
                            <div class="card-body">

                          
                                <table class="table table-bordered">
                                    <thead class="bg-primary text-white p-3">
                                        
                                      <tr style="font-size:14px">
                                        <th scope="col">Roll No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Topics</th>
                                        <th scope="col">Supervisor Choice</th>
                                        <th scope="col">Skills</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       $i=0;
                                        while($row = mysqli_fetch_array($result)) {
                                        ?>
                                      <tr style="font-size:14px" >
                                        <td class="p-2 text-center"><?php echo $row["roll_no"]; ?></td>
                                        <td><?php echo $row["student_name"]; ?></td>
                                        <td><?php echo $row["mobile"]; ?></td>
                                        <td><?php echo $row["type_namee"]; ?></td>
                                        <td><?php echo $row["choice_list"]; ?></td>
                                        <td><?php echo $row["skills"]; ?></td>
                                      </tr>
                                      <?php
                                          $i++;
                                             }
                                      ?>
                                      
                                    </tbody>
                                  </table>

                                  

                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->

                    <!-- All Notice Area End Here -->
                </div>

            </div>
        </div>
        <!-- Page Area End Here -->
        
<!--+++++ Modal+++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Group For Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="data/group_form.php" class="new-added-form">
      <div class="shadow-lg p-5 mb-3 bg-body rounded">
      <div class="row p-2">
        <div class="col-md-6 form-group">
            <label>*Selected Students Name & Roll</label>
            <textarea style="height: 120px;" class="textarea form-control"
                name="student_name_roll" id="" cols="20" rows="9" required></textarea>
        </div>
        <div class="col-md-6 form-group">
            <label>*Selected Supervisors Name</label>
            <textarea style="height: 120px;" class="textarea form-control" name="supervisor_name"
                id="" cols="20" rows="9" required></textarea>
        </div>
        </div>
        <div class="row mt-4">
        <div class="col-md-6 form-group">
         <label>Topics Name</label>
            <input type="text" name="topics_name" placeholder="" class="form-control"
            required>
         </div>
         <div class="col-md-6 form-group">
            <label>Group Name</label>
            <input type="text" name="group_name" placeholder="" class="form-control"
           required>
            </div>
            </div>

        <div class="row justify-content-center mt-5">
       <div class="col-md-6 form-group">
       <button type="submit" name="save"
        class=" btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Create</button>
       <button type="reset" id=""
       class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancel</button>
      </div>
      </form>
      </div>
      </div>
     </div>
    </div>

   

    
  </div>
</div>

<!--+++++ Modal+++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </div>


    <script src="js/jquery.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function(){
            function loadData(type, category_id){
                $.ajax({
                    url : "load-cs.php",
                    type : "POST",
                    data: {type : type, id : category_id},
                    success : function(data){
                        if(type == "supervisor_name"){
                            $("#sname").html(data);
                        }else{
                            $("#type_name").append(data);
                        }
                        
                    }
                });
            }
      
            loadData();
      
            $("#type_name").on("change",function(){
                var type = $("#type_name").val();
      
                if(type_name != ""){
                    loadData("supervisor_name", type);
                }else{
                    $("#sname").html("");
                }
      
                
            })
        });
      </script> -->


    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>


</body>

</html>