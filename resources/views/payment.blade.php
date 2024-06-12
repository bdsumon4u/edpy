
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Secure Checkout - UddoktaPay Sandbox</title>
<meta name="title" content="Secure Checkout - UddoktaPay Sandbox">
<link rel="icon" href="https://sandbox.uddoktapay.com/assets/dashboard/img/favicon.ico">
<meta name="description" content>

<meta property="og:type" content="website">
<meta property="og:url" content="https://sandbox.uddoktapay.com/">
<meta property="og:title" content="Secure Checkout - UddoktaPay Sandbox">
<meta property="og:description" content>
<meta property="og:image" content="https://sandbox.uddoktapay.com/">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://sandbox.uddoktapay.com/">
<meta property="twitter:title" content="Secure Checkout - UddoktaPay Sandbox">
<meta property="twitter:description" content>
<meta property="twitter:image" content="https://sandbox.uddoktapay.com/">

<link href="https://sandbox.uddoktapay.com/assets/template/css/uddoktapay.css" rel="stylesheet">

<link rel="stylesheet" href="https://sandbox.uddoktapay.com/assets/dashboard/plugins/toastr/toastr.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Inter:wght@100;200;300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style type="text/css">
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(350deg, #f4f9ff, #edf4ffc9), url('https://sandbox.uddoktapay.com/assets/template/images/body.png');
        }

        .font-bangla {
            font-family: 'Baloo Da 2', cursive;
        }

            </style>
</head>
<body class="w-full min-h-screen sm:h-auto sm:p-12 sm:flex sm:items-center sm:justify-center">

<div id="page-overlay" class="visible incoming">
<div class="loader-wrapper-outer">
<div class="loader-wrapper-inner">
<div class="lds-double-ring">
<div></div>
<div></div>
<div>
<div></div>
</div>
<div>
<div></div>
</div>
</div>
</div>
</div>
</div>


<div class="up-container max-w-md overflow-hidden mx-auto p-8 relative sm:bg-white sm:rounded-lg sm:shadow-lg sm:shadow-[#0057d0]/10 sm:min-w-[650px] sm:flex sm:flex-wrap">

<div class="w-full h-12 shadow-md shadow-[#0057d0]/5 rounded-lg overflow-hidden flex justify-between items-center p-5 bg-white sm:bg-[#fbfcff]  sm:shadow-none sm:ring-1 sm:ring-[#0057d0]/10">
<div class>
<a href="#">
<svg width="16" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 18V10H11V18" stroke="#94A9C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M1 6.95L8.5 1L16 6.95V16.3C16 16.7509 15.8244 17.1833 15.5118 17.5021C15.1993 17.8209 14.7754 18 14.3333 18H2.66667C2.22464 18 1.80072 17.8209 1.48816 17.5021C1.17559 17.1833 1 16.7509 1 16.3V6.95Z" stroke="#6D7F9A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</a>
</div>
<div class="flex items-center">
<a href="#" class="mr-5" id="language" data-language="english">
<svg width="17" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.39719 7.97288L4.88063 9.5H3.5625L5.77362 3.5625H7.29837L9.5 9.5H8.11419L7.59762 7.97288H5.39719ZM7.33756 7.09888L6.53125 4.69775H6.47306L5.66675 7.09888H7.33875H7.33756Z" fill="#94A9C7"></path>
<path d="M0 2.375C0 1.74511 0.250223 1.14102 0.695621 0.695621C1.14102 0.250223 1.74511 0 2.375 0L10.6875 0C11.3174 0 11.9215 0.250223 12.3669 0.695621C12.8123 1.14102 13.0625 1.74511 13.0625 2.375V5.9375H16.625C17.2549 5.9375 17.859 6.18772 18.3044 6.63312C18.7498 7.07852 19 7.68261 19 8.3125V16.625C19 17.2549 18.7498 17.859 18.3044 18.3044C17.859 18.7498 17.2549 19 16.625 19H8.3125C7.68261 19 7.07852 18.7498 6.63312 18.3044C6.18772 17.859 5.9375 17.2549 5.9375 16.625V13.0625H2.375C1.74511 13.0625 1.14102 12.8123 0.695621 12.3669C0.250223 11.9215 0 11.3174 0 10.6875V2.375ZM2.375 1.1875C2.06006 1.1875 1.75801 1.31261 1.53531 1.53531C1.31261 1.75801 1.1875 2.06006 1.1875 2.375V10.6875C1.1875 11.0024 1.31261 11.3045 1.53531 11.5272C1.75801 11.7499 2.06006 11.875 2.375 11.875H10.6875C11.0024 11.875 11.3045 11.7499 11.5272 11.5272C11.7499 11.3045 11.875 11.0024 11.875 10.6875V2.375C11.875 2.06006 11.7499 1.75801 11.5272 1.53531C11.3045 1.31261 11.0024 1.1875 10.6875 1.1875H2.375ZM10.8514 13.0566C11.0806 13.414 11.3287 13.7489 11.5995 14.0612C10.7112 14.744 9.61281 15.2499 8.3125 15.5954C8.52388 15.8531 8.84806 16.3495 8.97156 16.625C10.3075 16.1987 11.4416 15.6227 12.3987 14.8509C13.3214 15.6406 14.4638 16.2343 15.8781 16.5989C16.036 16.2972 16.3697 15.7997 16.625 15.542C15.2891 15.2416 14.1823 14.7179 13.2763 14.0173C14.0849 13.1302 14.7274 12.0567 15.2012 10.7433H16.625V9.5H13.0625V10.7433H13.9709C13.5933 11.7456 13.0922 12.5792 12.4604 13.2727C12.2859 13.0868 12.1214 12.8918 11.9676 12.6884C11.6325 12.9033 11.2485 13.0299 10.8514 13.0566Z" fill="#6D7F9A"></path>
</svg>
</a>
<a href="/cancel">
<svg width="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13 1L1 13" stroke="#94A9C7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
</path>
<path d="M1 1L13 13" stroke="#6D7F9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
</path>
</svg>
</a>
</div>
</div>


