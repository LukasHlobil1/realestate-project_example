<x-mail::message>
    # 🏠 Nová poptávka o nemovitost

    Dostali jste novou poptávku ohledně nemovitosti.:
    **{{ $enquiry->property->title ?? 'N/A' }}**

    ---

    **Od:** {{ $enquiry->name }}
    **E-mail:** {{ $enquiry->email }}

    @if($enquiry->phone)
        **Telefon:** {{ $enquiry->phone }}
    @endif

    ---

    **Zpráva:**

    > {{ $enquiry->message }}

    <x-mail::panel>
        **IP Adresa:** {{ $enquiry->ip_address ?? 'N/A' }}
        **Uživatel:** {{ $enquiry->user_agent ?? 'N/A' }}
    </x-mail::panel>

    Děkujeme,<br>
    **{{ config('app.name') }}**
</x-mail::message>
