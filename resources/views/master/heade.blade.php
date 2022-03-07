<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="text-light navbar-brand logo-image" href="welcome"><b>โรงเรียนท่าโพธิ์ผักก้ามวิทยา</b></a> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="welcome">หน้าเเรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="record">ประวัติโรงเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="personnel">ข้อมูลครู บุคลากร</a>
                </li>
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <div class="dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">ข้อมลูพื้นฐาน</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item my-2" href="activity">ข่าวประชาสัมพันธ์ กิจกรรม</a>    
                          <a class="dropdown-item my-2" href="board">คณะกรรมการสถานศึกษาขั้นพื้นฐาน</a>
                          <a class="dropdown-item my-2" href="studentboard">คณะกรรมการนักเรียน</a>
                          <a class="dropdown-item my-2" href="studentinformation">ข้อมูลนักเรียน</a>
                          <a class="dropdown-item my-2" href="satisfaction">ข้อมูลสิ่งก่อสร้าง</a>
                          <a class="dropdown-item my-2" href="https://www.obec.go.th/">สพฐ.</a>
                          <a class="dropdown-item my-2" href="https://www.ksp.or.th/ksp2018/">คุรุสภา</a>
                          <a class="dropdown-item my-2" href="https://www.moe.go.th/">กระทรวงศึกษาธิการ</a>                              
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#" id="detail_default" 
                        role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">เว็บไซต์สำคัญ</a>
                            <div class="dropdown-menu" aria-labelledby="detail_default">
                              <a class="dropdown-item my-2" href="http://www.pracharathschool.go.th/">โรงเรียนประชารัฐ</a>    
                              <a class="dropdown-item my-2" href="http://www.rspg.or.th/">อนุรักษ์พันธุกรรมพีชๆ </a>
                              <a class="dropdown-item my-2" href="https://www.uprightschool.net/">โรงเรียนสุจริต</a>
                              <a class="dropdown-item my-2" href="http://deetambon.esdc.go.th/dawnhold">โรงเรียนดีประจำตำบล</a>
                              <a class="dropdown-item my-2" href="https://www.vitheebuddha.com/">โรงเรียนวิถีพุทธ</a>
                            </div>
                        </div>
                </li>
                <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="communicate">ติดต่อสอบถาม</a>
                </li>
            </ul>
            <span class="nav-item">
                @if(Auth::check())
                <div class="dropdown">
                    <button class="btn-outline-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->username}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="editinformation">เเก้ไขข้อมูล</a>
                    
                      <a class="dropdown-item" href="{{route('logout')}}">ออกจากระบบ</a>
                    </div>
                </div>
                {{-- <button class="btn-outline-sm">{{Auth::user()->username}}</button> --}}
                @else
                <button class="btn-outline-sm" onclick="modal_login()">ลงชื่อเข้าใช้</button>
                @endif                   
            </span>
        </div>
    </div> <!-- end of container -->
</nav> 