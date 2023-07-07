<label class="font-semibold" for="vendor">Vendor</label>
<div class="col-span-2">
    <select class="w-full" name="vendor" id="AssetVendor">
        @foreach($vendors as $vendor)
            <option value="{{ $vendor->id }}">{{ ucwords($vendor->name) }}</option>
        @endforeach
    </select>
    @error('vendor')
    <p class="text-red-500"> {{ $message }}</p>
    @enderror
</div>