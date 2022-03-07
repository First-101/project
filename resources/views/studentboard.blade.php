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
            <h3>ตารางเเสดงตำเเหน่งคณะกรรมการนักเรียน</h3>  
        </div>         
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ลับดับ</th>
                        <th>ชื่อ-สกุล</th>
                        <th>ตำแหน่ง</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>เด็กชายศรัญญู  ตรีเหรา</td>
                        <td>ประธานนักเรียน</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>เด็กชายนันทชัย  ฤาชา </td>
                        <td>รองประธานนักเรียน</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>เด็กชายวุฒชัย  นราวุธ</td>
                        <td>รองประธาน</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>เด็กชายศราวุธ  พงษ์ศาสตร์</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>เด็กชายอภิวัฒน์  บุดดาหวัง</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>เด็กชายปกรณ์  ซุยจุมจัง</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>เด็กชายพิสิฐ  วรวงค์</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>เด็กชายบุรวัตร  อรุณโณ</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>เด็กชายอภิสิทธิ์  ฉ่ำมณี</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>เด็กชายชนาธิป  เหลียมกลาง</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>เด็กชายบรรชา  จุระไพร</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>เด็กหญิงปกายแก้ว  วรภูมิ</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>เด็กหญิงวิภาดา  ตรีเหรา </td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>เด็กหญิงรัตนวลี  นราวุธน์</td>
                        <td>กรรมการ</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>เด็กหญิงธารีรัตน์  ธนะโภค</td>
                        <td>กรรมการ</td>
                    </tr>
                </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>

    
   <!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>เว็บไชค์</h4>
                <p class="p-small">โรงเรียนท่าโพธิ์ผักก้ามวิทยา สำนักงานเขตพื้นที่การศึกษาประถมศึกษาร้อยเอ็ด เขต 1 ตั้งอยู่ที่หมู่ที่ 1 บ้านบ้านผักก้าม ตำบล:ทุ่งเขาหลวง อำเภอ:ทุ่งเขาหลวง จังหวัด:ร้อยเอ็ด รหัสไปรษณีย์:45170</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->  
<!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
 
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
