<div x-data="{method: 'mobile'}">
    <div class="flex justify-between w-full overflow-hidden text-white rounded-md gap-x-2">
        <a href="#" @click.prevent="method = 'mobile'" class="font-english up-nav-tab active rounded-md w-[100%] py-1.5 text-center text-[14px] sm:text-[15px] h-full transition-all duration-300 leading-[23px]">Mobile BANKING</a>
        <a href="#" @click.prevent="method = 'bank'" class="font-english up-nav-tab active rounded-md w-[100%] py-1.5 text-center text-[14px] sm:text-[15px] h-full transition-all duration-300 leading-[23px]">Net BANKING</a>
    </div>


    <div class="overflow-auto p-0.5 mt-6 w-full pb-7 sm:pb-0">
        <div x-show="method == 'bank'" class="grid grid-cols-2 gap-5 pb-6 sm:grid-cols-4">
            @foreach ($gateways['Mobile Banking'] as $gateway)
            <a href="https://sandbox.uddoktapay.com/checkout/mobile/bkash/b3e014422428027deb017c28fa05fc6c7cc01399" class="w-full bank-img-div">
                <div class="card-input w-full ring-1 ring-[#0057d0]/10 rounded-md flex justify-center items-center">
                    <img src="https://sandbox.uddoktapay.com/assets/template/images/{{$gateway['image']}}" alt="bKash" class="w-full bank-img">
                </div>
            </a>
            @endforeach
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

    <div class="w-full fixed rounded-t-2xl backdrop-blur-sm py-[18px] bottom-0 left-0 sm:static sm:rounded-[10px] sm:px-4 sm:py-3.5 text-center bg-[#cde1ff]/80 font-semibold text-[#0057D0]">
        Pay 100.00 BDT
    </div>
</div>
