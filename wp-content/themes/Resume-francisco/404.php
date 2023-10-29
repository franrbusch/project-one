<?php get_header(); ?>


<section class="404 pb-5">
	<div class="container pb-5">
		<h4>Il semble que la page demandée n'existe pas ou plus.</h4>
		<h4>Nous en sommes désolés et vous invitons à revenir à l'<a href="/">accueil du site</a>.</h4>
		<h4>Essayer une nouvelle recherche :</h4>
		<form role="search" method="get" id="searchform" class="searchform" action="/" autocomplete="off">
			<input type="hidden" name="post_type" value="produit">
			<div class="row">
			
			<input type="text" value="" name="s" id="s" placeholder="Rechercher" class="form-control input-lg m-2 w-50">
			<button class="button-primary btn-lighter mb-2" type="submit">
				<i class="fa fa-search"></i>
			</button>
			</div>
		</form>
	
	</div>
</section>
<div class="espacer"></div>
<?php get_footer(); ?>