@props(['name'])

<p class="text-danger">
    @error($name)
        {{ $message }}
    @enderror
</p>