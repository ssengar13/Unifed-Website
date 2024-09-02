<?php
session_start();
include_once "connection.php";
include_once "fetch_permission.php";
include_once "../sendmail.php";


$query = "SELECT COUNT(id) AS notification_count FROM form where form = 'demo request' and status ='new'";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $notificationCount = $row['notification_count'];
} else {
    $notificationCount = 0;
}
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <!-- Title -->
        <title>Alpha | Responsive Admin Dashboard Template</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


        
</head>

    <script>
        var notification_data = '';
        window.onload = () => {
            // notification_data = document.getElementById("notification_data");
        }
        function checkForNewNotifications() {
            $.ajax({
            url: 'notifications.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
        // console.log(response);
        if (response && response.length > 0) {
            $('#notifications').empty();
            var $notificationList = $('<ul>');
                response.forEach(function(notification) {
                    var $li = $('<li>');
                    var $link = $('<a>').attr({
                        'href': '#',
                        'data-id': notification.id ,
                        'style' : "color:grey;" ,
                        'data-toggle': "modal",
                        'data-target' : "#myModal",
                        'onclick' : 'renderNotification(' + notification.id + ')'
                    });
                    $link.click(function() {
                        $('#modalId').text(notification.id);
                        $('#modalIdPHP').val(notification.id);
                        $('#modalMessage').text(notification.message);
                    });

                    

                    $link.text(notification.message);
                    $li.append($link);
                    $notificationList.append($li);


            });
            $('#notifications').append($notificationList);
        }
    },
    error: function(xhr, status, error) {
        console.error(error);
    }

//console.log(document.getElementById('modalIdPHP').value);
});

        }

        function renderNotification(id){
            fetch('notifications.php?type=fetch-notif&id=' + id).then(rsp => rsp.json()).then(data => {
                        console.warn(data);
                        // notification_data.innerHTML = JSON.stringify(data);
                        $('#notification_data').html(`
                     

                        <ul>
                            <li>
                                <h4>Name:<span style="font-weight:200"> ${data.name}</span></h4>
                            </li>
                            <li>
                                <h4>Email:<span style="font-weight:200"> ${data.email}</span></h4>
                            </li>
                            <li>
                                <h4>Phone Number:<span style="font-weight:200"> ${data.phone_no}</span></h4>
                            </li>
                            <li>
                                <h4>Total Employee: <span style="font-weight:200">${data.no_of_emp}</span></h4>
                            </li>
                            <li>
                                <h4>Plan: <span style="font-weight:200">${data.plan}</span></h4>
                            </li>
                            <li>
                                <h4>Company:<span style="font-weight:200"> ${data.company}</span></h4>
                            </li>
                            <li>
                                <h4>Location:<span style="font-weight:200"> ${data.location}</span></h4>
                            </li>
                        </ul>

                        `)
                    });
        }


checkForNewNotifications();

     function accepted(id,email)
     {
        console.log(id);
        console.log(email);
        alert("Demo Request Accepted");
        $.ajax({
                type: "POST",
                url: "update_demo_req.php", 
                data: { id: id,email: email, accept_demo_request: 'accept_demo_request' }, 
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
            });
       
     }

     function rejected(id,email)
     {
        console.log(id);
        console.log(email);
        alert("Demo Request Rejected");
        $.ajax({
                type: "POST",
                url: "update_demo_req.php", 
                data: { id: id,email: email, accept_demo_request: 'reject_demo_request' }, 
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
            });
       
     }

     function accepted_quote(id,email)
     {
        console.log(id);
        console.log(email);
        alert("Quote Request Accepted");
        $.ajax({
                type: "POST",
                url: "update_demo_req.php", 
                data: { id: id,email: email, accept_quote_request: 'accept_quote_request' }, 
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
            });
       
     }

     function rejected_quote(id,email)
     {
        console.log(id);
        console.log(email);
        alert("Quote Request Rejected");
        $.ajax({
                type: "POST",
                url: "update_demo_req.php", 
                data: { id: id,email: email, reject_quote_request: 'reject_quote_request' }, 
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
            });
       
     }
     function accepted_applicant(id,email)
     {
        console.log(id);
        console.log(email);
        alert("Applicant Selected");
        $.ajax({
                type: "POST",
                url: "update_demo_req.php", 
                data: { id: id,email: email, accept_applicant: 'accept_applicant' }, 
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
            });
       
     }

     function rejected_applicant(id,email)
     {
        console.log(id);
        console.log(email);
        alert("Applicant Rejected");
        $.ajax({
                type: "POST",
                url: "update_demo_req.php", 
                data: { id: id,email: email, reject_applicant: 'reject_applicant' }, 
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
            });
        }
    //  <?php
    //  if (isset($_POST['id'])) {
    //     $id = intval($_POST['id']);
    //     $stmt = mysqli_prepare($conn, "SELECT email FROM form WHERE form = 'demo request' AND id = ?");
        
    //     if ($stmt) {
    //         mysqli_stmt_bind_param($stmt, "i", $id);
    //         mysqli_stmt_execute($stmt);
    //         mysqli_stmt_bind_result($stmt, $email);
            
    //         if (mysqli_stmt_fetch($stmt)) {
    //             smtp_mailer($email, 'Demo Request Status', "Your demo request has been accepted. Stay in touch!!!");
    //             mysqli_stmt_close($stmt);
    //             mysqli_query($conn, "UPDATE form SET form_acceptance = 'accepted' WHERE form = 'demo request' AND id = $id");
    //         } else {
    //             // Handle the case where no email is found
    //         }
    //     } else {
            
    //     }
    // }
    //     ?>

