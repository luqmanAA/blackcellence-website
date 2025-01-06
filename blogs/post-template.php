<?php
include 'posts.php';

// Get the post from the rewritten URL
$postID = isset($_GET['post']) ? $_GET['post'] : null;

if ($postID && isset($posts[$postID])) {
    $post = $posts[$postID];
} else {
    header("Location: /volunteers"); // Redirect if member not found
    exit;
}

$pageTitle = $post['title']; 
include __DIR__ . '/../includes/header.php';
?>

        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="post-title-wrap">
                    <div class="blog-title-wrap">
                        <div class="post-info">
                            <div class="author-name">
                                <div class="body-small"><?php echo $post['category'] ?></div>
                            </div>
                            <div class="divider"></div>
                            <div class="body-small"><?php echo $post['date']; ?></div>
                        </div>
                        <h1 class="post-main-title"><?php echo $post['title']; ?></h1>
                    </div>
                    <!-- <div class="post-author">
                        <div class="author-img">
                            <img src="https://cdn.prod.website-files.com/66236bb750d12e7540854b5f/66236d70ae7d775bcaa1373f_blog-author-01.jpg" loading="lazy" alt="Author Image" class="author-image"/>
                        </div>
                        <div class="author-name">
                            <div class="body-small">By</div>
                            <div class="body-small">Albert Flores</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="page-data">
            <section class="post-main">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="post-maini-mg">
                        <img src="https://cdn.prod.website-files.com/66236bb750d12e7540854b5f/6623747694d863895b15c69c_blog-main-01.jpg" loading="eager" alt="Post Main Image" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, 96vw" srcset="https://cdn.prod.website-files.com/66236bb750d12e7540854b5f/6623747694d863895b15c69c_blog-main-01-p-500.jpg 500w, https://cdn.prod.website-files.com/66236bb750d12e7540854b5f/6623747694d863895b15c69c_blog-main-01-p-800.jpg 800w, https://cdn.prod.website-files.com/66236bb750d12e7540854b5f/6623747694d863895b15c69c_blog-main-01-p-1080.jpg 1080w, https://cdn.prod.website-files.com/66236bb750d12e7540854b5f/6623747694d863895b15c69c_blog-main-01.jpg 1296w" class="post-main-image"/>
                    </div>
                    <div class="post-details w-richtext">
                        <?php echo $post['body']; ?>
                    </div>
                </div>
            </section>

        </div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
