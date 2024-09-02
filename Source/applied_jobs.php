<?php

include_once "connection.php";
include_once "sidenavbar.php";
$result = mysqli_query($conn, "Select * from job_apply  order by id desc");
?>


<main class="mn-inner">
    <div class="row">
        <!-- <div class="col-sm-12 col-md-8 col-lg-8"> -->
            <div class="card" style ="width:auto;height:auto;">
                
                <div class="card-body"><br>
                <h3 class="card-title">&emsp13;Applied Candidates</h3>   
                 <div style="float:right;margin-top:1px;">
                            Show
                            <select onchange="updateTable(this.value)" style="padding: 5px;border: 1px solid #ccc;border-radius: 4px;color:grey;">
                            <option value="">-- Select --</option>
                                <option value="5">5</option>


                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="all">All</option>
                            </select>
                            Entries
                        </div>
                
                <table class="table table-striped " id="example"  style="border-collapse: collapse;">
                <div class="card-content">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Job Role</th>
                                <th>Qualification</th>
                                <th>Experience</th>
                                <th>Notice Period</th>
                                <th>Resume</th>
                                <th>Action</th>
                            </tr>
          
                        </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr> -->
                                    <!-- </tfoot> -->
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone_no']; ?></td>
                                <td><?php echo $row['job_role']; ?></td>
                                <td><?php echo $row['qualification']; ?></td>
                                <td><?php echo $row['no_of_experience']; ?></td>
                                <td><?php echo $row['notice_period']; ?></td>
                                <td><?php echo $row['resume']; ?></td>
                                <td> <?php
                                        if($row['status']=='' || $row['status']=='NULL')
                                        {?>
                                        <button data-toggle="modal" name="accept" onclick="accepted_applicant(<?php echo $row['id'] . ', \'' . $row['email'] . '\''; ?>)" class="btn btn-success mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                        <i class="material-icons">done</i>
                                        </button>

                                        <button data-toggle="modal" name="reject" onclick="accepted_applicant(<?php echo $row['id'] . ', \'' . $row['email'] . '\''; ?>)" class="btn btn-danger rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px;width: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                        <i class="material-icons">clear</i>
                                        </button>

                                        <!-- </button> -->

                                        <!-- <button type="button" style="width:80px;background:green;color:white;" name="accept" onclick="accepted(<?php echo $row['id']?>)">Accept</button> &emsp;
                                 <button type="button" style="width:80px;background:red;color:white;" name="reject">Reject</button> -->
                                       
                                    <?php } ?>

                                    <?php
                                    if($row['status']=='selected' || $row['status']=='rejected')
                                    {
                                        echo $row['status'];

                                    }?>
                                    </td>
                                    </tr>
                                    <?php }?>
                                   
                                    </tbody>
                </div>
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