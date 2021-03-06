<?php
tpl('api/Api');

class Cart extends Api
{
    public $table = 'cart';

    public $rule = [
        'memo' => 'max_length:1024',
    ];

    //添加或者更新数据
    public function add_or_update($p, &$msg)
    {
        $product = new product();
        $product_id = $p['product_id'];
        $count = $p['count'];
        if (!$product_id || !$count || !$product->find($product_id)) {
            return false;
        }
        $exist = $this->where('product_id', $product_id)
            ->where('user_id', his('id'))
            ->first();

        if ($exist) {
            $p = array_merge($exist, $p);
        }
        $p['user_id'] = his('id');
        $this->filtration($p);
        return $this->start_execute($msg);

    }
    //获取两个表相同字段的数据  这个数据是两个表相同字段合成的数据
    public function get_data_s($p, &$msg)
    {
        $uid = his('id');
        return $this->where('user_id', $uid)
            ->join($p['table'], $p['cond'])
            ->get();
    }
    //删除购物车的数据 一条或者全部
    public function delete_all_or_item($p=null,&$msg){
        if($p['product_id']){
           return $this->where('product_id',$p['product_id'])
                  ->delete();
        }
        return $this->delete();
    }
}