<?php
include 'list.php';

// Get the team member from the rewritten URL
$memberID = isset($_GET['member']) ? $_GET['member'] : null;

if ($memberID && isset($team[$memberID])) {
    $member = $team[$memberID];
} else {
    header("Location: /volunteers"); // Redirect if member not found
    exit;
}

$pageTitle = $member['name']; 
include __DIR__ . '/../includes/header.php';
?>


<div class="page-title">
    <div class="w-layout-blockcontainer container w-container">
        <div class="sub-title">
            <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
            <div>Volunteers</div>
        </div>
        <h1 class="main-title"><?php echo $member['name']; ?></h1>
    </div>
</div>
<div class="page-data">
    <section class="volunteeer-profile">
        <div class="w-layout-blockcontainer container w-container">
            <div class="profile-wrap">
                <div class="profile-img">
                    <img src="<?php echo $member['image']; ?>" loading="eager" alt="Profile Image" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 58vw, 40vw" srcset="<?php echo $member['image']; ?> 500w, <?php echo $member['image']; ?> 800w, <?php echo $member['image']; ?> 1064w" class="profile-image"/>
                </div>
                <div class="profile-data">
                    <div>
                        <div>
                            <h2><?php echo $member['name']; ?></h2>
                            <div class="profile-role"><?php echo $member['role']; ?></div>
                        </div>
                        <div>
                            <p class="single-text"><?php echo $member['bio']; ?></p>
                        </div>
                    </div>
                    <div>
                        <div class="profile-contact">
                            <h6 class="profile-label">Let &#x27;s Connect</h6>
                            <div class="profile-inner">
                                <div class="profile-link-wrap">
                                    <div class="profile-link-label">
                                        <img src="/assets/ic-mail-black.svg" loading="lazy" alt="Icon"/>
                                        <div>Email:</div>
                                    </div>
                                    <a href="mailto:ceo@blackcellencenetwork.com"><?php echo $member['email']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/faq.php' ?>

</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
