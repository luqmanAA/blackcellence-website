<?php include __DIR__ . '/../programs/programs-list.php'?>

<section class="causes">
    <div class="w-layout-blockcontainer container w-container">
        <div class="section-title">
            <div class="sub-title">
                <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                <div>Causes</div>
            </div>
            <h2 class="title">Our Programs</h2>
        </div>
        <div class="w-dyn-list">
            <div role="list" class="causes-list w-dyn-items">
                <?php foreach ($programs as $key => $program): ?>
                    <div role="listitem" class="causis-item w-dyn-item">
                        <a data-w-id="5e252c95-0063-16b2-f88f-f8d1faa4e4df" href="/programs/<?php echo $key ?>" class="causes-link w-inline-block">
                            <div class="cause-img">
                                <img src="<?php echo $program['image'] ?>" lazy style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Cause Image" sizes="(max-width: 479px) 100vw, (max-width: 991px) 46vw, 31vw" srcset="<?php echo $program['image'] ?> 500w, <?php echo $program['image'] ?> 800w, <?php echo $program['image'] ?> 824w" class="cause-image"/>
                            </div>
                            <div class="cause-data">
                                <h4 class="cause-title"><?php echo $program['title'] ?></h4>
                                <div class="cause-info">
                                    <div class="cause-bottom">
                                        <div class="cause-category">
                                            <img src="/assets/love.svg" loading="lazy" width="14" alt="Icon"/>
                                            <div><?php echo $program['category'] ?></div>
                                        </div>
                                        <div class="secondary-btn">
                                            <div>View Program</div>
                                            <img src="/assets/arrow.svg" loading="lazy" style="-webkit-transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Arrow" class="arrow"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>