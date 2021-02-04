<style>
    <?php include 'css/nav.css'; ?>
</style>

<?php
function getNav()
{
?>
    <div id="navigation">
        <div class="page-nav-bar">
            <a href="/" class="home-logo">
                <div class="logo">
                    <img src="/images/placeholder.png" alt="placeholder-logo">
                </div>
            </a>
            <div class="nav-bar-contents">
                <a href="/pages/about.php">
                    <div class="link-text">
                        About
                    </div>
                </a>
                <a href="/pages/reviews.php">
                    <div class="link-text">
                        Reviews
                    </div>
                </a>
                <a href="/pages/login.php">
                    <div class="link-text">
                        Sign in
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php
}
?>