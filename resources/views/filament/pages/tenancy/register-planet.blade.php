<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="register">
        <div>
            <section class="bg-white dark:bg-gray-900">
                <p class="mb-2 text-center text-gray-500 dark:text-gray-200">Planet is nothing but a license.</p>

                <!-- Pricing -->
                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-12 gap-6">
                        @foreach ($plans as $plan)
                        <div class="relative bg-white border border-gray-200 rounded-sm shadow-md dark:bg-gray-700 col-span-full md:col-span-4">
                            <div class="absolute top-0 left-0 right-0 h-0.5 bg-green-500" aria-hidden="true"></div>
                            <div class="px-5 pt-5 pb-6 border-b border-gray-200">
                                <header class="flex items-center mb-2">
                                    <div class="flex-shrink-0 w-6 h-6 mr-3 rounded-full bg-gradient-to-tr from-green-500 to-green-300">
                                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $plan['name'] }}</h3>
                                </header>
                                <!-- Price -->
                                <div class="mb-4 font-bold text-gray-800 dark:text-white">
                                    <span class="text-2xl">{{$plan['pricing']['BDT']['prefix']}}</span><span class="text-3xl">{{$plan['pricing']['BDT']['annually']}}</span>{{$plan['pricing']['BDT']['suffix']}}<span class="text-sm font-medium text-gray-500 dark:text-gray-200">/year</span>
                                </div>
                                <!-- CTA -->
                                <a href="{{$plan['product_url']}}" class="inline-flex items-center justify-center w-full px-3 py-2 mt-2 text-sm font-medium leading-5 text-gray-600 transition duration-150 ease-in-out border border-gray-200 rounded shadow-sm dark:text-gray-200 focus:outline-none focus-visible:ring-2 hover:border-gray-300">Purchase</a>
                            </div>
                            <div class="px-5 pt-4 pb-5">
                                <div class="mb-4 text-xs font-semibold text-gray-800 uppercase dark:text-gray-200">What's included</div>
                                <!-- List -->
                                <ul>
                                    <li class="flex items-center py-1">
                                        <svg class="flex-shrink-0 w-3 h-3 mr-2 text-green-500 fill-current" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                        </svg>
                                        <div class="text-sm">&infin; Studios</div>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <svg class="flex-shrink-0 w-3 h-3 mr-2 text-green-500 fill-current" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                        </svg>
                                        <div class="text-sm">&infin; Devices</div>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <svg class="flex-shrink-0 w-3 h-3 mr-2 text-green-500 fill-current" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                        </svg>
                                        <div class="text-sm">&infin; Domains</div>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <svg class="flex-shrink-0 w-3 h-3 mr-2 text-green-500 fill-current" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                        </svg>
                                        <div class="text-sm">&infin; Transactions</div>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <svg class="flex-shrink-0 w-3 h-3 mr-2 text-green-500 fill-current" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                        </svg>
                                        <div class="text-sm">Free Updates</div>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <svg class="flex-shrink-0 w-3 h-3 mr-2 text-green-500 fill-current" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                        </svg>
                                        <div class="text-sm">Free Support</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="mt-3 text-sm">
                    <strong class="text-red-500 dark:text-red-400">Note:</strong>
                    <p>
                        All our plans come with the same features, with the only difference being the price.
                    </p>
                    <p>
                        Please select the option that best fits your budget.
                    </p>
                </div>
            </section>
        </div>

        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>
</x-filament-panels::page.simple>
