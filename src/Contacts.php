<?php
class Contacts
{
    private $name;
    private $phone;
    private $address;

    function __construct($name, $phone,$address)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;

    }

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function setPhone($new_phone)
    {
        $int_phone = $new_phone;
        $this->phone = $int_phone;
    }

    function setAddress($new_address)
    {
        $this->address = $new_address;
    }

    function getName()
    {
        return $this->name;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function getAddress()
    {
        return $this->address;
    }

    function save()
    {
        array_push($_SESSION['contacts_list'],$this);
    }

    static function getAll()
    {
        return $_SESSION['contacts_list'];
    }

    static function deleteAll()
    {
        $_SESSION['contact_list'] = array();
    }

}

?>
