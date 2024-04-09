<x-app>
    <x-slot:title>
        {{ __('lang.title') }}
    </x-slot:title>
    <div
        class="bg-blue text-white w-full max-lg:min-h-[850px] lg:min-h-[600px] h-screen flex xl:justify-center xl:space-x-44 max-xl:lg:justify-between max-lg:flex-col max-lg:items-center">
        <div class="sm:w-[450px] xl:ml-20 max-xl:mx-10 lg:pt-[116px]">
            <h1 class="sm:text-5xl max-sm:text-3xl font-bold">{{ __('home.title') }}</h1>
            <p class="sm:text-xl max-sm:text-lg mt-4">{{ __('home.description') }}</p>
            <div class="mt-10">
                <a tabindex="8" href="/{{ __('lang.lang') }}/services/"
                    class="text-xl font-bold text-black bg-orange px-9 py-4 rounded-full">
                    {{ __('nav.services') }}
                </a>
            </div>
        </div>
        <div class="max-xl:lg:mr-10 max-lg:my-4 max-lg:mx-10">
            <img src="{{ asset('imgs/sowedia_web_development.png') }}" alt="Sowedia" class="sm:w-[500px] max-sm:w-full">
        </div>
    </div>
    <div class="bg-white w-full min-h-[512px]">
        <div class="xl:ml-20 max-xl:mx-4">
            <h2 class="text-3xl font-bold py-8 flex justify-center">{{ __('nav.services') }}</h2>
            <div class="flex flex-wrap justify-center max-lg:max-w-[768px] mx-auto">
                <div
                    class="bg-blue text-white max-2xl:lg:w-[200px] max-lg:xxs:w-[284px] max-w-[284px] h-[377px] mb-8 sm:mr-8 max-2xl:lg:ml-8 flex flex-col items-center text-center relative p-8">
                    <div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.6667 28.2501H10.35C4.73337 28.2501 3.33337 26.8501 3.33337 21.2335V11.2335C3.33337 5.6168 4.73337 4.2168 10.35 4.2168H27.9C33.5167 4.2168 34.9167 5.6168 34.9167 11.2335"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.6666 35.7833V28.25" stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3.33337 21.583H16.6667" stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.2333 35.7832H16.6666" stroke="#F8FBFD" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M36.6666 21.3337V30.8504C36.6666 34.8004 35.6833 35.7837 31.7333 35.7837H25.8166C21.8666 35.7837 20.8833 34.8004 20.8833 30.8504V21.3337C20.8833 17.3837 21.8666 16.4004 25.8166 16.4004H31.7333C35.6833 16.4004 36.6666 17.3837 36.6666 21.3337Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28.7408 30.4163H28.7558" stroke="#F8FBFD" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mt-3">{{ __('nav.service_website') }}</h3>
                    <p class="mt-3">{{ __('services.service_website_desc') }}</p>
                    <div class="absolute bottom-8">
                        <a href="/{{ __('lang.lang') }}/services/web-development"
                            class="font-bold text-black bg-orange px-6 py-4 rounded-full hover:shadow-lg">
                            {{ __('home.more_info') }}
                        </a>
                    </div>
                </div>
                <div
                    class="bg-blue text-white max-2xl:lg:w-[200px] max-lg:xxs:w-[284px] max-w-[284px] h-[377px] mb-8 lg:mr-8 flex flex-col items-center text-center relative p-8">
                    <div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.33337 3.33301H6.23338C8.03338 3.33301 9.45004 4.88301 9.30004 6.66634L7.91671 23.2663C7.68337 25.983 9.83336 28.3163 12.5667 28.3163H30.3167C32.7167 28.3163 34.8167 26.3497 35 23.9663L35.9 11.4663C36.1 8.69968 34 6.44967 31.2167 6.44967H9.70005"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.0833 36.6667C28.2339 36.6667 29.1667 35.7339 29.1667 34.5833C29.1667 33.4327 28.2339 32.5 27.0833 32.5C25.9327 32.5 25 33.4327 25 34.5833C25 35.7339 25.9327 36.6667 27.0833 36.6667Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M13.75 36.6667C14.9006 36.6667 15.8333 35.7339 15.8333 34.5833C15.8333 33.4327 14.9006 32.5 13.75 32.5C12.5994 32.5 11.6666 33.4327 11.6666 34.5833C11.6666 35.7339 12.5994 36.6667 13.75 36.6667Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15 13.333H35" stroke="#F8FBFD" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mt-3">{{ __('nav.service_webshops') }}</h3>
                    <p class="mt-3">{{ __('services.service_webshops_desc') }}</p>
                    <div class="absolute bottom-8">
                        <a href="/{{ __('lang.lang') }}/services/webshops"
                            class="font-bold text-black bg-orange px-6 py-4 rounded-full hover:shadow-lg">
                            {{ __('home.more_info') }}
                        </a>
                    </div>
                </div>
                <div
                    class="bg-blue text-white max-2xl:lg:w-[200px] max-lg:xxs:w-[284px] max-w-[284px] h-[377px] mb-8 sm:mr-8 flex flex-col items-center text-center relative p-8">
                    <div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30 31.4329H28.7333C27.4 31.4329 26.1333 31.9496 25.2 32.8829L22.35 35.6996C21.05 36.9829 18.9333 36.9829 17.6333 35.6996L14.7833 32.8829C13.85 31.9496 12.5667 31.4329 11.25 31.4329H10C7.23333 31.4329 5 29.2163 5 26.483V8.29956C5 5.56623 7.23333 3.34961 10 3.34961H30C32.7667 3.34961 35 5.56623 35 8.29956V26.483C35 29.1996 32.7667 31.4329 30 31.4329Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M20.4667 24.9337C20.2167 25.017 19.8 25.017 19.5333 24.9337C17.3667 24.1837 12.5 21.1003 12.5 15.8503C12.5 13.5337 14.3667 11.667 16.6667 11.667C18.0333 11.667 19.2333 12.317 20 13.3337C20.7667 12.317 21.9667 11.667 23.3333 11.667C25.6333 11.667 27.5 13.5337 27.5 15.8503C27.4833 21.1003 22.6333 24.1837 20.4667 24.9337Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mt-3">{{ __('nav.service_social_media') }}</h3>
                    <p class="mt-3">{{ __('services.service_social_media_desc') }}</p>
                    <div class="absolute bottom-8">
                        <a href="/{{ __('lang.lang') }}/services/social-media-management"
                            class="font-bold text-black bg-orange px-6 py-4 rounded-full hover:shadow-lg">
                            {{ __('home.more_info') }}
                        </a>
                    </div>
                </div>
                <div
                    class="bg-blue text-white max-2xl:lg:w-[200px] max-lg:xxs:w-[284px] max-w-[284px] h-[377px] mb-8 lg:mr-8 flex flex-col items-center text-center relative p-8">
                    <div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4834 15C13.1167 15.8167 14.5167 17.05 15.5334 18.5833C16.1167 19.45 16.1167 20.5667 15.5334 21.4333C14.5167 22.95 13.1167 24.1833 11.4834 25"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21.6667 25H28.3334" stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.9999 36.6663H24.9999C33.3333 36.6663 36.6666 33.333 36.6666 24.9997V14.9997C36.6666 6.66634 33.3333 3.33301 24.9999 3.33301H14.9999C6.66659 3.33301 3.33325 6.66634 3.33325 14.9997V24.9997C3.33325 33.333 6.66659 36.6663 14.9999 36.6663Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mt-3">{{ __('nav.service_other') }}</h3>
                    <p class="mt-3">{{ __('services.service_other_desc') }}</p>
                    <div class="absolute bottom-8">
                        <a href="/{{ __('lang.lang') }}/services/"
                            class="font-bold text-black bg-orange px-6 py-4 rounded-full hover:shadow-lg">
                            {{ __('home.more_info') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue text-white w-full min-h-[534px]">
        <div class="xl:ml-20 max-xl:mx-10">
            <h2 class="text-3xl font-bold py-8 flex justify-center">Portfolio</h2>
        </div>
    </div>
    <x-about></x-about>
    <div class="bg-blue text-white w-full min-h-[420px]">
        <div class="xl:ml-20 max-xl:mx-10">
            <h2 class="text-2xl font-bold pt-8">Reviews</h2>
        </div>
    </div>
    <x-contact></x-contact>
</x-app>
