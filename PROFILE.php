<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFILE</title>
    <link rel="shortcut icon" type="image/x-icon" href="./imgs/LOGO.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/MAIN.css">
    <link rel="stylesheet" href="./CSS/HOME.css">
    <link rel="stylesheet" href="./CSS/PROFILE.css">
    <!-- SCROLL EFFECTS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- GOOGLE FONTS (POPPINS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- GOOGLE ICONS -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <!--================================ NAVIGATION BAR ================================-->
    <nav>
        <div class="container nav__container">
            <a href="HOME.html" id="logo"><img src="./imgs/logo.png" alt="" class="logo__img">
                <h4>PUP Cafeteria Automation System</h4>
            </a>
            <ul class="nav_menu">
                <li id="search">
                    <input type="text" class="other_details_text" name="Other Details" placeholder="Type a keyword"
                        autocomplete="off">
                    <span class="material-symbols-outlined">search</span>
                </li>
                <li id="homepage_icon">
                    <span class="material-symbols-outlined">home</span>
                </li>
                <li id="profile">
                    <img src="./imgs/CORNDOG.jpg" alt="">
                </li>
            </ul>
            <button id="open_menu_btn"><i class="bi bi-list"></i></button>
            <button id="close_menu_btn"><i class="bi bi-x-lg"></i></button>
        </div>
    </nav>
    <!--================================ END OF NAVIGATION BAR ================================-->

    <!--================================ CONTAINER ================================-->
    <section class="container homepage_container">
        <!--================== HOME - NAVIGATION ===================-->
        <div class="home_navigation_section">
            <!--CAROUSEL-->
            <div class="carousel_container">
                <div class="slider">
                    <div class="slide">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <input type="radio" name="radio-btn" id="radio5">

                        <div class="img_container first">
                            <img src="./imgs/CarItem1.png" alt="...">
                        </div>
                        <div class="img_container">
                            <img src="./imgs/CarItem1.png" alt="...">
                        </div>
                        <div class="img_container">
                            <img src="./imgs/CarItem1.png" alt="...">
                        </div>
                        <div class="img_container">
                            <img src="./imgs/CarItem1.png" alt="...">
                        </div>
                        <div class="img_container">
                            <img src="./imgs/CarItem1.png" alt="...">
                        </div>

                        <div class="nav_auto">
                            <div class="a-b1"></div>
                            <div class="a-b2"></div>
                            <div class="a-b3"></div>
                            <div class="a-b4"></div>
                            <div class="a-b5"></div>
                        </div>
                    </div>

                    <div class="nav-m">
                        <label for="radio1" class="m-btn"></label>
                        <label for="radio2" class="m-btn"></label>
                        <label for="radio3" class="m-btn"></label>
                        <label for="radio4" class="m-btn"></label>
                        <label for="radio5" class="m-btn"></label>
                    </div>
                </div>

            </div>
            <!--FEATURED ITEMS-->
            <div class="featured_items">
                <div class="featured_items_texts">
                    <h3>
                        Featured Items
                    </h3>
                </div>

                <?php
$items = [
    [
        'name' => 'FEWA',
        'price' => 'P 39.00',
        'image' => './imgs/FEWA.webp'
    ],
    [
        'name' => 'SUBMARINE',
        'price' => 'P 40.00',
        'image' => './imgs/SUBMARINE.webp'
    ],
    [
        'name' => 'CLUBHOUSE',
        'price' => 'P 39.00',
        'image' => './imgs/CLUBHOUSE.jpg'
    ],
    [
        'name' => 'CORNDOG',
        'price' => 'P 15.00',
        'image' => './imgs/CORNDOG.jpg'
    ]
];

?>

<div class="swiper mySwiper featured_items_container">
    <div class="swiper-wrapper content">
        <?php foreach ($items as $item): ?>
        <div class="swiper-slide card">
            <div class="card_content">
                <div class="image">
                    <img src="<?php echo $item['image']; ?>" alt="">
                </div>

                <div class="fItem_details">
                    <div class="fItem_texts">
                        <p id="item_name"><?php echo $item['name']; ?></p>
                        <P id="item_price"><?php echo $item['price']; ?></P>
                    </div>
                    <div class="icon">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

            <!--CAFETERIAS-->
            <div class="cafeterias">
                <div class="cafeterias_texts">
                    <h3>
                        Cafeterias/Stalls
                    </h3>
                </div>

                <div class="cafeterias__container">
                    <article class="cafeteria" id="caf1">
                        <div class="shadow"></div>
                        <h3>Unlimited and Refillable Lugaw</h3>
                        <div class="cafeteria_tags">
                            <p>lugaw</p>
                            <p>lumpia</p>
                            <p>egg</p>
                        </div>
                        <a href="#">
                            <p>View Stall</p>
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </a>
                    </article>

                    <article class="cafeteria" id="caf2">
                        <div class="shadow"></div>
                        <h3>PUP Lagoon Food Stall 1</h3>
                        <div class="cafeteria_tags">
                            <p>carbonara</p>
                            <p>submarine</p>
                            <p>corndog</p>
                        </div>
                        <a href="#">
                            <p>View Stall</p>
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </a>
                    </article>
                </div>
            </div>
        </div>

        <!--================== HOME - ORDERS ===================-->
        <div class="my_orders_section">
            <div class="my_orders_texts">
                <span class="material-symbols-outlined">receipt</span>
                <h3>My Orders</h3>
            </div>

            <div class="my_orders" id="order1">
                <div class="my_order_profile">
                    <div class="image">
                        <img src="./imgs/SUBMARINE.webp" alt="">
                    </div>
                    <div class="my_order_profile_details">
                        <h4>Carbonara</h4>
                        <p class="my_order_price">Unit Price:<span>&nbsp; P 20.00</span></p>
                        <p class="my_order_stall"><i class="bi bi-shop-window"></i>
                            PUP Lagoon Food Stall 1
                        </p>
                    </div>
                </div>
                <div class="my_order_details">
                    <div class="item_name_quantity order_detail">
                        <div class="item_name">
                            <p class="label">Item:</p>
                            <p class="text">Carbonara</p>
                        </div>
                        <div class="item_quantity">
                            <p class="label">Quantity:</p>
                            <p class="text">2</p>
                        </div>
                    </div>
                    <div class="item_others order_detail">
                        <p class="label">Others:</p>
                        <p class="text">None</p>
                    </div>
                    <div class="my_order_total order_detail">
                        <p class="label">Total:</p>
                        <p class="text">P 40.00</p>
                    </div>
                </div>
            </div>

            <div class="my_orders" id="order2">
                <div class="my_order_profile">
                    <div class="image">
                        <img src="./imgs/FEWA.webp" alt="">
                    </div>
                    <div class="my_order_profile_details">
                        <h4>FEWA</h4>
                        <p class="my_order_price">Unit Price:<span>&nbsp; P 20.00</span></p>
                        <p class="my_order_stall"><i class="bi bi-shop-window"></i>
                            FEWA Stall
                        </p>
                    </div>
                </div>
                <div class="my_order_details">
                    <div class="item_name_quantity order_detail">
                        <div class="item_name">
                            <p class="label">Item:</p>
                            <p class="text">FEWA</p>
                        </div>
                        <div class="item_quantity">
                            <p class="label">Quantity:</p>
                            <p class="text">4</p>
                        </div>
                    </div>
                    <div class="item_others order_detail">
                        <p class="label">Others:</p>
                        <p class="text">Hotdog istead of footlong. No Cheese</p>
                    </div>
                    <div class="my_order_total order_detail">
                        <p class="label">Total:</p>
                        <p class="text">P 80.00</p>
                    </div>
                </div>
            </div>
        </div>

        <!--POPUP MESSAGE-->
        <div class="popUp__message__container">
            <div class="popUp__message">
                <div class="popUp__item__details">
                    <div class="image">
                        <img src="./imgs/CORNDOG.jpg" alt="">
                    </div>
                    <div class="name_price">
                        <h4>Corndog</h4>
                        <p>Unit Price:<span>&nbsp;P 15.00</span></p>
                    </div>
                    <div class="quantity">
                        <p id="label">Quantity</p>
                        <div class="input">
                            <i class="bi bi-dash"></i>
                            <p id="text">1</p>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="other_details">
                    <p>Other details (please specify)</p>
                    <input type="text" class="other_details_text" name="Other Details"
                        placeholder="e.g: no hotdog; additional fork; etc." autocomplete="off">
                </div>
                <div class="order_summary">
                    <p>Summary</p>
                    <div class="content">
                        <div class="left">
                            <div class="top">
                                <p>Item: <span>&nbsp;Corndog</span></p>
                                <p>Quantity: <span>&nbsp;2</span></p>
                            </div>
                            <div class="bottom">
                                <p>Others: <span>&nbsp;None</span></p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Total:</p>
                            <h4 id="total_price">&nbsp;P 30.00</h4>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="button" class="order-btn btn" id="close_btn">Cancel</button>
                    <button type="submit" class="order-btn btn">Place Order</button>
                </div>
            </div>
        </div>
    </section>
    <!--================================ END OF CONTAINER ================================-->



    <!--================================ SHOW PROFILE ================================-->
    <section class="show-profile">
        <div class="profile-container">
            <i class="bi bi-x-square-fill close-profile"></i>
            <i class="bi bi-box-arrow-left" id="log-out-btn"></i>
            <div class="profile-header-container">
                <div class="profile-header">
                    <div class="img-container">
                        <img src="./imgs/CORNDOG.jpg" alt="">
                    </div>
                    <h4 id="name">Mark Zuckerberg</h4>
                    <p id="section">BSIT 2-2</p>
                    <div class="profile-label">
                        <p class="information-label">
                            Information
                        </p>
                        <p class="order-history-label">
                            Order History
                        </p>
                    </div>
                </div>
            </div>

            <div class="mySwiper profile-history-container">
                <!-- INFORMATION -->
                <div class="swiper-wrapper">
                <div class="swiper-slide profile-information-details-container">
                    <div class="profile-information-details">
                        <div class="profile-information">
                            <i class="bi bi-circle-fill"></i>
                            <div class="detail">
                                <p class="label">Name</p>
                                <p class="name">Mark Zuckerberg</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                    <div class="profile-information-details">
                        <div class="profile-information">
                            <i class="bi bi-circle-fill"></i>
                            <div class="detail">
                                <p class="label">Section</p>
                                <p class="name">BSIT 2-2</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                    <div class="profile-information-details">
                        <div class="profile-information">
                            <i class="bi bi-circle-fill"></i>
                            <div class="detail">
                                <p class="label">Student Number</p>
                                <p class="name">2024-03201-MN-0</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                    <div class="profile-information-details">
                        <div class="profile-information">
                            <i class="bi bi-circle-fill"></i>
                            <div class="detail">
                                <p class="label">Password</p>
                                <p class="name">************</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                </div>

                <!-- ORDER HISTORY -->
                <div class="swiper-slide profile-order-details-container">
                    <div class="order-history-card">
                        <p class="date">Today 11:12AM</p>
                        <div class="order-history-details">
                            <div class="image">
                                <img src="./imgs/Arroz Caldo.jpg" alt="">
                            </div>
                            <div class="details">
                                <p class="name"><span>2 </span>Carbonara</p>
                                <p class="prize">P 40.00</p>
                            </div>
                            <button class="btn">delete</button>
                        </div>
                    </div>
                    <div class="order-history-card">
                        <p class="date">Today 11:12AM</p>
                        <div class="order-history-details">
                            <div class="image">
                                <img src="./imgs/Arroz Caldo.jpg" alt="">
                            </div>
                            <div class="details">
                                <p class="name"><span>2 </span>Carbonara</p>
                                <p class="prize">P 40.00</p>
                            </div>
                            <button class="btn">delete</button>
                        </div>
                    </div>
                    <div class="end-line">
                        <div class="line"></div>
                        <p>end</p>
                        <div class="line"></div>
                    </div>
                </div>
                </div>
                <div class="swiper-pagination profile-history-pagination"></div>

            </div>
        </div>
    </section>
    <!--================================ END - SHOW PROFILE ================================-->


    <!-- JAVASCRIPT -->
    <script src="./SCRIPT.js"></script>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function () {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 5) {
                counter = 1;
            }
        }, 5000);

        /* SHOW PROFILE */
        const openProfile = document.querySelector('#profile');
        const closeProfile = document.querySelector('.close-profile');
        const popUpProfile = document.querySelector('.show-profile');
        const profileContainer = document.querySelector('.profile-container');

        openProfile.addEventListener('click', () => {
            popUpProfile.style.visibility = "visible";
            popUpProfile.style.opacity = "1";
            profileContainer.style.transform = profileContainer.style.transform === 'translateX(0%)' ? 'translateX(100%)' : 'translateX(0%)';
        });

        closeProfile.addEventListener('click', () => {
            popUpProfile.style.visibility = "hidden";
            popUpProfile.style.opacity = "0";
            profileContainer.style.transform = profileContainer.style.transform === 'translateX(0%)' ? 'translateX(100%)' : 'translateX(0%)';
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".featured_items_container", {
            slidesPerView: 4.5,
            spaceBetween: 30,
            grabCursor: true
        });

        var swiper = new Swiper(".profile-history-container", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <!-- SCROLL EFFECTS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>