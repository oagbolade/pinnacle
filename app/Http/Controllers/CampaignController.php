<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function carCampaign()
    {
        return view('campaign.car-insurance');
    }
    
    public function studentInsuranceCampaign()
    {
        return view('campaign.student-welfare-insurance');
    }
    
    public function teensPolicyCampaign()
    {
        return view('campaign.teens-personal-accident-policy');
    }
}
