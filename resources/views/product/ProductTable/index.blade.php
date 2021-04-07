<body>
    @include("navbar")
    <div id="main">
        <div class="container ">
            <h1 style='font-size : 200%'><b> ตารางสินค้า </b></h1>
            <br>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <h6 style='margin-top: 10px'><b> ค้นหาสินค้า </b></h6>
                </div>
                <div class="col-md-2">
                    <input type="text" name='name' class='form-control' placeholder="ค้นหา..." />
                </div>
                <div class="col-md-1"><img src="..." class="img-thumbnail" alt="..."></div>
                <div class="col-md-3">
                    <h6 style='margin-top: 10px'><b> มีผลิตภัณฑ์ทั้งหมด : </b></h6>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <button type="button" class="btn-square btn-light" data-bs-toggle="modal" data-bs-target="#myModal">
                        <h6><b> + เพิ่มข้อมูลสินค้า </b></h6>
                    </button>
                </div>

            </div>

            <!--------------------------------- Pop-up add ------------------------------------------>
            <!-- The Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" style="max-width: 650px!important;">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Modal body -->
                        <form action=" {{url('/')}}product" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="modal-body">
                                <h1 style='font-size : 200%'><b>เพิ่มข้อมูลสินค้าใหม่</b></h1>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>รูปสินค้า</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>ชื่อบริษัท</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" style="height: 2em" name='product_company' class='form-control' />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>รหัสสินค้า</h6>
                                    </div>
                                    <div class="col-md-3"><input type="text" style="height: 2em " name='product_id' class='form-control' /></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>ประเภทสินค้า</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" style="height: 2em" name='product_type' value="{{ isset($data->product_type) ?  $data->product_type : '' }}" class='form-control' />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>ชื่อสินค้า</h6>
                                    </div>
                                    <div class="col-md-3"><input type="text" style="height: 2em" name='product_name' value="{{ isset($data->product_name) ?  $data->product_name : '' }}" class='form-control' /></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>พื้นที่จัดเก็บ</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" style="height: 2em" name='product_capacity' class='form-control' />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" style="text-align : end;">
                                        <button type="submit" class="btn btn-pill btn-dark" style="border-radius: 100px; ">
                                            <h5><b> เสร็จสิ้น </b></h5>
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


            <br>


            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="text-center">
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
                        {{--@foreach ($data as $key => $value)
                        <tr>
                            <td>{{ ++$i }}</td>
                        <td></td>
                        <td>{{ $value -> product_id }}</td>
                        <td>{{ Str::limit($value->product_name,100) }}</td>
                        <td>{{ Str::limit($value->product_company,100) }}</td>
                        <td>{{ Str::limit($value->product_type,100) }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        @endforeach--}}


                        <tr class="text-center">
                            <td>1</td>
                            <td> <a href="http://127.0.0.1:8000/lot"><img src="..." class="img-thumbnail" alt="..." class="btn" type="button" role="button"> </a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light" data-bs-toggle="modal" data-bs-target="#editModal">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>

                        </tr>



                        <tr class="text-center">
                            <td>2</td>
                            <td><img src="{{asset('/storage/image/Cat.jpg')}}" class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>3</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>4</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>5</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>6</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>7</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>8</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>9</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>

                        <tr class="text-center">
                            <td>10</td>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn-square btn-light">edit</button></td>
                            <td><button class="btn-square btn-light">delete</button></td>
                        </tr>
                    </tbody>

                </table>


            </div>
            <!--------------------------------- Pop-up Edit ------------------------------------------>
            <!-- The Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" style="max-width: 650px!important;">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Modal body -->
                        <form action=" {{url('/')}}product" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="modal-body">
                                <h1 style='font-size : 200%'><b>แก้ไขข้อมูลสินค้า</b></h1>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>รูปสินค้า</h6>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>ชื่อบริษัท</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" style="height: 2em" name='product_company' class='form-control' />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>รหัสสินค้า</h6>
                                    </div>
                                    <div class="col-md-3"><input type="text" style="height: 2em " name='product_id' class='form-control' /></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>ประเภทสินค้า</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" style="height: 2em" name='product_type' value="{{ isset($data->product_type) ?  $data->product_type : '' }}" class='form-control' />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>ชื่อสินค้า</h6>
                                    </div>
                                    <div class="col-md-3"><input type="text" style="height: 2em" name='product_name' value="{{ isset($data->product_name) ?  $data->product_name : '' }}" class='form-control' /></div>
                                    <div class="col-md-2">
                                        <h6 style='margin-top: 8px'>พื้นที่จัดเก็บ</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" style="height: 2em" name='product_capacity' class='form-control' />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" style="text-align : end;">
                                        <button type="submit" class="btn btn-pill btn-dark" style="border-radius: 100px; " data-bs-dismiss="modal">
                                            <h5><b> เสร็จสิ้น </b></h5>
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>