<?php
 include("includes/header.php")
?>
<section class="ftco-section">
        <div class="container mt-5">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portfolio</span>
              <h2>Checkout a few of my works</h2>
            </div>
          </div>
          	<div class="row no-gutters">
				<?php
					$query2 = "SELECT * FROM projects ORDER BY id DESC";
					$result = $mysqli->query($query2) or die($mysqli->error);
					while ($row = $result->fetch_assoc())
					{
				?>
	          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">

				<?php
				if  ($row['id'] % 2 == 0){?>
					<a href="<?php echo $row['link']?>" target="_blank" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('admin/images/<?php echo $row['picture']; ?>'); " data-scrollax=" properties: { translateY: '-30%'}">
						<div class="icon d-flex text-center justify-content-center align-items-center">
							<span class="icon-search"></span>
						</div>
					</a>

					<div class="text order-1">
						<h4 class="subheading"><?php echo $row['category']?></h4>
						<h2 class="heading"><a href="<?php echo $row['link']?>" target="_blank"><?php echo $row['name']?></a></h2>
						<p><?php echo $row['description']?></p>
						<p><a href="<?php echo $row['link']?>" target="_blank">View Project</a></p>
				  	</div>
				<?php } else {?>
					<a href="<?php echo $row['link']?>" target="_blank" class="image d-flex justify-content-center align-items-center" style="background-image: url('admin/images/<?php echo $row['picture']; ?>'); " data-scrollax=" properties: { translateY: '-30%'}">
						<div class="icon d-flex text-center justify-content-center align-items-center">
							<span class="icon-search"></span>
						</div>
					</a>

					<div class="text">
					<h4 class="subheading"><?php echo $row['category']?></h4>
					<h2 class="heading"><a href="<?php echo $row['link']?>" target="_blank"><?php echo $row['name']?></a></h2>
					<p><?php echo $row['description']?></p>
					<p><a href="<?php echo $row['link']?>" target="_blank">View Project</a></p>
					</div>
				<?php } ?>
				</div>
				<?php } ?>
	        </div>
	        <div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
        </div>
      </section>

<?php
include("includes/footer.php")
?>