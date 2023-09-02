<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use App\Models\lesson;
use App\Models\pastPaper;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $lessonCount = lesson::count();
        $pastPaperCount = pastPaper::count();
        $messageCount = contactUs::count();
        return view('backend/layout/dashboard',[
            'lessonCount' => $lessonCount,
            'pastPaperCount' => $pastPaperCount,
            'messageCount' => $messageCount
        ]);
    }
}
