<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\LessonN1N2N3Videos;
use App\Models\LessonN3N2N1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;


class LessonController extends Controller
{
    public function index()
    {
        $lessons = lesson::get();
        $lessons_n3_n2_n1 = LessonN3N2N1::get();
        $lessons_video_n1_n2_n3 = LessonN1N2N3Videos::get();
        return view('backend/lesson/index',[
            'lessons' => $lessons,
            'lessons_n3_n2_n1' => $lessons_n3_n2_n1,
            'lessons_video_n1_n2_n3' => $lessons_video_n1_n2_n3
        ]);
    }

    public function addLesson()
    {
        return view('backend/lesson/add-lessons');
    }

    public function addLessonN1N2N3()
    {
        return view('backend/lesson/add-n1-n2-n3-lessons');
    }

    public function createLesson(Request $request)
    {
        $lesson = new lesson();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level = $request->level;
        $lesson->description = $request->description;
        $lesson->youtube_video_link = $request->youtube_video_link;

        $lesson_image = $request->file('lesson_image')->getClientOriginalName();
        $request->file('lesson_image')->storeAs('public/lessons-image', $request->lesson_image->getClientOriginalName());
        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/lessons-pdf', $request->pdf_file->getClientOriginalName());
        $lesson->lesson_image = $lesson_image;
        $lesson->pdf_file = $pdf_file;

        $lesson->save();

        return redirect()->back()->with('success', 'Lesson added successfully !!!');

    }

    public function createLessonN3N2N1(Request $request)
    {
        $lesson_n3_n2_n1 = new LessonN3N2N1();
        $lesson_n3_n2_n1->lesson_title = $request->lesson_title;
        $lesson_n3_n2_n1->level = $request->level;

        $lesson_image = $request->file('lesson_image')->getClientOriginalName();
        $request->file('lesson_image')->storeAs('public/lessons-image', $request->lesson_image->getClientOriginalName());
        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/lessons-pdf', $request->pdf_file->getClientOriginalName());
        $lesson_n3_n2_n1->lesson_image = $lesson_image;
        $lesson_n3_n2_n1->pdf_file = $pdf_file;

        $lesson_n3_n2_n1->save();
        return redirect()->back()->with('success', 'Lesson added successfully !!!');
    }

    public function editLesson($id)
    {
        $lessons = lesson::find($id);
        return view('backend/lesson/edit-lessons',[
            'lessons' => $lessons
        ]);
    }

    public function editLessonN3N2N1($id)
    {
        $lessons_n3_n2_n1 = LessonN3N2N1::find($id);
        return view('backend/lesson/edit-n1-n2-n3-lessons',[
            'lessons_n3_n2_n1' => $lessons_n3_n2_n1
        ]);
    }


