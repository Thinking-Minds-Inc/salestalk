<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TrainingSession;
use App\Models\TrainingSessionRecording;
use App\Models\ICPOption;
use App\Models\VoiceOption;
use App\Models\ToneOption;
use App\Models\ConversationScenarioOption;

class TrainingSessionController extends Controller
{
    public function index(Request $request)
    {
        $voices = VoiceOption::all();
        $icps = ICPOption::all();
        $tones = ToneOption::all();
        $conversationScenarios = ConversationScenarioOption::all();
        $viewArgs = [
            'voices' => $voices,
            'icps' => $icps,
            'tones' => $tones,
            'conversationScenarios' => $conversationScenarios
        ];
        return view('pages.apps.user-management.training-session.index', $viewArgs);
    }
    public function create(Request $request)
    {
        return view('pages.apps.user-management.training-session.index');
    }
}

