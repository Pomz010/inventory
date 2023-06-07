{{-- @extends('modal.backdrop')

@section('modal-form')
<x-modal.backdrop>
    <x-slot> --}}
        <div class="bg-neutral-100 h-auto w-4/12 p-4">
            <div class="flex justify-between border-b">
                <h2>New Movement</h2>
                <span><img class="h-6" src="./img/close-btn.svg" alt=""></span>
            </div>

            <form class="grid grid-cols-2 gap-y-2" action="#">
                <div>
                    <input type="radio">
                    <label for="">Inbound</label>
                </div>
                <div>
                    <input type="radio">
                    <label for="">Outbound</label>
                </div>
                
                <label for="">Outbound</label>
                <input type="date">
        
                <label for="">Item</label>
                <select name="item-type" id="itemType">
                    <option value="laptop">Laptop</option>
                </select>
        
                <label for="">Asset Tag</label>
                <input type="text">
        
                <label for="">Description</label>
                <textarea id="assetDescription" name="description" rows="2" cols="33"></textarea>
        
                <label for="">Purpose</label>
                <input type="text">
        
                <label for="">Qty.</label>
                <input type="number">
        
                <label for="">C/O</label>
                <select name="receiver" id="receiver">
                    <option value="rolly castillo">Rolly Castillo</option>
                </select>
        
                <label for="">From</label>
                <select name="fromLocation" id="fromLocation">
                    <option value="tanza">Tanza</option>
                </select>
        
                <label for="">To</label>
                <select name="toLocation" id="toLocation">
                    <option value="parsolingan">Parsolingan</option>
                </select>
        
                <label for="">Condition</label>
                <select name="assetCondition" id="assetCondition">
                    <option value="good">Good</option>
                </select>
            </form>
        </div>
    {{-- </x-slot>
</x-modal.backdrop>
@endsection --}}