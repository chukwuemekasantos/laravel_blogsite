<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Posts extends Model
{


	protected $fillable = ['user_id','title', 'body'];


	public function user()
    {
        return $this->belongsTo(User::class);
    }

	

	
    public function comments()
    {
    	
    }


    public static function archives()
    {
         return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')

        ->groupBy('year','month')->orderByRaw('min(created_at) desc')->get()->toArray();


      

    }


    public static function filter()
    {
         if ($month = request('month')) {
            
            return static::whereMonth('created_at', Carbon::parse($month)->month);
        }

         if ($year = request('year')) {
            
            return static::whereYear('created_at', $year);
        }
    }



}
