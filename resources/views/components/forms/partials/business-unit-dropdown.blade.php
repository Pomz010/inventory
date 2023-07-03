<label class="font-semibold" for="businessUnit">BU</label>
<select class="col-span-2">
    @foreach ($businessUnits as $businessUnit)
        <option id="businessUnit" name="business_unit_id" value="{{ $businessUnit->id }}">{{ $businessUnit->name }}</option>
    @endforeach
</select>