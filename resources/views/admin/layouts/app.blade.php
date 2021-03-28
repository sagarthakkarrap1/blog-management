<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin/layouts/head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
    @include('admin/layouts/header')
    
    @section('main-content')
      
      @show
  
    @include('admin/layouts/sidebar')
    
    @include('admin/layouts/footer')
</body>
</html>