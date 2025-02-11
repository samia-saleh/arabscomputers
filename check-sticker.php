
<?php
// Database connection
$conn = new mysqli("localhost", "root", "root", "ara_c0omp_codes");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an error message variable
$redMessage = "";
$greenMessage = "";

// Check if the form is submitted
if (isset($_POST['check'])) {
    // Get the sticker code from the POST request
    $sticker = $_POST['serial_code'];

    // Query the database for the entered sticker code
    $selectresult = $conn->query("SELECT code FROM stickers WHERE code='$sticker'");

    // Check if the query returned any results
    if ($selectresult && $selectresult->num_rows > 0) {
        // Fetch the result as an associative array
        $row = $selectresult->fetch_assoc();

        // Print the fetched array for debugging
        // echo "<pre>";
        // var_dump($row);
        // echo "</pre>";

        // Set a success message
        $greenMessage = 'The code is correct ✅ هذا الرمز صحيح ';
    } else {
        // If no results, set an error message
        $redMessage = 'Code not found ❌ هذا الرمز غير موجود'; // Error in username or password, try again.
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link href="assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Check sticker – Arab Computers | حاسبات العرب</title>

</head>

<body>
    <header>
        <div class="header-container" id="header-container">
            <div class="image-container" id="imageContainer">
                <img src="assets/img/logo.png" alt="Logo" />
                <button class="menu-toggle " id="menuToggle">
                    <svg class="" width="22" height="18" viewBox="0 0 22 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line y1="2.39999" x2="22" y2="2.39999" stroke="black" stroke-width="1.5"></line>
                        <line y1="9.39999" x2="22" y2="9.39999" stroke="black" stroke-width="1.5"></line>
                        <line y1="16.4" x2="22" y2="16.4" stroke="black" stroke-width="1.5"></line>
                    </svg>
                </button>
            </div>
            <div class="nav-container">
                <nav class="navbar" id="navbar">
                    <ul>
                        <li><a href="https://arabcomputers.com.sa/">Home</a></li>
                        <li>
                            <a href="https://arabcomputers.com.sa/check-sticker/#">Products <i
                                    class="fa-solid fa-chevron-down"></i></a>
                            <ul class="Productdropdown">
                                <li><a href="https://arabcomputers.com.sa/product-category/iphone/"><img
                                            src="assets/img/iPhone.jpeg"><label>iPhone</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/mac/"><img
                                            src="assets/img/Mac.jpeg"><label>Mac</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/ipad/"><img
                                            src="assets/img/iPad.jpeg"><label>iPad</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/apple-watch/"><img
                                            src="assets/img/Apple-Watch.jpeg"><label>Apple Watch</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/airpods/"><img
                                            src="assets/img/AirPods.jpeg"><label>AirPods</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/beats/"><img
                                            src="assets/img/Beats.png"><label>Beats</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/apple-tv/"><img
                                            src="assets/img/Apple-TV.jpeg"><label>Apple TV</label></a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/airtag/"><img
                                            src="assets/img/AirTag.jpeg"><label>AirTag</label></a></li>
                            </ul>
                        </li>
                        <li><label>Accessories <i class="fa-solid fa-chevron-down"></i></label>
                            <ul class="Accessoriesdropdown">
                                <li><a href="https://arabcomputers.com.sa/apple-accessories/">Apple</a></li>
                                <li><a href="https://arabcomputers.com.sa/baykron/">Beykron</a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/beats/">Beats</a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/choetech/">Choetech</a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/epico/">Epico</a></li>
                                <li><a href="https://arabcomputers.com.sa/product-category/tingz/">Tingz</a></li>
                            </ul>
                        </li>
                        <li><a href="https://ac-care.com.sa/">Service</a></li>
                        <li><a href="https://arabcomputers.com.sa/point-of-sales/">Where to buy</a></li>
                        <li><label>Business <i class="fa-solid fa-chevron-down"></i></label>
                            <ul class="Bussinessdropdown">
                                <li><a href="https://arabcomputers.com.sa/ace/">AppleCare for Enterprise</a></li>
                                <li><a href="https://arabcomputers.com.sa/mac-does-that/">Mac does that</a></li>
                                <li><a href="https://arabcomputers.com.sa/11-reasons/">11 Reasons – Mac</a></li>
                                <li><a href="https://arabcomputers.com.sa/formcase/">Formcase</a></li>
                                <li><a href="https://arabcomputers.com.sa/wacom/">Wacom</a></li>
                            </ul>
                        </li>
                        <li><a href="https://arabcomputers.com.sa/dpp/">Be a Partner</a></li>
                        <li><a href="https://arabcomputers.com.sa/contact/">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="pages">
                <ul>
                    <li><a href="https://arabcomputers.com.sa/">Home</a> <i class="fa-solid fa-chevron-right"></i></li>
                    <li><label>Check sticker</label></li>
                </ul>
            </div>
        </div>
        <div class="sidemenu">
            <nav class="navbar" id="navbar">
                <h6><i class="fa-regular fa-bars"></i><label>Menu</label></h6>
                <ul>
                    <li><a href="https://arabcomputers.com.sa/"><label>Home</label></a></li>
                    <li>
                        <a href="https://arabcomputers.com.sa/check-sticker/#"><label>Products</label><i
                                class="fa-solid fa-chevron-right"></i> </a>

                    </li>
                    <li><a href="#"><label>Accessories </label><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                    <li><a href="https://ac-care.com.sa/"><label>Service</label></a></li>
                    <li><a href="https://arabcomputers.com.sa/point-of-sales/"><label>Where to buy</label></a></li>
                    <li><a href="#"><label>Business </label><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                    <li><a href="https://arabcomputers.com.sa/dpp/"><label>Be a Partner</label></a></li>
                    <li><a href="https://arabcomputers.com.sa/contact/"><label>Contact Us</label></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="sectionContainer">
            <h1>Warranty sticker validation</h1>
            <p>Check if the warranty sticker on your product is genuine and protect yourself from fake sticker.</p>
            <p>تأكد إذا كان ملصق الضمان الموجود على منتجك هو ملصق أصلي أو مزيف</p>
            <img src="assets/img/Check-sticker-serial-No.png" />
            <form method="post">
                <label>Enter the number shown on the sticker in this box:</label>
                <label>أدخل الرقم الموجود على الملصق هنا</label>
                <div class="input-container">
                    <input type="text" placeholder="XXXXXX"  id="serial_code"
                    name="serial_code"
                    maxlength="11" required="">
                    <button type="submit" name="check">Check</button>
                </div>
            </form>
            <div class="redmessage" > <?php echo $redMessage; ?>
            </div>
            <div class="greenmessage"> <?php echo $greenMessage; ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="row">
            <div class="col1">
                <img src="assets/img/logo.png">
                <div class="icon-container">
                    <a href="https://twitter.com/computers_arab"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/arab_computers/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/arabcomputers/"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col2">
                <h6>Useful Links</h6>
                <ul>
                    <li><a href="http://arabcomputers.twalab.live/">Home</a></li>
                    <li><a href="https://arabcomputers.com.sa/point-of-sales">Point Of Sales</a></li>
                    <li><a href="https://arabcomputers.com.sa/contact/">Contact Us</a></li>
                    <li><a href="https://arabcomputers.com.sa/dpp/">DPP</a></li>
                </ul>
            </div>
            <div class="col3">
                <h6>Products</h6>
                <ul>
                    <li><a href="https://arabcomputers.com.sa/product-category/iphone/">iPhone</a></li>
                    <li><a href="https://arabcomputers.com.sa/product-category/mac/">Mac</a></li>
                    <li><a href="https://arabcomputers.com.sa/product-category/ipad/">iPad</a></li>
                    <li><a href="https://arabcomputers.com.sa/product-category/ipod/">iPod</a></li>
                    <li><a href="https://arabcomputers.com.sa/product-category/apple-tv/">Apple TV</a></li>
                    <li><a href="https://arabcomputers.com.sa/product-category/apple-watch/">Apple Watch</a></li>
                </ul>
            </div>
            <div class="col4">
                <h6>Information</h6>
                <ul>
                    <li><label>Learn How</label></li>
                    <li><a href="https://arabcomputers.com.sa/apple-authorised-service-provider/">Service Providers</a>
                    </li>
                    <li><a href="https://arabcomputers.com.sa/terms-and-conditions/">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col5">
                <h6>Contact us</h6>
                <a href="https://ac-care.com.sa/">
                    <label>For Maintenance:</label>
                    <span><i class="fa-sharp fa-solid fa-location-arrow"></i> Visit AC-Care</span>
                </a>
                <a href="https://arabcomputers.com.sa/point-of-sales/">
                    <label>For individual sales:</label>
                    <span><i class="fa-sharp fa-solid fa-location-arrow"></i> Point of sales</span>
                </a>
                <a>
                    <label>For corporate or channels sales:</label>
                    <span><i class="fa-regular fa-envelope"></i> sales@arabcomputers.com.sa</span>
                </a>
            </div>
        </div>
        <div class="row">
            <label>© Arab Computers 2022. All Rights Reserved</label>
        </div>

    </footer>
    <a href="#header-container" class="arrow">
        <i class="fa-regular fa-arrow-up"></i>
    </a>
    <div class="footerNav">
        <button class="sidemenu-toggle" id="sidmenuToggle">
            <svg class="" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="2.39999" x2="22" y2="2.39999" stroke="black" stroke-width="1.5"></line>
                <line y1="9.39999" x2="22" y2="9.39999" stroke="black" stroke-width="1.5"></line>
                <line y1="16.4" x2="22" y2="16.4" stroke="black" stroke-width="1.5"></line>
            </svg>
        </button>
        <a href="https://arabcomputers.com.sa/">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.4661 7.08325V18.7499H4.13281V7.08325" stroke="black" stroke-width="1.5"
                    stroke-miterlimit="10"></path>
                <path d="M19.9661 8.75L10.7995 1.25L1.63281 8.75" stroke="black" stroke-width="1.5"
                    stroke-miterlimit="10"></path>
            </svg>
        </a>
    </div>

    
  <script src="assets/js/main.js"></script>

</body>

</html>