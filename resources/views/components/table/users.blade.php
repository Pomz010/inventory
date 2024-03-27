<div class="flex flex-col justify-center items-center">
    <div id="departmentsTable" class="flex flex-col gap-1">
        {{-- Table Filter --}}
        <div class="flex justify-between bg-white p-2 rounded-md items-center">
    
            <form class="flex gap-x-8">
              <div class="border-r-2 border-slate-950 pr-8">
                <label for="hardwareRow">Show</label>
                <select class="border place-self-start" name="hardwareRow" id="hardwareRow">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
                <span>entries</span>
              </div>

              <ul>
                  <x-forms.partials.users-entry-form id="newUser" />
              </ul>
            </form>
    
            <div class="bg-slate-100 px-4 py-1 rounded-lg">
                <label for="hardwareSearch">Search</label>
                <input class="border-none bg-slate-100 focus:outline-none" type="search" name="hardwareSearch" id="hardwareSearch">
            </div>
        </div>
        
        {{-- Table --}}
        <div class="p-2 bg-white rounded-lg">
            <table id="departmentList" class="table-auto border border-collapse">
                <thead>
                    <tr class="">
                        <th class="border px-2 py-1">#</th>
                        <th class="border px-2 py-1">Name</th>
                        <th class="border px-2 py-1">Username</th>
                        <th class="border px-2 py-1">Role</th>
                        <th class="border px-2 py-1">Email</th>
                        <th class="border px-2 py-1">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $counter = 1;
                    @endphp

                    @foreach ($users as $user)
                        <tr>
                            <td class="border px-2 py-1">{{ $counter++ }}</td>
                            <td class="border px-2 py-1">{{ $user->firstname }}</td>
                            <td class="border px-2 py-1">{{ $user->username }}</td>
                            <td class="border px-2 py-1">{{ $user->role }}</td>
                            <td class="border px-2 py-1">{{ $user->email }}</td>
                            <td class="border px-2 py-1 flex gap-4">
                                <span class="btn">reset</span>
                                <span class="btn">delete</span>
                                <span class="btn">disable</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
