<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    /**
     * OFFER ATTRIBUTES
     * $this->attributes['id'] - int - contains the offer primary key (id)
     * $this->attributes['publishDate'] - string - contains the creation date of the offer
     * $this->attributes['price'] - float - contains the offer price
     * $this->attributes['status'] - string - contains the status of the offer(SENT-ACCEPTED-REJECTED)
     */
    protected $fillable = ['publishDate', 'price', 'status'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getPublishDate(): string
    {
        return $this->attributes['publishDate'];
    }

    public function setPublishDate($publishDate): void
    {
        $this->attributes['publishDate'] = $publishDate;
    }

    public function getPrice(): float
    {
        return $this->attributes['price'];
    }

    public function setPrice($price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getStatus(): string
    {
        return $this->attributes['status'];
    }

    public function setStatus($status): void
    {
        $this->attributes['status'] = $status;
    }
}
