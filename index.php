<!DOCTYPE html>
<html>
<head>
    <title>Add employee details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$department = '<td><select name="department[]" class="form-control name_list" required="" /><option >Select Dept</option><option value="dept1">opt 1</option> </select></td>';
echo '<span id="mngdept">'.$department.'</span>'
?>

<div class="container">
    <h2 align="center">Add employee</h2>  
    <div class="form-group">
         <form name="add_name" id="add_name">
            <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="text" name="name[]" placeholder="Name" class="form-control name_list" required="" /></td>		
			<?php echo $department; ?>
			<td><input type="text" name="experience[]" placeholder="Experience" class="form-control name_list" required="" /></td>
			<td><input type="text" name="salary[]" placeholder="Salary" class="form-control name_list" required="" /></td>
			<td><select name="status[]" class="form-control name_list" required="" /><option >Select Status</option><option value="1">Active</option><option value="0">In Active</option> </select></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
            </div>


         </form>  
    </div> 
</div>

<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "/test/addmore.php";
      var i=1;  

      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Name" class="form-control name_list" required /></td><td>'+$('#mngdept').html()+'</td><td><input type="text" name="experience[]" placeholder="Experience" class="form-control name_list" required /></td><td><input type="text" name="salary[]" placeholder="Salary" class="form-control name_list" required /></td><td><select name="status[]" class="form-control name_list" required=""><option>Select Status</option><option value="1">Active</option><option value="0">In Active</option> </select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                  	i=1;
                  	$('.dynamic-added').remove();
                  	$('#add_name')[0].reset();
    				        alert('Record Inserted Successfully.');
                }  
           });  
      });


    });  
</script>
</body>
</html>
