<?php
include 'programs-list.php';

// Get the program from the rewritten URL
$programID = isset($_GET['program']) ? $_GET['program'] : null;

if ($programID && isset($programs[$programID])) {
    $program = $programs[$programID];
} else {
    header("Location: /"); // Redirect to home page if program not found
    exit;
}

$pageTitle = $program['title']; 
include __DIR__ . '/../includes/header.php';
?>

    <div class="page-title">
        <div class="w-layout-blockcontainer container w-container">
            <h1 class="cause-main-title"><?php echo $program['title'] ?></h1>
        </div>
    </div>
    <div class="page-data">
        <section class="cause-main">
            <div class="w-layout-blockcontainer container w-container">
                <div class="cause-main-img">
                    <img src="<?php echo $program['image'] ?>" loading="eager" alt="Cause Main Image" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, 96vw" srcset="<?php echo $program['image'] ?> 500w, <?php echo $program['image'] ?> 800w, <?php echo $program['image'] ?> 1080w, <?php echo $program['image'] ?> 1296w" class="cause-main-image"/>
                </div>
            </div>
        </section>
        <section class="cause-details">
            <div class="w-layout-blockcontainer container w-container">
                <div class="cause-wrap">
                    <div class="cause-rich-text w-richtext">
                        <?php echo $program['body'] ?>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

<?php include __DIR__ . '/../includes/footer.php'; ?>