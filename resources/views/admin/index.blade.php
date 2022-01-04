 @extends('layouts.admin.admin')
 @section('conten')
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="row">
     <div class="col-12">
     @if (session('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'บันทึกข้อมูลเรียบร้อย',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        @endif
        @if (session('edit'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'แก้ไขข้อมูลเรียบร้อย',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        @endif
        @if (session('del'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'ลบข้อมูลเรียบร้อย',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        @endif
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">Products</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
                 <table id="example2" class="table table-bordered table-hover">
                     <thead class="bg-purple">
                         <tr>
                             <th>Product_id</th>
                             <th>Name</th>
                             <th>Image</th>
                             <th>Category</th>
                             <th>Description</th>
                             <th>Price</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($product as $products)
                         <tr>
                             <td>{{$products->id_product}}</td>
                             <td>{{$products->name}}</td>
                             <td>
                                <img src="{{asset('admin/images/'.$products->image)}}" alt="" style="width:100px">
                            </td>
                             <td>{{$products->category->name}}</td>
                             <td>{{Str::limit($products->description,30)}}</td>
                             <td>฿{{number_format($products->price)}}</td>
                             <td>
                                 <a href="{{url('/admin/product/edit/'.$products->id_product)}}" class="btn btn-success">
                                 <i class="far fa-edit"></i>
                                </a>
                                 <a href="{{url('/admin/product/delete/'.$products->id_product)}}" class="btn btn-danger">
                                 <i class="far fa-trash-alt"></i>
                                </a>
                             </td>
                         </tr>
                         @endforeach

                         </tfoot>
                 </table>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->
     </div>
     <!-- /.col -->
 </div>
 <!-- /.row -->



 @endsection
