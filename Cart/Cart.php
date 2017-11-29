<?php /**
 *
 */
class Cart
{
  public $items = array();

  function __construct() {
      if(isset($_SESSION['cart']))
        $this->items = $_SESSION['cart'];
  }

  private function update() {
      $_SESSION['cart'] = $this->items;
  }

  public function add($id, $name, $price, $quantity) {
      $count;
      for($count = 0; $count < count($this->items); $count++) {
        if($id == $this->items[$count]['item_id']){
          $this->items[$count]['item_quantity'] += $quantity;
          break;
        }
      }

      if($count >= count($this->items)) {
        $this->items[$count] = array('item_id'=>$id,
                                     'item_name'=>$name,
                                     'item_price'=>$price,
                                     'item_quantity'=>$quantity);
      }


      $this->update();
  }

  public function delete($id){
      for($i = 0; $i < count($this->items); $i++) {
        if($this->items[$i]['item_id'] == $id){
          unset($this->items[$i]);
          $this->items = array_values($this->items);
          break;
        }
      }
      $this->update();
  }

  public function edit($id, $quantity){
      for($i = 0; $i < count($this->items); $i++){
        if($this->items[$i]['item_id'] == $id){
          if($quantity == 0 || $quantity == ""){
            unset($this->items[$i]);
            $this->items = array_values($this->items);
          } else {
            $this->items[$i]['item_quantity'] = 0 + $quantity;
          }
          break;
        }
      }

      $this->update();
  }

  public function get(){
  }
}
 ?>