<div class="flex flex-col items-center w-full mb-6 mt-7 sm:mb-3 sm:flex-row">
<div class="mb-4 sm:mr-8">
<img src="https://sandbox.uddoktapay.com/assets/dashboard/img/logo.png" alt="UddoktaPay Sandbox" class="w-24 sm:w-[85px] rounded-full overflow-hidden object-cover ring-1 cursor-pointer transition-all duration-300 hover:scale-105">
</div>
<div class="flex flex-col items-center sm:items-start">
<div class="mb-4 sm:mb-3">
<h3 class="font-semibold text-xl text-[#6D7F9A]">UddoktaPay Sandbox</h3>
</div>
<div class="flex">
<a href="#" data-tab="supportSection" id="supportSectionup" class="up-nav-tab2 section-btn active-profile">
<svg width="22" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.8 9.8C20.8 7.46609 19.8728 5.22778 18.2225 3.57746C16.5722 1.92714 14.3339 1 12 1C9.66605 1 7.42773 1.92714 5.77741 3.57746C4.12709 5.22778 3.19995 7.46609 3.19995 9.8" stroke="#6D7F9A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
</path>
<path d="M20.8 17.5V18.05C20.8 18.6335 20.5682 19.1931 20.1556 19.6056C19.7431 20.0182 19.1835 20.25 18.6 20.25H14.75M1 14.6818V12.6182C1.00007 12.1276 1.16412 11.6511 1.46608 11.2645C1.76803 10.8778 2.19055 10.6032 2.6665 10.4842L4.5805 10.0046C4.67776 9.98039 4.77926 9.97863 4.87729 9.99948C4.97533 10.0203 5.06733 10.0632 5.14631 10.1249C5.2253 10.1866 5.28919 10.2655 5.33315 10.3556C5.3771 10.4457 5.39996 10.5446 5.4 10.6448V16.6541C5.40017 16.7546 5.37742 16.8537 5.33347 16.944C5.28953 17.0343 5.22555 17.1134 5.14641 17.1753C5.06727 17.2371 4.97506 17.2801 4.8768 17.3009C4.77854 17.3217 4.67682 17.3198 4.5794 17.2954L2.6654 16.8169C2.18966 16.6977 1.76738 16.423 1.46564 16.0364C1.1639 15.6497 1.00001 15.1734 1 14.6829V14.6818ZM23 14.6818V12.6182C22.9999 12.1276 22.8359 11.6511 22.5339 11.2645C22.232 10.8778 21.8094 10.6032 21.3335 10.4842L19.4195 10.0046C19.3222 9.98039 19.2207 9.97863 19.1227 9.99948C19.0247 10.0203 18.9327 10.0632 18.8537 10.1249C18.7747 10.1866 18.7108 10.2655 18.6669 10.3556C18.6229 10.4457 18.6 10.5446 18.6 10.6448V16.6541C18.5999 16.7544 18.6226 16.8535 18.6665 16.9437C18.7104 17.0339 18.7742 17.1129 18.8533 17.1747C18.9323 17.2366 19.0243 17.2796 19.1224 17.3005C19.2206 17.3214 19.3222 17.3197 19.4195 17.2954L21.3335 16.8169C21.8094 16.6979 22.232 16.4233 22.5339 16.0366C22.8359 15.65 22.9999 15.1735 23 14.6829V14.6818Z" stroke="#94A9C7" stroke-width="1.5"></path>
<path d="M13.65 21.9H10.35C9.91234 21.9 9.49266 21.7261 9.18322 21.4167C8.87379 21.1073 8.69995 20.6876 8.69995 20.25C8.69995 19.8124 8.87379 19.3927 9.18322 19.0833C9.49266 18.7738 9.91234 18.6 10.35 18.6H13.65C14.0876 18.6 14.5072 18.7738 14.8167 19.0833C15.1261 19.3927 15.3 19.8124 15.3 20.25C15.3 20.6876 15.1261 21.1073 14.8167 21.4167C14.5072 21.7261 14.0876 21.9 13.65 21.9Z" stroke="#6D7F9A" stroke-width="1.5"></path>
</svg>
<div class>
<span class="hidden sm:block text-[14px] text-[#879ab6] ml-3 font-english">Support</span>
</div>
</a>
<a href="#" data-tab="faqSection" id="faqSectionup" class="mx-5 up-nav-tab2 section-btn">
<svg width="22" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.5 1C9.4233 1 7.39323 1.61581 5.66652 2.76957C3.9398 3.92332 2.59399 5.5632 1.79927 7.48182C1.00455 9.40045 0.796615 11.5116 1.20176 13.5484C1.6069 15.5852 2.60693 17.4562 4.07538 18.9246C5.54383 20.3931 7.41475 21.3931 9.45155 21.7982C11.4884 22.2034 13.5996 21.9955 15.5182 21.2007C17.4368 20.406 19.0767 19.0602 20.2304 17.3335C21.3842 15.6068 22 13.5767 22 11.5C22 8.71523 20.8938 6.04451 18.9246 4.07538C16.9555 2.10625 14.2848 1 11.5 1Z" stroke="#6D7F9A" stroke-width="1.5" stroke-miterlimit="10"></path>
<path d="M8.15918 8.29571C8.15918 8.29571 8.20929 7.25167 9.32671 6.35261C9.98952 5.81866 10.7842 5.66415 11.5001 5.65341C12.1522 5.64505 12.7344 5.75304 13.0828 5.91889C13.6794 6.20287 14.841 6.8961 14.841 8.37028C14.841 9.92142 13.8268 10.626 12.6712 11.401C11.5156 12.1759 11.2018 13.0171 11.2018 13.8864" stroke="#94A9C7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round">
</path>
<path d="M11.1422 18.1818C11.8011 18.1818 12.3353 17.6476 12.3353 16.9887C12.3353 16.3297 11.8011 15.7955 11.1422 15.7955C10.4832 15.7955 9.94897 16.3297 9.94897 16.9887C9.94897 17.6476 10.4832 18.1818 11.1422 18.1818Z" fill="#A1B3CE"></path>
</svg>
<div class>
<span class="hidden sm:block text-[14px] text-[#879ab6] ml-3 font-english">FAQ</span>
</div>
</a>
<a href="#" data-tab="transactionsSection" id="transactionsSectionup" class="up-nav-tab2 section-btn">
<svg width="22" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.5 1C5.7016 1 1 5.7016 1 11.5C1 17.2984 5.7016 22 11.5 22C17.2984 22 22 17.2984 22 11.5C22 5.7016 17.2984 1 11.5 1Z" stroke="#6D7F9A" stroke-width="1.5" stroke-miterlimit="10"></path>
<path d="M10 10H12V17" stroke="#94A9C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M9 17H14" stroke="#94A9C7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"></path>
<path d="M11.5 5C11.2033 5 10.9133 5.08797 10.6666 5.2528C10.42 5.41762 10.2277 5.65189 10.1142 5.92597C10.0006 6.20006 9.97095 6.50166 10.0288 6.79263C10.0867 7.08361 10.2296 7.35088 10.4393 7.56066C10.6491 7.77044 10.9164 7.9133 11.2074 7.97118C11.4983 8.02906 11.7999 7.99935 12.074 7.88582C12.3481 7.77229 12.5824 7.58003 12.7472 7.33335C12.912 7.08668 13 6.79667 13 6.5C13 6.10218 12.842 5.72064 12.5607 5.43934C12.2794 5.15803 11.8978 5 11.5 5Z" fill="#94A9C7"></path>
</svg>
<div class>
<span class="hidden sm:block text-[14px] text-[#879ab6] ml-3 font-english">Details</span>
</div>
</a>
</div>
</div>
</div>


