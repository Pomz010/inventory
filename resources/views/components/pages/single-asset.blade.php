<x-main >
    <div>
        <h1>{{ $asset->asset_tag }}</h1>
        <div>
            <span><img src="../../../img/photo.png" alt="Image Icon"></span>
            <ul>
                <li>{{ $asset->brand }}</li>
                <li>{{ $asset->model }}</li>
                <li>{{ $asset->hostname }}</li>
                <li>{{ $asset->serial_number }}</li>
            </ul>
        </div>
    </div>
        
</x-main>
