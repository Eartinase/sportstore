<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sport Store</title>    
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <style>    
    img{
        height: 50pt;
        width: auto;
    }   
    .price{
        font-weight: bold;
    }    
</style>
</head>
<body>
 @include('navbar')

 <div class="container">
   <h1 align="center">List</h1>

   <form action="<?php echo url('/'); ?>/edit">
       <table id="listTable" class="display table">
           <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Img</th> 
                <th>Edit</th>              
            </tr>
        </thead>
       </table>
   
   </form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#listTable').DataTable( {
       "ajax": {
                "url" : "<?php echo url('/'); ?>/listController/ajax_getList",
                "type" : "GET"
            },
    } );
    });
</script>
</body>
</html>
