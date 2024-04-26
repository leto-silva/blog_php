<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
  }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?> </h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?=$currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, temporibus. Dolorum voluptate voluptatum, corporis, facere enim consectetur est doloribus minus expedita esse omnis aspernatur at molestiae nobis possimus, itaque quasi.
        Ipsam sequi deserunt blanditiis iste error provident in perferendis praesentium dicta, vel totam id aperiam. Incidunt quis laboriosam, voluptatum doloremque nulla quasi reiciendis explicabo cum optio? Voluptate nisi laboriosam est?
        Vitae harum consequatur soluta, quos molestias earum amet placeat. Quidem porro cum debitis ex molestiae facilis, est sit, minus nobis amet itaque sequi sapiente nam repellendus molestias quia ipsa maiores.
        Illo tempora quia quidem aliquid dignissimos quos totam vel facere at et ducimus maiores nam sint voluptatibus atque amet cum, exercitationem adipisci, quam possimus soluta? Iusto ipsum modi numquam fuga!
        Perferendis eos repellat aspernatur? Optio minus distinctio maxime officia qui doloribus, ea, expedita, earum fugit voluptatibus veritatis sed natus perferendis ullam pariatur architecto tenetur dicta provident enim incidunt. Cumque, nisi!</p>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, temporibus. Dolorum voluptate voluptatum, corporis, facere enim consectetur est doloribus minus expedita esse omnis aspernatur at molestiae nobis possimus, itaque quasi.
        Ipsam sequi deserunt blanditiis iste error provident in perferendis praesentium dicta, vel totam id aperiam. Incidunt quis laboriosam, voluptatum doloremque nulla quasi reiciendis explicabo cum optio? Voluptate nisi laboriosam est?
        Vitae harum consequatur soluta, quos molestias earum amet placeat. Quidem porro cum debitis ex molestiae facilis, est sit, minus nobis amet itaque sequi sapiente nam repellendus molestias quia ipsa maiores.
        Illo tempora quia quidem aliquid dignissimos quos totam vel facere at et ducimus maiores nam sint voluptatibus atque amet cum, exercitationem adipisci, quam possimus soluta? Iusto ipsum modi numquam fuga!
        Perferendis eos repellat aspernatur? Optio minus distinctio maxime officia qui doloribus, ea, expedita, earum fugit voluptatibus veritatis sed natus perferendis ullam pariatur architecto tenetur dicta provident enim incidunt. Cumque, nisi!</p>
    </div>

   <aside id="nav-container">
      <h3 id="tags-title">Tags</h3> 
      <ul class="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"> <?=$tag ?></a></li>
        <?php endforeach; ?>    
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
          <?php foreach($categories as $category): ?>
              <li><a href="#"> <?=$category ?></a></li>
          <?php endforeach; ?>  
        </ul>
   </aside>
</main>


<?php
   include_once("templates/footer.php");
?>