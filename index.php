<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */
require_once("config.php");

if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {
    // if logged in send to dashboard page
    redirect("dashboard.php");
}

$title = "Login";
$mode = $_REQUEST["mode"];
if ($mode == "login") {
    $username = trim($_POST['username']);
    $pass = trim($_POST['user_password']);

    if ($username == "" || $pass == "") {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
    } else {
        $sql = "SELECT * FROM system_users WHERE u_username = :uname AND u_password = :upass ";

        try {
            $stmt = $DB->prepare($sql);

            // bind the values
            $stmt->bindValue(":uname", $username);
            $stmt->bindValue(":upass", $pass);

            // execute Query
            $stmt->execute();
            $results = $stmt->fetchAll();

            if (count($results) > 0) {
                $_SESSION["errorType"] = "success";
                $_SESSION["errorMsg"] = "You have successfully logged in.";

                $_SESSION["user_id"] = $results[0]["u_userid"];
                $_SESSION["rolecode"] = $results[0]["u_rolecode"];
                $_SESSION["username"] = $results[0]["u_username"];

                redirect("dashboard.php");
                exit;
            } else {
                $_SESSION["errorType"] = "info";
                $_SESSION["errorMsg"] = "username or password does not exist.";
            }
        } catch (Exception $ex) {

            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();
        }
    }
    redirect("index.php");
}
include 'header.php';
?>
<div class="row">
    <div class="col-lg-9">
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Username:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" placeholder="User Name" id="username" class="form-control" name="username" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="user_password"><span class="required">*</span>Password:</label>
                    <div class="col-lg-6">
                        <input type="password" value="" placeholder="Password" id="user_password" class="form-control" name="user_password" required="" >
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                    </div>
                </div>
                
                <div style="height: 10px;">&nbsp;</div>
                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                       <div class="help-block">
                    <strong>Role == username/password</strong><br>
                    Superadmin == shahrukh/123456<br>
                    Admin == ronaldo/ronaldo<br>
                </div>
                    </div>
                </div>
                
                
                
				
            </fieldset>
        </form>
    </div>

    <div class="col-lg-3">
        <?php include 'sidebar.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>