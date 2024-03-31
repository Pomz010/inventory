<form action="{{ route('assets.update', [$attributes['asset'] => $asset]) }}" method="POST">
    {{ $slot }}
</form>