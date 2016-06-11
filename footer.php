<footer style="background:url(<?= get_stylesheet_directory_uri()?>/app/img/footer.jpg);background-size:cover;">
	<div class="container">
		<section class="Links">
			<div class="Menus">
				<div class="Menus__Titulo">
					<p>Progress ERP</p>
				</div>
				<?php footerMenu()?>

			</div>
			<div class="Contactos">
				<div class="Contactos__Titulo">
					<p>Contáctanos</p>
				</div>
				<div class="Contactos__Direccion">
					<p><?php the_field('direccion_linea_1','option')?></br>
						<?php the_field('direccion_linea_2','option')?></br>
						Tlf: <a href="<?php the_field('telefono','option')?>"></a><?php the_field('telefono_formatted','option')?></br>
						Mail: <a href="mailto:<?php the_field('email','option')?>"><?php the_field('email','option')?></a></p>
				</div>
				<div class="Contactos__Sociales">
					<a href="https://www.facebook.com/progresserp/"><span class="socicon socicon-facebook"></span></a>	
					<a href="

						https://twitter.com/ProgressERP"><span class="socicon socicon-twitter"></span></a>	
					<a href="https://www.linkedin.com/company/progress-erp"><span class="socicon socicon-linkedin"></span></a>	
				</div>
			</div>
			<div class="Subscripcion">
				<div class="Subscripcion__Titulo">
					<p>SUSCRIBETE AL NEWSLETTER</p>
				</div>
				<div class="Subscripcion__descripcion">
					<p><?php the_field('texto_newsletter','option')?></p>
				</div>
				<div class="Subcsripcion__Formulario">
					<form action="<?php the_field('newsletter_link','option')?>" method="POST">
						<input type="email" name="email_news_prog" placeholder="tucorreo@xxx.com">
						<button>Enviar</button>
					</form>
				</div>
			</div>
		</section>
		<section class="Copyleft">
			<p><?php the_field('copyleft','options')?></p>
		</section>
	</div>
</footer>
<?php wp_footer(); 
if($_POST['email_news_prog']){
	$myfile = fopen(get_template_directory()."/emails.txt", "a") or die("Unable to open file!");
	
	$txt = "{$_POST['email_news_prog']}\n";
	fwrite($myfile, $txt);
	fclose($myfile);
}

?>
		</body>
	</html>


