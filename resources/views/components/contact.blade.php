<div class="bg-white w-full min-h-[768px]">
    <div class="xl:ml-20 max-xl:mx-10">
        <h2 class="text-2xl font-bold pt-8">{{ __('contact.title') }}</h2>
        <p>{{ __('contact.description') }}</p>
        <div class="bg-black p-4">
            <form method="POST" action="/contact/mail">
                @csrf
                <input type="text" placeholder="{{ __('contact.question_name') }}" name="name">
                <input type="text" placeholder="{{ __('contact.question_company_name') }}" name="company_name">
                <input type="text" placeholder="{{ __('contact.question_email') }}" name="email">
                <input type="text" placeholder="{{ __('contact.question_phone') }}" name="phone">
                <input type="text" placeholder="{{ __('contact.question_contact_subject') }}" name="contact_subject">
                <input type="text" placeholder="{{ __('contact.question_budget') }}" name="budget">
                <input type="text" placeholder="{{ __('contact.question_domainname_and_hosting') }}"
                    name="domainname_and_hosting">
                <input type="text" placeholder="{{ __('contact.question_corporate_identity') }}"
                    name="corporate_identity">
                <input type="text" placeholder="{{ __('contact.question_message') }}" name="message">
                <button class="bg-orange p-4">Submit</button>
            </form>
        </div>
    </div>
</div>
