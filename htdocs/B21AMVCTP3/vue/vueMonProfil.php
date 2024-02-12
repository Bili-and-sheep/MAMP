
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["mailU"] ?> <br />
Mon pseudo : <?= $util["pseudoU"] ?> <br />

<hr>

les restaurants que j'aime : <br>
<?php foreach ($mesTypeCuisineAimes as $typeCuisine){?>
    <li class="tag"><span class="tag"><?= $typeCuisine["nomR"]?></span></li>
<?php } ?>
<hr>
les types de cuisine que j'aime : 
<ul id="tagFood">
    <?php foreach ($mesTypeCuisineAimes as $typeCuisine){?>
    <li class="tag"><span class="tag"><?= $typeCuisine["libelleTC"]?></span></li>
    <?php } ?>
</ul>
<hr>
<?php
print_r($mesTypeCuisineAimes);?>
<br></br>
<a href="./?action=deconnexion">se deconnecter</a>


