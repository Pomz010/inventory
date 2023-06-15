<div id="hardwareTable" class="flex flex-col gap-1 hidden">
    {{-- Table Filter --}}
    <div class="flex justify-between">

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

          <div>
            <label for="hardwareCategory">Category</label>
            <select class="border" name="hardwareCategory" id="hardwareCategory">
              <option value="laptop">Laptop</option>
              <option value="system unit">System Unit</option>
              <option value="monitor">Monitor</option>
              <option value="printer">Printer</option>
              <option value="projector">Projector</option>
              <option value="ups">UPS</option>
              <option value="router">Router</option>
              <option value="firewall">Firewall</option>
              <option value="switch">Switch</option>
              <option value="access point">Access Point</option>
              <option value="mobile devices">Mobile Devices</option>
              <option value="others">Others</option>
            </select>
          </div>
        </form>
        <div>
            <label for="">Search</label>
            <input class="border " type="search" name="" id="">
        </div>
    </div>
    
    {{-- Table --}}
    <div id="categories">
      <x-table.laptop-category />
      <x-table.system-unit-category />
    </div>
    
</div>