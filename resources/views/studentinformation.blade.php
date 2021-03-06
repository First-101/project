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
            <h3>ตารางเเสดงข้อมูลนักเรียน</h3><p class="text-right">ประจำปีการศึกษา 2565</p>
        </div>     
        <table class="table table-bordered">
          <thead>
            <tr class="table-warning">
              <th>ระดับชั้น</th>
              <th>ชาย</th>
              <th>หญิง</th>
              <th>รวม</th>
              <th>ห้องเรียน</th>
            </tr>
          </thead>
          <tbody>
            <thead>
                <tr>
                  <th><b>อนุบาล</b></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
            <tr>
              <td>อนุบาล 1</td>
              <td>6</td>
              <td>6</td>
              <td>12</td>
              <td>1</td>
            </tr>
            <tr>
              <td>อนุบาล 2</td>
              <td>8</td>
              <td>12</td>
              <td>20</td>
              <td>1</td>
            </tr>
            <tr>
              <td>อนุบาล 3</td>
              <td>5</td>
              <td>5</td>
              <td>10</td>
              <td>1</td>
            </tr>
            <tr class="table-active">
                <td><h6>รวมอนุบาล 1</h6></td>
                <td>19</td>
                <td>23</td>
                <td>42</td>
                <td>3</td>
            </tr>
            <thead>
                <tr>
                  <th>ประถมศึกษา</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
            <tr>
                <td>ประถมศึกษาปีที่ 1</td>
                <td>6</td>
                <td>6</td>
                <td>12</td>
                <td>1</td>
            </tr>
            <tr>
                <td>ประถมศึกษาปีที่ 2</td>
                <td>8</td>
                <td>12</td>
                <td>20</td>
                <td>1</td>
            </tr>
            <tr>
                <td>ประถมศึกษาปีที่ 3</td>
                <td>5</td>
                <td>5</td>
                <td>10</td>
                <td>1</td>
            </tr>
            <tr>
                <td>ประถมศึกษาปีที่ 4</td>
                <td>5</td>
                <td>5</td>
                <td>10</td>
                <td>1</td>
            </tr>
            <tr>
                <td>ประถมศึกษาปีที่ 5</td>
                <td>5</td>
                <td>5</td>
                <td>10</td>
                <td>1</td>
            </tr>
            <tr>
                <td>ประถมศึกษาปีที่ 6</td>
                <td>5</td>
                <td>5</td>
                <td>10</td>
                <td>1</td>
            </tr>
            <tr class="table-active">
                <td><h6>รวมประถมศึกษา</h6></td>
                <td>19</td>
                <td>23</td>
                <td>42</td>
                <td>3</td>
            </tr>
                <tr>
                  <th>มัธยมศึกษาตอนต้น</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
            <tr>
                <td>มัธยมศึกษาปีที่ 1</td>
                <td>6</td>
                <td>6</td>
                <td>12</td>
                <td>1</td>
            </tr>
            <tr>
                <td>มัธยมศึกษาปีที่ 2</td>
                <td>8</td>
                <td>12</td>
                <td>20</td>
                <td>1</td>
            </tr>
            <tr>
                <td>มัธยมศึกษาปีที่ 3</td>
                <td>5</td>
                <td>5</td>
                <td>10</td>
                <td>1</td>
            </tr>
            <tr class="table-active">
                  <td><h6>รวมมัธยมต้น</h6></td>
                  <td>19</td>
                  <td>23</td>
                  <td>42</td>
                  <td>3</td>
            </tr>
            <tr class="table-warning">
                <td><h6>รวมทุกระดับชั้น</h6></td>
                <td>60</td>
                <td>63</td>
                <td>130</td>
                <td>12</td>
          </tr>
          </tbody>
        </table>
    </div>
    
    <div class="container">
        <div class="ex-basic-1">
            <div class="row justify-content-center align-items-center">
                <form>
                    <h3>รายงานข้อมูล</h3>
                </form>   
            </div>  
        </div>
    </div>

    <!-- Customers -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                
                                <div class="swiper-slide">
                                    <a href="http://www.uprightcode.xyz/">
                                        <img class="img-fluid" src="images/database-schup.jpg" alt="alternative">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://web.uprightschool.net/">
                                        <img class="img-fluid" src="images/uprightsch.jpg" alt="alternative">
                                    </a> 
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://www.gprocurement.go.th/new_index.html">    
                                        <img class="img-fluid" src="images/egp.gif" alt="alternative">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://www.e-report.energy.go.th/">
                                        <img class="img-fluid" src="images/ereport.gif" alt="alternative">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://210.1.20.40/">
                                        <img class="img-fluid" src="images/eme.jpg" alt="alternative">
                                    </a>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->
    
    <style>
        .span-register{
            color: rgb(0, 4, 255);
            cursor: pointer;
        }
    </style>
@endsection