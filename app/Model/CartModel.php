<?php


namespace App\Model;


class CartModel extends Model
{
    protected $table = 'carts';

        public function recupCart()
    {
        $ids = array_keys($_SESSION['cart']);
        return $this->query('
        SELECT * FROM products
        WHERE id IN (' . implode(',', $ids) . ')
        ');
    }
}
