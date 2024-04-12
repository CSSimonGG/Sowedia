<x-app>
    <x-slot:title>
        {{ __('nav.about') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full">
            <div
                class="xl:ml-20 max-xl:mx-10 py-10 flex xl:justify-center xl:space-x-44 max-xl:2md:justify-between flex-wrap">
                <div class="max-w-[591px] mb-10">
                    <h1 class="text-2xl font-bold">{{ __('nav.about') }}</h1>
                    <p class="mt-4">{{ __('about.about_text_first') }}</p>
                    <p class="mt-4">{{ __('about.about_text_second') }}</p>
                    <div class="mt-10">
                        <a href="/{{ __('lang.lang') }}/contact"
                            class="text-xl font-bold text-black bg-orange px-9 py-4 rounded-full">
                            {{ __('nav.contact') }}
                        </a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('imgs/simon_foto.jpg') }}" alt="Simon" class="xxs:max-w-[227px]">
                    <p class="mt-4"><b>Simon de Klerk</b> - CEO</p>
                    <p><a href="mailto:simon@sowedia.com">Simon@sowedia.com</a></p>
                </div>
            </div>
        </div>

        <x-reviews></x-reviews>
        <x-contact></x-contact>
    </div>
</x-app>
