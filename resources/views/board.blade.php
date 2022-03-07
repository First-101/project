@extends('master.main')
@section('body')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
           
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <div class="container mt-3">
        <div class="ex-basic-1">
            <h4>ตารางเเสดงตำเเหน่งคณะกรรมการสถานศึกษาขั้นพื้นฐาน</h4>   
        </div>        
        <table class="table table-bordered">
            <thead>
            <tr>
                
                    <th><h5>ลับดับ</h5></th>
                    <th><h5>ชื่อ-สกุล</h5></th>
                    <th><h5>ตำแหน่ง</h5></th>
                
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>นายอ้ม ศรีนาม</td>
                <td>ประธานกรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>2</td>
                <td>นายอรุณ  จริตน้อม</td>
                <td>รองกรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>3</td>
                <td>นายสมชาย  นิลคุณ</td>
                <td>รองกรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>4</td>
                <td>นายเสาร์  สมสะอาด</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>5</td>
                <td>นางดอกไม้  สิงห์สุขุม</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>6</td>
                <td>นางพรรณี  ฉ่ำมณี</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>7</td>
                <td>นางสำรวย  พงษ์ศาสตร์</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>8</td>
                <td>นางสุดใจ   เบ้าช้างเผือก</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>9</td>
                <td>นายทองใส  กอบุญ</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>10</td>
                <td>นายสายทอง  พิมโพธิ์ </td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>11</td>
                <td>นายโกศล  รัตนภักดี</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>12</td>
                <td>นายณรงค์  รัตนภักดี</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>13</td>
                <td>นายบุญเลี้ยง  ทิพยศักดิ์</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>14</td>
                <td>นายพุฒ  ธาระรัตน์</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>15</td>
                <td>นายเสงี่ยม  ทูลธรรม</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            <tr>
                <td>16</td>
                <td>นายทองใบ  ตรีเหรา</td>
                <td>กรรมการสถานศึกษาขั้นพื้นฐาน</td>
            </tr>
            </tbody>
        </table>
        </div>
    <br>
    <br>
    <br>
 
    
    <style>
        .span-register{
            color: rgb(0, 4, 255);
            cursor: pointer;
        }
    </style>
    <div class="modal fade bd-example-modal-xl" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/ทรงพระเจริญ.jpg" alt="Cinque Terre"  width="100%">
                    </div>
                    <div class="col-md-6">
                        <div class="modal-header">
                            <h5 class="modal-title" id="MODAL_NAME_LOGIN">เข้าสู่ระบบ / Login</h5>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close" onclick="close_modal()"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="FRM_LOGIN" action="{{route('login')}}">
                               @csrf                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label ER_USERNAME">ชื่อผู้ใช้</label>
                                            <input type="text" class="form-control ER_USERNAME" id="username" name="username" placeholder="ชื่อผู้ใช้" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label ER_password">รหัสผ่าน</label>
                                            <input type="password" class="form-control ER_password" id="password" name="password" placeholder="รหัสผ่าน" required>  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                            <label class="form-check-label" for="remember">จดจำฉัน</label>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3 ">
                                            <button type="submit" class="btn btn-success w-100 ">ลงชื่อเข้าใช้</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="mb-3 ">
                                            <label>มีบัญชีเข้าใช้ระบบหรือยัง ? กด<span class="span-register" onclick="register()" >สมัครบัญชี</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            <form method="POST" id="FRM_REGISTER" action="{{route('register')}}" hidden>
                                @csrf                            
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="mb-3">
                                             <label class="form-label ER_USERNAME">ชื่อ</label>
                                             <input type="text" class="form-control ER_USERNAME" id="name" name="name" placeholder="ชื่อ" required>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label ER_USERNAME">ชื่อผู้ใช้</label>
                                            <input type="text" class="form-control ER_USERNAME" id="username" name="username" placeholder="ชื่อผู้ใช้" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label ER_USERNAME">อีเมล์</label>
                                            <input type="text" class="form-control ER_USERNAME" id="email" name="email" placeholder="อีเมล" required>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="mb-3">
                                             <label class="form-label ER_password">รหัสผ่าน</label>
                                             <input type="password" class="form-control ER_password" id="password" name="password" placeholder="รหัสผ่าน" required>  
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     
                                     
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="mb-3 ">
                                            <button type="submit" class="btn btn-success w-20 ">ลงชื่อเข้าใช้</button>
                                            <button type="submit" class="btn btn-secondary w-20" onclick="login()">ย้อนกลับ</button>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                 </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    @endsection