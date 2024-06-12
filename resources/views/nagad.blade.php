

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


        
        /* Nagad */
        .brand-bg {
            --tw-bg-opacity: 1;
            background-color: rgb(201 0 8 / var(--tw-bg-opacity));
        }

        .brand-hr {
            --tw-border-opacity: 1;
            border-color: rgb(175 0 7 / var(--tw-border-opacity));
        }

        .brand-btn {
            --tw-bg-opacity: 1;
            background-color: rgb(201 0 8 / var(--tw-bg-opacity));
        }

        .brand-btn:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(236 28 36 / var(--tw-bg-opacity));
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


<div class="up-container max-w-md overflow-hidden mx-auto p-8 sm:relative sm:bg-white sm:rounded-lg sm:shadow-lg sm:shadow-[#0057d0]/10 sm:min-w-[650px] sm:flex sm:flex-wrap">

<div class="w-full h-12 shadow-md shadow-[#0057d0]/5 rounded-lg overflow-hidden flex justify-between items-center p-5 bg-white sm:bg-[#fbfcff]  sm:shadow-none sm:ring-1 sm:ring-[#0057d0]/10">
<div class>
<a href="https://sandbox.uddoktapay.com/payment/b3e014422428027deb017c28fa05fc6c7cc01399">
<svg width="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.5 1C4.80558 1 1 4.80558 1 9.5C1 14.1944 4.80558 18 9.5 18C14.1944 18 18 14.1944 18 9.5C18 4.80558 14.1944 1 9.5 1Z" stroke="#6D7F9A" stroke-width="1.5"></path>
<path d="M10.7749 12.9L7.3749 9.50002L10.7749 6.10002" stroke="#94A9C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
<path d="M13 1L1 13" stroke="#94A9C7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M1 1L13 13" stroke="#6D7F9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</a>
</div>
</div>


<div class="w-full">
<div class="flex flex-col flex-wrap sm:flex-row sm:mt-5 sm:justify-between sm:items-center">
<div class="flex items-center justify-center w-full h-20 mb-4 sm:mt-0">
<img src="https://sandbox.uddoktapay.com/assets/template/images/nagad.png" alt="Logo" class="h-[80%]">
</div>
<div class="bg-white shadow shadow-[#0057d0]/5 rounded-lg px-5 py-3 sm:h-[85px] flex items-center sm:w-[70%] sm:shadow-none sm:ring-1 sm:ring-[#0057d0]/10">
<div class="w-[55px] h-[55px] p-1.5 flex justify-center items-center mr-4 ring-1 ring-[#0057d0]/10 rounded-full">
<img src="https://sandbox.uddoktapay.com/assets/dashboard/img/logo.png" alt="UddoktaPay Sandbox" class="w-[80%]">
</div>
<div class="flex flex-col">
<h3 class="font-semibold text-[#6D7F9A]">UddoktaPay Sandbox</h3>
<span class="text-[#94a9c7] text-sm font-english">Invoice ID:</span>
<p class="text-[#6D7F9A] text-sm select-all">3Okvsiv6L6T8BmlFtPHV</p>
</div>
</div>
<div class="bg-white shadow shadow-[#0057d0]/5 rounded-lg py-3 px-2 sm:h-[85px] flex flex-col sm:items-center sm:justify-center sm:shadow-none sm:ring-1 sm:ring-[#0057d0]/10 mt-3 sm:w-[25%] sm:mt-0">
<h1 class="text-xl sm:text-2xl font-semibold text-[#6D7F9A]">৳ 100.00</h1>
</div>
</div>
<form action="https://sandbox.uddoktapay.com/checkout/verify-payment-data" class="actionForm" method="post" accept-charset="utf-8">
<input type="hidden" name="payment_id" value="b3e014422428027deb017c28fa05fc6c7cc01399" />
<input type="hidden" name="payment_method" value="nagad" />
<input type="hidden" name="csrf_rt_66b314f7e4_token" value="b8b9ea645e15300b910c5ef48bc4b3af" />

