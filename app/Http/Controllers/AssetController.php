<?php

namespace App\Http\Controllers;

use App\Models\HardwareAsset;
use App\Models\SoftwareAsset;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class AssetController extends Controller
{
    public function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $hardwareAssets = HardwareAsset::all();
            $laptops = HardwareAsset::where('item', '=', 'laptop')->take(10)->get();
            $systemUnits = HardwareAsset::where('item', '=', 'system unit')->take(10)->get();
            $softwareAssets = SoftwareAsset::all();
            return view('components.nav-contents.asset-monitoring', compact('hardwareAssets', 'laptops', 'systemUnits', 'softwareAssets'));
        } else {
            return redirect('/');
        }
    }

    public function create(string $asset){
        if(auth()->check()){
            $vendors = Vendor::all();
            $softwareAssets = SoftwareAsset::all();
            // dd($vendors);
            $newAsset = $asset;
            return view('components.forms.create-asset', ['asset' => $newAsset, 'vendors' => $vendors, 'softwareAssets' => $softwareAssets]);
        } else {
            return redirect('/');
        }
    }

    function store(Request $request){
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
                'os_productKey' => ['nullable', 'string', 'max:255', Rule::unique('hardware_assets', 'os_productKey')],
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
}
