<?php
include_once "sidenavbar.php";
include_once 'connection.php';
$modules = array("Charts", "Demo Request", "Quote Request", "Applied Candidate", "Contacts", "Roles and Permission", "Users");
?>
<main class="mn-inner">
   <div class="row">
      <div class="col s12">
         <div class="card">
            <div class="card-content">
               <div class="row">
                  <div class="input-field col s12" style="display: flex; justify-content: space-between; align-items: center;">
                     <h2 style="margin-left: 10px;">User Permissions</h2>
                     <?php if (in_array('roles-and-permission-create', $permission)) { ?><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Add User Role</button> <?php } ?>
                  </div>
               </div>

               <!-- add user modal start -->
               <form action="" method="POST">
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content modal-lg modal-dialog-centered">
                           <div class="modal-header d-flex justify-content-between align-items-start">
                              <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:black; margin-left:10px;">Add User Role</h5>
                           </div>

                           <div class="modal-body">
                              <div class="form-group col s4">
                                 <label for="user-role" style="font-size:large; color:black;">User Role</label>
                                 <input type="text" id="user-role" name="user_role" class="form-control" placeholder="Enter user role...">
                              </div>
                              <table class="table table-striped table-borderless">
                                 <thead class="thead-light">
                                    <tr>
                                       <th style="width: 20%;">Module</th>
                                       <th style="width: 20%;">View</th>
                                       <th style="width: 20%;">Edit</th>
                                       <th style="width: 20%;">Create</th>
                                       <th style="width: 20%;">Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    foreach ($modules as $module) {
                                       $module_renamed = str_replace(" ", "-", strtolower($module));
                                       $view_id = $module_renamed . "-view";
                                       $edit_id = $module_renamed . "-edit";
                                       $create_id = $module_renamed . "-create";
                                       $delete_id = $module_renamed . "-delete";
                                    ?>
                                       <tr>
                                          <td><?php echo $module; ?> </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $view_id; ?>" name="permissions[]" value="<?php echo $module_renamed; ?>-view" />
                                                <label class="custom-control-label" for="<?php echo $view_id; ?>"></label>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $edit_id; ?>" name="permissions[]" value="<?php echo $module_renamed; ?>-edit" />
                                                <label class="custom-control-label" for="<?php echo $edit_id; ?>"></label>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $create_id; ?>" name="permissions[]" value="<?php echo $module_renamed; ?>-create" />
                                                <label class="custom-control-label" for="<?php echo $create_id; ?>"></label>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $delete_id; ?>" name="permissions[]" value="<?php echo $module_renamed; ?>-delete" />
                                                <label class="custom-control-label" for="<?php echo $delete_id; ?>"></label>
                                             </div>
                                          </td>
                                       </tr>
                                    <?php } ?>


                                 </tbody>
                              </table>
                           </div>

                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <!-- add user modal end -->

               <table class="table table-striped table-borderless">
                  <thead class="thead-light">
                     <tr>
                        <th>User Role Name</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $query = mysqli_query($conn, "SELECT * FROM user_role ORDER BY id DESC");
                     while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                           <td><?php echo $row['user_role']; ?></td>
                           <td>
                              <div class="btn-group" role="group" aria-label="Edit and Delete Buttons" style>
                                 <button data-toggle="modal" data-target="#viewUserModal<?php echo $row['id']; ?>" class="btn btn-success mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                    <i class="material-icons">visibility</i>
                                 </button>
                                 <button data-toggle="modal" data-target="#editUserModal<?php echo $row['id']; ?>" class="btn btn-warning mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                    <i class="material-icons">edit</i>
                                 </button>
                                 <button data-toggle="modal" data-target="#deleteModal<?php echo $row['id']; ?>" class="btn btn-danger rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                    <i class="material-icons">delete</i>
                                 </button>
                              </div>
                           </td>
                        </tr>

                     <?php } ?>
                  </tbody>
               </table>


               <?php
               $query = mysqli_query($conn, "SELECT * FROM user_role ORDER BY id DESC");
               while ($row = mysqli_fetch_array($query)) { ?>


                   <!------------------------------------------ edit user-role modal start -------------------------------------------->
                   <form action="" method="POST">
                     <div class="modal fade" id="editUserModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                     <?php $userRoleId = $row['id'];

                        // Fetch the permissions for the user role based on its ID
                        $sql2 = "SELECT permissions FROM user_role WHERE id = $userRoleId";
                        $result2 = mysqli_query($conn, $sql2);

                        if ($result2) {
                           $row2 = mysqli_fetch_assoc($result2);
                           $permissionsArray = explode(', ', $row2['permissions']);
                        } else {
                           // Handle the database error here
                           $permissionsArray = []; // Default to an empty array
                        }
                        ?>  
                     <input type ="text" name = "edit-role-id" value = "<?php echo $row['id']; ?>">
                        <div class="modal-dialog">
                           <div class="modal-content modal-lg modal-dialog-centered">
                              <div class="modal-header d-flex justify-content-between align-items-start">
                                 <h5 class="modal-title" id="editUserModalLabel" style="font-size:20px; color:black; margin-left:10px;">Add User Role</h5>
                              </div>

                              <div class="modal-body">
                                 <div class="form-group col s4">
                                    <label for="user-role" style="font-size:large; color:black;">User Role</label>
                                    <input type="text" id="user-role" name="user-role-edit" class="form-control" placeholder="Enter user role...">
                                 </div>
                                 <table class="table table-striped table-borderless">
                                    <thead class="thead-light">
                                       <tr>
                                          <th style="width: 20%;">Module</th>
                                          <th style="width: 20%;">View</th>
                                          <th style="width: 20%;">Edit</th>
                                          <th style="width: 20%;">Create</th>
                                          <th style="width: 20%;">Delete</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       foreach ($modules as $module) {
                                          $module_renamed = str_replace(" ", "-", strtolower($module));
                                       ?>
                                          <tr>
                                             <td><?php echo htmlspecialchars($module); ?></td>
                                             <td>
                                                   <div class="custom-control custom-checkbox">
                                                      <?php
                                                      $view_id = $module_renamed . "-view";
                                                      $value = $module_renamed . "-view";
                                                      $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                      ?>
                                                      <input type="checkbox" class="custom-control-input" id="<?php echo $view_id; ?>-modal" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                      <label class="custom-control-label" for="<?php echo $view_id; ?>-modal"></label>
                                                   </div>
                                             </td>
                                             <td>
                                                   <div class="custom-control custom-checkbox">
                                                      <?php
                                                      $edit_id = $module_renamed . "-edit";
                                                      $value = $module_renamed . "-edit";
                                                      $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                      ?>
                                                      <input type="checkbox" class="custom-control-input" id="<?php echo $edit_id; ?>-modal" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                      <label class="custom-control-label" for="<?php echo $edit_id; ?>-modal"></label>
                                                   </div>
                                             </td>
                                             <td>
                                                   <div class="custom-control custom-checkbox">
                                                      <?php
                                                      $create_id = $module_renamed . "-create";
                                                      $value = $module_renamed . "-create";
                                                      $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                      ?>
                                                      <input type="checkbox" class="custom-control-input" id="<?php echo $create_id; ?>-modal" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                      <label class="custom-control-label" for="<?php echo $create_id; ?>-modal"></label>
                                                   </div>
                                             </td>
                                             <td>
                                                   <div class="custom-control custom-checkbox">
                                                      <?php
                                                      $delete_id = $module_renamed . "-delete";
                                                      $value = $module_renamed . "-delete";
                                                      $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                      ?>
                                                      <input type="checkbox" class="custom-control-input" id="<?php echo $delete_id; ?>-modal" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                      <label class="custom-control-label" for="<?php echo $delete_id; ?>-modal"></label>
                                                   </div>
                                             </td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>

                                 </table>
                              </div>

                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <!----------------------------------------- edit user modal end ----------------------------------------------------->


                  <!-- ----------------------------------------delete modal start --------------------------------------------------- -->

                  <form method="post" enctype="multipart/form-data">


                     <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header bg-primary">
                                 <h5 class="modal-title text-white" id="exampleModalCenterTitle"><i data-feather="trash" class="feather-icon animated-icon"></i> Delete Users</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">

                                 <p class="text-center mt-2"><b>Do you really want to delete ? </b></p>

                              </div>
                              <!-- </div> -->
                              <div class="modal-footer mx-auto">
                                 <input type="hidden" value =" <?php echo $row['id'];?> " name = "user_role_id" >

                                 <button type = "submit" data-target="#deleteModal" name="delete" class="btn btn-primary btn-icon center" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;">
                                    Yes
                                 </button>

                                 <!-- <button id="deleteprocess" name="deleteprocess" type="submit" class="btn btn-primary btn-icon">Yes</button> -->
                                 <button id="dontdeleteusers" name="dontdeleteusers" type="submit" class="btn btn-primary btn-icon center" data-dismiss="modal" aria-label="Close" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;">No</button>

                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <!-- ----------------------------------------delete modal end --------------------------------------------------- -->


                  <!--------------------- View user modal start ----------------------------------->
                  <div class="modal" id="viewUserModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
                     <?php $userRoleId = $row['id'];

                     // Fetch the permissions for the user role based on its ID
                     $sql = "SELECT permissions FROM user_role WHERE id = $userRoleId";
                     $result = mysqli_query($conn, $sql);

                     if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $permissionsArray = explode(', ', $row['permissions']);
                     } else {
                        // Handle the database error here
                        $permissionsArray = []; // Default to an empty array
                     }
                     ?>
                     <div class="modal-dialog">
                        <div class="modal-content modal-lg modal-dialog-centered">
                           <div class="modal-header d-flex justify-content-between align-items-start">
                              <h5 class="modal-title" id="viewUserModalLabel" style="font-size:20px; color:black;">View User Role</h5>
                           </div>

                           <div class="modal-body">
                              <div class="form-group col s4">
                                 <label for="user-role" style="font-size:large; color:black;">User Role</label>
                                 <input type="text" id="user-role" name="user-role" class="form-control" placeholder="Enter user role...">
                              </div>
                              <table class="table table-striped table-borderless">
                                 <thead class="thead-light">
                                    <tr>
                                       <th style="width: 20%;">Module</th>
                                       <th style="width: 20%;">View</th>
                                       <th style="width: 20%;">Edit</th>
                                       <th style="width: 20%;">Create</th>
                                       <th style="width: 20%;">Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    foreach ($modules as $module) {
                                       $module_renamed = str_replace(" ", "-", strtolower($module));
                                    ?>
                                       <tr>
                                          <td><?php echo $module; ?> </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <?php

                                                $view_id = $module_renamed . "-view";
                                                $value = $module_renamed . "-view";
                                                $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                ?>
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $view_id; ?>" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                <label class="custom-control-label" for="<?php echo $view_id; ?>"></label>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <?php

                                                $edit_id = $module_renamed . "-edit";
                                                $value = $module_renamed . "-edit";
                                                $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                ?>
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $edit_id; ?>" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                <label class="custom-control-label" for="<?php echo $edit_id; ?>"></label>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <?php

                                                $create_id = $module_renamed . "-create";
                                                $value = $module_renamed . "-create";
                                                $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                ?>
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $create_id; ?>" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                <label class="custom-control-label" for="<?php echo $create_id; ?>"></label>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="custom-control custom-checkbox">
                                                <?php

                                                $delete_id = $module_renamed . "-delete";
                                                $value = $module_renamed . "-delete";
                                                $checked = in_array($value, $permissionsArray) ? 'checked' : '';
                                                ?>
                                                <input type="checkbox" class="custom-control-input" id="<?php echo $delete_id; ?>" name="permissions[]" value="<?php echo $value; ?>" <?php echo $checked; ?> />
                                                <label class="custom-control-label" for="<?php echo $delete_id; ?>"></label>
                                             </div>
                                          </td>
                                       </tr>
                                    <?php } ?>

                                 </tbody>
                              </table>
                           </div>
                           <input type="hidden" id="permissionsArray" name="permissionsArray[]" value="" />

                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!---------------------------------------- view user modal end ------------------------------------------->


                 
               <?php } ?>
            </div>
         </div>

      </div>

   </div>

   <!-- Account Tab ends -->
   </div>
   </div>
   </div>
   <!-- END: Content-->
   <div class="sidenav-overlay"></div>
   <div class="drag-target"></div>
   <!-- BEGIN: Footer-->
   <?php
   include_once "footer.php";
   ?>
   <script>
      // Add an event listener to the form submission
      document.querySelector('form').addEventListener('submit', function(event) {
         event.preventDefault(); // Prevent the form from submitting normally

         // Get all checked checkboxes
         const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');

         // Create an array to store the values
         const permissionsArray = [];
         checkedCheckboxes.forEach(function(checkbox) {
            permissionsArray.push(checkbox.value);
         });

         document.getElementById('permissionsArray').value = JSON.stringify(permissionsArray);

         this.submit();
      });
   </script>

   <?php

   if (isset($_POST['user_role']) ) {
      $userRole = $_POST['user_role'];
      $permissions = isset($_POST['permissions']) ? $_POST['permissions'] : [];

      $permissionsString = implode(', ', $permissions);

      $checkSql = "SELECT * FROM user_role WHERE LOWER(user_role) = LOWER('$userRole')";
      $result = $conn->query($checkSql);

      if ($result->num_rows > 0) {
         echo "User role '$userRole' already exists!";
      } else {
         $insertSql = "INSERT INTO user_role (user_role, permissions) VALUES ('$userRole', '$permissionsString')";

         if ($conn->query($insertSql) === TRUE) {
            echo "User role and permissions saved successfully!";
         } else {
            echo "Error: " . $conn->error;
         }
      }

   
   }

   if (isset($_POST['delete'])) {
      
      $userRoleId = $_POST['user_role_id'];

      $deleteSql = "DELETE FROM user_role WHERE id = $userRoleId";
      $_SESSION['deleteSql'] = $deleteSql;
      $result = $conn->query($deleteSql);
   
      if ($result) {
       
         $_SESSION['rseult'] = "Success";
      } else {
         
         $_SESSION['rseult'] = "Error deleting user role: " . $conn->error;
      }
   
  
   }

   if (isset($_POST['user-role-edit'])) {
          // Get user role and permissions from the form
          $userRoleId = $_POST['edit-role-id'];
          $userRole = $_POST['user-role-edit'];
          $permissions = $_POST['permissions'];

          $_SESSION['userRoleId2222'] = $userRoleId;
          // Serialize permissions as a comma-separated string
          $permissionsString = implode(', ', $permissions);

  
          // Update the user role with new permissions
          $updateSql = "UPDATE user_role SET permissions = '$permissionsString' WHERE id = $userRoleId";
          $_SESSION['updateSql'] = $updateSql;
  
          if ($conn->query($updateSql) === TRUE) {
              echo "User role and permissions updated successfully!";
          } else {
              echo "Error updating user role: " . $conn->error;
          }
      }
  
   ?>