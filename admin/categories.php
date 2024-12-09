<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage Categories</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_GET['id_manu'])) {
                                    $categories->Delete($_GET['id_manu']);
                                } ?>
                                <?php foreach ($getAllItem = $categories->getAllCate() as $values) {
                                    $imageName = strtolower(str_replace(' ', '_', $values['name_manu'])) . '.jpg';
                                    ?>
                                    <tr class="">
                                        <td width="100"> <img src="../public/img/<?php echo $imageName; ?>"
                                                alt="<?php echo $values['name_manu']; ?>" width="100" /></td>
                                        <td><?php echo $values['name_manu']; ?></td>

                                        <td>
                                            <a href="items.php?id=" class="btn
                                    btn-success btn-mini">Edit</a>
                                            <a href="categories.php?id=<?php echo $values['id_manu']; ?>" class="btn
                                                    btn-danger btn-mini">Delete</a>
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
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>