<div class="p-5 mt-3 overflow-auto rounded-lg brand-bg">
<div class="text-center">
<h2 class="mb-3 font-semibold text-white font-english">Enter Transaction ID</h2>
<input type="text" id="maxLength" name="transaction_id" placeholder="Enter Transaction ID" class="font-english appearance-none w-full text-[15px] rounded-[10px] sm:bg-[#fbfcff] shadow shadow-[#0057d0]/5 px-5 py-3.5 placeholder-[#94A9C7] focus:outline-none focus:ring-1 focus:ring-[#0057d0]" maxlength="8" required>
<p id="warning-message"></p>
</div>

<div id="sender_number" class="mt-3 text-center">
<h2 class="mb-3 font-semibold text-white font-english">Enter Phone Number</h2>
<input type="text" name="phone_number" placeholder="Enter Phone Number" class="font-english appearance-none w-full text-[15px] rounded-[10px] sm:bg-[#fbfcff] shadow shadow-[#0057d0]/5 px-5 py-3.5 placeholder-[#94A9C7] focus:outline-none focus:ring-1 focus:ring-[#0057d0]" maxlength="12">
</div>


<div id="response_type" class="mt-3 text-center">
<h2 class="mb-3 font-semibold text-white font-english">Response Type</h2>
<select name="response_type" class="appearance-none w-full text-[15px] rounded-[10px] sm:bg-[#fbfcff] shadow shadow-[#0057d0]/5 px-5 py-3.5 placeholder-[#94A9C7] focus:outline-none focus:ring-1 focus:ring-[#0057d0]">
<option value="Completed">Completed</option>
<option value="Pending">Pending</option>
</select>
</div>

</div>

<div class="mt-5">
<button type="submit" id="form_submit" class="brand-btn block rounded-[10px] px-4 py-3.5 text-center font-semibold text-white transition-colors w-full">VERIFY</button>
</div>
</form> </div>

</div>


<script src="https://sandbox.uddoktapay.com/assets/dashboard/plugins/jquery/jquery.min.js"></script>

<script src="https://sandbox.uddoktapay.com/assets/template/js/jquery.redirect.js"></script>

<script src="https://sandbox.uddoktapay.com/assets/dashboard/plugins/toastr/toastr.min.js"></script>

<script>
        var base_url = 'https://sandbox.uddoktapay.com/';

        $(document).ready(function() {
            // Maax Length
            var minLength = 8;
            var maxLength = 8;
            $(document).on('keydown keyup change', '#maxLength', function() {
                var char = $(this).val();
                var charLength = $(this).val().length;
                if (charLength >= maxLength) {
                    $(this).val(char.substring(0, maxLength));
                }
            });

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

            // Action Form
            $(document).on('submit', '.actionForm', function(e) {
                e.preventDefault();
                var spinner = $('#page-overlay');
                spinner.show();
                var button = $('#form_submit');
                var isDisabled = true;
                button.attr('disabled', isDisabled);
                var _that = $(this),
                    _action = _that.attr("action");
                $.ajax({
                    url: _action,
                    data: $(this).serialize(),
                    method: 'POST',
                    dataType: 'JSON'
                }).done(function(response) {
                    spinner.hide();
                    if (response.status === 'success') {
                        toastr.success(response.message);
                        if (response.type === 'apiv2' && response.return_type === 'post') {
                            setTimeout(function() {
                                $.redirect(response.return_url, {
                                    invoice_id: response.invoice_id
                                });
                            }, 500);
                        } else {
                            setTimeout(function() {
                                window.location = response.return_url;
                            }, 500);
                        }
                    } else {
                        button.attr('disabled', !isDisabled);
                        toastr.error(response.message);
                    }
                });
            });
        });
    </script>
</body>
</html>