<?php

class giohang
{
    function add_item($key, $quantity)
    {
        $product = new hanghoa();
        $pro = $product->gethanghoaID($key); //lay ra thong tin cua mot san pham
        $scost = $pro['dongia'];
        $total = $scost * $quantity;
        $hinh = $pro['hinh'];
        $ten = $pro['tenhh'];
        //tao doi tuong
        $item = array(
            'mahh' => $key,
            'hinh' => $hinh,
            'ten' => $ten,
            'soluong' => $quantity,
            'total' => $total,
            'dongia' => $scost
        );
        $_SESSION['cart'][] = $item;

    }
    function getTotal(){
        $subtotal=0;
        if(isset($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $item){
                $subtotal += $item['total'];
            }
        }
        return number_format($subtotal,2);
    }



    function delete_item($key)
    {
        unset($_SESSION['cart'][$key]);
    }

    function update_item($key, $quantity)
    {
        if ($quantity <= 0) {
            $this->delete_item($key);
        } else {
            $_SESSION['cart'][$key]['soluong'] = $quantity;
            $total_new = $quantity * $_SESSION['cart'][$key]['dongia'];
            $_SESSION['cart'][$key]['total'] = $total_new;
        }
    }
}
