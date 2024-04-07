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
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.569602 20V5.81818H4.50284V20H0.569602ZM2.54545 3.99006C1.9607 3.99006 1.45904 3.79616 1.04048 3.40838C0.628078 3.01444 0.421875 2.54356 0.421875 1.99574C0.421875 1.45407 0.628078 0.989346 1.04048 0.601562C1.45904 0.207622 1.9607 0.0106524 2.54545 0.0106524C3.13021 0.0106524 3.62879 0.207622 4.04119 0.601562C4.45975 0.989346 4.66903 1.45407 4.66903 1.99574C4.66903 2.54356 4.45975 3.01444 4.04119 3.40838C3.62879 3.79616 3.13021 3.99006 2.54545 3.99006ZM11.5868 11.8011V20H7.65359V5.81818H11.4022V8.32031H11.5684C11.8823 7.4955 12.4086 6.84304 13.1472 6.36293C13.8858 5.87666 14.7814 5.63352 15.834 5.63352C16.8188 5.63352 17.6775 5.84896 18.41 6.27983C19.1425 6.7107 19.7118 7.32623 20.1181 8.12642C20.5243 8.92045 20.7275 9.86837 20.7275 10.9702V20H16.7942V11.6719C16.8004 10.804 16.5788 10.1269 16.1294 9.64062C15.6801 9.1482 15.0615 8.90199 14.2736 8.90199C13.7443 8.90199 13.2765 9.01586 12.8702 9.24361C12.4701 9.47135 12.1562 9.80374 11.9284 10.2408C11.7069 10.6716 11.593 11.1918 11.5868 11.8011Z"
                                fill="#F8FBFD" />
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
