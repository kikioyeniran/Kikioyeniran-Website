<?php
 include("includes/header.php")
?>
<section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p><a href="#" class="scroll">Hello! I'm</a></p>
                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kiki Oyeniran</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p><a href="#" class="scroll">I'm from Nigeria</a></p>
                <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">A Web Developer</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END slider -->

      <section class="ftco-section about-section">
        <div class="container">
          <div class="row d-flex" data-scrollax-parent="true">
            <div class="col-md-4 author-img" style="background-image: url(images/kiki4_web.jpg);" data-scrollax=" properties: { translateY: '-70%'}"></div>
            <div class="col-md-2"></div>
            <div class="col-md-6 wrap ftco-animate">
              <div class="about-desc">
                <h1 class="bold-text">About</h1>
                <div class="p-5">
                  <h2 class="mb-5">Hi! I'm Kiki Oyeniran</h2>
                  <p>I'm an adaptable, responsible and skilled graduate of Management Information with excellent communication skills and an exceptional team player focused on constant and never-ending improvement. I look to leverage my foundation in business management and Information Technology in the deployment of cost effective and modern software applications.</p>
                  <p><a href="#">Checkout my resume</a></p>
                  <ul class="ftco-footer-social list-unstyled mt-4">
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                  <h5>Contact me here!</h5>
                  <p>Email: <a href="#">kikioyeniran@gmail.com</a></p>
                  <p>Phone: <a href="#">(234)-8108-055-762</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>What i do</span>
              <h2>My services</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><span class="icon-layers"></span></div>
                <div class="media-body">
                  <h3 class="heading">UI/UX Design</h3>
                  <h3 class="heading">Back-end Development</h3>
                  <h3 class="heading">Responsive Design</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><span class="icon-gears"></span></div>
                <div class="media-body">
                  <h3 class="heading">Product Strategy</h3>
                  <h3 class="heading">Design Sprints</h3>
                  <h3 class="heading">UX Strategy</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><span class="icon-code"></span></div>
                <div class="media-body">
                  <h3 class="heading">HTML/CSS</h3>
                  <h3 class="heading">Prototyping</h3>
                  <h3 class="heading">User Testing</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portfolio</span>
              <h2>Checkout a few of my works</h2>
            </div>
          </div>
          <div class="row no-gutters">
				<?php
					$query2 = "SELECT * FROM projects ORDER BY id DESC LIMIT 4";
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
          <!-- <div class="row no-gutters">
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                <div class="icon d-flex text-center justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
              <div class="text">
                <h4 class="subheading">Illustration</h4>
                <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no control</a></h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                <p><a href="#">View Project</a></p>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/work-2.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                <div class="icon d-flex text-center justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
              <div class="text order-1">
                <h4 class="subheading">Application</h4>
                <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                <p><a href="#">View Project</a></p>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-3.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                <div class="icon d-flex text-center justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
              <div class="text">
                <h4 class="subheading">Web Design</h4>
                <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no control</a></h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                <p><a href="#">View Project</a></p>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/work-4.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                <div class="icon d-flex text-center justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
              <div class="text order-1">
                <h4 class="subheading">Application</h4>
                <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                <p><a href="#">View Project</a></p>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-5.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                <div class="icon d-flex text-center justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
              <div class="text">
                <h4 class="subheading">Animation</h4>
                <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                <p><a href="#">View Project</a></p>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/work-6.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                <div class="icon d-flex text-center justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
              <div class="text order-1">
                <h4 class="subheading">Branding</h4>
                <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                <p><a href="#">View Project</a></p>
              </div>
            </div>
          </div> -->
        </div>
      </section>

      <section class="ftco-section ftco-counter" id="section-counter">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portfolio</span>
              <h2>I love to share my achievements</h2>
            </div>
          </div>
          <div class="row d-flex justify-content-start">
            <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <span class="ftco-label">Clients</span>
                  <strong class="number" data-number="15">0</strong>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <span class="ftco-label">Project done</span>
                  <strong class="number" data-number="10">0</strong>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row d-flex justify-content-end">
            <div class="col-md-5 counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <span class="ftco-label">Cups of coffee</span>
                  <strong class="number" data-number="1000">0</strong>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>

<?php
include("includes/footer.php")
?>