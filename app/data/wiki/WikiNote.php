<?php

namespace App\data\wiki;

use Illuminate\Database\Eloquent\Model;

class WikiNote extends Model
{
    protected $table = "wiki_note";

    public static function getAllNotesByChapter($fkChapter){
        $notes = self::join('users', 'users.id', '=', 'wiki_note.fk_user_writer')
                ->select('wiki_note.*',  'users.img as userImage', 'users.name as userName')
                ->where('fk_wiki_chapter', $fkChapter)
                ->whereNull('wiki_note.dateCloture')
                ->orderBy('wiki_note.created_at', 'DESC')  
                ->get();
        return $notes;
    }
    
}
