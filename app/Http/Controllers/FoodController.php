<?php

namespace App\Http\Controllers;

use App\Models\Jft;
use App\Models\JftVideo;
use App\Models\lesson;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodVideo;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::get();
        $food_videos = FoodVideo::get();
        return view('backend/SSW/SSW JOBS/Foods/index',[
            'foods' => $foods,
            'food_videos' => $food_videos
        ]);
    }

    public function viewFoodDetails()
    {
        $foods = Food::get();
        $food_videos = FoodVideo::get();
        return view('SSW/SSW JOBS/Food/index',[
            'foods' => $foods,
            'food_videos' => $food_videos
        ]);
    }

    public function pdfDownloadFood($id)
    {
        $data = Food::where('id',$id)->first();
        $file_path = public_path("storage/food-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function addFood()
    {
        return view('backend/SSW/SSW JOBS/Foods/add-food');
    }

    public function addFoodVideo()
    {
        return view('backend/SSW/SSW JOBS/Foods/add-food-video');
    }
    public function createFood(Request $request)
    {
        $food = new Food();
        $food->food_title = $request->food_title;
        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/food-pdf', $request->pdf_file->getClientOriginalName());
        $food->pdf_file = $pdf_file;

        $food_image = $request->file('food_image')->getClientOriginalName();
        $request->file('food_image')->storeAs('public/food-image', $request->food_image->getClientOriginalName());
        $food->food_image = $food_image;

        $food->save();

        return redirect()->back()->with('success', 'Food added successfully !!!');

    }
    public function updateFood($id)
    {
        $foods = Food::find($id);
        return view('backend/SSW/SSW JOBS/Foods/edit-food',[
            'foods' => $foods
        ]);


    }

    public function uploadFoodPDF(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/food-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function uploadFoodImage(Request $request) {
        $file = $request->file('food_image');
        $destinationPath = 'storage/food-image';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function editFood(Request $request)
    {
        $food = Food::find($request->food_id);
        $food->food_title = $request->food_title;
        if($request->has('pdf_file')){
            $foodpdfpath = self::uploadFoodPDF($request);
            $food->pdf_file = $foodpdfpath;
        }
        if($request->has('food_image')){
            $foodimgpath = self::uploadFoodImage($request);
            $food->food_image = $foodimgpath;
        }
        $food->update();
        return redirect()->back()->with('success', 'Food Updated Successfully');
    }

    public function deleteFood($id)
    {
        $foods = Food::find($id)->delete();
        return redirect()->back()->with('success', 'Food deleted successfully !!!');
    }
    public function createFoodVideo(Request $request)
    {
        $food_video = new foodVideo();
        $food_video-> food_video = $request->food_video;
        $food_video-> food_video_name = $request->food_video_name;
        $food_video->save();

        return redirect()->back()->with('success', 'Food Video Added successfully !!!');

    }

    public function updateFoodVideo($id)
    {
        $food_videos = FoodVideo::find($id);
        return view('backend/SSW/SSW JOBS/Foods/edit-food-video',[
            'food_videos' => $food_videos
        ]);

    }

    public function editFoodVideo(Request $request)
    {
        $food_videos = FoodVideo::find($request->food_video_id);
        $food_videos->food_video = $request->food_video;
        $food_videos->food_video_name = $request->food_video_name;
        $food_videos->update();
        return redirect()->back()->with('success', 'Food Video Updated Successfully');
    }
    public function deleteFoodVideo($id)
    {
        $food_video = FoodVideo::find($id)->delete();
        return redirect()->back()->with('success', 'JFT Video deleted successfully !!!');
    }



}
