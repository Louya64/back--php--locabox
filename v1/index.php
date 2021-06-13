<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include($head); ?>
        <title>Locabox Accueil</title>
    </head>
    <body>
        <?php include($header); ?>

        <main class="container-fluid">
            <section class="mt-5 container">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/img1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nouveauté ou promo 1</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/img2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nouveauté ou promo 2</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/img3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nouveauté ou promo 3</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <section class="mt-5">
                <h1 class="text-center mb-5">Stockez vos biens en toute confiance</h1>
                <div class="bg_gris py-5">
                    <div class="container">
                        <img src="images/img4.jpg" width="500" class="float-start m-3" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id dolorum quia atque natus repellat et? Lorem ipsum dolor sit amet <a href="<?= $boxs_site ?>" class="col_rouge">voir les boxs</a> consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id dolorum quia atque natus repellat et?</p><br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, <a href="<?= $simulateur_site ?>" class="col_rouge">notre simulateur de volumes</a> ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id dolorum quia atque natus repellat et? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus <a href="<?= $contact_site ?>" class="col_rouge">nous contacter</a> sunt id dolorum quia atque natus repellat et?</p>
                    </div>
                </div>
            </section>

            <section class="mt-5 container">
                <h1 class="text-center mb-5">Nos prestations</h1>
                <div class="bg_gris p-5">
                    <div class="container">
                        <img src="images/img4.jpg" width="500" class="float-start mx-3" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id dolorum quia atque natus repellat et? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id</p>
                    </div>
                </div>
                <div class="bg_gris p-5 mt-5">
                    <div class="container">
                        <img src="images/img4.jpg" width="500" class="float-end mx-3" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id dolorum quia atque natus repellat et? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur repellat, ipsum ducimus nemo in quas, odio libero, ipsam suscipit hic repellendus sed magni blanditiis inventore modi! Incidunt, cum distinctio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci tempora voluptatem quas eius doloremque quibusdam, esse nam voluptate, consequuntur labore soluta repellendus sunt id</p>
                    </div>
                </div>
            </section>

        </main>

        <?php include($footer); ?>
        
        <?php include($script); ?>
    </body>
</html>