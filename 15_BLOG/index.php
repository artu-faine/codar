<?php
    include_once("templates/header.php");
?>
    <main>
        <div id= "title-container">
            <h1>Blog Codar</h1>
            <p>O seu blog de programção</p>
        </div>
        <?php //echo "<br>"; print_r($_GET); echo "<br>"; ?>
        <div id = "posts-container">
            <?php foreach($posts as $post):?>
                <!-- Fizemos uma iteração no $posts que está na pasta "data" aonde cada subconjunto do array tem uma lista de informações sobre cada imagem.-->
                <!-- Essas informações foram acessadas durante cada passagem em cada subconjunto, selecionando a chave "img" que corresponde ao subconjunto selecionado durante a iteração.-->
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>"alt="<?= $post['title'] ?>">
                    <h2 class="post-title">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>
                    <p class="post-description"><?= $post['description'] ?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>    
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php
    include_once("templates/footer.php");
?>
