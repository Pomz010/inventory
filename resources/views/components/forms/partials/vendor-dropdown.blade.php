<label class="font-semibold" for="vendor">Vendor</label>
<select class="col-span-2" name="vendor" id="AssetVendor">
    @foreach($vendors as $vendor)
        <option value="{{ $vendor->id }}">{{ ucwords($vendor->name) }}</option>
    @endforeach
</select>