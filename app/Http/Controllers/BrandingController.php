<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BrandingController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->all();

        // Decode base64 image
        $imageData = $data['preview_image'] ?? null;
        if (!$imageData) {
            return response()->json(['error' => 'No preview image provided'], 422);
        }

        $image = str_replace('data:image/png;base64,', '', $imageData);
        $image = str_replace(' ', '+', $image);
        $imageBinary = base64_decode($image);
        $imagePath = storage_path('app/public/preview.png');

        // Save image
        file_put_contents($imagePath, $imageBinary);

        // Email to organization
        Mail::send('emails.branding-request', ['data' => $data], function ($message) use ($imagePath) {
            $message->to(['courses@learniq.online', 'timmaters1997@gmail.com'])
                ->subject('New Branding Demo Request')
                ->attach($imagePath);
        });

        // Email to user
        Mail::send('emails.branding-confirmation', ['name' => $data['user_name']], function ($message) use ($data, $imagePath) {
            $message->to($data['user_email'])
                ->subject('Thank you for your demo request!')
                ->attach($imagePath); // Attach screenshot also for user
        });

        return response()->json(['success' => true]);
    }
}
