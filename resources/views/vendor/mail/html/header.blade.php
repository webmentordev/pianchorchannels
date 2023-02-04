@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('assets/logo.png') }}" class="logo" alt="PiAnchorchannel Logo">
@else
<img src="{{ asset('assets/logo.png') }}" class="logo" alt="PiAnchorchannel Logo">
@endif
</a>
</td>
</tr>
