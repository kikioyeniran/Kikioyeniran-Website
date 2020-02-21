<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
 include("includes/header.php")
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-name">Home</h2>
                        <p class="pageheader-text">Edit</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit projects Post</h5>
                            <div class="card-body">
                                <!-- ===============EDIT projects==========================-->
                                <?php
                                    if(isset($_GET['projects'])){
                                    $id = $_GET['projects'];
                                    $query = "SELECT * FROM projects WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?projects=<?php echo $_GET['projects']?>">
                                    <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Name</label>
                                            <input id="inputText3" type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Link</label>
                                            <input id="inputText3" type="text" class="form-control" name="link" value="<?php echo $row['link'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Category</label>
                                            <input id="inputText3" type="text" class="form-control" name="category" value="<?php echo $row['category'];?>">
                                        </div>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <br/>
                                            <label class="custom-file-label" for="customFile">Select Picture</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Short Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"><?php echo $row['description'];?></textarea>
                                        </div>
                                        <input type ="submit" name = "upd_projects" id= "upd_projects" value="Update" class="btn btn-primary" />
                                    </form>
                                <?php
                                    }
                                ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
     include("includes/footer.php");
?>