<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandingController extends Controller
{
    public function preview(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|max:2048',
            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'font' => 'required|string',
        ]);

        $logoPath = $request->file('logo')->store('logos', 'public');
        $logoUrl = asset('storage/' . $logoPath);

        return response()->json([
            'preview' => [
                'logo' => $logoUrl,
                'primary_color' => $request->input('primary_color'),
                'secondary_color' => $request->input('secondary_color'),
                'font' => $request->input('font'),
                'brand_name' => $request->input('brand_name') ?? null,
            ]
        ]);
    }
}
