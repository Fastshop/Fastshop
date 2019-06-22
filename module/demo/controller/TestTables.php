<?php
/**
 * @author msh ${DATE}
 */

namespace app\demo\controller;

use App\Http\Controllers\Controller;
use model\tp\tp_coupon;

class TestTables extends Controller
{
    public function test_orm(tp_coupon $coupon){
       $t = $coupon::fn();
       $coupon->where($t->use_num,1)->get();
       $coupon->tp()->getIsExpireAttr();
    }
}