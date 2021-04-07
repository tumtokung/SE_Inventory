<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('เพิ่มรายการสินค้านำเข้า') }}
        </h2>
        <span>
            {{ __('เวลาที่สั่ง: ') }} {{ date('d-m-Y') }}
        </span>
        <span id='time'>

        </span>
        <span class="ml-20">
            {{ __('ผู้สั่ง:') }} {{Auth::user()->name}}
        </span>




    </x-slot>
    <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            @if(session('success'))
                            <div class="alert alert-success"> {{session('success')}} </div>
                            @endif
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ลำดับ
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            รูปสินค้า
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            รหัสสินค้า
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ชื่อสินค้า
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ประเภทสินค้า
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            วันหมดอายุ
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            จำนวน
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ราคาต้นทุนต่อหน่วย
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">


                                    @php($i=1)
                                    @foreach($importproductorder as $row)
                                    @if ( Auth::user()->id== $row->id_user )


                                    @csrf
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$i++}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img class="h-10 w-10 rounded-full" src="https://www.img.in.th/images/52a7d09c536ccdf760c0d675d04428b6.jpg" alt="">

                                        </td>
                                        <td name="id_product" id="id_product" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <label id="*spaM4">
                                                {{$row->id_product}}
                                                <span></span>
                                            </label>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$row->product->name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$row->product->type}}
                                        </td>
                                        <td name="date_EXP" id="date_EXP" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                            {{ date('d/m/Y',strtotime($row->date_EXP)) }}
                                        </td>
                                        <td name="quantity" id="quantity" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$row->quantity}} ชิ้น
                                        </td>
                                        <td name="cost" id="cost" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$row->cost}} บาท
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                            <a href="{{ route('ImportProductOrder.edit',$row->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                            <form action="{{ route('ImportProductOrder.destroy',$row->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this task?')" style="display:inline">

                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input type="submit" class='btn btn-danger' value='Delete'>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach

                                    <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mb-8 mt-8">
                <a href="{{ route('ImportProductOrder.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">เพิ่มสินค้า</a>
                <form action="" method="POST">
                    {{ csrf_field() }}
                    <label for="password" class="ml-20">วันที่ส่ง</label>
                    <input type="date" name="date_EXP" id="date_EXP" class="form-input rounded-md " />
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">วันที่หมดอายุ</label>
                            <input type="number" name="id" id="id" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                    </div>
                    <button formaction="{{ route('ImportProductOrder.storeOrder') }}" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        สั่งสินค้า
                    </button>
                </form>
            </div>






        </div>
    </div>





</x-app-layout>