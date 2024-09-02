<?php
   include_once "sidenavbar.php";
   include_once 'connection.php';
   ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sql = "SELECT id, user_role FROM user_role";
$result = $conn->query($sql);
$options = "";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $roleName = $row['user_role'];
        
        // Create an <option> element for each user role
        $options .= "<option value=\"$id\">$roleName</option>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $userrole = $_POST['userrole'];

    $fullName = $firstName . ' ' . $lastName;



    $sql = "INSERT INTO login (name, username, password,phone_no, email, role) 
            VALUES ('$fullName', '$username','$password', '$number', '$email', '$userrole')";

    if ($conn->query($sql) === TRUE) {
        $alertMessage = "User added successfully.";
    } else {
        $alertMessage = "Error: " . $conn->error;
    }

}
?>

<style>
    .caret{
        width:none !important;
        border-top: none !important;
    }
</style>
 <main class="mn-inner">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method ="POST">
                                    <div>
                                        <h3 style="margin-left:30px;">Personal Info</h3>
                                                <div class="row">
                                                    <div class="col m11" style="margin-left:40px;">
                                                        <div class="row">
                                                        <div class="input-field col m6 s12">
                                                                <label for="username"> Username</label>
                                                                <input id="username" name="username" type="text" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="firstName">First name</label>
                                                                <input id="firstName" name="firstName" type="text" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="lastName">Last name</label>
                                                                <input id="lastName" name="lastName" type="text" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="email">Email</label>
                                                                <input id="email" name="email" type="email" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="number">Contact Number</label>
                                                                <input id="number" name="number" type="text" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="password">Password</label>
                                                                <input id="password" name="password" type="password" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="confirm">Confirm password</label>
                                                                <input id="confirm" name="confirm" type="password" class="required validate">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                            <select id="userrole" name ="userrole">
                                                                <option value="Select User Role">Select User Role</option>
                                                                <?php echo $options; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div style="display: flex; justify-content: flex-end; margin-right:40px; padding-bottom:30px;">
                                                 <button class="btn btn-primary" type="submit">Create</button>
                                              </div>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
<?php
   include_once "footer.php"
?>

<?php
if (!empty($alertMessage)) {
    echo '<script>alert("' . $alertMessage . '");</script>';
}
?>