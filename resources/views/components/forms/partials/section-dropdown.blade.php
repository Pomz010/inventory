<label class="font-semibold" for="section">Section</label>
<select class="col-span-2">
    @foreach ($sections as $section)
        <option id="section" name="section_id" value="{{ $section->id }}">{{ $section->name }}</option>
    @endforeach
</select>