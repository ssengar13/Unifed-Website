
<!DOCTYPE html>

<html lang="en">
    <?php
    include_once 'connection.php';
    include_once "sidenavbar.php";
    $query = "SELECT
    SUM(CASE WHEN form = 'demo request' THEN 1 ELSE 0 END) AS demo_request_count,
    SUM(CASE WHEN form = 'quote request' THEN 1 ELSE 0 END) AS quote_request_count,
    SUM(CASE WHEN form = 'contact' THEN 1 ELSE 0 END) AS contact
          FROM  form";
  $result = mysqli_query($conn, $query);
  if ($result) {
        $row = $result->fetch_assoc();
        $demo_request_count = $row['demo_request_count'];
        $quote_request_count = $row['quote_request_count'];
        $contact = $row['contact'];
        
  }

  $query = "SELECT count(id) as applied from job_apply";
  $result = mysqli_query($conn, $query);
  if ($result) {
        $row = $result->fetch_assoc();
        $applied = $row['applied'];
        
        
  }
    
    ?>

<style>
    .caret{
        width:none !important;
        border-top: none !important;
    }
</style>
    

    <body>
        
        
        <div class="mn-content fixed-sidebar">
           
            
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    
                    
                    <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                        <p class="right-sidebar-heading">SYSTEM</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Notifications</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Quick Results</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Auto Updates</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="right-sidebar-heading">ACCOUNT</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Offline Mode</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Location</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Show Offline Users</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Save History</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="chat-messages" class="side-nav white">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        <input placeholder="Write message" id="message_compose" type="text">
                    </div>
                </div>
            </aside>
           
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                <div class="dropdown" style="width:150px;">
                    <div class="form-group">
                        <label for="filterDropdown">Filter Data</label>
                        <select class="form-control" id="filterDropdown">
                            <option value="today">Today</option>
                            <option value="thisWeek">This Week</option>
                            <option value="thisMonth">This Month</option>
                            <option value="thisYear">This Year</option>
                        </select>
                    </div>
                </div>
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <ul>
                                            <li class="red-text"><span class="badge cyan lighten-1">gross</span></li>
                                        </ul>
                                    </div>
                                    <span class="card-title">Demo Request</span>
                                    <span class="stats-counter">$<span class="counter"><?php echo $demo_request_count; ?></span><small>This week</small></span>
                                </div>
                                <div id="sparkline-bar"></div>
                            </div>
                        </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Quote Request</span>
                                <span class="stats-counter"><span class="counter"><?php echo $demo_request_count; ?></span><small>This month</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Applied Candidate</span>
                                <span class="stats-counter"><span class="counter"><?php echo $applied; ?></span><small>Last week</small></span>
                                <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Total Contacts</span>
                                <span class="stats-counter"><span class="counter"><?php echo $contact; ?></span><small>Last week</small></span>
                                <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card visitors-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                                        </ul>
                                    </div>
                                    <span class="card-title">Visitors<span class="secondary-title">Showing stats from the last week</span></span>
                                            <div id="flotchart1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card server-card">
                                <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li class="red-text"><span class="badge blue-grey lighten-3">optimal</span></li>
                                    </ul>
                                </div>
                                    <span class="card-title">Server Load</span>
                                                <div class="server-load row">
                                                    <div class="server-stat col s4">
                                                        <p>167GB</p>
                                                        <span>Usage</span>
                                                    </div>
                                                    <div class="server-stat col s4">
                                                        <p>320GB</p>
                                                        <span>Space</span>
                                                    </div>
                                                    <div class="server-stat col s4">
                                                        <p>57.4%</p>
                                                        <span>CPU</span>
                                                    </div>
                                                </div>
                                    <div class="stats-info">
                                        <ul>
                                            <li>Google Chrome<div class="percent-info green-text right">32% <i class="material-icons">trending_up</i></div></li>
                                            <li>Safari<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                            <li>Mozilla Firefox<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                                        </ul>
                                    </div>
                                    <div id="flotchart2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Invoices</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="number">Payment Type</th>
                                            <th data-field="company">Company</th>
                                            <th data-field="date">Date</th>
                                            <th data-field="progress">Progress</th>
                                            <th data-field="total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#203</td>
                                            <td>PayPal</td>
                                            <td>Curabitur Libero Corp</td>
                                            <td>Dec 16, 18:12</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>$5430</td>
                                        </tr>
                                        <tr>
                                            <td>#202</td>
                                            <td>American Express</td>
                                            <td>Integer Mattis Ltd</td>
                                            <td>Nov 29, 13:56</td>
                                            <td><span class="pie">5/8</span></td>
                                            <td>$1400</td>
                                        </tr>
                                        <tr>
                                            <td>#200</td>
                                            <td>Discover</td>
                                            <td>Pellentesque Inc</td>
                                            <td>Nov 17, 19:14</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>$1250</td>
                                        </tr>
                                        <tr>
                                            <td>#199</td>
                                            <td>MasterCard</td>
                                            <td>Curabitur Libero Corp</td>
                                            <td>Oct 21, 12:16</td>
                                            <td><span class="pie">5/8</span></td>
                                            <td>$1349</td>
                                        </tr>
                                        <tr>
                                            <td>#198</td>
                                            <td>Amex</td>
                                            <td>Integer Mattis Ltd</td>
                                            <td>Oct 14, 22:43</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>$980</td>
                                        </tr>
                                        <tr>
                                            <td>#197</td>
                                            <td>PayPal</td>
                                            <td>Pellentesque Inc</td>
                                            <td>Sept 29, 10:33</td>
                                            <td><span class="pie">5/8</span></td>
                                            <td>$679</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-sidebar">
                    <span class="inner-sidebar-title">New Messages</span>
                    <div class="message-list">
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
                    </div>
                    <span class="inner-sidebar-title">Events</span>
                    <span class="info-item">Envato meeting<span class="new badge">12</span></span>
                    <div class="inner-sidebar-divider"></div>
                    <span class="info-item">Google I/O</span>
                    <div class="inner-sidebar-divider"></div>
                    <span class="info-item disabled">No more events scheduled</span>
                    <div class="inner-sidebar-divider"></div>
                    
                    <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
                    <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
                </div>
            </main>
            
        </div>
        <div class="left-sidebar-hover"></div>
        
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        
    </body>

<!-- Mirrored from polygons.space/alpha/Source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 13:08:57 GMT -->
</html>