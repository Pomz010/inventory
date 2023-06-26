<li id='{{ $id }}' class="btnPadding btn static">
    <span class="cursor-pointer">New Entry</span>
    <ul class="flex flex-col absolute bg-blue-500 text-white rounded-md hidden">
        <li><a class="hover:bg-slate-600 hover:rounded-t-md w-full block px-2 py-1" href="{{ route('create-department', ['department' => 'business-unit']) }}">Business Unit</a></li>
        <li><a class="hover:bg-slate-600 hover:rounded-b-md w-full block px-2 py-1" href="{{ route('create-department', ['department' => 'department'])}}">Department</a></li>
    </ul>
</li>