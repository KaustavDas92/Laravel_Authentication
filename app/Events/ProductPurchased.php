<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductPurchased
{
    use Dispatchable, SerializesModels;


    public $name;

    public function __construct($name)
    {
        //
        $this->name = $name;
    }

}
