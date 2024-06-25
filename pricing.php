<!DOCTYPE html>

<html data-wf-page="63f8ca18cae258c6e38fd72f">

<head>
    <?php require_once('layout/head.php'); ?>
    <title>Pricing | Design Vertices</title>
    <meta content="Design Vertices is a world-class web & mobile apps development agency focused on helping tech companies design, develop, and launch amazing websites." name="description"/>
    <meta content="Design Vertices | We create amazing websites" property="og:title" />
    <meta content="Design Vertices is a world-class web design &amp; development agency focused on helping tech companies design, develop, and launch amazing websites." property="og:description" />
    <meta content="" property="og:image" />
    <meta content="Design Vertices | We create amazing websites" property="twitter:title" />
    <meta content="Design Vertices is a world-class web design &amp; development agency focused on helping tech companies design, develop, and launch amazing websites." property="twitter:description" />
    <meta content="" property="twitter:image" />
</head>

<body>
    <?php require_once('layout/loader.php'); ?>
    <main class="page-wrapper">
        <!-- Header -->
        <?php require_once('layout/header.php'); ?>
        <!-- Header -->

        <div class="section hero-section portfolio-section">
            <div class="container-default w-container">
                <div data-w-id="7ac6ea91-c5fa-cab9-9fe9-30d7a82c3a9d"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                    class="inner-container _480px center">
                    <div class="text-center mg-bottom-40px">
                        <h1 class="display-1">Pricing</h1>
                        <p>Our amazing team of designers and developers have produced some remarkable pieces of work.</p>
                    </div>
                </div>
            </div>

            <div class="container-default w-container">
                <ul class="package-selectors">
                    <li><a href="" class="button-primary package-selector active" data-package="web">Web Design</a></li>
                    <li><a href="" class="button-secondary package-selector" data-package="mobile">Mobile Apps</a></li>
                    <li><a href="" class="button-secondary package-selector" data-package="branding">Branding</a></li>
                    <li><a href="" class="button-secondary package-selector" data-package="seo">SEO</a></li>
                    <li><a href="" class="button-secondary package-selector" data-package="smm">SMM</a></li>
                    <li><a href="" class="button-secondary package-selector" data-package="video">Video Animation</a></li>
                </ul>

                <div class="w-layout-grid features-grid three-columns">
                    <!-- Web -->
                    <?php require_once('layout/web-packages.php'); ?>
                    <!-- Web -->

                    <!-- Mobile -->
                    <?php require_once('layout/mobile-packages.php'); ?>
                    <!-- Mobile -->

                    <!-- Branding -->
                    <?php require_once('layout/brand-packages.php'); ?>                  
                    <!-- Branding -->

                    <!-- SEO -->
                    <?php require_once('layout/seo-packages.php'); ?>                   
                    <!-- SEO -->

                    <!-- SMM -->
                    <?php require_once('layout/smm-packages.php'); ?>                  
                    <!-- SMM -->

                    <!-- Video -->
                    <?php require_once('layout/video-packages.php'); ?>
                    <!-- Video -->
                </div>
            </div>

            <div class="container-default w-container">
                <div data-w-id="24d9fe04-adf9-f5a8-74b6-f8f54a063788" style="opacity:0;-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="button-row center">
                    <a data-w-id="24d9fe04-adf9-f5a8-74b6-f8f54a063789" href="contact" class="button-primary w-button">Get in touch <span class="line-rounded-icons button-icon"></span></a>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <?php require_once('layout/cta.php'); ?>
        <!-- CTA -->

        <!-- Footer -->
        <?php require_once('layout/footer.php'); ?>
        <!-- Footer -->
    </main>

    <?php require_once('layout/scripts.php'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const packageSelectors = document.querySelectorAll('.package-selector');
            const packageItems = document.querySelectorAll('.package-item');

            function showPackage(packageName) {
                packageItems.forEach(item => {
                    if (item.classList.contains(packageName)) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });
            }

            packageSelectors.forEach(selector => {
                selector.addEventListener('click', function (event) {
                    event.preventDefault();

                    packageSelectors.forEach(sel => {
                        sel.classList.remove('active', 'button-primary');
                        sel.classList.add('button-secondary');
                    });
                    this.classList.remove('button-secondary');
                    this.classList.add('active', 'button-primary');

                    const packageName = this.getAttribute('data-package');
                    showPackage(packageName);
                });
            });

            // Show the default package (web) on page load
            showPackage('web');
        });
    </script>
</body>

</html>
