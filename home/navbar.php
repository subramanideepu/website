<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="keywords" content="">

<!-- CSS -->
<link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
<link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
<link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
<link href="../assets/plugins/justified-gallery/justified-gallery.min.css" rel="stylesheet">
<link href="../assets/plugins/scrollcue/scrollcue.css" rel="stylesheet">
<link href="../assets/css/main.css" rel="stylesheet">
<!-- Fonts/Icons -->
<link href="../assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
<link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">

<style>
/* General styling */
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 10px 20px;
}

.logo h4 {
    color: #ffffff;
    margin: 0;
}

.social-media-bar {
    display: flex;
    align-items: center;
    gap: 15px;
}

.social-media-bar .social-icon {
    color: #ffffff;
    font-size: 18px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 1px solid #ffffff;
    transition: background-color 0.3s, color 0.3s;
}

.social-media-bar .social-icon:hover {
    background-color: #ffffff;
    color: #333333;
}

.phone-number {
    color: #ffffff;
    font-size: 18px;
    display: inline-flex;
    align-items: center;
}

.phone-number i {
    margin-right: 5px;
}

.header-menu-wrapper ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px;
}

.header-menu-wrapper .header-menu li a {
    color: #ffffff;
    text-decoration: none;
    font-weight: 500;
}

.header-menu-wrapper .header-menu li a:hover {
    color: #cccccc;
}

/* Dropdown menu styling */
.m-dropdown {
    display: none;
    position: absolute;
    background: #333333;
    padding: 10px;
    border-radius: 5px;
}

.header-menu .m-item:hover .m-dropdown {
    display: block;
}

.m-dropdown-item a {
    color: #ffffff;
    text-decoration: none;
}

.m-dropdown-item a:hover {
    color: #cccccc;
}

/* Mobile menu toggle */
.m-toggle {
    display: none; /* Only display on mobile */
    font-size: 24px;
}

/* Responsive styles */
@media (max-width: 992px) {
    .header-menu-wrapper ul {
        flex-direction: column;
        display: none;
    }

    .m-toggle {
        display: block;
    }

    .header-menu-wrapper.active ul {
        display: flex;
    }
}
</style>

</head>
<body>
    <!-- Header -->
    <div class="header dark fixed absolute-light">
        <div class="container">
            <div class="logo">
                <h4 class="uppercase letter-spacing-2"><a href="index.php">SH Arteriors</a></h4>
            </div>

            <!-- Social Media and Phone -->
            <div class="social-media-bar">
                <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <span class="phone-number"><i class="fas fa-phone-alt"></i> +91 98400 12341</span>
            </div>
            
            <div class="header-menu-wrapper">
                <!-- Menu -->
                <ul class="header-menu">
                    <li class="m-item">
                        <a class="m-link" href="#"  style="font-weight: bold; font-size:25px; text-shadow: 3px 3px black;">Home</a>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="#" style="font-weight: bold; font-size:25px; text-shadow: 3px 3px black;">About Us</a>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="#" style="font-weight: bold;  font-size:25px; text-shadow: 3px 3px black; ">Services</a>
                        <ul class="m-dropdown">
                            <li class="m-dropdown-item">
                                <a class="m-dropdown-link" href="#" style="color:black;" >Product Listing</a>
                            </li>
                            <li class="m-dropdown-item">
                                <a class="m-dropdown-link" href="#" style="color:black;">Product Single</a>
                            </li>
                            <li class="m-dropdown-item">
                                <a class="m-dropdown-link" href="#" style="color:black;">Cart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="#" style="font-weight: bold; font-size:25px; text-shadow: 3px 3px black;">Gallery</a>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="#" style="font-weight: bold; font-size:25px; text-shadow: 3px 3px black;">Contact Us</a>
                    </li>
                </ul>

                <!-- Close Button -->
                <button class="close-button">
                    <span></span>
                </button>
            </div><!-- end header-menu-wrapper -->
            
            <!-- Menu Toggle on Mobile -->
            <button class="m-toggle" aria-label="Toggle Menu">
                <span>☰</span>
            </button>
        </div><!-- end container -->
    </div>
    <!-- end Header -->

    <!-- Optional JavaScript for Mobile Menu Toggle -->
    <script>
        document.querySelector('.m-toggle').addEventListener('click', function () {
            document.querySelector('.header-menu-wrapper').classList.toggle('active');
        });
    </script>
</body>
</html>
