<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;

class DropboxController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function show(){

        //Configuring an app
        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);
        $listFolderContents = $dropbox->listFolder('/');
        $items = $listFolderContents->getItems();

        if ($listFolderContents->hasMoreItems()) {
            $cursor = $listFolderContents->getCursor();
            $listFolderContinue = $dropbox->listFolderContinue($cursor);
            $remainingItems = $listFolderContinue->getItems();
        }

        return view('layouts.show')->with('items', $items);
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function store(Request $request)
    {
        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);

        $mode = DropboxFile::MODE_READ;
        $filePath = $request->file('fileToUpload')->getRealPath();
        $dropboxFile = new DropboxFile($filePath, $mode);
        $file = $dropbox->upload($dropboxFile, "/logo.jpg", ['autorename' => true]);

        return redirect('/show');
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function download(Request $request)
    {
        $pd = $request->input('path_display');
        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);
        $download = $dropbox->download($pd, '../resources/downloaded_files' . $pd);

        return view('/layouts.downloaded')->with('pd', $pd);
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
    public function createFolder(Request $request)
    {
        //Configuring an app
        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));

        $dropbox = new Dropbox($app);
        // Creating a folder
        $nfName = $request->input('folderName');
        $folder = $dropbox->createFolder("/".$nfName);

        return redirect('/show');
    }

    
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function openFolder(Request $request){

        $open = $request->input('path_display');
        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);

        $listFolderContents = $dropbox->listFolder($open);
        $items = $listFolderContents->getItems();

        if ($listFolderContents->hasMoreItems()) {
            $cursor = $listFolderContents->getCursor();
            $listFolderContinue = $dropbox->listFolderContinue($cursor);
            $remainingItems = $listFolderContinue->getItems();
        }

        return view('layouts.show')->with('items', $items);
    }
}
