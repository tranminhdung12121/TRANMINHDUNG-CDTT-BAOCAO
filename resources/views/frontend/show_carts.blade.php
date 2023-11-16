@extends('layouts.site')
@section('content')
<section class="vung 2">
    <h2 class='text-center p-4'>GIỎ HÀNG CỦA TÔI</h2> 
    <form style="background-color: #F0F0F0; border: 1px solid #C8C8C8; border-radius: 10px;
    margin-bottom: 50px; margin-left: 150px; margin-right: 150px; padding: 15px" action="" method="post">
        <div class="row">            
            <div class="col-md-8 right-content">

                <div class="p-3 border-end">

                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th  style="width: 5%" scope="col"></th>
                                <th style="width: 15%" scope="col"></th>
                                <th  class="text-center" style="width: 40%" scope="col">Sản phẩm</th>
                                <th class="text-center" style="width: 20%" scope="col">Giá</th>
                                <th class="text-center" style="width: 20%" scope="col">SL</th>
                
                            </tr>
                        </thead>
                        <tbody>
                            
                             
                                <tr class="form-qty">
                                     
                                    <th class="align-middle" scope="row"><i id=""
                                            class="fa-solid fa-circle-xmark delete-cart-item"></i>
                                    </th>
                                    <td class="align-middle"><img class="img-fluid" src=" "></td>
                                    <td class="align-middle"><a href=" " class="fw-200"> </a>
                                    </td>
                                    <td class=" align-middle"><span
                                            style="color:#FFAD03 ;">  VNĐ</span></td>
                                    <td class=" align-middle">
                                         
                                        <div class="ms-4 buy-amount">
                                            <input type="hidden" value="  " class="qty_max">
                                            <input type="hidden" value="  " class="product_id">

                                            <button class="minus-btn changeqty">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                                </svg>
                                            </button>
                                            <input type="text" class="amount" name="amount" value=" ">
                                            <button class="plus-btn changeqty">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                            </button>
                                        </div>
                                         
                                        <div class="ms-4 text-danger text-center">
                                            Hết hàng
                                        </div>
                                        
                                        
                                    </td>
                                   
                                </tr>
                            

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-md-4 ">
                <div class="p-3">
                    <div style="border-bottom: 2.5px solid #dee2e6 " class="row">
                        <h6 class=" pb-2  ">CỘNG GIỎ HÀNG</h6>

                    </div>
                    <div class="row  border-bottom py-2">

                        <div class="col-4">Tạm tính</div>
                        <div class="col-8 text-end  fw-bold">  VND</div>
                    </div>
                    <div class="row  border-bottom py-2">

                        <div class="col-4 align-middle ">Giao hàng</div>
                        <div class="col-8">
                            <div class="row text-end">
                                
                                <p>Đồng giá: <span class="fw-semibold">0 VND</span> </p>
                        
                                <p style="font-size: 73%; color:#37800d ">chọn tiến hành thanh toán để đổi địa chỉ</p>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 2.5px solid #dee2e6 " class="row   py-2">

                        <div class="col-4">Tổng</div>
                        <div class="col-8 text-end fw-bold">  VND
                        </div>
                    </div>
                </div>
                <div class="text-center"> <a href=" " style="width: 100%"
                        class="btn btn-danger ">Tiến hành thanh toán</a>
                </div>


            </div>

        </div>
    </form>
</section> 
@endsection