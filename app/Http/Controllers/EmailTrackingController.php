<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampaignRecipient;

class EmailTrackingController extends Controller
{
    public function track($tracker)
    {
        $recipient = CampaignRecipient::where('tracker', $tracker)->first();

        if($recipient)
        {
            $recipient->opened_at = now();
            $recipient->increment('opens_count');
            $recipient->save();
        }

        // Return a 1x1 transparent GIF
        $pixel = base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');

        return response($pixel, 200)
            ->header('Content-Type', 'image/gif')
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }
}
