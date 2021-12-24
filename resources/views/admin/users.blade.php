<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

<div style="position:relative; top:10px; right:-10px">
<table>
    <tr>
        <th style="padding: 10px">NAME</th>
        <th style="padding: 10px">EMAIL</th>
        <th style="padding: 10px">Action</th>
    </tr>



    @foreach ($data as $data)
        
    
    <tr>
        <td style="padding: 10px">{{$data->name}}</td>
        <td style="padding: 10px">{{$data->email}}</td>

        @if($data->usertype=="0")
        <td style="padding: 10px"><a href="{{URL('/deleteuser',$data->id)}}">delete</a></td>
        @else
        <td style="padding: 10px"><a >NOT ALLOWED</a></td>
        @endif
    </tr>
    @endforeach
</table>
</div>
      @include("admin.adminscript")
   
  </body>
</html>