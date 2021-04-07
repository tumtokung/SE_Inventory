<body>
    @include("navbar")
    <div class="container ">
    <h1 style = 'font-size : 200%' ><b> ตารางสินค้า </b></h1>
    <br>
    
    
    <div class="row">
        <div class = "col-md-1"></div>
        <div class = "col-md-1"><h6 style = 'margin-top: 10px'><b> ค้นหาสินค้า </b></h6></div> 
        <div class = "col-md-2">
            <input type="text" name='name' class='form-control'  placeholder="ค้นหา..." />
        </div>
        <div class = "col-md-1"><img src="..." class="img-thumbnail" alt="..."></div>
        <div class = "col-md-3"><h6 style = 'margin-top: 10px'><b> มีผลิตภัณฑ์ทั้งหมด : </b></h6> </div>
        <div class = "col-md-2"></div>
        <div class = "col-md-2">
            <button type="button" class="btn-square btn-light" data-bs-toggle = "modal" data-bs-target="#myModal"><h6><b> + เพิ่มข้อมูลสินค้า </b></h6></button> 
        </div>
        
    </div>
    
    <!--------------------------------- Pop-up add ------------------------------------------>
    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <form action="{{ route('product.store') }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('POST') }}
        <div class="modal-body">
            <h1 style = 'font-size : 200%'><b>เพิ่มข้อมูลสินค้าใหม่</b></h1>
            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รูปสินค้า</h6></div>
                <div class = "col-md-3">
                    <input type="file" class="custom-file-input" id="customFile" name='img'>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class = "col-md-3"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อบริษัท</h6></div>
                <div class = "col-md-3">
                    <input type="text" style="height: 2em" name='product_company' class='form-control' />
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รหัสสินค้า</h6></div>
                <div class = "col-md-3"><input type="text" style="height: 2em " name='id_product' class='form-control' /></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ประเภทสินค้า</h6></div>
                <div class = "col-md-3">
                    <input type="text" style="height: 2em" name='product_type' value="{{ isset($data->product_type) ?  $data->product_type : '' }}" class='form-control' />
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อสินค้า</h6></div>
                <div class = "col-md-3"><input type="text"  style="height: 2em"  name='product_name' value="{{ isset($data->product_name) ?  $data->product_name : '' }}" class='form-control' /></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>พื้นที่จัดเก็บ</h6></div>
                <div class = "col-md-3">
                    <input type="text"  style="height: 2em" name='product_capacity' class='form-control' />
                </div>
            </div>
            <br>
            <div class = "row" >
                <div class = "col" style = "text-align : end;">
                    <button type="submit" class="btn btn-pill btn-dark" style = "border-radius: 100px; " ><h5 ><b> เสร็จสิ้น </b></h5></button> 
                </div>
            </div>
        </div>

        
        </form>
        </div>
    </div>
    </div>


    <br>

    
            <div class="table-responsive">
                <table class="table table-striped table-hover" >
                    <thead class = "text-center">
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูปสินค้า</th>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>บริษัท</th>
                            <th>ประเภทสินค้า</th>
                            <th>กลุ่มสินค้า</th>
                            <th>ตำแหน่งจัดเก็บ</th>
                            <th>สถานะ</th>
                            <th></th>
                            <th></th>
                        </tr>
                            
                    </thead>
                
                    <tbody>
                        @foreach($products as $row)
                        <tr>
                            <td>1</td>
                            <td>{{$row->img}}</td>
                            <td>{{$row->id_product}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->company}}</td>
                            <td>{{$row->type}}</td>
                            <td>{{$row->group}}</td>
                            <td>{{$row->position}}</td>
                            <td>status</td>
                        </tr>
                        @endforeach
                        
                    
                        
                    </tbody>
                    
                </table>
            
        
    </div>
    <!--------------------------------- Pop-up Edit ------------------------------------------>
    <!-- The Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <form  method="POST">
          {{ csrf_field() }}
          {{ method_field('POST') }}
        <div class="modal-body">
            <h1 style = 'font-size : 200%'><b>แก้ไขข้อมูลสินค้า</b></h1>
            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รูปสินค้า</h6></div>
                <div class = "col-md-3"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อบริษัท</h6></div>
                <div class = "col-md-3">
                    <input type="text" style="height: 2em" name='product_company' class='form-control' />
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รหัสสินค้า</h6></div>
                <div class = "col-md-3"><input type="text" style="height: 2em " name='product_id' class='form-control' /></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ประเภทสินค้า</h6></div>
                <div class = "col-md-3">
                    <input type="text" style="height: 2em" name='product_type' value="{{ isset($data->product_type) ?  $data->product_type : '' }}" class='form-control' />
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อสินค้า</h6></div>
                <div class = "col-md-3"><input type="text"  style="height: 2em"  name='product_name' value="{{ isset($data->product_name) ?  $data->product_name : '' }}" class='form-control' /></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>พื้นที่จัดเก็บ</h6></div>
                <div class = "col-md-3">
                    <input type="text"  style="height: 2em" name='product_capacity' class='form-control' />
                </div>
            </div>
            <br>
            <div class = "row" >
                <div class = "col" style = "text-align : end;">
                    <button type="submit" class="btn btn-pill btn-dark" style = "border-radius: 100px; "  data-bs-dismiss="modal"><h5 ><b> เสร็จสิ้น </b></h5></button> 
                </div>
            </div>
        </div>

        
        </form>
        </div>
    </div>
    </div>

</div>


{{-- <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>  --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){
            $('#formSubmit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('/books') }}",
                    method: 'post',
                    data: {
                        name: $('#name').val(),
                        auther_name: $('#auther_name').val(),
                        description: $('#description').val(),
                    },
                    success: function(result){
                        if(result.errors)
                        {
                            $('.alert-danger').html('');

                            $.each(result.errors, function(key, value){
                                $('.alert-danger').show();
                                $('.alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                        else
                        {
                            $('.alert-danger').hide();
                            $('#exampleModal').modal('hide');
                        }
                    }
                });
            });
        });
    </script>

</body>   
