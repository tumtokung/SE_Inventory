<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            แก้ไขสินค้า
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('ImportProductOrder.update',$importproductorder->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">รหัสสินค้า</label>
                            <input type="text" name="id_product" id="id_product" class="form-input rounded-md shadow-sm mt-1 block w-full"  value="{{ isset($importproductorder->id_product) ? $importproductorder->id_product : '' }}" />
                            @error('id_product')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">จำนวน</label>
                            <input type="number" name="quantity" id="quantity" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->quantity) ? $importproductorder->quantity : '' }}"/>
                            @error('quantity')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">ต้นทุน</label>
                            <input type="number" name="cost" id="cost" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->cost) ? $importproductorder->cost : '' }}"/>
                            @error('cost')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">วันที่ส่ง</label>
                            <input type="date" name="date_EXP" id="date_EXP" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->date_EXP) ? $importproductorder->date_EXP : '' }}"/>
                            @error('date_EXP')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                บันทึก
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>