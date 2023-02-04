<x-mail::message>
# Contact from {{ $data->email }}  
## Subject: {{ $data->subject }}

{{ $data->message }}

Regards,<br>
{{ $data->name }}
</x-mail::message>
