<?php
include 'event-list.php';

// Get the event from the rewritten URL
$eventID = isset($_GET['event']) ? $_GET['event'] : null;

if ($eventID && isset($events[$eventID])) {
    $event = $events[$eventID];
} else {
    header("Location: /events"); // Redirect if member not found
    exit;
}

$pageTitle = $event['theme']; 
include __DIR__ . '/../includes/header.php';
?>

        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Education</div>
                </div>
                <h1 class="event-main-title"><?php echo $event['theme'] ?></h1>
            </div>
        </div>
        <div class="page-data">
            <section class="event-main">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="event-wrap">
                        <div class="event-left">
                            <div class="event-main-img">
                                <img src="<?php echo $event['image'] ?>" loading="eager" alt="Event Main Image" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 65vw, 66vw" srcset="<?php echo $event['image'] ?> 500w, <?php echo $event['image'] ?> 800w, <?php echo $event['image'] ?> 900w" class="event-main-image"/>
                            </div>
                            <!-- <div class="event-details w-richtext">
                                <p>Visitors to this page can access detailed descriptions, dates, times, locations, and categories of various events, empowering them to choose and participate in activities aligned with their interests and availability. Provide visitors with detailed information about each event, including its purpose, date, time, location, and category, ensuring they have all the necessary details to make informed decisions about participation.</p>
                                <p>Our events are designed to address pressing issues, showcase innovative solutions, and provide opportunities for collaboration and action. From workshops and conferences to fundraisers and volunteer initiatives, each event is carefully curated to align with our mission and values, while also catering to the diverse interests and needs of our audience.</p>
                            </div> -->
                            <div class="objective">
                                <h3 class="objective-title">Promise of Event</h3>
                                <div class="event-info w-richtext">
                                <?php echo $event['body'] ?>
                                </div>
                            </div>
                            <div class="button-wrap">
                                <div class="event-btn">
                                    <a data-w-id="81882bf2-ef11-7a17-4ef1-154f51e9af41" href="/contact-us" class="primary-btn w-inline-block">
                                        <div>Register Now</div>
                                        <img src="/assets/arrow-white.svg" loading="lazy" style="filter:invert(0%)" alt="Arrow" class="arrow"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-right">
                            <div class="event-info-wrap">
                                <div class="event-info-block">
                                    <div class="date-title">
                                        <div>Ticket Price: <?php echo $event['price'] ?></div>
                                    </div>
                                </div>
                                <div class="event-info-block">
                                    <div class="date-title">
                                        <img src="/assets/date.svg" loading="lazy" alt="Icon"/>
                                        <div>Date & Time</div>
                                    </div>
                                    <div class="date-wrap">
                                        <div><?php echo $event['date'] ?></div>
                                        <div><?php echo $event['time'] ?></div>
                                    </div>
                                </div>
                                <div class="event-info-block location">
                                    <div class="location-title">
                                        <img src="/assets/location-lite.svg" loading="lazy" alt="Icon"/>
                                        <div>Venue</div>
                                    </div>
                                    <div class="location-text"><?php echo $event['venue'] ?></div>
                                </div>
                            </div>
                            <a data-w-id="2614d191-d5c3-cc30-5aca-31073ee3ac94" href="/contact-us" class="primary-btn w-inline-block">
                                <div>Register Now</div>
                                <img src="/assets/arrow-white.svg" loading="lazy" style="filter:invert(0%)" alt="Arrow" class="arrow"/>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <?php include __DIR__ . '/../includes/faq.php' ?>
        </div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
