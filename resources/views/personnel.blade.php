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
   <!-- Description -->

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <form>
                <h3>ข้อมูลครู บุคลากร โรงเรียนท่าโพธิ์ผักก้ามวิทยา</h3>
            </form>   
        </div>  
    </div>
    
    <div class="container">
        <div class="row">
          <div class="col-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">อันดับ</th>
                    <th scope="col">รูปภาพ</th>
                    <th scope="col">ชื่อ-นามสกุล/ตำเเหน่ง</th>
                    <th scope="col">ข้อมูลการสอน</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td> <h5 class="card-title">นาย ถวิล สกุนินนท์</h5>
                        <p><h6>ตำหน่ง: ผู้อำนวยการโรงเรียน<br>
                        ประเภท: ข้าราชการครู</br>
                        วิทยฐานะ: ชำนาญการพิเศษ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา</h6></p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: ไม่ได้ทำการสอน</br>
                        กลุ่มสาระฯ : ไม่มี</h6><br></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20130704-104319.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>   
                    <td> <h5 class="card-title">นาง จิระพร ชิณเพ็ง</h5>
                        <p><h6>ตำหน่ง: ครู<br>
                        ประเภท: ข้าราชการครู</br>
                        วิทยฐานะ: ชำนาญการพิเศษ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา </h6></p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: ประถมศึกษา</br>
                        กลุ่มสาระฯ : ภาษาไทย</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1027740028-20131018-163822.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td> 
                    <td><h5 class="card-title">นาง ปรียา สุริยะวงค์</h5> 
                        <p><h6>ตำหน่ง: ครู<br>
                        ประเภท: ข้าราชการครู</br>
                        วิทยฐานะ: ชำนาญการพิเศษ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา</h6> </p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: ก่อนประถมศึกษา</br>
                        กลุ่มสาระฯ : ไม่มี</h6> <br></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20160523-142225.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td> 
                        <h5 class="card-title">นาย สามารถ ศิริเวช</h5>
                        <p><h6>ตำหน่ง: ครู<br>
                        ประเภท: ข้าราชการครู</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา</h6> </p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: มัธยมศึกษาตอนต้น</br>
                        กลุ่มสาระฯ : การงานอาชีพ</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20201021-143007.jpg" alt="Cinque Terre"  width="100%">
                        </div>   
                    </td>
                    <td><h5 class="card-title">นางสาว วิชุดา เหล่าน้ำใส</h5>
                        <p><h6>ตำหน่ง: ครู<br>
                        ประเภท: ข้าราชการครู</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา</h6> </p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: มัธยมศึกษาตอนต้น</br>
                        กลุ่มสาระฯ : ภาษาไทย</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20210416-210749.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td><h5 class="card-title">	นาย ธำรง ทิณบุตร</h5>
                        <p><h6>ตำหน่ง: ครู (พนักงานงานราชการ)<br>
                        ประเภท: พนักงานราชการ</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา</h6> </p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: ประถมศึกษา</br>
                        กลุ่มสาระฯ : วิทยาศาสตร์และเทคโนโลยี</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20210416-180557.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td><h5 class="card-title">นาย พรชัย ธรรมโร</h5>
                        <p><h6>ตำหน่ง: ครู(อัตราจ้าง)<br>
                        ประเภท: ลูกจ้างชั่วคราว(งบประมาณโรงเรียนจ้างเอง)</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา</h6> </p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: มัธยมศึกษาตอนต้น</br>
                        กลุ่มสาระฯ : ภาษาไทย</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20201021-143123.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td> <h5 class="card-title">นาย กิตติคุณ จันทะปิดตา</h5>
                        <p><h6>ตำหน่ง: ครู(อัตราจ้าง)<br>
                        ประเภท: ลูกจ้างชั่วคราว(งบประมาณโรงเรียนจ้างเอง)</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา </h6></p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: มัธยมศึกษาตอนต้น</br>
                        กลุ่มสาระฯ : วิทยาศาสตร์และเทคโนโลยี</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20211014-094800.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td> <h5 class="card-title">นาย นินาท  คณะนาม</h5>
                        <p><h6>ตำหน่ง: ครู(อัตราจ้าง)<br>
                        ประเภท: ลูกจ้างชั่วคราว(งบประมาณโรงเรียนจ้างเอง)</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา </h6></p></td>
                    <td><h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: มัธยมศึกษาตอนต้น</br>
                        กลุ่มสาระฯ : การงานอาชีพ</h6><br></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td class="w-25">
                        <div class="container">
                            <img class="img-thumbnail"  src="images/1045450785-20160524-101212.jpg" alt="Cinque Terre"  width="100%">
                        </div>
                    </td>
                    <td><h5 class="card-title">นาย คำนึง รอดพฤกษ์ภูมิ</h5>
                        <p><h6>ตำหน่ง: ลูกจ้างชั่วคราว<br>
                        ประเภท: ลูกจ้างชั่วคราว(งบประมาณ สพฐ.)</br>
                        วิทยฐานะ: ไม่มีวิทยฐานะ/ระดับ<br>
                        สังกัด: สพป.ร้อยเอ็ด เขต 1</br>
                        โรงเรียน: ท่าโพธิ์ผักก้ามวิทยา </h6></p></td>
                    <td>  <h5 class="card-title">ข้อมูลการสอน</h5>        
                        <h6>ระดับชั้นที่สอน: ไม่ได้ทำการสอน</br>
                        กลุ่มสาระฯ : ไม่มี </h6><br></td>
                  </tr>
                </tbody>
              </table>   
          </div>
        </div>
    </div>
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