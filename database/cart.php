<?php
//php cart class
class cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    public function insertlntoCart($params = null,$table="cart"){
        if($this->db->con != null){
            if($params != null){
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user id and item id and insert in to cart table
    public  function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            $result = $this->insertlntoCart($params);
            if ($result){
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }



}