<div class="flex w-full justify-between bg-[#0057d0] text-white overflow-hidden rounded-md">
<a href="#" data-tab="mobile_banking" id="mobile_banking_btn" class="font-english up-nav-tab active rounded-md w-[100%] py-1.5 text-center text-[14px] sm:text-[15px] h-full transition-all duration-300 leading-[23px]">MOBILE BANKING</a>
</div>


<div class="overflow-auto p-0.5 mt-6 w-full pb-7 sm:pb-0">

<div id="mobile_banking" class="up-tab active">
<div class="grid grid-cols-2 gap-5 pb-6 sm:grid-cols-4">
<a href="https://sandbox.uddoktapay.com/checkout/mobile/bkash/b3e014422428027deb017c28fa05fc6c7cc01399" class="w-full bank-img-div">
<div class="card-input w-full ring-1 ring-[#0057d0]/10 rounded-md flex justify-center items-center">
<img src="https://sandbox.uddoktapay.com/assets/template/images/bkash.png" alt="bKash" class="w-full bank-img">
</div>
</a>
<a href="https://sandbox.uddoktapay.com/checkout/mobile/nagad/b3e014422428027deb017c28fa05fc6c7cc01399" class="bank-img-div">
<div class="card-input w-full ring-1 ring-[#0057d0]/10 rounded-md flex justify-center items-center">
<img src="https://sandbox.uddoktapay.com/assets/template/images/nagad.png" alt="Nagad" class="bank-img">
</div>
</a>
<a href="https://sandbox.uddoktapay.com/checkout/mobile/rocket/b3e014422428027deb017c28fa05fc6c7cc01399" class="bank-img-div">
<div class="card-input w-full ring-1 ring-[#0057d0]/10 rounded-md flex justify-center items-center">
<img src="https://sandbox.uddoktapay.com/assets/template/images/rocket.png" alt="Rocket" class="bank-img">
</div>
</a>
<a href="https://sandbox.uddoktapay.com/checkout/mobile/upay/b3e014422428027deb017c28fa05fc6c7cc01399" class="bank-img-div">
<div class="card-input w-full ring-1 ring-[#0057d0]/10 rounded-md flex justify-center items-center">
<img src="https://sandbox.uddoktapay.com/assets/template/images/upay.png" alt="Upay" class="bank-img">
</div>
</a>
<a href="https://sandbox.uddoktapay.com/checkout/mobile/cellfin/b3e014422428027deb017c28fa05fc6c7cc01399" class="bank-img-div">
<div class="card-input w-full ring-1 ring-[#0057d0]/10 rounded-md flex justify-center items-center">
<img src="https://sandbox.uddoktapay.com/assets/template/images/cellfin.png" alt="Cellfin" class="bank-img">
</div>
</a>
</div>
</div>


