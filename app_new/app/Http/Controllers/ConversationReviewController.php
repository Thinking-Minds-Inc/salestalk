<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TrainingSession;
use App\Models\TrainingSessionRecording;
use App\Models\ICPOption;
use App\Models\VoiceOption;
use App\Models\ToneOption;
use App\Models\ConversationScenarioOption;

class ConversationReviewController extends Controller
{
    public function index(Request $request)
    {
        $recordings = TrainingSessionRecording::all();
        $viewArgs = [
            'recordings' => $recordings
        ];
        return view('pages.apps.user-management.conversion-review.index', $viewArgs);
    }
}