</script>
    

    
    <body>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Details</h4>
      </div>
      <div class="modal-body" id="notification_data">
      <input type="text" id="modalIdPHP" name="modalIdPHP" value="">
 
      <p><strong>Notification ID:</strong> <span id="modalId"></span></p>
      <p><strong>Message:</strong> <span id="modalMessage"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    

  </div>
</div>   

    
    <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">Unified Voice Communicationn</span>
                        </div>
                        <form class="left search col s6 hide-on-small-and-down">
                            <div class="input-field">
                                <input id="search" type="search" placeholder="Search" autocomplete="off">
                                <label for="search"><i class="material-icons search-icon">search</i></label>
                            </div>
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                            <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge"><?php echo $notificationCount;?></span></a></li>
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul>
                        
                        <div id="dropdown1" class="dropdown-content notifications-dropdown" style= 'font-family: "Arial, Helvetica, sans-serif";'>
                            <div class="notification-drop-title"><h4 style="color: black;">Today</h4></div>
                            <div class="notification" id="notifications" style="font-weight:300;margin:2px;">
                                        <!-- Your notification content goes here -->
                                    </div>  
                                <!-- <a href="#" style="color:grey;"  data-toggle="modal" data-target="#myModal">
                                    
                                </a> -->
                            </div>
                            

                    </div>
                </nav>
            </header>
            <div class="search-results">
                <div class="container search-container">
                    <div class="row">
                        <div class="col s12 search-head">
                            <div class="row">
                                <div class="col s12">
                                    <div class="left">
                                        <p class="search-results-title">Quick search results</p>
                                        <p class="search-filter left">
                                            <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                            <label for="filled-in-box">Google search</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-not-found">No results found</div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent ">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle red darken-1">G</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="card-content first">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">Yesterday, 4:56 PM</span>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-content">
                                    <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">27 January 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    <div class="col s12">
                        <ul class="tabs tab-demo" style="width: 100%;">
                            <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                            <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                        </ul>
                    </div>
          
                    
                </div>
            </aside>
          
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p><?php echo $_SESSION['name']; ?></p>
                                <span><?php echo $_SESSION['email']; ?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding"><a class="waves-effect waves-grey" href="index.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
                <?php if(in_array('demo-request-view', $permission)) { ?>    <li class="no-padding"><a class="waves-effect waves-grey" href="demo_req.php"><i class="material-icons">live_tv</i>Demo Request</a></li></li><?php } ?>
                <?php if(in_array('quote-request-view', $permission)) { ?>    <li class="no-padding"><a class="waves-effect waves-grey" href="quote_req.php"><i class="material-icons">request_quote</i>Quote Request</a></li></li><?php } ?>
                <?php if(in_array('applied-candidate-view', $permission)) { ?>    <li class="no-padding"><a class="waves-effect waves-grey" href="applied_jobs.php"><i class="material-icons">people</i>Applied Candidates</a></li></li><?php } ?>
                <?php if(in_array('contacts-view', $permission)) { ?>    <li class="no-padding"><a class="waves-effect waves-grey" href="contactus.php"><i class="material-icons">phone</i>Contact</a></li></li><?php } ?>
                <?php if(in_array('roles-and-permission-view', $permission)) { ?>    <li class="no-padding"><a class="waves-effect waves-grey" href="roles_permission.php"><i class="material-icons">manage_accounts</i>Roles & Permissions</a></li></li><?php } ?>
                <?php if(in_array('users-view', $permission)) { ?>    <li class="no-padding"><a class="waves-effect waves-grey" href="user.php"><i class="material-icons">person_add</i>Users</a></li></li><?php } ?>

                    
                    </ul>
                <div class="footer">
                    <p class="copyright">Unified Voice Communication ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>



            