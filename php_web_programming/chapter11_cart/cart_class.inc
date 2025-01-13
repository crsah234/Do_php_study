<?php

class Cart
{
    private $contents;

    //   쇼핑목록 추가
    function add($name, $amount)
    {
        $this->contents[$name] = $amount;
    }

    function delete($name)
    {
        if (count($this->contents) > 0) {
            foreach ($this->contents as $key => $value) {
                if ($key != $name) {
                    $new_cart[$key] = $value;
                }
                $this->contents = $new_cart;
            }
        }
    }

    function get_list()
    {
        return $this->contents;
    }

    function get_count()
    {
        return count($this->contents);
    }

}


?>
