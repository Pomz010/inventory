<label class="font-semibold" for="department">Department</label>
<select class="col-span-2">
    @foreach ($departments as $department)
        <option id="department" name="department_id" value="{{ $department->id }}">{{ department->name }}</option>
    @endforeach
</select>