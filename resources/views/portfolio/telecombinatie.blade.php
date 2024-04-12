<x-app>
    <x-slot:title>
        {{ __('nav.portfolio_telecombinatie') }}
    </x-slot:title>
    <div class="bg-white w-full 2xl:flex 2xl:flex-col 2xl:items-center">
        <div class="xl:mx-20 max-xl:mx-10 py-10">
            <div class="md:w-[591px]">
                <h1 class="xs:text-5xl max-xs:text-2xl font-bold mb-2">Telecombinatie Budel</h1>
                <p>{{ __('portfolio.telecombinatie_desc') }}</p>
            </div>
            <div class="2xl:w-[1200px] max-2xl:w-full mt-16">
                <a href="https://www.instagram.com/telecombinatie_budel/" target="blank">
                    <div class="max-w-[800px]">
                        <img src="{{ asset('imgs/telecombinatie_project.png') }}" alt="CSR Summa College Instagram">
                    </div>
                </a>
            </div>
        </div>
        <x-reviews></x-reviews>
        <x-contact></x-contact>
    </div>
</x-app>
