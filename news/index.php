<?php 
    $pageTitle = "News & Articles";
    include '../includes/header.php';
    include 'posts.php'
 ?>
        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Our Blogs</div>
                </div>
                <h1 class="main-title">News &amp;Articles</h1>
            </div>
        </div>
        <div class="page-data">
            <section class="blogs">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="w-dyn-list">
                        <div role="list" class="post-list w-dyn-items">
                            <?php foreach ($posts as $key => $post): ?>
                                <div role="listitem" class="post-item w-dyn-item">
                                    <a data-w-id="c1e95c48-1432-c366-5545-91ef9c4f6209" href="/news/<?php echo $key ?>" class="post-link w-inline-block">
                                        <div class="post-img">
                                            <img src="<?php echo $post['image']; ?>" loading="lazy" alt="Post Image" sizes="(max-width: 479px) 100vw, (max-width: 767px) 46vw, (max-width: 991px) 47vw, 31vw" srcset="<?php echo $post['image']; ?> 500w, <?php echo $post['image']; ?> 800w, <?php echo $post['image']; ?> 832w" class="post-image"/>
                                        </div>
                                        <div class="post-data">
                                            <div class="post-info">
                                                <!-- <div class="author-name">
                                                    <div>By</div>
                                                    <div>Robert Fox</div>
                                                </div>
                                                <div class="divider"></div> -->
                                                <div><?php echo $post['date'] ?></div>
                                            </div>
                                            <h4 class="post-title"><?php echo $post['title'] ?></h4>
                                            <div class="post-bottom">
                                                <div><?php echo $post['category'] ?></div>
                                                <div class="secondary-btn">
                                                    <div>Read Article</div>
                                                    <img src="/assets/arrow.svg" loading="lazy" style="-webkit-transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Arrow" class="arrow"/>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">
                            <a data-w-id="075fab93-867b-efd6-1aff-da901c96ce91" href="?9130bffb_page=2" aria-label="Next Page" class="w-pagination-next primary-btn">
                                <div class="w-inline-block">Next</div>
                                <img src="https://cdn.prod.website-files.com/65f19f9e78bd6991e7ca7a2e/6623674ad4f46682e07b3591_ic-arrow-white.svg" loading="lazy" style="filter:invert(0%)" alt="Arrow" class="arrow"/>
                            </a>
                            <link rel="prerender" href="?9130bffb_page=2"/>
                        </div> -->
                    </div>
                </div>
            </section>
        </div>

<?php include '../includes/footer.php'; ?>