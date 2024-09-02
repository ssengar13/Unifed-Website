<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">


<!-- Mirrored from dashcode-html.codeshaper.tech/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 12:31:38 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Dashcode - HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <!-- End : Theme CSS -->

  <!-- Start : theme-store js -->
  <script src="assets/js/store.js" sync></script>
  <!-- End : theme-store js -->
</head>


<?php

$conn = mysqli_connect("localhost", "root","Ywynbw2z2!@123","UVC_Web");
$result = mysqli_query($conn, "Select * from job_apply order by id desc");

?>

<body class=" font-inter dashcode-app" id="body_class">
  <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="index-2.html">
          <img src="assets/images/logo/logo-c.svg" class="black_logo" alt="logo">
          <img src="assets/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
          <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
          <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
          <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
        </div>
        <button class="sidebarCloseIcon text-2xl inline-block md:hidden">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
          <li class="sidebar-menu-title">MENU</li>
          <li class="">
            <a href="#" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
            <span>Dashboard</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="index-2.html">Analytics Dashboard</a>
              </li>
              <li>
                <a href="ecommerce-dashboard.html">Ecommerce Dashboard
                </a>
              </li>
              <li>
                <a href="project-dashboard.html">Project Dashboard
                </a>
              </li>
              <li>
                <a href="crm-dashboard.html">CRM Dashboard
                </a>
              </li>
              <li>
                <a href="banking-dashboard.html">Banking Dashboard
                </a>
              </li>
            </ul>
          </li>
        
         
          
          <!-- Elements Area -->
          <li class="sidebar-menu-title">ELEMENTS</li>
          <!-- Widgets -->
        
         
          <!-- Tables -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
            <span>Tables</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="basic-table.html">Basic table</a>
              </li>
              <li>
                <a href="advance-table.html">Advanced table</a>
              </li>
            </ul>
            </li>
          </li>
           
          <li class="">
            <a href="demo_request.php" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
            <span>Demo Request</span>
              </span>
              </a>

        </li>

        <li class="">
            <a href="applied_table.php" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
            <span>Applied Candidates</span>
              </span>
              </a>

        </li>

        <!-- <li class="">
          <a href="applied_table.php" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:users"></iconify-icon>
          <span>Applied Candidate</span>
            </span>
            </a> -->

      </li>

      <li class="">
        <a href="quote_table.php" class="navItem">
          <span class="flex items-center">
        <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
        <span>Quote Requested</span>
          </span>
          </a>

    </li>
        </ul>
         
          
        <!-- Upgrade Your Business Plan Card Start -->
      </div>
    </div>
                <!-- BEGIN: Borderless Table -->
                <div class="card">
                  <header class=" card-header noborder">
                    <h4 class="card-title">Borderless Table
                    </h4>
                  </header>
                  <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto ">
                      <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                          <table  style="margin-left:250px;">
                            <thead class="">
                              <tr>

                                <th scope="col" class=" table-th ">
                                  Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Email
                                </th>

                                <th scope="col" class=" table-th ">
                                  Phone Number
                                </th>

                                <th scope="col" class=" table-th ">
                                  Job Role
                                </th>

                                <th scope="col" class=" table-th ">
                                  Qualification
                                </th>

                                <th scope="col" class=" table-th ">
                                 Experience
                                </th>

                                <th scope="col" class=" table-th ">
                                 Notice Period
                                </th>

                                <th scope="col" class=" table-th ">
                                 Resume
                                </th>

                              </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-slate-800 ">
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="table-td "><?php echo $row['name']; ?></td>
                                <td class="table-td "><?php echo $row['email']; ?></td>
                                <td class="table-td "><?php echo $row['phone_no']; ?></td>
                                <td class="table-td "><?php echo $row['job_role']; ?></td>
                                <td class="table-td "><?php echo $row['qualification']; ?></td>
                                <td class="table-td "><?php echo $row['no_of_experience']; ?></td>
                                <td class="table-td "><?php echo $row['notice_period']; ?></td>
                                <td class="table-td "><?php echo $row['resume']; ?></td>
  
                                <!-- Add more table data cells for your columns as needed -->
                            </tr>
                            <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END: Borderless Table -->
            
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- BEGIN: Footer For Desktop and tab -->
      <footer id="footer">
        <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
          <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
            <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
              COPYRIGHT ©
              <span id="thisYear"></span>
              DashCode, All rights Reserved
            </div>
            <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
              Hand-crafted &amp; Made by
              <a href="https://codeshaper.net/" target="_blank" class="text-primary-500 font-semibold">
                Codeshaper
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- END: Footer For Desktop and tab -->
      <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
        <a href="chat.html">
          <div>
            <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
        <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
        <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
          10
        </span>
            </span>
            <span class="block text-[11px] text-slate-600 dark:text-slate-300">
        Messages
      </span>
          </div>
        </a>
        <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
          <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
            <img src="assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
          </div>
        </a>
        <a href="#">
          <div>
            <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
        <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
        <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
          2
        </span>
            </span>
            <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
        Notifications
      </span>
          </div>
        </a>
      </div>
    </div>
  </main>
  <!-- scripts -->

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/rt-plugins.js"></script>
  <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from dashcode-html.codeshaper.tech/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 12:31:38 GMT -->
</html>