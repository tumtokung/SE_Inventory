<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Receipt</title>
</head>
<body>

    <div class="container" style="width:800px;">
        <div class="row">
            <div class="col">
                <img src="logo.png" alt="" class="rounded float-start" style="background-color:; width:100%; height:100%;">
            </div>
            <div class="col-9" style="background-color:;">
    
                    <div class="row">
                        <div class="col">
                            <div class="row"><b style="font-size:14px">บริษัท ยูไนท์ อินเวนทอรี จำกัด</b></div>
                            <div class="row"><b style="font-size:14px">Unite Inventory Co.,LTD.</b></div>
                            <div class="row"><b style="font-size:12px">199 ม.6 ต.ทุ่งสุขลา อ.ศรีราชา จ.ชลบุรี 20230</b></div>
                            <div class="row"><b style="font-size:12px">โทร. 0-3835-4580-4</b></div>
                        </div>
                        <div class="col" style="text-align:end;">
                            <b style="font-size:12px;">เลขที่เอกสาร/No: RC00001</b>
                        </div>
                    </div>
                    
            </div>
        </div>
        <span class="border-top">
        <div class="row">
            <span class="border-top border-3 border-dark" style="margin-top:15px;"></span>
            <b style="text-align:center; margin-top:15px">ใบรายการตรวจสอบคืนสินค้า</b>
        </div>
        </span>
        <div class="row" style="margin-top:20px;">
            <div class="card border-1 border-dark" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="col">
                        <div class="row" style="">
                            <div class="col"><b style="font-size:13px;">วันคืนสินค้า</b></div>
                            <div class="col-10"><p style="font-size:12px; margin-top:3px;">21/1/2563</p></div>   
                        </div>
                        <div class="row">
                            <div class="col"><b style="font-size:13px; margin-top:9px;">วันที่ต้องได้รับสินค้า</b></div>
                            <div class="col-9"><p style="font-size:12px; margin-top:3px;">05/02/2563</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><b style="font-size:13px; margin-top:9px;">เวลารับสินค้า</b></div>
                            <div class="col-10"><p style="font-size:12px; margin-top:3px;">15.20 น</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="card border-1 border-dark" style="border-radius: 0px; border-top-left-radius: 15px 15px; border-top-right-radius: 15px 15px;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr style="font-size:13px; margin-top:3px;">
                                <th scope="col">ลำดับ</th>
                                <th scope="col">รหัสสินค้า</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">บริษัท</th>
                                <th scope="col">ตำแหน่งจัดเก็บ</th>
                                <th scope="col">จำนวนที่คืน</th>
                                <th scope="col">จำนวนที่ได้รับ</th>
                                <th scope="col">หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">1</td>
                                <td>RE0001</td>
                                <td>แล็กเกอร์เงา</td>
                                <td>TOA</td>
                                <td>เชลฟ์ 1 ชั้น 1</td>
                                <td>20</td>
                                <td>20</td>
                                <td>-</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">2</td>
                                <td>RE0002</td>
                                <td>กระดาษทราย</td>
                                <td>ฉลาม</td>
                                <td>เชลฟ์ 1 ชั้น 2</td>
                                <td>25</td>
                                <td>25</td>
                                <td>-</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">3</td>
                                <td>BR0001</td>
                                <td>แปรงทาแล็กเกอร์</td>
                                <td>Pumpkin</td>
                                <td>เชลฟ์ 1 ชั้น 1</td>
                                <td>5</td>
                                <td>3</td>
                                <td>สินค้าส่งคืนมาไม่ครบ</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">4</td>
                                <td>WO0001</td>
                                <td>ไม้อัด</td>
                                <td>DIY</td>
                                <td>เชลฟ์ 2 ชั้น 1</td>
                                <td>8</td>
                                <td>8</td>
                                <td>-</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">5</td>
                                <td>1C00001</td>
                                <td>ไม้สนแผ่น</td>
                                <td>DIY</td>
                                <td>เชลฟ์ 2 ชั้น 2</td>
                                <td>10</td>
                                <td>9</td>
                                <td>สินค้าส่งคืนมาไม่ครบ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="background-color:">
            <!-- <div class="col" style="background-color:green">
                <div class="card border-1 border-dark" 
                    style="border-radius: 0px; border-bottom-left-radius: 15px 15px; border-bottom-right-radius: 15px 15px;">
                    <div class="card-body">
                        <div class="row" style="">
                            <div class="col"><b style="font-size:13px;">ชื่อผู้บันทึกสินค้า</b></div>
                            <div class="col-4"><p style="font-size:12px; margin-top:3px;">ขวัญชัย</p></div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-1 border-dark" 
                    style="border-radius: 0px; border-bottom-left-radius: 15px 15px; border-bottom-right-radius: 15px 15px;">
                    <div class="card-body">
                        <div class="row" style=""> 
                            <div class="col"><b style="font-size:13px;">ชื่อผู้รับสินค้า</b></div> 
                            <div class="col-4"><p style="font-size:12px; margin-top:3px;">ไอยเรศ</p></div>  
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="card border-1 border-dark" 
                style="border-radius: 0px; border-bottom-left-radius: 15px 15px; border-bottom-right-radius: 15px 15px;">
                <div class="card-body">
                    <div class="row" style="">
                        <div class="col-2"><b style="font-size:13px;">ชื่อผู้บันทึกสินค้า</b></div>
                        <div class="col"><p style="font-size:12px; margin-top:3px;">ขวัญชัย</p></div>  
                        <div class="col-2"><b style="font-size:13px;">ชื่อผู้รับสินค้า</b></div> 
                        <div class="col"><p style="font-size:12px; margin-top:3px;">ไอยเรศ</p></div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align:end; margin-top:20px">
            <a href="" onClick="window.print()" style="color:black;">
                </h6>พิมพ์</h6>
                <img src="printer.png" alt="history" style="width:30px; height:30px;">
            </a>
        </div>
    </div>
    

    
    
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></scrip>
</body>
</html>