<x-app>
    <x-slot:title>
        {{ __('nav.portfolio_csr') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full 2xl:flex 2xl:flex-col 2xl:items-center">
            <div class="xl:mx-20 max-xl:mx-10 py-10">
                <div class="md:w-[591px]">
                    <h1 class="text-5xl font-bold mb-2">CSR Summa College</h1>
                    <p>{{ __('portfolio.csr_desc') }}</p>
                </div>
                <div class="2xl:w-[1200px] max-2xl:w-full mt-16">
                    <div class="max-w-[500px]">
                        <img src="{{ asset('imgs/csr_project.webp') }}" alt="CSR Summa College Instagram">
                    </div>
                </div>
            </div>
        </div>
        <x-reviews></x-reviews>
        <x-contact></x-contact>
    </div>
</x-app>
