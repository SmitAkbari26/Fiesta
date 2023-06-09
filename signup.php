<?php
include('./include/head.php');
include('./include/loading.php');
?>

<div class="load">
    <div class="form">
        <div class="container">
            <div class="row my-auto">
                <div class="col-md-4 mx-auto">
                    <form action="
                    <?php
                    if (!isset($_GET['verifiy'])) {
                    ?>./signupBackSendMail.php
                    <?php } else {
                    ?>./signupBackVerification.php
                        <?php
                    }
                        ?>" method="post">
                        <?php
                        if (!isset($_GET['verifiy'])) {
                        ?>
                            <h2 class="sign-up pt-4">SignUp</h2>

                        <?php
                        } else {
                        ?>
                            <h2 class="sign-up">Verification</h2>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET['error'])) {
                        ?>
                            <p class="error text-center"><?php echo $_GET['error']; ?></p>
                        <?php
                        }
                        ?>
                        <?php
                        if (!isset($_GET['verifiy'])) {
                        ?>

                            <div class="py-3 px-5">
                                <input type="text" name="username" id="username" pattern="[A-Za-z0-9_]{2,20}" class="w-100" required placeholder="Username">
                                <input type="email" class="my-3 w-100" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required placeholder="Email">
                                <input type="password" name="password" id="password" class="w-100" required placeholder="Password">
                                <input type="password" class="my-3 w-100" name="cpassword" required id="cpassword" placeholder="Confirm Password">
                                <div class="role">
                                    <input type="radio" name="role" value="invitee" id="invitee">
                                    <label for="invitee">Invitee</label>
                                    <input type="radio" name="role" value="organizer" id="organizer">
                                    <label for="organizer">Organizer</label>
                                </div>
                                <div class="mx-auto d-flex justify-content-center">
                                    <button class="btn my-3" type="submit">Signup</button>
                                </div>
                                <a class="d-flex justify-content-center mt-3 pb-2 same-a" href="login.php">Already have account? Login</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="py-3 px-3">
                                <input type="text" name="verification" id="verification" pattern="[0-9]{6}" class=" mb-3 w-100" required placeholder="Verification Code">
                                <div class="mx-auto d-flex justify-content-center">
                                    <button class="btn my-3" type="submit">Verifiy</button>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./include/scripts.php');
?>