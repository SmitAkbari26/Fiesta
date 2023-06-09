<?php
session_start();

include('../include/head.php');
include('../include/loading.php');
?>


<div class="load">

    <?php
    include('../include/header.php');
    ?>
    <div class="row mx-auto universityFest">
        <div class="col-md-10 mx-auto">
            <div class="row mx-auto universityFest-col-reverse">
                <div class="col-12 col-md-12 col-lg-6 universityFest-content">
                    <form action="universityFestBack.php" method="post">
                        <div class="py-4 px-5">
                            <?php
                            if (isset($_GET['error'])) {
                            ?>
                                <div class="error-space">
                                    <p class="error text-center"><?php echo $_GET['error']; ?></p>
                                </div>
                            <?php } ?>
                            <input type="text" name="festName" id="festName" pattern="[A-Za-z0-9_]{2,20}" class="w-100 my-4" required placeholder="Enter Fest Name ...">
                            <div class="mx-auto d-flex justify-content-center">
                                <button class="btn my-2" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="../assets/img/event.png" class="d-block w-100" alt="Event Image">
                </div>
            </div>
        </div>
    </div>
    <?php
    include('../include/footer.php');
    include('../include/scripts.php');
    ?>

</div>