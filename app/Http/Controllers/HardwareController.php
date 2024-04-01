<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Models\HardwareAsset;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class HardwareController extends Controller
{

    public function destroy(HardwareAsset $asset){
        dump($asset);
    }

    public function update(HardwareAsset $asset, Request $request){
        if(auth()->check()){
            $newAsset = $request->validate([
                'asset_tag' => ['required', 'string', 'max:255', Rule::unique('hardware_assets', 'asset_tag')->ignore($asset->id)],
                'item' => ['required', 'string', 'max:255'],
                'brand' => ['required', 'string', 'max:255'],
                'model' => ['required', 'string', 'max:255'],
                'processor' => ['nullable', 'string', 'max:255'],
                'memory' => ['nullable', 'string', 'max:255'],
                'storage' => ['nullable', 'string', 'max:255'],
                'gpu' => ['nullable', 'string', 'max:255'],
                'motherboard' => ['nullable', 'string', 'max:255'],
                'serial_number' => ['required', 'string', 'max:255'],
                'os_name' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'serial_number')->ignore($asset->id)],
                'os_category' => ['nullable', 'string', 'max:255'],
                'os_productKey' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'os_productKey')->ignore($asset->id)],
                'hostname' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'hostname')->ignore($asset->id)],
                'vendor' => ['required', 'string', 'max:255'],
                'purchase_date' => ['required', 'date'],
                'warranty' => ['required', 'date'],
                'dr_number' => ['required', 'string', 'max:255'],
                'po_number' => ['required', 'string', 'max:255'],
                'price' => ['required', 'string', 'max:255'],
                'printer_type' => ['nullable', 'string', 'max:255'],
                'mac_address' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mac_address')->ignore($asset->id)],
                'ip_address' => ['nullable', 'string', 'max:255'],
                'printer_output' => ['nullable', 'string', 'max:255'],
                'cartridge_model' => ['nullable', 'string', 'max:255'],
                'device_ownership' => ['nullable', 'string', 'max:255'],
                'mobile_imei_#1' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mobile_imei_#1')->ignore($asset->id)],
                'mobile_imei_#2' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mobile_imei_#2')->ignore($asset->id)],
                'mobile_sim_#' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mobile_sim_#')->ignore($asset->id)],
                'account_#' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'account_#')->ignore($asset->id)],
                'data_plan' => ['nullable', 'string', 'max:255'],
                'description' => ['nullable', 'string', 'max:255'],
                'user' => ['nullable', 'string', 'max:255'],
                'condition' => ['nullable', 'string', 'max:255'],
                'status' => ['nullable', 'string', 'max:255'],
            ]);

            $data = array_map('strtolower', $newAsset);
            $asset->update($data);
            return redirect()->route('assets.index')->with('success', 'Asset updated successfully');
        } else {
            return redirect('/');
        }
    }

    public function edit(HardwareAsset $asset){
        if(auth()->check()){
            $vendors = Vendor::all();
            return view('components.forms.edit-asset', ['asset' => $asset, 'vendors' => $vendors]);
        } else {
            return redirect('/');
        }
    }

    public function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $hardwareAssets = HardwareAsset::all();
            $laptops = HardwareAsset::where('item', '=', 'laptop')->take(10)->get();
            $systemUnits = HardwareAsset::where('item', '=', 'system unit')->take(10)->get();
            return view('components.nav-contents.asset-monitoring', compact('hardwareAssets', 'laptops', 'systemUnits'));
        } else {
            return redirect('/');
        }
    }

    public function create(string $asset){
        if(auth()->check()){
            $vendors = Vendor::all();
            $hardwareAssets = HardwareAsset::all();
            $newAsset = $asset;
            // dump($vendors);
            // return view('components.forms.new-laptop');
            // return view('components.forms.new-laptop', ['vendors' => $vendors]);
            // dump($newAsset);
            return view('components.forms.create-asset', ['asset' => $newAsset, 'vendors' => $vendors]);
            // return view('components.forms.create-asset', ['asset' => $newAsset, 'vendors' => $vendors, 'hardwareAssets' => $hardwareAssets]);
        } else {
            return redirect('/');
        }
    }

    function store(HardwareAsset $asset, Request $request){
        if(auth()->check()){
            $newAsset = $request->validate([
                'asset_tag' => ['required', 'string', 'max:255', Rule::unique('hardware_assets', 'asset_tag')],
                'item' => ['required', 'string', 'max:255'],
                'brand' => ['required', 'string', 'max:255'],
                'model' => ['required', 'string', 'max:255'],
                'processor' => ['nullable', 'string', 'max:255'],
                'memory' => ['nullable', 'string', 'max:255'],
                'storage' => ['nullable', 'string', 'max:255'],
                'gpu' => ['nullable', 'string', 'max:255'],
                'motherboard' => ['nullable', 'string', 'max:255'],
                'serial_number' => ['required', 'string', 'max:255'],
                'os_name' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'serial_number')],
                'os_category' => ['nullable', 'string', 'max:255'],
                'os_productKey' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'os_productKey')->ignore($asset->id)],
                'hostname' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'hostname')],
                'vendor' => ['required', 'string', 'max:255'],
                'purchase_date' => ['required', 'date'],
                'warranty' => ['required', 'date'],
                'dr_number' => ['required', 'string', 'max:255'],
                'po_number' => ['required', 'string', 'max:255'],
                'price' => ['required', 'string', 'max:255'],
                'printer_type' => ['nullable', 'string', 'max:255'],
                'mac_address' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mac_address')],
                'ip_address' => ['nullable', 'string', 'max:255'],
                'printer_output' => ['nullable', 'string', 'max:255'],
                'cartridge_model' => ['nullable', 'string', 'max:255'],
                'device_ownership' => ['nullable', 'string', 'max:255'],
                'mobile_imei_#1' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mobile_imei_#1')],
                'mobile_imei_#2' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mobile_imei_#2')],
                'mobile_sim_#' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'mobile_sim_#')],
                'account_#' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'account_#')],
                'data_plan' => ['nullable', 'string', 'max:255'],
                'description' => ['nullable', 'string', 'max:255'],
            ]);

            $data = array_map('strtolower', $newAsset);
            // dd($newAsset);
            HardwareAsset::create($data);

            return redirect()->back()->with('success', 'New asset added successfully');
        } else {
            return redirect('/');
        }
    }
    
    // function create(Request $request){
    //     if(auth()->check()){
    //         // return view('forms.asset-movement');
    //         if ($request->ajax()) {
    //             // Process the AJAX request and return the desired view
    //             return view('tab-contents.hardware')->render();
    //         } else {
    //             // Handle non-AJAX request differently if needed
    //             return "console.log('Page not found')";
    //         }
    //     } else {
    //         return redirect('/');
    //     }
    // }
}
