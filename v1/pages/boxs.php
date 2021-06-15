<?php include("../includes/config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include($head); ?>
    </head>
    <body>
        <?php include($header); ?>

        <main>
        <h1 class="text-center my-5">Voici toutes les boxs</h1>
        <table class="table container">
            <thead>
                <tr class="text-center">
                    <th scope="col">Taille du box</th>
                    <th scope="col">Tarif</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3"><span class="fw-bold">Petits boxs:</span><br>De 3m² à 5m²<br>De 5m<sup>3</sup> à 12m<sup>3</sup><br>Idéal pour stocker le contenu d'un studio ou d'un garage</td>
                    <td class="text-center pt-5">à partir de 49€/mois</td>
                </tr>
                <tr>
                    <td class="py-3"><span class="fw-bold">Moyens boxs:</span><br>De 6m² à 9m²<br>De 11m<sup>3</sup> à 52m<sup>3</sup><br>Idéal pour stocker le contenu d'un appartement</td>
                    <td class="text-center pt-5">à partir de 85€/mois</td>
                </tr>
                <tr>
                    <td class="py-3"><span class="fw-bold">Grands boxs:</span><br>De 10m² à 14m²<br>De 17m<sup>3</sup> à 52m<sup>3</sup><br>Idéal pour stocker le contenu d'une maison</td>
                    <td class="text-center pt-5">à partir de 119€/mois</td>
                </tr>
            </tbody>
        </table>
        </main>

        <?php include($footer); ?>
        
        <?php include($script); ?>
    </body>
</html>