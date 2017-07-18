<?php $this->load->view('header'); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">Contact
                    <small>Company Co-ordinates</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">


            <?php if (validation_errors()): ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo validation_errors();?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['msg_error'])){ ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo display_error(); ?>
                </div>
            <?php } ?>

            <?php if(isset($_SESSION['msg_success'])){ ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo display_success_message(); ?>
                </div>
            <?php } ?>

            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27219.332541853415!2d74.3086050599785!3d31.485231805878485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904106691c4c7%3A0xfb24ddaf1e7bc6c2!2sModel+Town%2C+Lahore%2C+Pakistan!5e0!3m2!1sen!2s!4v1493053689758" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                
               
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>AVANT VENTURES Lahore Operation</h3>
                <p>
                    70-C, Model Town, Lahore 
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Tel</abbr>: +92  (42) 3592 8044-46</p>
                    
                    <i class="fa fa-phone"></i> <abbr title="Phone">Cell: </abbr>+92 301 846 4224</p>

                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:fa.farhatali@avant-ventures.com">fa.farhatali@avant-ventures.com</a>
                </p>

                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:fa.farhatali@gmail.com">fa.farhatali@gmail.com</a>
                </p>

                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:info@avant-ventures.com">info@avant-ventures.com</a>
                </p>

                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr> (Hours) : Monday-Friday : 9.00 am to 5 pm</p>
                <!--<p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>-->
                <!--<ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>-->
            </div>
        </div>
        <hr>
		<!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14479.291138020095!2d67.04690512245432!3d24.869901512690888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e8c75faa481%3A0xc390c60d0cf1994b!2sP.E.C.H.S+Block+2%2C+Karachi%2C+Pakistan!5e0!3m2!1sen!2s!4v1493053791688" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>AVANT VENTURES Karachi Operation </h3>
                <p>
                   155-O, Block No 2, PECHS, Karachi 
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Tel</abbr>: +92 (21) 3455 9628 / 3455 0920</p>
                    
                    <i class="fa fa-phone"></i> <abbr title="Phone">Cell: </abbr>+92 300 846 4224 </p>

                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:fa.farhatali@avant-ventures.com">fa.farhatali@avant-ventures.com</a>
                </p>

                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:fa.farhatali@gmail.com">fa.farhatali@gmail.com</a>
                </p>

                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:info@avant-ventures.com">info@avant-ventures.com</a>
                </p>

                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr> (Hours) : Monday - Friday: 9:00 AM to 5:00 PM</p>

            </div>
        </div>
        <hr>
        <!-- Content Row -->
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-md-8">
                        <!-- Embedded Google Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7243.652489261535!2d67.10120907305398!3d24.801402625638875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33b65f3e6cbcf%3A0xb4e1e02811ea7492!2sKorangi+Creek+Industrial+Park%2C+Karachi%2C+Pakistan!5e0!3m2!1sen!2s!4v1493053863595" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!-- Contact Details Column -->
                    <div class="col-md-4">
                        <h3>AVANT VENTURES Site Establishment</h3>
                        <p>
                           Plot no GA-67-A5, GA-68-A9 and GA-69-A9
Korangi Creek National Industrial Park
Karachi

                        </p>
                            <!--<p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Tel</abbr>: +92 (21) 3455 9628 / 3455 0920</p>-->
                    
                    <i class="fa fa-phone"></i> <abbr title="Phone">Cell: </abbr>+ 92 300 8464224 </p>

                        <p><i class="fa fa-envelope-o"></i>
                            <abbr title="Email">E</abbr>: <a href="mailto:fa.farhatali@avant-ventures.com">fa.farhatali@avant-ventures.com</a>
                        </p>

                        <p><i class="fa fa-envelope-o"></i>
                            <abbr title="Email">E</abbr>: <a href="mailto:fa.farhatali@gmail.com">fa.farhatali@gmail.com</a>
                        </p>

                        <p><i class="fa fa-envelope-o"></i>
                            <abbr title="Email">E</abbr>: <a href="mailto:info@avant-ventures.com">info@avant-ventures.com</a>
                        </p>

                        <p><i class="fa fa-clock-o"></i>
                            <abbr title="Hours">H</abbr> (Hours) : Monday – Friday : 9.00 am to 5:00 pm</p>

                    </div>
                </div>
        
          <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" method="post" action="<?php echo base_url(); ?>welcome/contact">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
<?php $this->load->view('footer'); ?>