    public function uploadLessonPDFN5N4(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/lessons-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function uploadLessonImageN5N4(Request $request) {
        $file = $request->file('lesson_image');
        $destinationPath = 'storage/lessons-image';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function updateLesson(Request $request)
    {
        $lessons = lesson::find($request->lesson_id);
        $lessons->lesson_title = $request->lesson_title;
        $lessons->level = $request->level;
        $lessons->description = $request->description;
        $lessons->youtube_video_link = $request->youtube_video_link;

        if($request->has('pdf_file')){
            $lessonpdfpath = self::uploadLessonPDFN5N4($request);
            $lessons->pdf_file = $lessonpdfpath;
        }
        if($request->has('lesson_image')){
            $lessonimgpath = self::uploadLessonImageN5N4($request);
            $lessons->lesson_image = $lessonimgpath;
        }
        $lessons->update();
        return redirect()->back()->with('success', 'Lesson updated successfully !!!');
    }


    public function uploadLessonImage(Request $request) {
        $file = $request->file('lesson_image');
        $destinationPath = 'storage/lessons-image';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
      }

      public function uploadLessonPdf(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/lessons-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
      }


    public function updateLessonN3N2N1(Request $request)
    {
        $lessons_n3_n2_n1 = LessonN3N2N1::find($request->lesson_id);
        $lessons_n3_n2_n1->lesson_title = $request->lesson_title;
        $lessons_n3_n2_n1->level = $request->level;
        if($request->has('lesson_image')){
            $LessonimagePath = self::uploadLessonImage($request);
            $lessons_n3_n2_n1->lesson_image = $LessonimagePath;
          }
          if($request->has('pdf_file')){
            $LessonPdfPath = self::uploadLessonPdf($request);
            $lessons_n3_n2_n1->pdf_file = $LessonPdfPath;
          }
         $lessons_n3_n2_n1->update();
         return redirect()->back()->with('success', 'Lesson Updated Successfully');
    }

    public function deleteLesson($id)
    {
        $lessons = lesson::find($id)->delete();
        return redirect()->back()->with('success', 'Lesson deleted successfully !!!');
    }

    public function deleteLessonN1N2N3($id)
    {
        $lessons_n1_n2_n3 = LessonN3N2N1::find($id)->delete();
        return redirect()->back()->with('success', 'Lesson deleted successfully !!!');
    }

    public function addLessonVideoN1N2N3()
    {
        return view('backend/lesson/add-lesson-video-n1-n2-n3');
    }

    public function createLessonVideoN3N2N1(Request $request)
    {
        $lessons_video_n1_n2_n3 = new LessonN1N2N3Videos();
        $lessons_video_n1_n2_n3->video_title = $request->video_title;
        $lessons_video_n1_n2_n3->video_link = $request->video_link;
        $lessons_video_n1_n2_n3->level = $request->level;

        $lessons_video_n1_n2_n3->save();
        return redirect()->back()->with('success', 'Lesson Video added successfully !!!');

    }

    public function editLessonVideoN1N2N3($id)
    {
        $lessons_video_n3_n2_n1 = LessonN1N2N3Videos::find($id);
        return view('backend/lesson/edit-lesson-video-n1-n2-n3',[
            'lessons_video_n3_n2_n1' => $lessons_video_n3_n2_n1
        ]);
    }

    public function updateLessonVideoN3N2N1(Request $request)
    {
        $lessons_video_n3_n2_n1 = LessonN1N2N3Videos::find($request->lesson_video_id);
        $lessons_video_n3_n2_n1->video_title = $request->video_title;
        $lessons_video_n3_n2_n1->video_link = $request->video_link;
        $lessons_video_n3_n2_n1->update();
        return redirect()->back()->with('success', 'Lesson Video Updated successfully !!!');
    }

    public function deleteLessonVideoN1N2N3($id)
    {
        $lessons_video_n1_n2_n3 = LessonN1N2N3Videos::find($id)->delete();
        return redirect()->back()->with('success', 'Lesson Video deleted successfully !!!');
    }

    public function viewLevelOne()
    {
        $levelones = LessonN3N2N1::where('level','=','N1')->get();
        $leveloneVideos = LessonN1N2N3Videos::where('level','=','N1')->get();
        return view('levels/N1/index',[
            'levelones' => $levelones,
            'leveloneVideos' => $leveloneVideos
        ]);
    }

    public function viewLevelTwo()
    {
        $leveltwos = LessonN3N2N1::where('level','=','N2')->get();
        $leveltwoVideos = LessonN1N2N3Videos::where('level','=','N2')->get();
        return view('levels/N2/index',[
            'leveltwos' => $leveltwos,
            'leveltwoVideos' => $leveltwoVideos
        ]);
    }

    public function viewLevelThree()
    {
        $levelthrees = LessonN3N2N1::where('level','=','N3')->get();
        $levelthreeVideos = LessonN1N2N3Videos::where('level','=','N3')->get();
        return view('levels/N3/index',[
            'levelthrees' => $levelthrees,
            'levelthreeVideos' => $levelthreeVideos
        ]);
    }


    public function viewLevelFour()
    {
        $levelfour = lesson::where('level','=','N4')->get();
        return view('levels/N4/index',[
            'levelfour' => $levelfour
        ]);
    }

    public function viewLevelFive()
    {
        $levelfive = lesson::where('level','=','N5')->get();
        return view('levels/N5/index',[
            'levelfive' => $levelfive
        ]);
    }

    public function viewLevelOneDetails($id)
    {
        $lessononeDetails = lesson::find($id);
        return view('levels/N1/view-level-one',[
            'lessononeDetails' => $lessononeDetails
        ]);
    }

    public function viewLevelTwoDetails($id)
    {
        $lessontwoDetails = lesson::find($id);
        return view('levels/N2/view-level',[
            'lessontwoDetails' => $lessontwoDetails
        ]);
    }


    public function viewLevelThreeDetails($id)
    {
        $lessonthreeDetails = lesson::find($id);
        return view('levels/N3/view-level',[
            'lessonthreeDetails' => $lessonthreeDetails
        ]);
    }

    public function viewLevelFourDetails($id)
    {
        $lessonfourDetails = lesson::find($id);
        return view('levels/N4/view-level',[
            'lessonfourDetails' => $lessonfourDetails
        ]);
    }

    public function viewLevelFiveDetails($id)
    {
        $lessonfiveDetails = lesson::find($id);
        return view('levels/N5/view-level',[
            'lessonfiveDetails' => $lessonfiveDetails
        ]);
    }


    public function pdfDownload($id)
    {
        $data = LessonN3N2N1::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadTwo($id)
    {
        $data = LessonN3N2N1::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadThree($id)
    {
        $data = LessonN3N2N1::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadFour($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }


    public function pdfDownloadFive($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }


}
