<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('description') ?></title>
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
<header class="header">
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description') ?></h2>
</header>

<section class="content">
    <?php rewind_posts(); ?>
    <?php query_posts('order=Asc&cat=2') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <header>
                <h3><?php the_title(); ?></h3>
                <div class="datos">
                    <strong><?php the_author(); ?></strong>
                    <small><?php the_date(); ?></small>
                </div>
            </header>
            <?php the_excerpt(); ?>
            <?php the_category(); ?>
        </article>
    <?php endwhile; ?>
    <?php else: ?>
        <h3>No se encontraron entradas</h3>
    <?php endif; ?>
    <!--<article>
        <header>
            <h3>Titulo 1</h3>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem beatae culpa delectus deleniti ea fugit illum labore maxime minima molestiae molestias nisi nulla perspiciatis, quia suscipit tempora veniam! Accusantium.</p>
    </article>
    <article>
        <header>
            <h3>Titulo 2</h3>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut culpa dolore eveniet excepturi facilis fugiat harum ipsum laboriosam libero odio officia officiis qui, quibusdam quod saepe similique vitae! Eligendi.</p>
    </article>
    <article>
        <header>
            <h3>Titulo 3</h3>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequatur dicta dolor earum error excepturi facere harum id illo libero magnam modi, officiis quasi reprehenderit, suscipit temporibus ullam veritatis? Impedit?</p>
    </article>-->
</section>

</body>
</html>