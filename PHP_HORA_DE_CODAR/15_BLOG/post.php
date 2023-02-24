<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postID = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postID){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad similique enim explicabo fugiat placeat praesentium culpa. Est tempora quos optio, quo temporibus repellat, dolores atque veniam libero quibusdam iure error.
            Officiis aliquam eaque fuga hic amet molestias quos perferendis adipisci fugiat aliquid architecto odio, ducimus odit culpa praesentium, suscipit excepturi maxime mollitia aspernatur tempore porro ut possimus? Corrupti, quaerat libero?
            Sunt quod, excepturi saepe voluptatibus eveniet nulla eaque fugiat rem consequatur sed consequuntur repellendus. Vitae, voluptatem excepturi nostrum similique distinctio iure, aliquam temporibus, dolor fugiat animi consequatur minus nulla tempora!
            Vero iure, repellat rerum a possimus obcaecati tempore reprehenderit sequi nesciunt dolores ipsum corrupti cumque ea explicabo suscipit sit quibusdam voluptatum, dicta earum. Eveniet perferendis adipisci exercitationem animi ratione ipsa!
            Doloremque voluptas animi assumenda illo eos sint, laudantium, dolore corporis odio quibusdam, perferendis commodi provident. Accusantium accusamus totam dolore nostrum, sequi pariatur reprehenderit reiciendis vitae maiores officiis maxime eos omnis.</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad similique enim explicabo fugiat placeat praesentium culpa. Est tempora quos optio, quo temporibus repellat, dolores atque veniam libero quibusdam iure error.
            Officiis aliquam eaque fuga hic amet molestias quos perferendis adipisci fugiat aliquid architecto odio, ducimus odit culpa praesentium, suscipit excepturi maxime mollitia aspernatur tempore porro ut possimus? Corrupti, quaerat libero?
            Sunt quod, excepturi saepe voluptatibus eveniet nulla eaque fugiat rem consequatur sed consequuntur repellendus. Vitae, voluptatem excepturi nostrum similique distinctio iure, aliquam temporibus, dolor fugiat animi consequatur minus nulla tempora!
            Vero iure, repellat rerum a possimus obcaecati tempore reprehenderit sequi nesciunt dolores ipsum corrupti cumque ea explicabo suscipit sit quibusdam voluptatum, dicta earum. Eveniet perferendis adipisci exercitationem animi ratione ipsa!
            Doloremque voluptas animi assumenda illo eos sint, laudantium, dolore corporis odio quibusdam, perferendis commodi provident. Accusantium accusamus totam dolore nostrum, sequi pariatur reprehenderit reiciendis vitae maiores officiis maxime eos omnis.</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad similique enim explicabo fugiat placeat praesentium culpa. Est tempora quos optio, quo temporibus repellat, dolores atque veniam libero quibusdam iure error.
            Officiis aliquam eaque fuga hic amet molestias quos perferendis adipisci fugiat aliquid architecto odio, ducimus odit culpa praesentium, suscipit excepturi maxime mollitia aspernatur tempore porro ut possimus? Corrupti, quaerat libero?
            Sunt quod, excepturi saepe voluptatibus eveniet nulla eaque fugiat rem consequatur sed consequuntur repellendus. Vitae, voluptatem excepturi nostrum similique distinctio iure, aliquam temporibus, dolor fugiat animi consequatur minus nulla tempora!
            Vero iure, repellat rerum a possimus obcaecati tempore reprehenderit sequi nesciunt dolores ipsum corrupti cumque ea explicabo suscipit sit quibusdam voluptatum, dicta earum. Eveniet perferendis adipisci exercitationem animi ratione ipsa!
            Doloremque voluptas animi assumenda illo eos sint, laudantium, dolore corporis odio quibusdam, perferendis commodi provident. Accusantium accusamus totam dolore nostrum, sequi pariatur reprehenderit reiciendis vitae maiores officiis maxime eos omnis.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>        
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>