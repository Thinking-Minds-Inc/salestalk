<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TrainingSession;
use App\Models\ICPOption;
use App\Models\ToneOption;
use App\Models\VoiceOption;
use App\Models\ConversationScenarioOption;
use Auth;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        $sessions = TrainingSession::all();
        $icps = ICPOption::all();
        $tones = ToneOption::all();
        $voices = VoiceOption::all();
        $conversationScenarios = ConversationScenarioOption::all();

        $viewArgs = compact( 'sessions', 'icps', 'tones', 'voices', 'conversationScenarios' );
        return view( 'pages.apps.user-management.training-session.index', $viewArgs);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        
        $session =TrainingSession::create([
            'name' => $data['name'],
            'icp_id' => $data['icp'],
            'voice_id' => $data['voice'],
            'tone_id' => $data['tone'],
            'conversation_scenario_id' => $data['conversation_scenario'],
            'user_id' => $user->id
        ]);

        $url = sprintf("/training-session/start?sessionId=%s", $session->id);
        return redirect($url);
    }
    public function session_start(Request $request)
    {
        $sessionId = $request->get("sessionId");
        $session = TrainingSession::findOrFail( $sessionId );

        return view('pages.apps.user-management.training-session.session_start', compact('session'));
    }
    public function session_end(Request $request)
    {
        $data = $request->all();
        $sessionId = $data['sessionId'];
        $session = TrainingSession::findOrFail( $sessionId );
        return response()->json(['success' => TRUE]);
    }
}
