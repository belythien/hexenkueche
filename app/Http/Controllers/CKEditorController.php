<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CKEditorController extends Controller {
    public function upload( Request $request ) {
        if( $request->hasFile( 'upload' ) ) {
            //get filename with extension
            $filenamewithextension = $request->file( 'upload' )->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo( $filenamewithextension, PATHINFO_FILENAME );

            //get file extension
            $extension = $request->file( 'upload' )->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $img_resize = Image::make( $request->file( 'upload' )->getRealPath() );
            $img_resize->widen( 1000 );
            $img_resize->save( public_path( 'storage\\img\\' . $filenametostore ) );

//            $request->file( 'upload' )->storeAs( 'public/img', $filenametostore );

            $CKEditorFuncNum = $request->input( 'CKEditorFuncNum' );
            $url = asset( 'storage/img/' . $filenametostore );
            $msg = 'Bild erfolgreich hochgeladen';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header( 'Content-type: text/html; charset=utf-8' );
            echo $re;
        }
    }
}
