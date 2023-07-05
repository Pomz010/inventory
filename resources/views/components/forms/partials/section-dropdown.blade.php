<label class="font-semibold" for="section">Section</label>
<div class="col-span-2">
    <select class="w-full" id="section" name="section_id">
        @foreach ($sections as $section)
            <option value="{{ $section->id }}">{{ strtoupper($section->name) }}</option>
        @endforeach
    </select>
    @error('section_id')
        <p class="text-red-500"> {{ $message }}</p>
    @enderror
</div>