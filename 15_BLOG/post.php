<?php
    include_once("templates/header.php");
    //print_r($_GET);
    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;// Passamos o valor de $post quando o Id == $_GET para a variável $currentPost, fazendo com q o valor desssa Id fique fixado em um único.
            }
        }
    }
?>
<!-- O resultado é um título na página correspondente ao Id do subconjunto do posts.php.-->
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi fugit soluta earum ut nostrum laborum facilis autem neque ipsam esse nemo officiis quibusdam, nulla omnis illo sed accusamus? Corrupti, aliquid.
            Omnis unde, hic facilis at consequuntur mollitia, quae neque delectus culpa perferendis doloribus? Incidunt accusamus maiores nulla aperiam officia nemo! Eveniet sed temporibus facilis harum natus velit perspiciatis accusantium alias?
            Autem, error nostrum, consectetur illum, necessitatibus maiores fugit mollitia ipsum nulla magni quas voluptatibus! Debitis quod magni veritatis vel quo? Fuga repellat nihil iusto nam, a tenetur totam animi ipsam?
            Atque nulla modi eum harum doloribus enim laudantium molestiae iusto sapiente, dolore voluptatem quos, illo, suscipit facilis. Officiis dolorum distinctio quod ut odit dolor, laudantium porro, eligendi ratione libero omnis!
            Optio quas voluptatem odio temporibus veniam quis ratione repellendus, consequatur illo, pariatur accusamus tempore deleniti error non obcaecati. Animi dignissimos a pariatur facilis ab laboriosam fuga, illum veritatis voluptatibus? Praesentium?
            </p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi fugit soluta earum ut nostrum laborum facilis autem neque ipsam esse nemo officiis quibusdam, nulla omnis illo sed accusamus? Corrupti, aliquid.
            Omnis unde, hic facilis at consequuntur mollitia, quae neque delectus culpa perferendis doloribus? Incidunt accusamus maiores nulla aperiam officia nemo! Eveniet sed temporibus facilis harum natus velit perspiciatis accusantium alias?
            Autem, error nostrum, consectetur illum, necessitatibus maiores fugit mollitia ipsum nulla magni quas voluptatibus! Debitis quod magni veritatis vel quo? Fuga repellat nihil iusto nam, a tenetur totam animi ipsam?
            Atque nulla modi eum harum doloribus enim laudantium molestiae iusto sapiente, dolore voluptatem quos, illo, suscipit facilis. Officiis dolorum distinctio quod ut odit dolor, laudantium porro, eligendi ratione libero omnis!
            Optio quas voluptatem odio temporibus veniam quis ratione repellendus, consequatur illo, pariatur accusamus tempore deleniti error non obcaecati. Animi dignissimos a pariatur facilis ab laboriosam fuga, illum veritatis voluptatibus? Praesentium?
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li> 
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>