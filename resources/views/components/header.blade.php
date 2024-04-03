<header class="sticky top-0 z-50">
    <div class="bg-blue h-[120px] flex items-center place-content-center">
        <div class="absolute xl:left-20 left-10">
            <a href="/{{ __('lang.lang') }}/home"><img src="{{ asset('imgs/sowedia_logo.png') }}" alt="Sowedia"
                    class="w-[150px]"></a>
        </div>
        <nav class="max-lg:hidden flex">
            <ul class="flex text-white text-xl font-bold space-x-9">
                <li class="hover:text-gray">
                    <a tabindex="1" href="/{{ __('lang.lang') }}/home" id="home-link">
                        {{ __('nav.home') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="2" href="/{{ __('lang.lang') }}/services" id="services-link">
                        {{ __('nav.services') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="3" href="/{{ __('lang.lang') }}/portfolio" id="portfolio-link">
                        {{ __('nav.portfolio') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="4" href="/{{ __('lang.lang') }}/about" id="about-link">
                        {{ __('nav.about') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="5" href="/{{ __('lang.lang') }}/reviews" id="reviews-link">
                        {{ __('nav.reviews') }}
                    </a>
                </li>
                <li class="mt-1.5">
                    <a tabindex="6" href="/{{ __('lang.change_to') }}/home">
                        <img src="{{ asset('imgs/' . __('lang.flag')) }}" alt="{{ __('lang.flag_alt') }}"
                            class="w-[30px]">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="absolute right-0 max-lg:hidden">
            <a tabindex="7" href="/{{ __('lang.lang') }}/contact"
                class="text-xl font-bold text-black bg-orange px-9 py-4 xl:mr-20 mr-10 rounded-full">
                {{ __('nav.contact') }}
            </a>
        </div>
        <div class="fill-white stroke-white flex absolute right-10 lg:hidden" onclick="menufunction()">
            <span style="display: block;" id="menu-open">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="24px" height="24px">
                    <path
                        d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z" />
                </svg>
            </span>
            <span style="display: none;" id="menu-closed">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="24px" height="24px">
                    <path
                        d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z" />
                </svg>
            </span>
        </div>
    </div>

    <div id="mobile-header" style="display: none;" class="bg-blue h-screen">
        <nav class="max-md:ml-10 md:flex md:justify-center">
            <ul class="text-white text-xl font-bold space-y-4">
                <li class="hover:text-gray">
                    <a tabindex="1" href="/{{ __('lang.lang') }}/home">
                        {{ __('nav.home') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="2" href="/{{ __('lang.lang') }}/services">
                        {{ __('nav.services') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="3" href="/{{ __('lang.lang') }}/portfolio">
                        {{ __('nav.portfolio') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="4" href="/{{ __('lang.lang') }}/about">
                        {{ __('nav.about') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="5" href="/{{ __('lang.lang') }}/reviews">
                        {{ __('nav.reviews') }}
                    </a>
                </li>
                <li class="hover:text-gray">
                    <a tabindex="6" href="/{{ __('lang.lang') }}/contact">
                        {{ __('nav.contact') }}
                    </a>
                </li>
            </ul>
        </nav>
        <div class="text-white xs:flex ml-10 mt-20 max-md:xs:space-x-8">
            <ul class="flex space-x-1 max-lg:md:w-3/4">
                <li>
                    <a href="https://www.instagram.com/sowediaofficial/" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 15.5C13.933 15.5 15.5 13.933 15.5 12C15.5 10.067 13.933 8.5 12 8.5C10.067 8.5 8.5 10.067 8.5 12C8.5 13.933 10.067 15.5 12 15.5Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.6361 7H17.6477" stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="px-1 pt-0.5">
                    <a href="https://www.linkedin.com/company/sowedia" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="20" height="20" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_177_78993" transform="scale(0.00390625)" />
                                </pattern>
                                <image id="image0_177_78993" width="256" height="256"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>

                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/people/Sowedia/61557707923130/" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14 9.3V12.2H16.6C16.8 12.2 16.9 12.4 16.9 12.6L16.5 14.5C16.5 14.6 16.3 14.7 16.2 14.7H14V22H11V14.8H9.3C9.1 14.8 9 14.7 9 14.5V12.6C9 12.4 9.1 12.3 9.3 12.3H11V9C11 7.3 12.3 6 14 6H16.7C16.9 6 17 6.1 17 6.3V8.7C17 8.9 16.9 9 16.7 9H14.3C14.1 9 14 9.1 14 9.3Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                            <path d="M15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9V15C22 20 20 22 15 22Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </a>
                </li>
            </ul>
            <div class="max-xs:mt-4">
                <a href="mailto:simon@sowedia.com">Simon@sowedia.com</a>
            </div>
        </div>
    </div>
</header>

<script>
    // Get the current URL path
    const currentPath = window.location.pathname;

    // Get the home and services link elements
    const homeLink = document.getElementById('home-link');
    const servicesLink = document.getElementById('services-link');
    const portfolioLink = document.getElementById('portfolio-link');
    const aboutLink = document.getElementById('about-link');
    const reviewsLink = document.getElementById('reviews-link');

    // Function to add active class to the link corresponding to the current page
    function setActiveLink() {
        if (currentPath === '/{{ __('lang.lang') }}/home') {
            homeLink.classList.add('text-gray'); // Apply gray color to the home text
        } else if (currentPath === '/{{ __('lang.lang') }}/services') {
            servicesLink.classList.add('text-gray'); // Apply gray color to the services text
        } else if (currentPath === '/{{ __('lang.lang') }}/portfolio') {
            portfolioLink.classList.add('text-gray'); // Apply gray color to the portfolio text
        } else if (currentPath === '/{{ __('lang.lang') }}/about') {
            aboutLink.classList.add('text-gray'); // Apply gray color to the about text
        } else if (currentPath === '/{{ __('lang.lang') }}/reviews') {
            reviewsLink.classList.add('text-gray'); // Apply gray color to the about text
        }
    }

    // Call the function to set the active link
    setActiveLink();
</script>
<script>
    function menufunction() {
        let menu = document.getElementById("mobile-header");
        let menuOpen = document.getElementById("menu-open");
        let menuClosed = document.getElementById("menu-closed");
        if (menu.style.display === "block") {
            menu.style.display = "none";
            menuOpen.style.display = "block";
            menuClosed.style.display = "none";
            document.body.style.overflow = "auto";
        } else {
            menu.style.display = "block";
            menuOpen.style.display = "none";
            menuClosed.style.display = "block";
            document.body.style.overflow = "hidden";
        }
    }
</script>
