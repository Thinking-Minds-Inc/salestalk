<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ICPOption;
use App\Models\VoiceOption;
use App\Models\ToneOption;
use App\Models\ConversationScenarioOption;

class AddTrainingSessionOptions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $icps = [
"Director, HCM Practice",
"Director - Application Consulting",
"ERP Program Director",
"Director of Recruiting",
"Associate Director",
"Associate Vice President, ERP Systems",
"IT Strategy and Planning Director",
"SR. ERP Consultant",
"Sr. Director, AMS"
        ];
        foreach ($icps as $icp) {
            ICPOption::create([
                'value' => $icp
            ]);
        }
        $voices = [
"Lisa",
"Tom",
"Blake",
"Michael",
"Bala",
"Cyndie",
"Rolf",
        ];
        foreach ($voices as $voice) {
            VoiceOption::create([
                'value' => $voice
            ]);
        }
        $tones = [
"D-Style", 
"S-Style", 
"I-Style", 
"C-Style"
        ];
        foreach ($tones as $tone) {
            ToneOption::create([
                'value' => $voice
            ]);
        }
        $scenarios  =[
"Initial Contact/Cold Call",
"Qualification Call",
"Interest and Pain Point Discovery",
"Product/Service Demonstration",
"Handling Objections",
"Follow-Up Calls",
"Decision-Maker Engagement",
"Negotiation and Closing",
"Post-Sale Follow-Up",
"Lost Deal or Disengagement",
        ];
        foreach ($scenarios as $scenario) {
            ConversationScenarioOption::create([
                'value' => $voice
            ]);
        }
    }
}
