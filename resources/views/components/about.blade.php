<div class="bg-white w-full min-h-[494px]">
    <div class="xl:ml-20 max-xl:mx-10 flex">
        <div class="">
            <h2 class="text-2xl font-bold pt-8">{{ __('nav.about') }}</h2>
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
            <img src="{{ asset('imgs/simon_foto.jpg') }}" alt="Simon" class="w-[227px]">
            <p class="mt-4"><b>Simon de Klerk</b> - CEO</p>
            <p><a href="mailto:simon@sowedia.com">Simon@sowedia.com</a></p>
        </div>
    </div>
</div>
