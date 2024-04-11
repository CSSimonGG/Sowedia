<div class="bg-white w-full min-h-[768px]">
    <div class="xl:ml-20 max-xl:mx-10 flex flex-col items-center justify-center py-8">
        <h2 class="text-3xl font-bold mb-4 text-center">{{ __('contact.title') }}</h2>
        <p class="text-center">{{ __('contact.description_one') }}</p>
        <p class="text-center">{{ __('contact.description_two') }}</p>
        <div class="mt-16 mb-8">
            <form method="POST" action="/contact/mail">
                @csrf
                <div class="lg:w-[954px] max-lg:md:w-[700px] max-md:xs:w-[400px]">
                    <div class="grid md:grid-cols-2 md:gap-4">
                        <div class="flex flex-col">
                            <input type="text" placeholder="{{ __('contact.question_name') }}" name="name"
                                class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                            <input type="text" placeholder="{{ __('contact.question_company_name') }}"
                                name="company_name"
                                class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                            <input type="text" placeholder="{{ __('contact.question_email') }}" name="email"
                                class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                        </div>
                        <div class="flex flex-col">

                            <input type="text" placeholder="{{ __('contact.question_phone') }}" name="phone"
                                class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                            <input type="text" placeholder="{{ __('contact.question_contact_subject') }}"
                                name="contact_subject"
                                class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">

                            <input type="text" placeholder="{{ __('contact.question_budget') }}" name="budget"
                                class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">

                        </div>
                    </div>
                    <div class="flex flex-col md:gap-4">
                        <input type="text" placeholder="{{ __('contact.question_domainname_and_hosting') }}"
                            name="domainname_and_hosting"
                            class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                        <input type="text" placeholder="{{ __('contact.question_corporate_identity') }}"
                            name="corporate_identity"
                            class="border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                        <textarea placeholder="{{ __('contact.question_message') }}" name="message"
                            class="w-full h-32 border-b border-gray bg-white focus:outline-none focus:border-orange p-2"></textarea>
                    </div>
                </div>
                <div class="my-2">
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="text-xl font-bold text-black bg-orange px-20 py-3 rounded-full">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
