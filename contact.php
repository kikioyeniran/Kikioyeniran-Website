<?php
 include("includes/header.php")
?>
<?php
require_once("admin/includes/connection.php");

if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact(name, email, subject, message) Values ('$name', '$email', '$subject', '$message')";
    if($mysqli->query($query) or die($mysqli->error))
    {

        echo "<script>alert('Your message has been sent Succesfully.')</script>";

    }
    else{
        echo "<script>alert('Your message coul not be sent')</script>";
    }

}
?>
<section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> 56, Fadipe Street, Orita-Challenge Ibadan, Nigeria</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">+ 234 8108 055 762</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@kikioyeniran.com.ng</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website:</span> <a href="#">kikioyeniran.com.ng</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
              <form action="contact.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email" name="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
                <div class="form-group">
                  <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
                </div>
              </form>

            </div>
            <div class="col-md-6" id="map"></div>
          </div>
        </div>
      </section>

<?php
include("includes/footer.php")
?>