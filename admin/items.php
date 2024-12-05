<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home"
                class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage Items</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a
                                href="form_add_item.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Items</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Excerpt</th>
                                    <th>Category</th>
                                    <th>Feature</th>
                                    <th>View</th>
                                    <th>Author</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($_GET['id'])){
                                $products->DeleteProducts($_GET['id']);
                            } ?>
                                 <?php  foreach($getAllItem = $products->getAllProducts() as $values){?>
                                    
                                <tr class="">
                                    <td width="250">
                                        <img
                                            src="../public/img/<?php echo $values['image']; ?>" />
                                    </td>
                                    <td><?php echo $values['name']; ?></td>
                                    <td>SamSung</td>
                                    <td>Tablet</td>
                                    <td>Bút S-pen giúp Galaxy Tab A Plus
                                        trở thành 1 trợ thủ đắc lực cho
                                        người dùng
                                        văn p...</td>
                                    <td>4,490,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-29 00:00:00</td>
                                    <td>
                                        <a href="items.php?id=" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="items.php?id=<?php echo $values['id']; ?>" class="btn
                                                    btn-danger btn-mini">Delete</a>

                                    </td>
                                </tr>
                               
                                <?php }?>
                            </tbody>
                        
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active"><a href="">1</a>
                                </li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<div class="row-fluid">
    <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
</div>
<?php include "footer.php" ?>