<html>
<title>view</title>
<head>
<style type="text/css">
tr{
    text-align : center;
}
</style>
</head>
<body>
<h2>User Table </h2>

<table border= "1px solid black" width= "20%" >
 <thead>
  <th> Roll No</th> 
    <th > Name </th>
 </thead>

      <?php
    foreach ($user1 as $u) { ?>
<tr>
    <td> <h3><?php echo $u->id; ?> </h3></td>
    <td> <h3><?php echo $u->s_name;?> </h3></td>
</tr> 

   <?php
    }
    ?>
</table>   
<tr>
 <td><a href="http://localhost:81/laravel/public/Read">Read</a>  </td>   
<td><a href="http://localhost:81/laravel/public/Create">Create</a> </td> 
<td><a href="http://localhost:81/laravel/public/Update">Update</a> </td>  
<td><a href="http://localhost:81/laravel/public/Delete">Delete</a> </td>  
</tr>

</body>
</html>
