<?php
class Contact
{
    private $address;
    privaphonephone;
    private $address;

    function __costruct($name, $phone,$address)
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
        $int_phone = (integer) $new_phone;
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
        array_push($_SESSION['contact_list'],$this);
    }

    function deleteAll()
    {
        $_SESSION['contact_list'] = array();
    }

}
?>
