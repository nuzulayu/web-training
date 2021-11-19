<?php

namespace App\Models;

use App\Models\Post as ModelsPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    // use Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body'];
    //fillable untuk memberitahu field mana aja yg boleh diisi
    //jika tidak ditulis field tidak bisa diisi menggunakan CREATE
    //otomatis diisi sesuai dengan schema

    protected $guarded = ['id'];
    //guarded, field yg ga boleh diisi. sisanya boleh

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        //biar urlnya returnnya slug bukan id
        return 'slug';
    }
    
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}



// Post::create([
//     'title' => 'Post Empat',
//     'excerpt' => 'Zhongli Cakep',
//     'body' => "<p>Lgughipsum, dolor sit amet consectetur adipisicing elit. Doloribus iusto modi veniam, ipsa est, id rerum temporibus aspernatur ea rem aliquid nisi pariatur corrupti fuga enim praesentium obcaecati alias atque dolorem excepturi. Explicabo accusantium veniam et labore consequuntur ipsam at ducimus obcaecati officiis totam deserunt magni dolores eius reiciendis assumenda ipsa, earum ad.</p>

//     <p>Porro, tempora saepe unde maiores minima necessitatibus optio expedita soluta! Sapiente neque cum accusantium debitis temporibus facere autem nesciunt aliquid aspernatur suscipit voluptas commodi perferendis illum saepe magni eveniet minima quasi omnis, minus placeat repellendus incidunt a possimus ab! Officia, est praesentium quae iste nobis nisi enim perferendis laborum reiciendis consequatur facilis magnam, illo veritatis exercitationem recusandae iusto hic maxime mollitia ducimus aliquid nihil doloribus. Iure, suscipit. </p>"
    
// ])

// Post::find(3)->update(['title' => 'judul ketiga'])

// Post::where('title','Post Satu')->update(['excerpt'=> 'Baal lucu'])