<div id="supportSection" class="up-tab">
<div class="flex flex-col justify-between sm:flex-row sm:flex-wrap">
</div>
</div>


<div id="faqSection" class="up-tab">
<div class="flex flex-col py-2">
</div>
</div>


<div id="transactionsSection" class="up-tab">
<div class="bg-white rounded-lg shadow-md shadow-[#0057d0]/5">
<div class="px-5 py-4 sm:py-0 text-center rounded-lg bg-[#e5efff] sm:bg-transparent text-[#0057d0] font-semibold">
<h2 class="font-english">Transaction Details</h2>
</div>
<ul class="px-5 py-4 sm:mb-5">
<li class="flex justify-between text-sm text-[#6D7F9A] sm:text-base font-semibold">
<p class="font-english">Invoice To:</p>
<p>Nazmul</p>
</li>
<hr class="my-3 sm:my-1.5 border-[#6D7F9A]/10">
<li class="flex justify-between text-sm text-[#6D7F9A]">
<p class="font-english">Amount:</p>
<p>100.00 BDT</p>
</li>
<hr class="my-3 sm:my-1.5 border-[#6D7F9A]/10">
<li class="flex justify-between text-sm text-[#6D7F9A]">
<p class="font-semibold font-english">Total Payable Amount:</p>
<p class="font-semibold text-[#0057d0]">100.00 BDT</p>
</li>
</ul>
</div>
</div>

