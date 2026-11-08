<?php

namespace App\Models;

use Framework\Core\Model;

class Property extends Model
{
    protected static ?string $table = 'properties';

    public ?int $id = null;

    public ?string $title = null;
    public ?int $price = null;
    public ?string $location = null;
    public ?string $description = null;
    public ?int $rooms = 0;
    public ?int $baths = null;
    public ?int $size = null;
    public ?string $propertyType = null;
    public ?string $styleOfHome = null;

    protected static ?array $fillable = [
        'title',
        'price',
        'location',
        'description',
        'rooms',
        'baths',
        'size',
        'propertyType',
        'styleOfHome',
    ];
}

