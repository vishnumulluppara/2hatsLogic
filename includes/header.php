<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>logo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="author" content=" ">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="##111010">
    <meta name="description" itemprop="description" content="">
    <link rel="canonical" href="">

    <meta name="keywords" itemprop="keywords" content="Home">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token"
        content="E4DghxYW3Gt8dec_9UV3TyEK_kfhikX92nxw5mSwSyxD0anze3KIBzMYuFaWNU8-TH_MIqf9fLiOKkeIJ4U6ew==">
    <!-- <meta name="robots" content="noindex, nofollow"> -->

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content=" " />
    <meta property="og:image:width" content="734">
    <meta property="og:image:height" content="491">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />

    <meta name="robots" content="max-image-preview:large" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:image:alt" content="" />


    <meta name="mobile-web-app-capable" content="yes">

    <link rel="manifest" href="manifest.webmanifest" />

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="##111010">


    <script type="application/ld+json">

    </script>

    <!-- fonts  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- css -->

    <!-- ANIMATE CSS --->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- JQUERY --->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- BOOTSTRAP --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- INCLUDES -->
    <link rel="stylesheet" type="text/css" href="assets/css/app.min.css">

    <script>
    $(document).ready(function() {
        // Open Mobile Menu
        $(".MenuBtn").click(function() {
            $(".menuBx").addClass("active");
            $("body").addClass("noScroll");
        });

        // Close Mobile Menu
        $(".closeBtn").click(function() {
            $(".menuBx").removeClass("active");
            $("body").removeClass("noScroll");
        });

        // Toggle Search Bar
        $(".searchBtn").click(function(e) {
            e.preventDefault();
            e.stopPropagation(); // Stop propagation to prevent immediate closing
            $(".searchWrap").addClass("active");
            // Focus input when opened
            setTimeout(function() {
                $(".searchWrap input").focus();
            }, 100);
        });

        $(".closeSearch").click(function(e) {
            e.preventDefault();
            $(".searchWrap").removeClass("active");
        });

        // Close on Outside Click
        $(document).click(function(e) {
            if (!$(e.target).closest('.searchWrap').length && !$(e.target).closest('.searchBtn')
                .length) {
                $(".searchWrap").removeClass("active");
            }
        });

        // Prevent clicks inside search wrap from closing it
        $(".searchWrap").click(function(e) {
            e.stopPropagation();
        });

        // Sticky Header Logic
        // Calculate header height initially
        var headerHeight = $('#Header').outerHeight();

        // Recalculate on resize to be responsive
        $(window).resize(function() {
            if (!$('#Header').hasClass('StickY')) {
                headerHeight = $('#Header').outerHeight();
            }
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > headerHeight) {
                $('#Header').addClass('StickY');
                $('body').css('padding-top', headerHeight + 'px');
            } else {
                $('#Header').removeClass('StickY');
                $('body').css('padding-top', '0');
            }
        });
    });
    </script>

</head>

