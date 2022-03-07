@extends('master.main')
@section('body')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
           
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <b><span>กลับไปหน้าเเรก</span><i class="fa fa-angle-double-right"></i> <a href="welcome">หน้าเเรก</a></b>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    <!-- Privacy Content -->

 <!-- Features -->
<div class="ex-basic-">
    <div id="features" >
        <div class="container">

            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><h3>ข่าวประชาสัมพันธ์ กิจกรรม</h3></a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->
                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/ภาพประชาสัมมพันธ์.png" alt="alternative">
                                    </div>
                                    <!-- end of image-container -->
                                </div>
                                <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>ข่าวประชาสัมพันธ์ กิจกรรม โรงเรียนท่าโพธิ์ผักก้ามวิทยา</h3>
                                        <p><a class="blue page-scroll" href="sign-up.html"></p>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">รายละเอียด</a>
                                        
                                    </div>
                                    <!-- end of text-container -->
                                </div>
                                <!-- end of col -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of tab-pane -->
                        <!-- end of tab -->
                    </div>
                    <!-- end of tab content -->
                    <!-- end of tabs content -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
</div>
<!-- end of tabs -->
<!-- end of features -->


<!-- Details Lightboxes -->
<!-- Details Lightbox 1 -->
<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/75240.jpg" alt="alternative">
                </div>
                <!-- end of image-container -->
            </div>
            <!-- end of col -->
            <div class="col-lg-4">
                <h3>การเเจ้งข่าวสารภายในโรงเรียนท่าโพธิ์ผักก้ามวิทยา</h3>
                <hr>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><h6>ประชุมผู้บริหารคณะครูบุคลากร อำเภอทุ่งเขาหลวง
                            (วันที่ 09 มิถุนายน 2557 11.38 น./อ่าน 545)</h6></div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close" href="message">เข้าอ่านข่าว</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">กลับ</a>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of lightbox-basic -->
<!-- end of details lightbox 1 -->

        

<br>
<br>
<br>
<br>
<br>
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