<?php
//https://developer.wordpress.org/themes/basics/template-files/#using-template-files
// on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit.
get_header();
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<?php
		//Ajout de la section about-stories
		get_template_part('templates/about-stories');

		//Ajout de la section roger-bosch
		get_template_part('templates/roger-bosch');

		//Ajout de la section subscribe
		get_template_part('templates/subscribe');
		
    	// https://developer.wordpress.org/themes/basics/template-files/#using-template-files
		// Ajout d'un fichier footer.php pour y mettre le footer
		get_footer();
	?>