<body class="">



    <header id="Header">
        <div class="container">
            <div class="headFlx">
                <div class="mainLog">
                    <a href="index.php" class="logo" aria-label="logo">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="menuFlx">
                    <div class="searchBx">
                        <a data-bs-toggle="modal" data-bs-target="#SearchModal" href="#!" class="searchBtn"
                            aria-label="search_label">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M16.3966 17.7815C13.8683 19.7445 11.0372 20.4337 7.91956 19.7445C5.52904 19.2206 3.60119 17.9304 2.15806 15.9508C-0.827338 11.8593 -0.254486 6.25703 3.49104 2.79418C7.04928 -0.497732 12.7337 -0.596986 16.4516 2.50745C20.445 5.84347 21.3153 12.0192 17.7901 16.3919C17.8562 16.4636 17.9278 16.5408 17.9994 16.6125C19.6243 18.2391 21.2547 19.8658 22.8741 21.5035C23.0394 21.6689 23.1715 21.9005 23.2266 22.1266C23.3258 22.5512 23.0999 22.9427 22.7309 23.1357C22.3508 23.3342 21.9157 23.2735 21.5907 22.9592C21.1115 22.4905 20.6433 22.0163 20.1751 21.5421C18.9744 20.3455 17.7791 19.1435 16.5783 17.9469C16.5232 17.8918 16.4627 17.8421 16.3966 17.7815ZM10.1393 2.17109C5.78792 2.16006 2.21866 5.71665 2.19662 10.0948C2.17459 14.4675 5.73834 18.0572 10.1118 18.0682C14.4687 18.0792 18.049 14.5226 18.071 10.161C18.0931 5.76627 14.5348 2.18211 10.1393 2.17109Z"
                                        fill="black" stroke="black" stroke-width="0.5" stroke-miterlimit="10" />
                                </svg>
                            </div>
                        </a>
                    </div>



                    <!-- desktop Menus -->
                    <ul class="menuLinks">
                        <li class="menuItem">
                            <a href="/" class="cmnLinks active" aria-label="Home">HOME</a>
                        </li>
                        <li class="menuItem">
                            <a href="/" class="cmnLinks" aria-label="Home">Spaces</a>
                        </li>
                        <li class="menuItem">
                            <a href="javascript:void(0)" class="cmnLinks" aria-label="Locations">
                                Products & Services
                            </a>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="cmnLinks" aria-label="About Us">Showrooms</a>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="cmnLinks" aria-label="Programs">Company</a>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="cmnLinks" aria-label="Classes">Media</a>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="cmnLinks" aria-label="Contact">CONTACT</a>
                        </li>
                    </ul>
                    <!-- menu icons -->
                    <div class="ritSec">
                        <div class="menuList">

                            <div class="item">
                                <a href="javascript:void(0)" class="cmnIcons">
                                    <div class="icon">
                                        <svg viewBox="0 0 23 22">
                                            <path
                                                d="M22.0244 4.70937C21.7567 5.52263 21.489 6.33589 21.2259 7.14915C20.5243 9.32554 19.8319 11.5066 19.1349 13.683C18.9688 14.2005 18.7795 14.3437 18.2395 14.3437C14.8653 14.3437 11.4912 14.3437 8.11705 14.3391C7.9278 14.3391 7.84472 14.3946 7.78933 14.5748C7.62316 15.0692 7.43853 15.559 7.24928 16.095C7.36006 16.095 7.44776 16.095 7.53546 16.095C11.085 16.095 14.6392 16.095 18.1887 16.095C18.281 16.095 18.3733 16.095 18.4657 16.1042C18.7841 16.1458 19.0057 16.3954 18.9965 16.6911C18.9872 16.9914 18.7565 17.2363 18.4426 17.2594C18.2349 17.2733 18.0225 17.2641 17.7687 17.2641C18.2164 17.8324 18.3918 18.4331 18.2487 19.1031C18.1379 19.6299 17.8564 20.0596 17.4133 20.3692C16.6147 20.9284 15.5854 20.9099 14.773 20.189C13.9837 19.4913 13.9191 18.4655 14.6069 17.2825C13.1113 17.2825 11.6204 17.2825 10.1018 17.2825C10.5727 17.9156 10.748 18.5902 10.4896 19.3434C10.3372 19.787 10.0603 20.1428 9.67719 20.4016C8.85558 20.9561 7.78471 20.859 7.06004 20.1567C6.44152 19.5606 6.06764 18.4193 6.94002 17.2641C6.77847 17.2641 6.64462 17.2641 6.50614 17.2641C5.98456 17.2548 5.73068 16.899 5.90147 16.4046C6.11841 15.79 6.33997 15.1755 6.56153 14.5655C6.58461 14.5008 6.60307 14.4361 6.63076 14.3437C6.51998 14.3437 6.42767 14.3437 6.33997 14.3437C5.94763 14.3345 5.67991 14.1127 5.61068 13.7338C5.36604 12.4169 5.12602 11.0999 4.88599 9.783C4.46596 7.49109 4.04131 5.19917 3.62589 2.90264C3.60281 2.77326 3.54741 2.71319 3.4274 2.66698C2.53194 2.32042 1.63648 1.96462 0.741016 1.60882C0.367137 1.46095 0.187119 1.12825 0.270203 0.786316C0.376366 0.356582 0.796402 0.139405 1.2349 0.305753C1.79803 0.51831 2.35654 0.744729 2.91505 0.966527C3.40432 1.15598 3.88899 1.35467 4.37826 1.53951C4.68752 1.65503 4.8583 1.8722 4.91831 2.19104C5.33373 4.45523 5.74915 6.72404 6.16457 8.98822C6.39536 10.2497 6.62615 11.5112 6.85233 12.7727C6.87541 12.9067 6.93079 12.9529 7.07388 12.9529C10.6234 12.9482 14.1776 12.9482 17.7271 12.9529C17.8425 12.9529 17.9164 12.9344 17.9579 12.8004C18.7565 10.2959 19.5596 7.79606 20.3581 5.29159C20.3627 5.27773 20.3581 5.26386 20.3581 5.22228C20.2012 5.21304 20.0443 5.19917 19.8873 5.18993C17.4086 5.08365 14.93 4.982 12.4513 4.87572C10.9142 4.81103 9.37716 4.74171 7.84011 4.6724C7.40161 4.65392 7.11081 4.35357 7.12466 3.94232C7.1385 3.54493 7.45238 3.26306 7.88165 3.27692C8.57401 3.30003 9.271 3.33699 9.96337 3.36472C11.445 3.42941 12.9221 3.49872 14.4038 3.55879C16.7117 3.66045 19.0196 3.75749 21.3274 3.85914C21.6967 3.87301 21.8998 4.09018 22.0244 4.41364C22.0244 4.51068 22.0244 4.60771 22.0244 4.70937ZM16.2132 17.7308C15.7008 17.7261 15.2761 18.142 15.2715 18.6503C15.2669 19.1586 15.6962 19.5837 16.2039 19.5837C16.707 19.5837 17.1271 19.1725 17.1317 18.6688C17.1409 18.1605 16.7255 17.7354 16.2132 17.7308ZM9.44179 18.6549C9.44179 18.1374 9.02636 17.7308 8.50477 17.7308C7.99704 17.7354 7.59085 18.142 7.58624 18.6503C7.58162 19.1632 7.99704 19.5837 8.51401 19.5883C9.02636 19.5883 9.44179 19.1725 9.44179 18.6549Z"
                                                stroke="black" stroke-width="0.5" stroke-miterlimit="10" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0)" class="cmnIcons">
                                    <div class="icon">
                                        <svg viewBox="0 0 24 22">
                                            <path
                                                d="M0.254896 6.65214C0.329811 6.20217 0.373878 5.74778 0.488454 5.30663C1.09218 2.99498 2.44505 1.30537 4.75419 0.577465C7.22198 -0.203376 9.37247 0.427473 11.1528 2.30679C11.3643 2.52736 11.5494 2.77 11.7565 3.01704C11.9592 2.77882 12.1443 2.5406 12.3514 2.31561C13.3341 1.25684 14.5063 0.520115 15.9562 0.334831C18.1948 0.0480817 20.1117 0.731869 21.5836 2.45678C23.0555 4.18169 23.4873 6.21981 23.148 8.4344C22.9321 9.83727 22.2931 11.0593 21.4558 12.1842C20.3585 13.6621 19.0189 14.9061 17.6395 16.1105C16.0135 17.5266 14.3741 18.9338 12.7392 20.3411C12.1091 20.8837 11.4348 20.9058 10.8311 20.3852C8.69824 18.5324 6.56096 16.6884 4.45453 14.8047C3.38369 13.8518 2.42743 12.7842 1.63862 11.5754C0.898282 10.4328 0.400319 9.20201 0.285743 7.83443C0.281336 7.7815 0.263709 7.73297 0.250488 7.68444C0.254895 7.34034 0.254896 6.99624 0.254896 6.65214ZM11.7521 19.4015C11.8094 19.3574 11.8579 19.3221 11.902 19.2824C13.7219 17.7074 15.5507 16.1458 17.3531 14.5576C18.6134 13.4459 19.8121 12.268 20.7419 10.8563C21.6321 9.51082 22.0683 8.04619 21.8656 6.42274C21.6453 4.67137 20.8961 3.21997 19.345 2.30679C17.8995 1.45536 16.3704 1.34948 14.8368 2.09062C13.9291 2.52736 13.2592 3.23762 12.6952 4.06257C12.6158 4.18169 12.5409 4.30521 12.4572 4.41991C12.087 4.92723 11.426 4.92282 11.0514 4.42432C10.7253 3.98758 10.4257 3.52437 10.0511 3.12733C8.84807 1.8524 7.35858 1.35831 5.64436 1.72888C3.79352 2.13032 2.57726 3.30379 1.96472 5.0684C1.25082 7.11977 1.59014 9.05202 2.77115 10.8519C3.50267 11.968 4.40165 12.9474 5.38877 13.8341C7.01927 15.3032 8.68502 16.7369 10.3331 18.1795C10.8047 18.5897 11.2762 18.9912 11.7521 19.4015Z"
                                                stroke="black" stroke-width="0.5" stroke-miterlimit="10" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0)" class="cmnIcons">
                                    <div class="icon">
                                        <svg viewBox="0 0 19 22">
                                            <path
                                                d="M13.3092 10.1273C14.5295 10.822 15.4626 11.7753 16.1708 12.9585C16.9269 14.228 17.3815 15.6077 17.5873 17.0592C17.7213 18.0077 17.7643 18.9706 17.8218 19.9287C17.8553 20.47 17.5442 20.7623 16.9987 20.7623C11.6965 20.7623 6.39441 20.7623 1.09227 20.7623C0.537177 20.7623 0.245273 20.4748 0.250058 19.9143C0.264414 17.9838 0.508465 16.0963 1.24062 14.2951C1.94885 12.5561 3.03512 11.1333 4.68127 10.1752C4.70519 10.1609 4.72912 10.1369 4.75305 10.1178C2.31732 7.55004 2.86284 3.62661 5.26508 1.62418C7.54767 -0.287231 10.8878 -0.196212 13.0556 1.84454C15.2712 3.92842 15.6349 7.58836 13.3092 10.1273ZM16.3431 19.2916C16.2522 17.361 15.9507 15.4975 14.9793 13.8064C14.3285 12.6711 13.4288 11.7992 12.2373 11.2291C12.0937 11.1573 11.9885 11.1621 11.8449 11.2387C9.96426 12.2352 8.07884 12.2208 6.203 11.2244C6.08337 11.1621 5.98766 11.1477 5.86803 11.21C4.93489 11.6555 4.15488 12.2879 3.54236 13.1214C2.65229 14.3286 2.18333 15.7035 1.94885 17.1694C1.83878 17.864 1.78136 18.573 1.69523 19.2916C6.60018 19.2916 11.4573 19.2916 16.3431 19.2916ZM13.4288 6.11289C13.4288 3.68889 11.4621 1.71041 9.04069 1.71041C6.61932 1.71041 4.64298 3.67931 4.64298 6.10331C4.64298 8.5273 6.60975 10.5058 9.03112 10.5058C11.4525 10.5106 13.4288 8.53688 13.4288 6.11289Z"
                                                stroke="black" stroke-width="0.5" stroke-miterlimit="10" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="MenuIcon d-lg-none">
                            <button class="MenuBtn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="menuBx">
            <div class="flexBx">
                <div class="logoWrap">
                    <a href="index.php" class="logoImg" araia-label="logo">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <button class="closeBtn">
                    <div class="icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24963 21.9826C5.76151 22.4708 5.76158 23.2622 6.24978 23.7503C6.73798 24.2385 7.52943 24.2385 8.01755 23.7502L14.9991 16.7675L21.9812 23.7496C22.4693 24.2377 23.2608 24.2377 23.749 23.7496C24.2371 23.2615 24.2371 22.47 23.749 21.9818L16.7667 14.9996L23.7485 8.01662C24.2365 7.52842 24.2365 6.73697 23.7482 6.24886C23.2601 5.76073 22.4686 5.76081 21.9805 6.24901L14.9988 13.2318L8.0167 6.24961C7.52855 5.76146
                         6.73708 5.76146 6.24893 6.24961C5.76077 6.73777 5.76077 7.52922 6.24893 8.01738L13.2313 14.9997L6.24963
                         21.9826Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.41573 23.2464C4.86252 23.7998 4.86261 24.6967 5.4159 25.2499C5.96919 25.8031 6.86617 25.8031 7.41937 25.2497L15.3318 17.3359L23.2449 25.249C23.7981 25.8022 24.6951 25.8022 25.2483 25.249C25.8015 24.6958 25.8015 23.7988 25.2483 23.2456L17.3351 15.3324L25.2477 7.41832C25.8008 6.86502 25.8008 5.96805 25.2475 5.41485C24.6943 4.86165 23.7972 4.86173 23.244 5.41502L15.3315 13.3289L7.4184 5.4157C6.86517 4.86247 5.96817 4.86247 5.41494 5.4157C4.86169 5.96895 4.86169 6.86593 5.41494 7.41918L13.3283 15.3325L5.41573 23.2464Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </button>
            </div>


            <div class="accordion" id="mobileMenuAccord">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenuAccord1" aria-expanded="true" aria-controls="mobileMenuAccord1">
                            Home
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenuAccord2" aria-expanded="false" aria-controls="mobileMenuAccord2">
                            Spaces
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenuAccord3" aria-expanded="false" aria-controls="mobileMenuAccord3">
                            Products & Services
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenuAccord4" aria-expanded="false" aria-controls="mobileMenuAccord4">
                            Programs
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenuAccord5" aria-expanded="false" aria-controls="mobileMenuAccord5">
                            Classes
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenuAccord6" aria-expanded="false" aria-controls="mobileMenuAccord6">
                            Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>


    <div id="viewport">