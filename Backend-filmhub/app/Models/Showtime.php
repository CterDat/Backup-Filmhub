<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;


    protected $table = 'showtimes';


    protected $fillable = [
        'movie_id',
        'room_id',
        'shift_id',
        'start_time',
        'end_time',
    ];


    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


}
