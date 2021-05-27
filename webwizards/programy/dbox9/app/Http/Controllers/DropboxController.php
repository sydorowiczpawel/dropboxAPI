<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kunnu\Dropbox\Dropbox;
// use Kunnu\Dropbox\DropboxApp;
// use Kunnu\Dropbox\DropboxFile;
use App\DropboxConfig;

class DropboxController extends Controller
{

    public function show(){
        $items = new DropboxConfig;
        $items -> show_1();
        // dd($items);

        return view('layouts.show')->with('items', $items);
    }

    public function store(Request $request)
    {
        $file = new DropboxConfig;
        $name = $request -> input('filename');
        $file -> saveFile($request, $name);

        return redirect('/show');
    }

    /**
     * Shows content of selected location.
     * @param
     * @return
     */

    // public function show(){

    //     $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
    //     $dropbox = new Dropbox($app);

    //     $listFolderContents = $dropbox->listFolder('/');
    //     $items = $listFolderContents->getItems();

    //     if ($listFolderContents->hasMoreItems()) {
    //         $cursor = $listFolderContents->getCursor();
    //         $listFolderContinue = $dropbox->listFolderContinue($cursor);
    //         $remainingItems = $listFolderContinue->getItems();
    //     }

    //     return view('layouts.show')->with('items', $items);
    // }

    /**
     * Store selected file to a server
     *
     * @param $request
     * @return
     */

    // public function store(Request $request)
    // {

    //     $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
    //     $dropbox = new Dropbox($app);

    //     $mode = DropboxFile::MODE_READ;
    //     $filePath = $request->file('fileToUpload')->getRealPath();
    //     $dropboxFile = new DropboxFile($filePath, $mode);
    //     $file = $dropbox->upload($dropboxFile, "/logo.jpg", ['autorename' => true]);

    //     return redirect('/show');
    // }

    /**
     * Download file from a server.
     *
     * @param Request $request
     * @return
     */

    // public function download(Request $request)
    // {
    //     $pd = $request->input('path_display');
    //     $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
    //     $dropbox = new Dropbox($app);
    //     $download = $dropbox->download($pd, '../resources/downloaded_files' . $pd);

    //     return view('/layouts.downloaded')->with('pd', $pd);
    // }

    /**
     * Create a folder.
     *
     * @param  Request $request
     * @return
     */

    // public function createFolder(Request $request)
    // {
    //     //Configuring an app
    //     $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
    //     $dropbox = new Dropbox($app);

    //     // Creating a folder
    //     $nfName = $request->input('folderName');
    //     $folder = $dropbox->createFolder("/".$nfName);

    //     return redirect('/show');
    // }

    /**
     * Open a folder from a given path
     *
     * @param  Request $request
     * @return
     */

    // public function openFolder(Request $request){

    //     $open = $request->input('path_display');
    //     $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
    //     $dropbox = new Dropbox($app);

    //     $listFolderContents = $dropbox->listFolder($open);
    //     $items = $listFolderContents->getItems();

    //     if ($listFolderContents->hasMoreItems()) {
    //         $cursor = $listFolderContents->getCursor();
    //         $listFolderContinue = $dropbox->listFolderContinue($cursor);
    //         $remainingItems = $listFolderContinue->getItems();
    //     }

    //     return view('layouts.show')->with('items', $items);
    // }
}
