<?php

namespace App;

use Illuminate\Http\Request;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;

class DropboxConfig
{
    public function show_1(){

        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);
        // dd($dropbox);
        $listFolderContents = $dropbox->listFolder('/');
        $items = $listFolderContents->getItems();

        if ($listFolderContents->hasMoreItems()) {
            $cursor = $listFolderContents->getCursor();
            $listFolderContinue = $dropbox->listFolderContinue($cursor);
            $remainingItems = $listFolderContinue->getItems();
        }

        // return view('layouts.show')->with('items', $items);
        return $items;
    }

        public function saveFile(Request $request, $fileName)
    {

        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);

        $mode = DropboxFile::MODE_READ;
        $filePath = $request->file('fileToUpload')->getRealPath();
        $dropboxFile = new DropboxFile($filePath, $mode);
        $file = $dropbox->upload($dropboxFile, $fileName, ['autorename' => true]);
    }
}
