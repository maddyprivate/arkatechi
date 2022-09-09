  <!doctype html>
  <html lang="en">
  <?php include('head.php'); ?>

  <body>
    <?php include('header.php'); ?>
    <main>
      <!-- ============abt-01 Section  Start============ -->

      <!-- <section class="abt-01">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="heading-wrapper">
                              <h3>Contact Us</h3>
                              <ol>
                                  <li>Home<i class="far fa-angle-double-right"></i></li>
                                  <li>Contact Us</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </section> -->

      <div class="content">

        <div class="container1">
          <div class="row align-items-stretch no-gutters contact-wrap">
            <div class="col-md-8" style="margin-top: 5rem;">
              <div class="form h-100">
                <h3>Send us a message</h3>
                <form class="mb-5" method="POST" id="contactForm" name="contactForm" action="save-contact-us.php">
                  <div class="row">
                    <div class="col-md-6 form-group mb-5">
                      <label for="" class="col-form-label">Name *</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="required">
                    </div>
                    <div class="col-md-6 form-group mb-5">
                      <label for="" class="col-form-label">Email *</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Your email" required="required">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group mb-5">
                      <label for="" class="col-form-label">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #" required="required">
                    </div>
                    <div class="col-md-6 form-group mb-5">
                      <label for="" class="col-form-label">City</label>
                      <input type="text" class="form-control" name="company" id="company" placeholder="City">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group mb-5">
                      <label for="message" class="col-form-label">Message *</label>
                      <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" name="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-info h-100">
                <h3 Style="text-align:center;">WE'D LOVE TO HEAR FROM YOU.</h3>
                <p Style="text-align:center;" class="mb-5">If you have any questions or queries a member of our staff will always be happy to help. Feel free to contact us by telephone or email and we'll be sure to get back to you as soon as possible.</p>
                <div class="h-100">
                  <h3 Style="text-align:center;">Contact Details</h3>
                    <ol>
                        <li Style="text-align:center;"><i class="far fa-map-marker-check"></i> INDIA</li>
                        <li Style="text-align:center;"><i class="fal fa-mobile"></i> <a style="color:#FFFFFF80"; href="tel:+91-9689190202"> +91 9689190202 </a></li>
                        <li Style="text-align:center;"><i class="fal fa-envelope"></i><a style="color:#FFFFFF80"; href="mailto:info@arkatechi.com"> info@arkatechi.com</a></li>
                        <li Style="text-align:center;"><i class="fal fa-clock"></i> Mon - Fri 10.00 - 18.00.</li>
                    </ol>
                    <br></br>
                    <h3 Style="text-align:center;">Sales Office</h3>
                    <ol>
                        <li Style="text-align:center;"><i class="fal fa-solid fa-handshake-simple"></i> C/O P. S. Mali Sir</li>
                        <li Style="text-align:center;"><i class="far fa-map-marker-check"></i> Sagar Computers, Vidyut Colony, Near Jagmohandas Nagar</li>
                        <li Style="text-align:center;">Behind NES Highschool, Parola-425111</li>
                        <li Style="text-align:center;"><i class="fal fa-mobile"></i> <a style="color:#FFFFFF80"; href="tel:+91-9689190202"> +91 9420113721 </a></li>
                        <li Style="text-align:center;"><i class="fal fa-clock"></i> Mon - Fri 10.00 - 18.00.</li>
                    </ol>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
        <section class="mab-01">
          <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.5266755017165!2d73.79433396356171!3d18.595366137264687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b8e0ed6744d9%3A0x3b37a9aedb98c527!2sRajaveer%20Palace%20Phase%201%2C%20Pimple%20Saudagar%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411027!5e0!3m2!1sen!2sin!4v1660288068638!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
        </section>

    </main>

    <!-- ============Footer  Start============ -->

    <?php include('footer.php'); ?>
  </body>

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/plugins/owl.carousel.js"></script>
  <script src="assets/js/plugins/owl.carousel.min.js"></script>
  <script src="assets/js/script.js"></script>

  </html>