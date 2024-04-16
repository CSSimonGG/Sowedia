<x-app>
    <x-slot:title>
        {{ __('nav.portfolio_sowedia') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full 2xl:flex 2xl:flex-col 2xl:items-center">
            <div class="xl:mx-20 max-xl:mx-10 py-10">
                <div class="md:w-[591px]">
                    <h1 class="text-5xl font-bold mb-2">Sowedia website</h1>
                    <p>{{ __('portfolio.sowedia_desc') }}</p>
                </div>
                <div class="2xl:w-[1200px] max-2xl:w-full mt-16">
                    <div class="2xl:w-[1200px]">
                        <h2 class="font-bold text-2xl mb-4">{{ __('portfolio.sowedia_sketch_text') }}</h2>
                        <img src="{{ asset('imgs/sowedia_lofi.webp') }}" alt="Sowedia LoFi design">
                        <h2 class="font-bold text-2xl mb-4 mt-8">{{ __('portfolio.sowedia_design_text') }}</h2>
                        <img src="{{ asset('imgs/sowedia_project_home.webp') }}" alt="Sowedia HiFi design">
                    </div>
                </div>
            </div>
        </div>
        <x-reviews></x-reviews>
        <x-contact></x-contact>
    </div>
</x-app>
