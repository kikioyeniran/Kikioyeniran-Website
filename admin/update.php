<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php


//projects Update Function===================================================================================================
if(isset($_POST["upd_projects"]))
	{
        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('name', 'link', 'description', 'category');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
				}
			}
        if(empty($errors))
        {
			$id = mysql_prep($_GET['projects']);
			$name = mysql_prep($_POST['name']);
            $link = mysql_prep($_POST['link']);
            $description = mysql_prep($_POST['description']);
            $category = mysql_prep($_POST['category']);
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE projects SET name = '{$name}', link = '{$link}', description = '{$description}', category = '{$category}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE projects SET name = '{$name}', link = '{$link}', picture = '{$image}', description = '{$description}', category = '{$category}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    redirect_to("projects.php");
                    //header("Location: projects.php");
                }
                else
                {
                    echo "<script>alert(\"The projects post update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }

    }

?>