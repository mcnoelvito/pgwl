<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Points extends Model
{
    use HasFactory;

    protected $table ='table_points';

    //protected $fillable = [
    //    'name',
    //    'description',
    //   'geom'
    //  'image'
    //];

    protected $guarded = ['id'];

    public function points()
    {
        return $this->select(DB::raw('id, name, description, st_asgeojson(geom) as geom, created_at, updated_at, image'))->get();
    }

    public function point($id)
    {
        return $this->select(DB::raw('id, name, description, st_asgeojson(geom) as geom, created_at, updated_at, image'))->where('id',$id)->get();
    }

}