</div>

<div class="w-full fixed rounded-t-2xl backdrop-blur-sm py-[18px] bottom-0 left-0 sm:static sm:rounded-[10px] sm:px-4 sm:py-3.5 text-center bg-[#cde1ff]/80 font-semibold text-[#0057D0]">
Pay 100.00 BDT </div>
</div>

<button style="display:none" id="bKash_button"></button>

<script src="https://sandbox.uddoktapay.com/assets/dashboard/plugins/jquery/jquery.min.js"></script>

<script src="https://sandbox.uddoktapay.com/assets/dashboard/plugins/toastr/toastr.min.js"></script>

<script src="https://sandbox.uddoktapay.com/assets/template/js/jquery.redirect.js"></script>
<script>
        var base_url = 'https://sandbox.uddoktapay.com/';
        $(document).ready(function() {
            // Change Language
            $(document).on('click', '#language', function() {
                var _action = base_url + 'change-language';
                var _language = $(this).attr('data-language');
                $.ajax({
                    url: _action,
                    data: {
                        'csrf_rt_66b314f7e4_token': 'b8b9ea645e15300b910c5ef48bc4b3af',
                        language: _language
                    },
                    method: 'POST',
                    dataType: 'JSON'
                }).done(function(response) {
                    window.location.reload(true);
                });
            });

            // FAQ
            $(document).on('click', '.titleWrapper', function() {
                var toggle = $(this).next('div#descwrapper');
                $(toggle).slideToggle("slow");
            });

            $(document).on('click', '.inactive', function() {
                $(this).toggleClass('inactive active');
            });


            // Header Section
            $(document).on('click', '#supportSectionup', function() {
                $(this).addClass("active")
            });

            $(document).on('click', '#faqSectionup', function() {
                $(this).addClass("active")
            });

            $(document).on('click', '#transactionsSectionup', function() {
                $(this).addClass("active")
            });
        });
    </script>
<script>
        function Tabs() {
            var bindAll = function() {
                var menuElements = document.querySelectorAll('[data-tab]');
                for (var i = 0; i < menuElements.length; i++) {
                    menuElements[i].addEventListener('click', change, false);
                }
            }

            var clear = function() {
                var menuElements = document.querySelectorAll('[data-tab]');
                for (var i = 0; i < menuElements.length; i++) {
                    menuElements[i].classList.remove('active');
                    var id = menuElements[i].getAttribute('data-tab');
                    document.getElementById(id).classList.remove('active');
                }
            }

            var change = function(e) {
                clear();
                e.target.classList.add('active');
                var id = e.currentTarget.getAttribute('data-tab');
                document.getElementById(id).classList.add('active');
            }

            bindAll();
        }

        var connectTabs = new Tabs();
    </script>
</body>