@extends('master.main')
@section('body')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
           
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

   

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="text-container">
                        <h3>สามารถติต่อสอบถามใด้ที่</h3>
                        <b><p><h5>โรงเรียนท่าโพธิ์ผักก้ามวิทยา หมู่ที่ 1 บ้านบ้านผักก้าม ตำบลทุ่งเขาหลวง อำเภอทุ่งเขาหลวง จังหวัดร้อยเอ็ด 45170</h5></p></b>
                        <a class="blue" href="#your-link"></a>
                        <div class="breadcrumbs">
                            <p class="h5"><a href="https://www.facebook.com/RongreiynThaPhothiPhakKamWithya"><strong>Facebook</strong></a></p>
                            <p class="h5"><a href="https://www.google.com/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%97%E0%B9%88%E0%B8%B2%E0%B9%82%E0%B8%9E%E0%B8%98%E0%B8%B4%E0%B9%8C%E0%B8%9C%E0%B8%B1%E0%B8%81%E0%B8%81%E0%B9%89%E0%B8%B2%E0%B8%A1%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2/@16.0078174,103.8503249,17z/data=!4m12!1m6!3m5!1s0x3117e13db162dfdb:0x4c5b813fac089bb!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4LiX4LmI4Liy4LmC4Lie4LiY4Li04LmM4Lic4Lix4LiB4LiB4LmJ4Liy4Lih4Lin4Li04LiX4Lii4Liy!8m2!3d16.0078123!4d103.8525136!3m4!1s0x3117e13db162dfdb:0x4c5b813fac089bb!8m2!3d16.0078123!4d103.8525136"><strong>เเผนที่โรงเรียน</strong></a></p>
                            <a button type="button" class=" btn-outline-primary btn-sm" href=""><b><h5></h5></b></button></a>
                        </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                    <div class="image-container-large">
                        <img src="images/messageImage_1644159341310.jpg" class="img-fluid"  alt="Responsive image">
                    </div> <!-- end of image-container-large -->
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->

   
    
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