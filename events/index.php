<?php 
    $pageTitle = "Events";
    include '../includes/header.php';
    include 'event-list.php'
 ?>
        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Get Involved</div>
                </div>
                <h1 class="main-title">Upcoming Events</h1>
            </div>
        </div>
        <div class="page-data">
            <section class="events">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="w-dyn-list">
                        <div role="list" class="event-list w-dyn-items">
                            <?php foreach ($events as $key => $event): ?>
                                <div role="listitem" class="event-item w-dyn-item">
                                    <a data-w-id="0d8e7be9-a604-0861-bae9-cfd15b855ca0" href="/events/<?php echo $key ?>" class="event-link w-inline-block">
                                        <div class="event-img">
                                            <img src="<?php echo $event['image'] ?>" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Event Image" sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 46vw, 23vw" srcset="<?php echo $event['image'] ?> 500w, <?php echo $event['image'] ?> 634w" class="event-image"/>
                                            <div class="event-category">Empowerment</div>
                                        </div>
                                        <div class="event-data">
                                            <div class="event-title-wrap">
                                                <div class="body-small"><?php echo $event['date']?></div>
                                                <h4 class="event-title"><?php echo $event['theme'] ?></h4>
                                            </div>
                                            <div class="event-location">
                                                <img src="/assets/ic-location.svg" loading="lazy" alt="Location Icon" height="Auto" class="location-icon"/>
                                                <div><?php echo $event['venue'] ?></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<?php include '../includes/footer.php'; ?>
