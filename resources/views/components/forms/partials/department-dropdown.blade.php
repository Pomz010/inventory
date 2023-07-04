<label class="font-semibold" for="department">Department</label>
<div class="col-span-2">
    <select class="w-full" id="department" name="departments_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ ucwords($department->name) }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p class="text-red-500"> {{ $message }}</p>
    @enderror
</div>