@props([
    'heading' => null,
    'subheading' => null,
])

<div {{ $attributes->class(['fi-simple-page']) }}>
    <section x-data="{
        tab:'Mobile Banking',
        setTab(tab) {
            this.tab = tab;
        },
        copyNotification: false,
        copyToClipboard() {
            navigator.clipboard.writeText('{{$method?->meta['number']}}');
            this.copyNotification = true;
            let that = this;
            setTimeout(function(){
                that.copyNotification = false;
            }, 3000);
        }
    }" class="grid p-2 auto-cols-fr gap-y-3">
        <div class="flex items-center justify-between p-2 border rounded-md bg-gray-50">
            <a wire:navigate href="{{route('make-payment', $invoice)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-around">
            <!-- Logo -->
            <img src="https://www.cyber32.com/files/uploads/logo-text.png" alt="HotashPay Logo" class="w-16 h-16 border rounded-md">

            <!-- Title -->
            <div>
                <h1 class="text-3xl font-semibold text-center text-black">HotashPay</h1>
                <!-- Buttons -->
                <div class="flex justify-center space-x-2">
                    <button class="flex items-center px-3 py-1 space-x-1 text-blue-600 bg-blue-100 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 12a1 1 0 00-1 1v2a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 00-1-1H9z" />
                            <path fill-rule="evenodd" d="M5 4a2 2 0 00-2 2v8a2 2 0 002 2h1v-2a2 2 0 012-2h4a2 2 0 012 2v2h1a2 2 0 002-2V6a2 2 0 00-2-2H5zm2 8a2 2 0 114 0v2H7v-2z" clip-rule="evenodd" />
                        </svg>
                        <span>Support</span>
                    </button>
                    <button class="flex items-center px-3 py-1 space-x-1 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 4a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm6.707 6.293a1 1 0 00-1.414 0L4 13.586V8a1 1 0 00-2 0v6a1 1 0 001 1h6a1 1 0 000-2H6.414l2.293-2.293a1 1 0 000-1.414z" />
                        </svg>
                        <span>Details</span>
                    </button>
                </div>
            </div>
        </div>
        @if($method)
        <div class="p-4 bg-pink-100 rounded-lg">
            <p class="py-1 text-sm text-gray-700 border-b-2">* 167 # ডায়াল করে আপনার NAGAD মোবাইল থেকে টাকা NAGAD ওয়ালেটে ঢালুন।</p>
            <p class="py-1 text-sm text-gray-700 border-b-2">"Send Money" তে ক্লিক করুন</p>
            <p class="py-1 text-sm text-gray-700 border-b-2">নিচে থাকা নাম্বারটি পাস্বর্ড নাম্বার হিসাবে লিখুন</p>
            <div class="flex items-center justify-between py-1 border-b-2">
                <span class="text-xl font-semibold text-red-500">{{$method->meta['number']}}</span>
                <button class="px-3 py-1 text-white bg-red-500 rounded-lg" @click="copyToClipboard()">
                    <span x-show="!copyNotification">Copy</span>
                    <span x-show="copyNotification" class="tracking-tight">Copied</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2">
                <span class="text-sm text-gray-700">টোটাল টাকার পরিমাণ</span>
                <span class="text-xl font-semibold text-red-500">৳{{$invoice->amount}}</span>
            </div>
            <p class="text-sm text-gray-700 border-b-2">নিচে বক্সটি আসতে NAGAD দিন লিখুন</p>
            <div class="grid grid-cols-3 my-2 border border-gray-700">
                <input type="text" placeholder="ট্রানজেকশন আইডি দিন" class="w-full col-span-2 text-center border-none focus:ring-0">
                <button class="flex items-center justify-center text-white bg-gray-700 border rounded hover:bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>

                    <span>CONFIRM</span>
                </button>
            </div>
            <div class="p-2 text-sm text-center text-gray-700 bg-gray-100 rounded">
                By checking this <strong>CONFIRM</strong> button you agree to our <a href="#" class="text-blue-500">Terms of Service</a> which is limited to facilitating your payment to Cyber 32.
            </div>
        </div>
        @else
        <div class="grid grid-cols-4 text-sm text-white bg-black">
            @foreach($types = ['Cards', 'Mobile Banking', 'Net Banking', 'Crypto'] as $type)
            <button @click.prevent="setTab('{{$type}}')" class="px-1 py-2" :class="tab=='{{$type}}' ? 'bg-red-600' : 'hover:bg-gray-700'">{{$type}}</button>
            @endforeach
        </div>
        @php $methods = $invoice->methods() @endphp
        <section x-cloak>
            @foreach ($types as $type)
            <div x-show="tab=='{{$type}}'" class="grid grid-cols-3 gap-4">
                @forelse($methods->get($type, []) as $option)
                <a wire:navigate href="{{route('make-payment', [$invoice, $option])}}" class="flex items-center justify-center">
                    <img src="https://sandbox.uddoktapay.com/assets/template/images/bkash.png" alt="bKash" class="h-10">
                </a>
                @empty
                <strong class="col-span-3 text-center text-red-500">
                    No Payment Gateway is configured yet.
                </strong>
                @endforelse
            </div>
            @endforeach
        </section>
        @endif
        <button class="w-full py-3 text-center text-gray-700 border rounded" disabled>
            <span class="mr-2">🔒</span>PAY {{$invoice->amount}} BDT
        </button>
    </section>

    @if (! $this instanceof \Filament\Tables\Contracts\HasTable)
        <x-filament-actions::modals />
    @endif
</div>
