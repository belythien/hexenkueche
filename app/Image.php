<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as ImageMaker;

class Image extends Model {
    protected $fillable = [ 'name', 'filename' ];

    public function pages() {
        return $this->morphedByMany( 'App\Page', 'imageable' );
    }

    public function menuitems() {
        return $this->morphedByMany( 'App\MenuItem', 'imageable' );
    }

    public function upload( Request $request ) {
        $filenameWithExt = $request->file( 'image' )->getClientOriginalName();
//        $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME );
//        $extension = $request->file( 'image' )->getClientOriginalExtension();
//        $fileNameToStore = $filename . '_' . time() . '.' . $extension;

        $img_resize = ImageMaker::make( $request->file( 'image' )->getRealPath() );
        $img_resize->heighten( 1000 );
        $img_resize->save( public_path( 'storage\\img\\' . $filenameWithExt ) );

        $this->filename = $filenameWithExt;
        $this->name = '';
        $this->save();
    }
}
