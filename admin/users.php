<?php
include "header.php";
include "sidebar.php";
?>
<?php
if (isset($_GET['id'])) {
    $result = $user->DeleteUser($_GET['id']);
    if ($result) {
        echo '<p style="color: red;">' . $result . '</p>';
    }
}
?>

<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage User</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                   table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_GET['id'])) {
                                    $user->DeleteUser($_GET['id']);
                                } ?>
                                <?php foreach ($getAllItem = $user->getAllUser() as $values) {
                                    $quyen = "user";
                                    if ($values['role'] === 1) {
                                        $quyen = "admin";
                                    }
                                    ?>
                                    <tr class="">
                                    
                                        <td><?php echo $values['username']; ?></td>
                                        <td>*****</td>
                                        <td><?php echo $quyen ?></td>

                                        <td>
                                            <?php if ($values['role'] != 1) { ?>
                                                <a href="edit.html?id=<?php echo $values['id']; ?>"
                                                    class="btn btn-success btn-mini">Edit</a>
                                            <?php }  ?>
                                               
                                            <?php if ($values['role'] != 1) { ?>
                                                <a href="users.php?id=<?php echo $values['id']; ?>"
                                                    class="btn btn-danger btn-mini">Delete</a>
                                            <?php }  ?>
                                                
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>