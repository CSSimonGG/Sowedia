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
                <a tabindex="8" href="/{{ __('lang.lang') }}/services"
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
        <h2>Diensten</h2>
    </div>
    <div class="bg-blue text-white w-full min-h-[534px]">
        <h2>Portfolio</h2>
    </div>
    <div class="bg-white w-full min-h-[494px]">
        <h2>Over ons</h2>
    </div>
    <div class="bg-blue text-white w-full min-h-[420px]">
        <h2>Reviews</h2>
    </div>
    <div class="bg-white w-full min-h-[768px]">
        <h2>Contact</h2>
    </div>
</x-app>
