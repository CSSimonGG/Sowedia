<x-app>
    <x-slot:title>
        {{ __('nav.services') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full 2xl:flex 2xl:flex-col 2xl:items-center">
            <div class="xl:mx-20 max-xl:mx-10 py-10">
                <div class="md:w-[591px]">
                    <h1 class="text-3xl font-bold mb-2">{{ __('nav.services') }}</h1>
                    <p>{{ __('services.description') }}</p>
                </div>
                <div class="2xl:w-[1200px] max-2xl:w-full">
                    <div class="test border-t-2 border-gray mt-16">
                        <div class="flex justify-between mt-2">
                            <h2 class="font-bold text-2xl">{{ __('nav.service_website') }}</h2>
                            <a href="/{{ __('lang.lang') }}/services/web-development">
                                <div class="flex space-x-1">
                                    <p class="max-md:hidden">{{ __('services.to') }} {{ __('nav.service_website') }}</p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8.5 12H14.5" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 15L15.5 12L12.5 9" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="my-4 flex overflow-auto">
                            <a href="/{{ __('lang.lang') }}/portfolio/sowedia">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/sowedia.webp') }}" alt="Sowedia">
                                    </div>
                                    <p class="mt-2">Sowedia website</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="test border-t-2 border-gray mt-16">
                        <div class="flex justify-between mt-2">
                            <h2 class="font-bold text-2xl">{{ __('nav.service_webshops') }}</h2>
                            <a href="/{{ __('lang.lang') }}/services/webshops">
                                <div class="flex space-x-1">
                                    <p class="max-md:hidden">{{ __('services.to') }} {{ __('nav.service_webshops') }}
                                    </p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8.5 12H14.5" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 15L15.5 12L12.5 9" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="my-4 flex overflow-auto">
                            <div>
                                <p>{{ __('services.no_projects') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="test border-t-2 border-gray mt-16">
                        <div class="flex justify-between mt-2">
                            <h2 class="font-bold text-2xl">{{ __('nav.service_social_media') }}</h2>
                            <a href="/{{ __('lang.lang') }}/services/social-media-management">
                                <div class="flex space-x-1">
                                    <p class="max-md:hidden">{{ __('services.to') }}
                                        {{ __('nav.service_social_media') }}
                                    </p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8.5 12H14.5" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 15L15.5 12L12.5 9" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="my-4 flex space-x-8 overflow-auto">
                            <a href="/{{ __('lang.lang') }}/portfolio/telecombinatie">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/telecombinatie.webp') }}" alt="Sowedia">
                                    </div>
                                    <p class="mt-2">Telecombinatie Budel Social Media</p>
                                </div>
                            </a>
                            <a href="/{{ __('lang.lang') }}/portfolio/csr-summa-college">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/csr.webp') }}" alt="Sowedia">
                                    </div>
                                    <p class="mt-2">CSR Summa College Social Media</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="test border-t-2 border-gray mt-16">
                        <div class="flex justify-between mt-2">
                            <h2 class="font-bold text-2xl">{{ __('nav.service_design') }}</h2>
                            <a href="/{{ __('lang.lang') }}/services/design">
                                <div class="flex space-x-1">
                                    <p class="max-md:hidden">{{ __('services.to') }} {{ __('nav.service_design') }}
                                    </p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8.5 12H14.5" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 15L15.5 12L12.5 9" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="my-4 flex space-x-8 overflow-auto">
                            <a href="/{{ __('lang.lang') }}/portfolio/csr-summa-college">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/csr.webp') }}" alt="Sowedia">
                                    </div>
                                    <p class="mt-2">CSR Summa College Social Media</p>
                                </div>
                            </a>
                            <a href="/{{ __('lang.lang') }}/portfolio/sowedia">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/sowedia.webp') }}" alt="Sowedia">
                                    </div>
                                    <p class="mt-2">Sowedia website</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="test border-t-2 border-gray mt-16">
                        <div class="flex justify-between mt-2">
                            <h2 class="font-bold text-2xl">{{ __('nav.service_hosting') }}</h2>
                            <a href="/{{ __('lang.lang') }}/services/hosting">
                                <div class="flex space-x-1">
                                    <p class="max-md:hidden">{{ __('services.to') }} {{ __('nav.service_hosting') }}
                                    </p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8.5 12H14.5" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 15L15.5 12L12.5 9" stroke="#171717" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="my-4 flex overflow-auto">
                            <a href="/{{ __('lang.lang') }}/portfolio/sowedia">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/sowedia.webp') }}" alt="Sowedia">
                                    </div>
                                    <p class="mt-2">Sowedia website</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-reviews></x-reviews>
        <x-contact></x-contact>
    </div>
</x-app>
