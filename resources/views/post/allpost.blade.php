@extends('layouts.backendLayout')

@section('backend')
{{-- @dd($editecategory->id); --}}


<div class="container">
    <div class="row">
    
<table class="table">
    <thead >
        <tr>
            <th>#</th>
            <th>Post title</th>
            <th>img</th>
            <th>contant</th>
            {{-- <th>valu</th> --}}
            <th>Active</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($posts as $key=>$post)
             <tr>
            <td>{{++$key}}</td>
            <td>{{$post->title}}</td>
            <td>
                <img width="100px" src="{{asset('storage/'.$post->future_img)}}" alt="post img">
            </td>
            <td>{{$post->contant}}</td>
            {{-- <td><input class="value"  value="{{$post->is_populer}}" type="text"></td> --}}
            
        
                <td>
                    <span  class="activepost" data-id='{{$post->id}}'>
                        <i  class=" {{$post->is_populer==1?'fa-solid ':'fa-regular'}} fa-star  text-primary"> </i>
                  </span>
                </td>
            
           
        </tr>
      
        @endforeach 

       
    </tbody>
</table>
       

       
    </div>
</div>


@endsection
@push('sweetalert')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // cdk editor
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
       
    //     function handleClick(e){
    //     console.log(e);
    //    return 'hello';
     

    //     }
    //     console.log(a);



        // ajax
        //ajax ar modda sb gulo (:)colon dea likta hoi


        $(document).ready(function () {
      $(".activepost").click(function(event){
       
       $.ajax({
        url:`{{Route('post.active')}}`,
        methode:'GET',
        data:{
           id:$(this).attr('data-id')
        },
        
        success:function(res){
            const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });

           
      if(res=='success'){
        event.currentTarget.innerHTML=`  <i  class=" fa-solid fa-star  text-primary"> </i>`
        Toast.fire({
        icon: "success",
        title: "Signed in successfully"
        });
      }else{
        event.currentTarget.innerHTML=`  <i  class=" fa-regular fa-star  text-primary"> </i>`
        Toast.fire({
        icon: "error",
        title: "Remove from populer post"
        });
      }
        
          



        }
    
       })
        
        });
     
        
    });
       
</script>





    
@endpush
