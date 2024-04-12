<x-app>
    <x-slot:title>
        {{ __('nav.service_website') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full 2xl:flex 2xl:flex-col 2xl:items-center">
            <div class="xl:mx-20 max-xl:mx-10 py-10">
                <div class="md:w-[591px]">
                    <h1 class="text-3xl font-bold mb-2">{{ __('nav.service_website') }}</h1>
                    <p>{{ __('services.service_website_desc') }}</p>
                </div>
                <div class="2xl:w-[1200px] max-2xl:w-full">
                    <div class="test border-t-2 border-gray mt-16">
                        <div class="flex justify-between mt-2">
                            <h2 class="font-bold text-2xl">{{ __('services.projects') }}</h2>
                        </div>
                        <div class="my-4 flex overflow-auto">
                            <a href="/{{ __('lang.lang') }}/portfolio/sowedia">
                                <div>
                                    <div class="md:w-[348px] max-md:xs:w-[300px] max-xs:w-[240px] shadow-xl"><img
                                            src="{{ asset('imgs/sowedia.png') }}" alt="Sowedia">
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
