<?php
class Product {
    public function __construct(string $id, int $qty)
    {
        $this->id = $id;
        $this->qty = $qty;
    }

    private $id;
    private $qty;
}
class Address {
    public function __construct(string $streetNumber, string $street, string $phoneNumber)
    {
        $this->streetNumber = $streetNumber;
        $this->street = $street;
        $this->phoneNumber = $phoneNumber;
    }

    private $streetNumber;
    private $street;
    private $phoneNumber;
}
class Basket {
    private $id;
    private $products = [];
    private $address;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setProducts(array $products)
    {
        $this->products = $products;

        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }


}

$p1 = new Product("candy1", 2);
$p2 = new Product("chocolate1", 3);
$address = new Address("2", "street X", "00000000");
$basket = (new Basket())->setId('id')->setAddress($address)->setProducts([$p1, $p2]);

$serialized = serialize($basket);
$phpIncompleteClass = unserialize($serialized, ['allowed_classes' => [Product::class]]);
var_dump($phpIncompleteClass);
var_dump(is_object($phpIncompleteClass));

var_dump(new Class {
    public function __construct(){
        $this->{0} = 1;
    }
});