<x-app>
    <x-slot:title>
        {{ __('nav.portfolio') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full 2xl:flex 2xl:flex-col 2xl:items-center">
            <div class="xl:mx-20 max-xl:mx-10 py-10">
                <div class="md:w-[591px]">
                    <h1 class="text-3xl font-bold mb-2">{{ __('nav.portfolio') }}</h1>
                    <p>{{ __('portfolio.description') }}</p>
                </div>
                <div class="2xl:w-[1200px] max-2xl:w-full">
                    <div class="my-4 flex flex-wrap">
                        <a href="/{{ __('lang.lang') }}/portfolio/sowedia">
                            <div class="mr-8 mt-8">
                                <div class="xl:w-[348px] max-xl:w-[240px] shadow-xl"><img
                                        src="{{ asset('imgs/sowedia.webp') }}" alt="Sowedia">
                                </div>
                                <p class="mt-2">Sowedia website</p>
                            </div>
                        </a>
                        <a href="/{{ __('lang.lang') }}/portfolio/csr-summa-college">
                            <div class="mr-8 mt-8">
                                <div class="xl:w-[348px] max-xl:w-[240px] shadow-xl"><img
                                        src="{{ asset('imgs/csr.webp') }}" alt="Sowedia">
                                </div>
                                <p class="mt-2">CSR Summa College Social Media</p>
                            </div>
                        </a>
                        <a href="/{{ __('lang.lang') }}/portfolio/telecombinatie">
                            <div class="mr-8 mt-8">
                                <div class="xl:w-[348px] max-xl:w-[240px] shadow-xl"><img
                                        src="{{ asset('imgs/telecombinatie.webp') }}" alt="Sowedia">
                                </div>
                                <p class="mt-2">Telecombinatie Budel Social Media</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <x-reviews></x-reviews>
        <x-contact></x-contact>
    </div>
</x-app>
