<?php
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_show_all_aticles.php';
    
    $article = new Articles(null, null);

    $tab = $article->showAllArticle($bdd);
    foreach($tab as $value){
        echo 
        '<li class="li-grid list-group-item m-2" id="liste">
            <span>'.$value->nom_art.'</span>
            <span>'.$value->content_art.'</span>
        </li>';
    }
    echo '</ul>
    </form>'
?>  