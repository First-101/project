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
                <div class="topbar-divider d-none d-sm-block"></div>
                <div class="col-md-6">
                    <div class="modal-header">
                        <h5 class="modal-title" id="MODAL_NAME_LOGIN">เข้าสู่ระบบ / Login</h5>
                        <button type="button" class="btn " data-bs-dismiss="modal" aria-label="Close" onclick="close_modal()"><i class="fas fa-times"></i></button>
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