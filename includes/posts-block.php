<?php include __DIR__ . '/../news/posts.php'?>

<section class="blogs">
    <div class="w-layout-blockcontainer container w-container">
        <div class="section-title">
            <div class="sub-title">
                <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                <div>Our Blogs</div>
            </div>
            <h2 class="title">News & Articles</h2>
        </div>
        <div class="w-dyn-list">
            <div role="list" class="post-list w-dyn-items">
                <?php foreach ($posts as $key => $post): ?>
                    <div role="listitem" class="post-item w-dyn-item">
                        <a data-w-id="18536262-339e-c711-eb3d-d1754db27563" href="/news/<?php echo $key ?>" class="post-link w-inline-block">
                            <div class="post-img">
                                <img src="<?php echo $post['image']; ?>" loading="lazy" alt="Post Image" sizes="(max-width: 479px) 100vw, (max-width: 767px) 46vw, (max-width: 991px) 47vw, 31vw" srcset="<?php echo $post['image']; ?> 500w, <?php echo $post['image']; ?> 800w, <?php echo $post['image']; ?> 832w" class="post-image"/>
                            </div>
                            <div class="post-data">
                                <div class="post-info">
                                    <!-- <div class="author-name">
                                        <div>By</div>
                                        <div>Albert Flores</div>
                                    </div>
                                    <div class="divider"></div> -->
                                    <div><?php echo $post['date'] ?></div>
                                </div>
                                <h4 class="post-title"><?php echo $post['title'] ?></h4>
                                <div class="post-bottom">
                                    <div><?php echo $post['category'] ?></div>
                                    <div class="secondary-btn">
                                        <div>Read Article</div>
                                        <img src="/assets/arrow.svg" loading="lazy" alt="Arrow" class="arrow"/>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="button-wrap right">
            <a data-w-id="18536262-339e-c711-eb3d-d1754db27579" href="/news" class="primary-btn w-inline-block">
                <div>View All Blogs</div>
                <img src="/assets/arrow-white.svg" loading="lazy" alt="Arrow" class="arrow"/>
            </a>
        </div>
    </div>
</section>