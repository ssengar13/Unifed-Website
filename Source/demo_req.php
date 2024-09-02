<?php
include_once "connection.php";
include_once "sidenavbar.php";

$result = mysqli_query($conn, "Select * from form where form = 'demo request'");

// echo $_REQUEST['mail'];
if (isset($_REQUEST['files_needed']) && isset($_REQUEST['mail'])) {
    $files_needed = $_REQUEST['files_needed'];
    $mail = $_REQUEST['mail'];

    $message = "Please send below files for your demo request to proceed.<br>$files_needed<br><strong>Note: Uploaded files should be in .pdf .doc format</strong>";

    if (smtp_mailer($mail, 'Files Required for Demo', $message)) {
    } else {
        echo "Email sending failed.";
    }
}
?>




    <main class="mn-inner">
    <div class="row">
        <!-- <div class="col-sm-12 col-md-8 col-lg-8"> -->
            <div class="card" style ="width:auto;height:auto;">
                
                <div class="card-body"><br>
                    <h3 class="card-title">&emsp13;Demo Request</h3>
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
                    
                       
                        <table class="table table-striped " id="example"  style="border-collapse: collapse;">
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
                                    <th style ="text-align:20px;">Action</th>
                                </tr>
                            </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>   
                                        <td name="email"><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone_no']; ?></td>
                                        <td><?php echo $row['no_of_emp']; ?></td>
                                        <td><?php echo $row['company']; ?></td>
                                        <td><?php echo $row['location']; ?></td>
                                        <td><?php echo $row['ip_addr']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <td>

                                        <?php
                                        if($row['form_acceptance']=='')
                                        {?>
                                        
                                        <form action="" method="post">

                                        <div class="modal" id="filesRequiredModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Files Required</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- File input field for selecting files -->
                                                    <input type ="hidden" name="mail" value = "<?php echo $row['email']; ?>">
                                                    Enter Files &emsp;<input type ="text" name="files_needed" class="form-control">
                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning">Send Email</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        </form>

                                        <!-- <form action="#" method="post"> -->
                                        <button type="submit" name="accept" onclick="accepted(<?php echo $row['id'] . ', \'' . $row['email'] . '\''; ?>)" class="btn btn-success mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                        <i class="material-icons">done</i>
                                        </button>

                                        <button  name="reject"  onclick="rejected(<?php echo $row['id'] . ', \'' . $row['email'] . '\''; ?>)" class="btn btn-danger rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px;width: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                        <i class="material-icons">clear</i>
                                        </button>

                                        <button type="button" data-toggle="modal" name="file_req" data-target="#filesRequiredModal<?php echo $row['id']; ?>"  class="btn btn-warning rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px;width: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                        <i class="material-icons">insert_drive_file</i>
                                        </button>

                                        
                                <!-- </form> -->

                                        <!-- </button> -->

                                        <!-- <button type="button" style="width:80px;background:green;color:white;" name="accept" onclick="accepted(<?php echo $row['id']?>)">Accept</button> &emsp;
                                 <button type="button" style="width:80px;background:red;color:white;" name="reject">Reject</button> -->
                                       
                                    <?php } ?>

                                    <?php
                                    if($row['form_acceptance']=='accepted' || $row['form_acceptance']=='rejected')
                                    {
                                        echo $row['form_acceptance'];

                                    }?>
                                    </td>
                                    </tr>

                                    <?php }?>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </main>

        <?php

        include_once "footer.php";

        ?>