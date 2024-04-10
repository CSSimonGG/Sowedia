<x-mail::message>
    # Contact from {{ $name }}, {{ $company_name }}

    {{ $email }}
    {{ $phone }}

    {{ $contact_subject }}, {{ $budget }}

    {{ $domainname_and_hosting }}
    {{ $corporate_identity }}

    {{ $message }}

    <x-mail::button :url="'https://sowedia.com'">
        Sowedia.com
    </x-mail::button>

    {{ config('app.name') }}
</x-mail::message>
