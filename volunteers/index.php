<?php 
    $pageTitle = "Our Volunteers";
    include '../includes/header.php';
    include 'list.php'
 ?>
        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="assets/sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Humanity People</div>
                </div>
                <h1 class="main-title">Our Volunteers</h1>
            </div>
        </div>
        <div class="page-data">
            <section class="volunteers">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="w-dyn-list">
                        <div role="list" class="volunteers-list w-dyn-items">
                            <?php foreach ($team as $key => $member): ?>
                                <div role="listitem" class="volunteers-item w-dyn-item">
                                    <div data-w-id="fa97153b-0c55-cabb-0abf-262bb1232968" class="volunteers-block">
                                        <div class="volunteer-top">
                                            <a href="/volunteers/<?php echo $key; ?>" class="volunteers-img w-inline-block">
                                                <img src="<?php echo $member['image']; ?>" loading="lazy" alt="Volunteers Image" sizes="(max-width: 479px) 97vw, (max-width: 991px) 30vw, 22vw" srcset="<?php echo $member['image']; ?> 500w, <?php echo $member['image']; ?> 612w" class="volunteers-image"/>
                                            </a>
                                        </div>
                                        
                                        <a href="/volunteers/<?php echo $key; ?>" class="volunteers-data w-inline-block">
                                            <div class="volunteers-name"><?php echo $member['name']; ?></div>
                                            <div class="body-small"><?php echo $member['role']; ?></div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </section>

            <?php include '../includes/faq.php' ?>

        </div>

<?php include '../includes/footer.php'; ?>