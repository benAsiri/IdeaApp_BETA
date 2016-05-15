<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Submission;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;


class ImageController extends Controller
{
    /*
        |--------------------------------------------------------------------------
        | Image Uploading
        |--------------------------------------------------------------------------
        |
        | This controller renders the image uploading for the application and
        | is configured to only allow users.
        |
        */
    public function picture(Request $request)
    {

//       var_dump($request);

            $submision = new Submission();
            $file = Input::file('file');
            $filename = time()."-". $file->getClientOriginalName();
            $file->move('Image/', $filename);
            $submision->post = $request->input('idea');;
            $submision->category = $request->input('cat');
            $submision->date = Carbon::now();
            $submision->no_of_votes = 0;
            $submision->user_id = \Auth::user()->id;
            $submision->image = $filename;
            $submision->save();





//            $path = public_path('Image/' . $filename);
//            Image::make($file->getRealPath())->resize(550,500)->save($path);
//
//
//            $submision->Image = 'Image/' . $filename;
//            $submision->save();
//
            return redirect()->action('PagesController@administrative');






//		if(Input::hasFile('file')){
//
//			echo 'Upload <br>';
//			$file = Input::file('file');
//			$file->move('Image', $file->getClientOriginalName());
//			echo '<img src="Images/'. $file->getClientOriginalName().'"/>';
//		}


    }
}
