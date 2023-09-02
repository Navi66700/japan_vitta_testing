<?php

namespace App\Http\Controllers;

use App\Models\Agriculture;
use App\Models\AgricultureVideo;
use App\Models\Caregiver;
use App\Models\CaregiverVideo;
use Illuminate\Http\Request;

class CaregiverController extends Controller
{
   public function index()
   {
    $caregivers = Caregiver::get();
    $caregiver_videos = CaregiverVideo::get();
    return view('backend/SSW/SSW JOBS/Caregiver/index',[
        'caregivers' => $caregivers,
        'caregiver_videos' => $caregiver_videos
    ]);
   }

   public function addCaregiver()
   {
    return view('backend/SSW/SSW JOBS/Caregiver/add-caregiver');
   }

   public function addCaregiverVideo()
   {
    return view('backend/SSW/SSW JOBS/Caregiver/add-caregiver-video');
   }

   public function viewCaregivers()
   {
    $caregivers = Caregiver::get();
    $caregiver_videos = CaregiverVideo::get();
    return view('SSW/SSW JOBS/Caregiver/index',[
        'caregivers' => $caregivers,
        'caregiver_videos' => $caregiver_videos
    ]);
   }

   public function pdfDownloadCare($id)
   {
       $data = Caregiver::where('id',$id)->first();
       $file_path = public_path("storage/caregiver-pdf/{$data->pdf_file}");
       return response()->download($file_path);
   }

    public function createCaregiver(Request $request)
    {
        $caregiver = new Caregiver();
        $caregiver->caregiver_title = $request->caregiver_title;
        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/caregiver-pdf', $request->pdf_file->getClientOriginalName());
        $caregiver->pdf_file = $pdf_file;

        $care_image = $request->file('care_image')->getClientOriginalName();
        $request->file('care_image')->storeAs('public/caregiver-image', $request->care_image->getClientOriginalName());
        $caregiver->care_image = $care_image;

        $caregiver->save();

        return redirect()->back()->with('success', 'Caregiver added successfully !!!');

    }


    public function updateCaregiver($id)
    {
        $caregiver = Caregiver::find($id);
        return view('backend/SSW/SSW JOBS/Caregiver/edit-caregiver',[
            'caregiver' => $caregiver
        ]);


    }
    public function uploadCaregiverPDF(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/caregiver-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function uploadCareImage(Request $request) {
        $file = $request->file('care_image');
        $destinationPath = 'storage/caregiver-image';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function editCaregiver(Request $request)
    {
        $caregiver = Caregiver::find($request->caregiver_id);
        $caregiver->caregiver_title = $request->caregiver_title;
        if($request->has('pdf_file')){
            $caregiverpdfpath = self::uploadCaregiverPDF($request);
            $caregiver->pdf_file = $caregiverpdfpath;
        }
        if($request->has('care_image')){
            $careimgpath = self::uploadCareImage($request);
            $caregiver->care_image = $careimgpath;
        }
        $caregiver->update();
        return redirect()->back()->with('success', 'Caregiver Updated Successfully');
    }
    public function deleteCaregiver($id)
    {
        $caregiver = Caregiver::find($id)->delete();
        return redirect()->back()->with('success', 'Caregiver deleted successfully !!!');
    }

    public function createCaregiverVideo(Request $request)
    {
        $caregiver_video = new caregiverVideo();
        $caregiver_video-> caregiver_video_link = $request->caregiver_video_link;
        $caregiver_video-> caregiver_video_name = $request->caregiver_video_name;
        $caregiver_video->save();

        return redirect()->back()->with('success', 'Caregiver Video Added successfully !!!');

    }

    public function updateCaregiverVideo($id)
    {
        $caregiver_videos = CaregiverVideo::find($id);
        return view('backend/SSW/SSW JOBS/Caregiver/edit-caregiver-video',[
            'caregiver_videos' => $caregiver_videos
        ]);

    }
    public function editCaregiverVideo(Request $request)
    {
        $caregiver_videos = CaregiverVideo::find($request->caregiver_video_id);
        $caregiver_videos->caregiver_video_link = $request->caregiver_video_link;
        $caregiver_videos->caregiver_video_name = $request->caregiver_video_name;
        $caregiver_videos->update();
        return redirect()->back()->with('success', 'Caregiver Video Updated Successfully');
    }

    public function deleteCaregiverVideo($id)
    {
        $caregiver_video = CaregiverVideo::find($id)->delete();
        return redirect()->back()->with('success', 'Caregiver Video deleted successfully !!!');
    }

}
