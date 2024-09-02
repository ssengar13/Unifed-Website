<?php
   include_once "sidenavbar.php";
   ?>
<main class="mn-inner">
<div class="row">
   <div class="col s12">
      <div class="card">
         <div class="card-content">
         <div class="row">
            <div class="input-field col s12" style="display: flex; justify-content: space-between; align-items: center;">
            <h2 style="margin-left: 10px;">User Permissions</h2>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Add User Role</button>
            </div>
         </div>
         
         <!-- add user modal start -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg modal-dialog-centered">
    <div class="modal-header d-flex justify-content-between align-items-start">
  <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:black; margin-left:10px;">Add User Role</h5>
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
                  <tr>
                     <td>Module 1</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-read" />
                           <label class="custom-control-label" for="admin-read"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-write" />
                           <label class="custom-control-label" for="admin-write"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-create" />
                           <label class="custom-control-label" for="admin-create"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-delete" />
                           <label class="custom-control-label" for="admin-delete"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 2</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-read" />
                           <label class="custom-control-label" for="staff-read"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-write" />
                           <label class="custom-control-label" for="staff-write"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-create" />
                           <label class="custom-control-label" for="staff-create"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-delete" />
                           <label class="custom-control-label" for="staff-delete"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 3</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-read" />
                           <label class="custom-control-label" for="author-read"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-write" />
                           <label class="custom-control-label" for="author-write"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-create" />
                           <label class="custom-control-label" for="author-create"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-delete" />
                           <label class="custom-control-label" for="author-delete"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 4</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-read" />
                           <label class="custom-control-label" for="contributor-read"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-write" />
                           <label class="custom-control-label" for="contributor-write"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-create" />
                           <label class="custom-control-label" for="contributor-create"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-delete" />
                           <label class="custom-control-label" for="contributor-delete"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 5</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-read" />
                           <label class="custom-control-label" for="user-read"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-create" />
                           <label class="custom-control-label" for="user-create"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-write" />
                           <label class="custom-control-label" for="user-write"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-delete" />
                           <label class="custom-control-label" for="user-delete"></label>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- add user modal end -->

            <table class="table table-striped table-borderless">
               <thead class="thead-light">
                  <tr>
                     <th>User Role Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Module 1</td>
                     <td><div class="btn-group" role="group" aria-label="Edit and Delete Buttons" style>
                                 <button data-toggle="modal" data-target="#editUserModal" class="btn btn-success mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                 <i class="material-icons">visibility</i>
                                 </button>
                                 <button data-toggle="modal" data-target="#deleteUsersModal" class="btn btn-danger rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;" >
                                 <i class="material-icons">delete</i>
                                 </button>
                    </div></td>
                    
                  </tr>
                  <tr>
                     <td>Module 1</td>
                     <td><div class="btn-group" role="group" aria-label="Edit and Delete Buttons" style>
                                 <button data-toggle="modal" data-target="#editUserModal" class="btn btn-success mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                 <i class="material-icons">visibility</i>
                                 </button>
                                 <button data-toggle="modal" data-target="#deleteUsersModal" class="btn btn-danger rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;" >
                                 <i class="material-icons">delete</i>
                                 </button>
                    </div></td>
                    
                  </tr>
                  <tr>
                     <td>Module 1</td>
                     <td><div class="btn-group" role="group" aria-label="Edit and Delete Buttons" style>
                                 <button data-toggle="modal" data-target="#editUserModal" class="btn btn-success mr-1 rounded" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;">
                                 <i class="material-icons">visibility</i>
                                 </button>
                                 <button data-toggle="modal" data-target="#deleteUsersModal" class="btn btn-danger rounded mr-1" style="padding-left: 8px; padding-right: 8px; padding-top: 4px; padding-bottom: 4px; idth: 34px; height: 34px; margin-right:10px; border-radius:5px;" >
                                 <i class="material-icons">delete</i>
                                 </button>
                    </div></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>

   </div>
   </form>
</div>
          <!-- View user modal start -->
          <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg modal-dialog-centered">
    <div class="modal-header d-flex justify-content-between align-items-start">
  <h5 class="modal-title" id="editUserModalLabel" style="font-size:20px; color:black;">View User Role</h5>
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
                  <tr>
                     <td>Module 1</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-read-view" />
                           <label class="custom-control-label" for="admin-read-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-write-view" />
                           <label class="custom-control-label" for="admin-write-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-create-view" />
                           <label class="custom-control-label" for="admin-create-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="admin-delete-view" />
                           <label class="custom-control-label" for="admin-delete-view"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 2</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-read-view" />
                           <label class="custom-control-label" for="staff-read-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-write-view" />
                           <label class="custom-control-label" for="staff-write-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-create-view" />
                           <label class="custom-control-label" for="staff-create-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="staff-delete-view" />
                           <label class="custom-control-label" for="staff-delete-view"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 3</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-read-view" />
                           <label class="custom-control-label" for="author-read-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-write-view" />
                           <label class="custom-control-label" for="author-write-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-create-view" />
                           <label class="custom-control-label" for="author-create-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="author-delete-view" />
                           <label class="custom-control-label" for="author-delete-view"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 4</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-read-view" />
                           <label class="custom-control-label" for="contributor-read-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-write-view" />
                           <label class="custom-control-label" for="contributor-write-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-create-view" />
                           <label class="custom-control-label" for="contributor-create-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="contributor-delete-view" />
                           <label class="custom-control-label" for="contributor-delete-view"></label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Module 5</td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-read-view" />
                           <label class="custom-control-label" for="user-read-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-create-view" />
                           <label class="custom-control-label" for="user-create-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-write-view" />
                           <label class="custom-control-label" for="user-write-view"></label>
                        </div>
                     </td>
                     <td>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="user-delete-view" />
                           <label class="custom-control-label" for="user-delete-view"></label>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- view user modal end -->
<!-- delete user modal start -->

<form id="deleteusers" method="post" enctype="multipart/form-data">
                           <div class="modal fade" id="deleteUsersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                       <a href="#" data-target="#deleteUsersModal" name="delete_users" class="btn btn-primary btn-icon center" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;">
                                       Yes
                                       </a>
                                       <button id="dontdeleteusers" name="dontdeleteusers" type="submit" class="btn btn-primary btn-icon center" data-dismiss="modal" aria-label="Close" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;">No</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
 <!-- delete user modal end -->

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