<header class="sticky top-0">
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
                <li class="hover:text-gray">
                    <a tabindex="6">
                        {{ __('nav.flag') }}
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
