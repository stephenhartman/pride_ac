<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Image;
use ImageOptimizer;

class PhotoController extends Controller
{

    public function __construct(Photo $photos)
    {
        $this->photos = $photos;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function index(Request $request)
    {
        $photos = $this->photos->latest('created_at')->paginate(5);
        $photos->setPath('/photos');
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'caption' => 'max:500',
            'photo_url' => 'required|mimes:jpeg,jpg,png,gif|between:0,5120'
        ));

        $photo = new Photo;
        $photo->caption = $request->caption;
        $this->upload_photo($request, $photo);
        $photo->save();

        Session::flash('success', 'The photo was successfully saved!');
        $photos = $this->photos->latest('created_at')->paginate(5);
        $photos->setPath('/photos');
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $this->validate($request, array(
            'caption' => 'max:500',
            'photo_url' => 'mimes:jpeg,jpg,png,gif|between:0,5120'
        ));

        $photo->caption = $request->caption;
        if($request->photo_url) {
            $this->upload_photo($request, $photo);
        }
        $photo->save();

        Session::flash('success', 'The photo was successfully updated!');
        $photos = $this->photos->latest('created_at')->paginate(5);
        $photos->setPath('/photos');
        return view('photos.index', compact('photos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo $photo
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Photo $photo)
    {
        File::delete(public_path($photo->photo_url));
        $photo->delete();

        Session::flash('success', 'The photo was successfully deleted.');
        $photos = $this->photos->latest('created_at')->paginate(5);
        $photos->setPath('/photos');
        return view('photos.index', compact('photos'));
    }

    /**
     * Upload photo logic for update and store
     *
     * @param Request $request
     * @param Photo $photo
     * @return $this
     */
    public function upload_photo(Request $request, Photo $photo)
    {
        // Save photo url for profile picture
        File::delete(public_path($photo->photo_url));
        $image = $request->file('photo_url');
        $extension = $image->getClientOriginalExtension();
        if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'gif')
        {
            $filename = 'Photo' . str_random(8) . '.' . $extension;
            $img = Image::make($image);
            $file = $image->move(public_path('image/photos'), $filename);
            $img->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save($file);
            ImageOptimizer::optimize($file);
            $photo->photo_url = '/image/photos/'. $file->getFilename();
        }
        else
        {
            Session::flash('error', 'Please upload a .jpeg, .jpg, .gif or .png file');
            return redirect()->back()->withInput();
        }
    }
}
