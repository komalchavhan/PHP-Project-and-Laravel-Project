<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    public $timestamps = true;

   
    protected $fillable = [
        'product_id',
        'product_name',
        'product_code',
        'product_color',
        'size',
        'price',
        'quantity',
        'user_email',
        'session_id'
       
    ];
   /* public $items = array();
    public $totalQty = 0;
    public $totalPrice = 0;
    public function __construct($oldCart)
    {
        if ($oldCart) {
            //dd($this);
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item, $id)
    {
        //force get $items
        global $items;

        //default values if item not in cart
        $storedItem = [
            'qty' => 0,
            'price' => $item->price,
            'item' => $item
        ];
        
        //if item is already in shopping cart
        if (isset($this->$items) ?? $items::false) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
        dd($this);
    }*/

}
