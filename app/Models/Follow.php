<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = ['user_id', 'follows_id'];
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
