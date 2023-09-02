<?php

namespace App\Http\Controllers;

use App\Models\pastPaper;
use Illuminate\Http\Request;

class PastPaperController extends Controller
{
    //get all past paper details to the table
    public function index()
    {
        $pastPapers = pastPaper::get();
        return view('backend/past-papers/index',[
                'pastPapers' => $pastPapers
            ]
        );
    }

    public function addPapers()
    {
        return view('backend/past-papers/add-papers');
    }


    //create new paper file

    public function createPapers(Request $request)
    {
        $pastPaper = new pastPaper();
        $pastPaper->paper_title = $request->paper_title;
        $pastPaper->level = $request->level;
        $pastPaper->youtube_link = $request->youtube_link;

        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/paper-pdf', $request->pdf_file->getClientOriginalName());
        $pastPaper->pdf_file = $pdf_file;

        $pastPaper->save();
        return redirect()->back()->with('success', 'paper added successfully !!!');

}

//Pass Id to the Edit Page
    public function editPaper($id)
    {
        $pastPapers = pastPaper::find($id);
        return view('backend/past-papers/edit-papers',[
            'pastPapers' => $pastPapers
        ]);


    }

    public function uploadPastPaperPdf(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/paper-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }


    public function updatePaper(Request $request)
    {
        $pastpapers = pastPaper::find($request->paper_id);
        $pastpapers->paper_title = $request->paper_title;
        $pastpapers->level = $request->level;
        $pastpapers->youtube_link = $request->youtube_link;

        if($request->has('pdf_file')){
            $pastPaperpdfpath = self::uploadPastPaperPdf($request);
            $pastpapers->pdf_file = $pastPaperpdfpath;
        }
        $pastpapers->update();

        return redirect()->back()->with('success', 'Lesson updated successfully !!!');
    }

    public function deletePaper($id)
    {
        $pastPapers = pastPaper::find($id)->delete();
        return redirect()->back()->with('success', 'Paper deleted successfully !!!');
    }


    //Load to Past Paper Cards and PAst Papers Profile Pages

    //1.Load to cards
    public function viewPaperOne()
    {
        $viewpapers = pastPaper::where('level','=','N1')->get();
        return view('papers/N1/index',[
            'viewpapers' => $viewpapers
        ]);
    }

    public function viewPaperTwo()
    {
        $viewpapertwo = pastPaper::where('level','=','N2')->get();
        return view('papers/N2/index',[
            'viewpapertwo' => $viewpapertwo
        ]);
    }

    public function viewPaperThree()
    {
        $viewpaperthree = pastPaper::where('level','=','N3')->get();
        return view('papers/N3/index',[
            'viewpaperthree' => $viewpaperthree
        ]);
    }

    public function viewPaperFour()
    {
        $viewpaperfour = pastPaper::where('level','=','N4')->get();
        return view('papers/N4/index',[
            'viewpaperfour' => $viewpaperfour
        ]);
    }

    public function viewPaperFive()
    {
        $viewpaperfive = pastPaper::where('level','=','N5')->get();
        return view('papers/N5/index',[
            'viewpaperfive' => $viewpaperfive
        ]);
    }




//2.Load to Profile Pages
    public function viewPaperOneDetails($id)
    {
        $paperoneDetails = pastPaper::find($id);
        return view('papers/N1/view-paper',[
            'paperoneDetails' => $paperoneDetails
        ]);
    }

    public function viewPaperTwoDetails($id)
    {
        $papertwoDetails = pastPaper::find($id);
        return view('papers/N2/view-paper',[
            'papertwoDetails' => $papertwoDetails
        ]);
    }
    public function viewPaperThreeDetails($id)
    {
        $paperthreeDetails = pastPaper::find($id);
        return view('papers/N3/view-paper',[
            'paperthreeDetails' => $paperthreeDetails
        ]);
    }

    public function viewPaperFourDetails($id)
    {
        $paperfourDetails = pastPaper::find($id);
        return view('papers/N4/view-paper',[
            'paperfourDetails' => $paperfourDetails
        ]);
    }

    public function viewPaperFiveDetails($id)
    {
        $paperfiveDetails = pastPaper::find($id);
        return view('papers/N5/view-paper',[
            'paperfiveDetails' => $paperfiveDetails
        ]);
    }


    public function pdfDownloadPaperOne($id)
    {
        $data = pastPaper::where('id',$id)->first();
        $file_path = public_path("storage/paper-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadPaperTwo($id)
    {
        $data = pastPaper::where('id',$id)->first();
        $file_path = public_path("storage/paper-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadPaperThree($id)
    {
        $data = pastPaper::where('id',$id)->first();
        $file_path = public_path("storage/paper-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadPaperFour($id)
    {
        $data = pastPaper::where('id',$id)->first();
        $file_path = public_path("storage/paper-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }
    public function pdfDownloadPaperFive($id)
    {
        $data = pastPaper::where('id',$id)->first();
        $file_path = public_path("storage/paper-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }




    }
