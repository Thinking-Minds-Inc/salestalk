<?php

namespace App\Http\Controllers;
use App\Models\TrainingSession;
use App\Models\TrainingSessionRecording;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        $sessions = TrainingSession::getBest();
        $recordings = TrainingSessionRecording::getBest();

        return view('pages/dashboards.index', compact('sessions', 'recordings'));
    }
}
