<?php

namespace Register;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //    public function author() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
    public function user() {
        return $this->belongsTo('\Register\User');
    }
}
