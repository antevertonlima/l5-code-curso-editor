<?php

namespace CodePub\Models;

use CodePub\Models\User;
use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Book extends Model implements TableInterface
{
    protected $fillable = [
        'title',
        'subtitle',
        'price'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A list of headers to be used when a table is displayed
     *
     * @return array
     */
    public function getTableHeaders()
    {
        return ['#Id', 'Titulo', 'Subtitulo','Preço'];
    }

    /**
     * Get the value for a given header. Note that this will be the value
     * passed to any callback functions that are being used.
     *
     * @param string $header
     * @return mixed
     */
    public function getValueForHeader($header)
    {
        switch ($header){
            case '#Id':
                return $this->id;
            case 'Titulo':
                return $this->title;
            case 'Subtitulo':
                return $this->subtitle;
            case 'Preço':
                return $this->price;
        }
    }
}
