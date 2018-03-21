<?php
/**
 * Created by PhpStorm.
 * User: Lucas Augusto
 * Date: 21/03/2018
 * Time: 11:52
 */
get_header();
?>

<div class="conteudo container">
	<main>
		<section class="slide">
			Slide
		</section>
		<section class="servicos">
			Serviços
		</section>
		<section class="meio">
			<aside class="barra-lateral">
				Barra Lateral
			</aside>
			<div class="noticias">
				<?php
                    if (have_posts()) :
                        while(have_posts()) :
                            the_post()
                ?>
                        <h1><?= the_title() ?></h1>
                        <p>Publicado em <?= get_the_date() ?> por <?= get_the_author() ?>(<?= the_author_link() ?>)</p>
                        <p>Categorias: <?= the_category(' ') ?></p>
                        <p><?= the_tags('Tags: ', ', ') ?></p>
                        <p><?= the_content() ?></p>
                <?php
                    endwhile;
                    else:
                ?>
                    <p>Não tem nada para mostrar</p>
                <?php
                    endif;
                ?>
			</div>
		</section>
		<section class="mapa">
			Mapa
		</section>
	</main>
</div>

<?= get_footer() ?>
