<?php

include_once "connection.php";
include_once "sidenavbar.php";
$result = mysqli_query($conn, "Select * from form where form = 'contact'");

?>

    <div class="mn-content fixed-sidebar">
    <main class="mn-inner">
    <div class="row">
        <!-- <div class="col-sm-12 col-md-8 col-lg-8"> -->
            <div class="card" style ="width:auto;height:auto;">
                
                <div class="card-body"><br>
                    <h3 class="card-title">&emsp13;Contact</h3>
                    <div style="float:right;margin-top:1px;">
                            Show
                            <select onchange="updateTable(this.value)" style="padding: 5px;border: 1px solid #ccc;border-radius: 4px;">
                            <option value="">-- Select --</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="all">All</option>
                            </select>
                            Entries
                        </div>
                            <form action="" method="post">
                                <table class="table table-striped" id="example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Total Employee</th>
                                            <th>Company</th>
                                            <th>Location</th>
                                            <th>IP Address</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone_no']; ?></td>
                                        <td><?php echo $row['no_of_emp']; ?></td>
                                        <td><?php echo $row['company']; ?></td>
                                        <td><?php echo $row['location']; ?></td>
                                        <td><?php echo $row['ip_addr']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <!-- Add more table data cells for your columns as needed -->
                                    </tr>
                                    <?php } ?>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>
 
        <?php

        include_once "footer.php";

        ?>