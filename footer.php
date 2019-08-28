<footer class="ftco-footer ftco-footer-2 ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Stories</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Terms of Uses</a></li>
                <li><a href="#" class="py-2 d-block">About Stories</a></li>
                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                <li><a href="#" class="py-2 d-block">Accessibility Help</a></li>
                <li><a href="#" class="py-2 d-block">Advertise with us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Categories</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Food</a></li>
                <li><a href="#" class="py-2 d-block">Restaurant</a></li>
                <li><a href="#" class="py-2 d-block">Dessert</a></li>
                <li><a href="#" class="py-2 d-block">Lifestyle</a></li>
                <li><a href="#" class="py-2 d-block">Recipes</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <?php dynamic_sidebar('sidebar-1'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
       // Ajout de la fonction wp_footer() qui va placer les scripts js qui doivent se trouver avant la fermeture de la balise body
       // https://developer.wordpress.org/reference/functions/wp_footer/
     wp_footer();
  ?>
    
  </body>
</html>