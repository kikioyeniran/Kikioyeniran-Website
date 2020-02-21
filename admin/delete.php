<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

if(isset($_GET['projectsid']))
{
    $id = mysql_prep($_GET['projectsid']);
    if($id)
    {$query = "DELETE FROM projects WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: projects.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("projects.php");
            header("Location: projects.php");
            }
}
?>