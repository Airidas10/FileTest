<?php

namespace App;

use Spatie\MediaLibrary\Media as BaseMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaModel extends BaseMedia implements HasMedia
{
    use HasMediaTrait;
    use SoftDeletes;

    protected $table = 'media';
    protected $dates = ['deleted_at'];
}