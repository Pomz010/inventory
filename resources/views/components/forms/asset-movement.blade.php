<x-main >
    <div class="bg-neutral-100 h-auto max-w-sm min-w-fit w-3/12 p-4 rounded-md">
        <div class="flex justify-between border-b border-slate-300 py-2 mb-2">
            <h2 class="font-bold">New Movement</h2>
            <span><img class="h-6" src="./img/close-btn.svg" alt=""></span>
        </div>

        <form class="grid grid-cols-2 gap-y-2 gap-x-4" action="#">
            <div class="font-semibold">
                <input id="inbound" name="transaction-type" value="inbound" type="radio">
                <label for="inbound">Inbound</label>
            </div>
            <div class="font-semibold">
                <input id="outbound" name="transaction-type" value="outbound" type="radio">
                <label for="outbound">Outbound</label>
            </div>
            
            <label class="font-semibold" for="transactionDate">Date</label>
            <input id="transactionDate" name="date" type="date">

            <label class="font-semibold" for="itemType">Item</label>
            <select name="item-type" id="itemType">
                <option value="laptop">Laptop</option>
            </select>

            <label class="font-semibold" for="assetTag">Asset Tag</label>
            <input id="assetTag" name="asset-tag" type="text">

            <label class="font-semibold" for="assetDescription">Description</label>
            <textarea id="assetDescription" name="description" rows="2" cols="33"></textarea>

            <label class="font-semibold" for="transactionPurpose">Purpose</label>
            <input id="transactionPurpose" type="text">

            <label class="font-semibold" for="movementQty">Qty.</label>
            <input id="movementQty" type="number">

            <label class="font-semibold" for="receiver">C/O</label>
            <select name="receiver" id="receiver">
                <option value="rolly castillo">Rolly Castillo</option>
            </select>

            <label class="font-semibold" for="fromLocation">From</label>
            <select name="fromLocation" id="fromLocation">
                <option value="tanza">Tanza</option>
            </select>

            <label class="font-semibold" for="toLocation">To</label>
            <select name="toLocation" id="toLocation">
                <option value="parsolingan">Parsolingan</option>
            </select>

            <label class="font-semibold" for="assetCondition">Condition</label>
            <select name="assetCondition" id="assetCondition">
                <option value="good">Good</option>
            </select>
        </form>
    </div>
</x-main>