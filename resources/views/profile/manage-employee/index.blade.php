<body>
    @include("navbar")
    <div class="container ">
        <h1 style='font-size : 200%'><b> จัดการพนักงาน </b></h1>



        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <tr>

                        <th>รูป</th>
                        <th>รหัส</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>เบอร์โทร</th>
                        <th></th>
                    </tr>

                </thead>

                <tbody>
                    @foreach($users as $user )
                    
                    <tr>
                        <td>
                            @if ($user->profile_photo_path == NULL)
                            <img src="{{ $user->profile_photo_url }} ) }}" width="30" height="30" alt="" class="d-inline-block align-top">
                            @else
                            <img src="{{ asset('storage/'. $user->profile_photo_path ) }}" width="30" height="30" alt="" class="d-inline-block align-top">
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->name }}</td>
                        
                        
                        <td>{{ $user->roll }}</td>
                       
                        <td>{{ $user->tel }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ url('/') }}/users/{{ $user->id }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>

            </table>
            


        </div>
        <div class="block mb-8 mt-8">
                <a href="{{ route('users.create') }}" class="btn btn-success">เพิ่มพนักงาน</a>
        </div>
        
        

</body>