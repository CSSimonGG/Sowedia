<x-app>
    <x-slot:title>
        {{ __('nav.contact') }}
    </x-slot:title>
    <div>
        <div class="bg-white w-full min-h-[768px]">
            <div class="xl:ml-20 max-xl:mx-10 flex flex-col items-center justify-center py-8">
                <h1 class="text-3xl font-bold mb-4 text-center">{{ __('contact.title') }}</h1>
                <p class="text-center">{{ __('contact.description_one') }}</p>
                <p class="text-center">{{ __('contact.description_two') }}</p>
                <div class="mt-16 mb-8">
                    <form method="POST" action="/">
                        @csrf
                        <div class="lg:w-[954px] max-lg:md:w-[700px] max-md:xs:w-[400px] max-xs:w-[320px]">
                            <div class="grid md:grid-cols-2 md:gap-4">
                                <div class="flex flex-col">
                                    <input type="text" placeholder="{{ __('contact.question_name') }}" name="name"
                                        class="border-b border-gray bg-white placeholder-black focus:outline-none focus:border-orange mb-4 p-2 pl-3">
                                    @error('name')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <input type="text" placeholder="{{ __('contact.question_company_name') }}"
                                        name="company_name"
                                        class="border-b border-gray bg-white placeholder-black focus:outline-none focus:border-orange mb-4 p-2 pl-3">
                                    @error('company_name')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <input type="text" placeholder="{{ __('contact.question_email') }}"
                                        name="email"
                                        class="border-b border-gray bg-white placeholder-black focus:outline-none focus:border-orange mb-4 p-2 pl-3">
                                    @error('email')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col">
                                    <input type="text" placeholder="{{ __('contact.question_phone') }}"
                                        name="phone"
                                        class="border-b border-gray bg-white placeholder-black focus:outline-none focus:border-orange mb-4 p-2 pl-3">
                                    @error('phone')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <input type="text" placeholder="{{ __('contact.question_contact_subject') }}"
                                        name="contact_subject"
                                        class="border-b border-gray bg-white placeholder-black focus:outline-none focus:border-orange mb-4 p-2 pl-3">
                                    @error('contact_subject')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <select name="budget" id="budget"
                                        class="md:mt-[5px] border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                                        <option value="{{ __('contact.question_budget') }}"
                                            aria-label="{{ __('contact.question_budget') }}" selected>
                                            {{ __('contact.question_budget') }}</option>
                                        <option value="{{ __('contact.budget_option_1') }}"
                                            aria-label="{{ __('contact.budget_option_1') }}">
                                            {{ __('contact.budget_option_1') }}</option>
                                        <option value="{{ __('contact.budget_option_2') }}"
                                            aria-label="{{ __('contact.budget_option_2') }}">
                                            {{ __('contact.budget_option_2') }}</option>
                                        <option value="{{ __('contact.budget_option_3') }}"
                                            aria-label="{{ __('contact.budget_option_3') }}">
                                            {{ __('contact.budget_option_3') }}</option>
                                        <option value="{{ __('contact.budget_option_4') }}"
                                            aria-label="{{ __('contact.budget_option_4') }}">
                                            {{ __('contact.budget_option_4') }}</option>
                                    </select>
                                    @error('budget')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-col md:gap-4">
                                <select name="domainname_and_hosting" id="domainname_and_hosting"
                                    class="md:mt-[5px] border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                                    <option value="{{ __('contact.question_domainname_and_hosting') }}"
                                        aria-label="{{ __('contact.question_domainname_and_hosting') }}" selected>
                                        {{ __('contact.question_domainname_and_hosting') }}</option>
                                    <option value="{{ __('contact.domainname_and_hosting_option_1') }}"
                                        aria-label="{{ __('contact.domainname_and_hosting_option_1') }}">
                                        {{ __('contact.domainname_and_hosting_option_1') }}</option>
                                    <option value="{{ __('contact.domainname_and_hosting_option_2') }}"
                                        aria-label="{{ __('contact.domainname_and_hosting_option_2') }}">
                                        {{ __('contact.domainname_and_hosting_option_2') }}</option>
                                </select>
                                @error('domainname_and_hosting')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                                <select name="corporate_identity" id="corporate_identity"
                                    class="md:mt-[5px] border-b border-gray bg-white focus:outline-none focus:border-orange mb-4 p-2">
                                    <option value="{{ __('contact.question_corporate_identity') }}"
                                        aria-label="{{ __('contact.question_corporate_identity') }}" selected>
                                        {{ __('contact.question_corporate_identity') }}</option>
                                    <option value="{{ __('contact.corporate_identity_option_1') }}"
                                        aria-label="{{ __('contact.corporate_identity_option_1') }}">
                                        {{ __('contact.corporate_identity_option_1') }}</option>
                                    <option value="{{ __('contact.corporate_identity_option_2') }}"
                                        aria-label="{{ __('contact.corporate_identity_option_2') }}">
                                        {{ __('contact.corporate_identity_option_2') }}</option>
                                    <option value="{{ __('contact.corporate_identity_option_3') }}"
                                        aria-label="{{ __('contact.corporate_identity_option_3') }}">
                                        {{ __('contact.corporate_identity_option_3') }}</option>
                                    <option value="{{ __('contact.corporate_identity_option_4') }}"
                                        aria-label="{{ __('contact.corporate_identity_option_4') }}">
                                        {{ __('contact.corporate_identity_option_4') }}</option>
                                </select>
                                @error('corporate_identity')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                                <textarea placeholder="{{ __('contact.question_message') }}" name="message"
                                    class="w-full h-32 border-b border-gray bg-white placeholder-black focus:outline-none focus:border-orange p-2"></textarea>
                                @error('message')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="my-2">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                            @error('g-recaptcha-response')
                                <span class="text-red">The captcha is required</span>
                            @enderror
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="text-xl font-bold text-black bg-orange px-20 py-3 rounded-full">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app>
