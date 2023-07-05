<label class="font-semibold" for="businessUnit">BU</label>
<div class="col-span-2">
    <select class="w-full" id="businessUnit" name="business_unit_id">
        @foreach ($businessUnits as $businessUnit)
            <option value="{{ $businessUnit->id }}">{{ strtoupper($businessUnit->name) }}</option>
        @endforeach
    </select>
    @error('business_unit_id')
        <p class="text-red-500"> {{ $message }}</p>
    @enderror
</div>