<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="assets/img/logo.png" class="logo" alt="Star Tech Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>