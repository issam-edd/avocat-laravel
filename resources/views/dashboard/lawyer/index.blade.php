@props(["faqs","blogs", "mails"])
<x-dashboard.lawyer.master title="Home" page="Avocat / Home" >

    <x-dashboard.lawyer.card
        :faqs="$faqs"
        :blogs="$blogs"
        :mails="$mails"
    />
</x-dashboard.lawyer.card>
