<!--footer -->
           <footer class="main-footer dark-footer">
               <div class="container">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="footer-widget fl-wrap">
                               <h3>About Us</h3>
                               <div class="footer-contacts-widget fl-wrap">
                                   <p>Evasion is a platform where aggrieved businesses have an opportunity to seek redress of the past business transaction between related businesses and also offer prospects where pleased businesses will get more information regarding other business of interest and business associates. </p>
                                   <ul  class="footer-contacts fl-wrap">
                                       <li><span><i class="fa fa-envelope-o"></i> Mail :</span><a href="#" target="_blank">customercare@evasion.co.ke</a></li>
                                       <li> <span><i class="fa fa-map-marker"></i> Adress :</span><a href="#" target="_blank"> Post Office Box Number 1125-30100 Eldoret</a></li>
                                       <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">+254736747787</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="footer-widget fl-wrap">
                               <h3>Our  Twitter</h3>
                               <div id="footer-twiit"></div>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="footer-widget fl-wrap">
                               <h3>Subscribe</h3>
                               <div class="subscribe-widget fl-wrap">
                                   <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                   <div class="subcribe-form">
                                       <form id="subscribe">
                                           <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                           <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                           <label for="subscribe-email" class="subscribe-message"></label>
                                       </form>
                                   </div>
                               </div>
                               <div class="footer-widget fl-wrap">
                                   <div class="footer-menu fl-wrap">
                                       <ul>
                                           <li><a href="#">Home </a></li>
                                           <li><a href="#">Blog</a></li>
                                           <li><a href="#">Listing</a></li>
                                           <li><a href="#">Contacts</a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="sub-footer fl-wrap">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="about-widget">
                                   <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="copyright"> &#169; CityBook 2018 .  All rights reserved.</div>
                           </div>
                           <div class="col-md-4">
                               <div class="footer-social">
                                 <ul>
                                     <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="#" target="_blank" ><i class="fab fa-chrome"></i></a></li>
                                     <li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li>
                                     <li><a href="#" target="_blank" ><i class="fab fa-whatsapp"></i></a></li>
                                 </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </footer>
           <!--footer end  -->
           <!--register form -->
           <div class="main-register-wrap modal">
               <div class="main-overlay"></div>
               <div class="main-register-holder">
                   <div class="main-register fl-wrap">
                       <div class="close-reg"><i class="fa fa-times"></i></div>
                       <h3>Sign In <span>City<strong>Book</strong></span></h3>
                       <div class="soc-log fl-wrap">
                           <p>For faster login or register use your social account.</p>
                           <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                           <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                       </div>
                       <div class="log-separator fl-wrap"><span>or</span></div>
                       <div id="tabs-container">
                           <ul class="tabs-menu">
                               <li class="current"><a href="#tab-1">Login</a></li>
                               <li><a href="#tab-2">Register</a></li>
                           </ul>
                           <div class="tab">
                               <div id="tab-1" class="tab-content">
                                   <div class="custom-form">
                                       <form method="post"  name="registerform">
                                           <label>Username or Email Address * </label>
                                           <input name="email" type="text"   onClick="this.select()" value="">
                                           <label >Password * </label>
                                           <input name="password" type="password"   onClick="this.select()" value="" >
                                           <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                           <div class="clearfix"></div>
                                           <div class="filter-tags">
                                               <input id="check-a" type="checkbox" name="check">
                                               <label for="check-a">Remember me</label>
                                           </div>
                                       </form>
                                       <div class="lost_password">
                                           <a href="#">Lost Your Password?</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="tab">
                                   <div id="tab-2" class="tab-content">
                                       <div class="custom-form">
                                           <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                               <label >First Name * </label>
                                               <input name="name" type="text"   onClick="this.select()" value="">
                                               <label>Second Name *</label>
                                               <input name="name2" type="text"  onClick="this.select()" value="">
                                               <label>Email Address *</label>
                                               <input name="email" type="text"  onClick="this.select()" value="">
                                               <label >Password *</label>
                                               <input name="password" type="password"   onClick="this.select()" value="" >
                                               <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!--register form end -->
           <a class="to-top"><i class="fa fa-angle-up"></i></a>
       </div>
       <!-- Main end -->
       <!--=============== scripts  ===============-->
       <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
       <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>
       <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
   </body>
</html>
