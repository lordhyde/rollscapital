<?php
require_once('init.php');
require_once("db_connect.php"); // Connect to your database

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] === null){
    // redirect home
    header("Location: /");
    exit();
}

$last_file = $db->query('SELECT filename FROM rc_files WHERE user_id=? ORDER BY upload_date DESC LIMIT 1',$_SESSION['user_id'])->fetchArray();
$last_file_name = isset($last_file['filename']) ? 'files/'.$last_file['filename'] : "#";

$page = 'dashboard';
$title = 'Dashboard';
require_once('header.php') ?>
	<div class="row-fluid" id="maincontent">
		<div class="topimage">
            <div style="max-height: 170px; overflow: hidden;">
                <img src="img/careers.jpg">
            </div>
			<div class="container-fluid" style="margin-top: -90px;">
				<div class="topblock dashboard-container">
					<h1>Investment & Wealth Management</h1>
                    <div id='dashboard-red-divider'></div>
                    <div id='dashboard-gold-divider'>
                        <span>Agent</span>
                        <span>Plan Name</span>
                        <span>Plan Currency</span>
                        <span>Latest Policy Valuation</span>
                    </div>
                    <div id='dashboard-gray-row'>
                        <span>89581</span>
                        <span>Vision</span>
                        <span>Multicurrency</span>
                        <span><a href="<?php echo($last_file_name); ?>" target="_blank"><img src="img/pdf.png" style="width:20px" /></a></span>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <p class="mb-0">
                            I hereby declare I am the sole owner of the funds at the contract number declared in this online access. By entering this site Im accepting the terms and conditions of my investent funds in acordance to the “appointment of advisor and instruction to maintain a custody account” document which is enclosed at my actual valuation.
                        </p>
                    </div>
                    <p>Rolls Capital is the trading name used by Rolls Capital Investments Limited and a number of Rolls Companies.</p>
                    <p>Rolls Capital Advisors Limited is incorporated in the British Virgin Islands and regulated by the British Virgin Islands Financial Services Commission.</p>
                    <p>Rolls Capital does not hold the client's money and is acting as an independent financial advisory firm. The data on this site is for information purposes on the latest valuation submitted by the financial services provider that holds the client's investments.</p>
                    <?php 
                        if($_SESSION['is_admin']){
                            ?>
                            <hr>
                            <h2> Admin actions</h2>
                            <ul>
                                <li><a href="#" id="listUsersButton">List users</a></li>
                                <li><a href="#" id="addUserButton">Add new user</a></li>
                                <li><a href="#" id="listFilesButton">List statements</a></li>
                                <li><a href="#" id="uploadFileButton">Upload latest statement</a></li>
                            </ul>
                            <div id="overlay" class="overlay">
                                <div class="overlay-content w-75">
                                    <span id="closeOverlayButton" class="close-button"">&times;</span>
                                    <div id="listUsersContent">
                                        <h2>List Users</h2>
                                        <table class="adminTable">
                                            <tr>
                                                
                                            <th>ID</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>E-mail</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            <tr>
                                            <?php
                                            $users = $db->query('SELECT `id`, `username`, `name`, `email`, `level` FROM `rc_users`')->fetchAll();
                                            foreach ($users as $user) {
                                                echo "<tr id='user_row_{$user['id']}'>";
                                                echo "<td>{$user['id']}</td>";
                                                echo "<td>{$user['username']}</td>";
                                                echo "<td>{$user['name']}</td>";
                                                echo "<td>{$user['email']}</td>";
                                                echo "<td>{$user['level']}</td>";
                                                echo "<td>";
                                                echo "<a href='#' class='change-password-button' data-user-id='{$user['id']}'>Change Password</a>";
                                                echo " | <a href='#' class='delete-user-button' data-user-id='{$user['id']}'>Delete</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div id="addUserContent">
                                        <h2>Add User</h2>
                                        <input type="text" id="newUserName" placeholder="Name" required>
                                        <input type="text" id="newUserUsername" placeholder="Username" required>
                                        <input type="password" id="newUserPassword" placeholder="Password" required>
                                        <input type="text" id="newUserEmail" placeholder="E-mail" required>
                                        <select id="newUserLevel">
                                            <option>user</option>
                                            <option>admin</option>
                                        </select>
                                        <button id="createUserButton">Create User</button>
                                        <div id="resultMessage"></div>
                                    </div>
                                    <div id="listFilesContent">
                                        <h2>List Files</h2>
                                        <table class="adminTable">
                                            <tr>
                                                <th>User</th>
                                                <th>ID</th>
                                                <th>FileName</th>
                                                <th>Uploaded On</th>
                                                <th>Actions</th>
                                            </tr>
                                            <?php
                                            $query = 'SELECT `files`.`id`, `original_filename`, `filename`, `username`, `upload_date` 
                                                FROM `rc_files` AS `files`
                                                    INNER JOIN `rc_users` as `users` ON `files`.`user_id` = `users`.`id`
                                                ORDER BY `users`.`username` ASC, `upload_date` DESC';
                                            $files = $db->query($query)->fetchAll();
                                            foreach ($files as $file) {
                                                echo "<tr id='file_row_{$file['id']}'>";
                                                echo "<td>{$file['username']}</td>";
                                                echo "<td>{$file['id']}</td>";
                                                echo "<td><a href='files/{$file['filename']}' target='_blank'>{$file['original_filename']}</a></td>";
                                                echo "<td>{$file['upload_date']}</td>";
                                                echo "<td><a href='#' class='delete-file-button' data-file-id='{$file['id']}'>Delete</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div id="uploadFileContent">
                                        <h2>Upload File</h2>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <input type="file" id="newFileInput" accept=".pdf" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>User</label>
                                            </div>
                                            <div class="col-md-10">
                                                <select id="newFileUserID">
                                                    <?php 
                                                    $site_users = $db->query('SELECT `id`, `username`, `name` FROM `rc_users` WHERE `level`="user" ORDER BY `name` ASC')->fetchAll();
                                                    foreach($site_users as $site_user){
                                                        echo "<option value=\"{$site_user['id']}\">{$site_user['name']} ({$site_user['username']})</option>";
                                                     } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <button id="uploadButton">Upload</button>
                                        <div id="uploadResult"></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
				</div>
			</div>
		</div>
<?php require_once('footer.php') ?>