
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
  <title>PHP Mysqli Datatables Server Side CRUD Ajax (Create, Read, Update and Delete)</title>

  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
   <!---------Edit Person modal--------->
    <div class="modal fade" id="UpdatePersonModal" tabindex="-1" aria-labelledby="UpdatePersonModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UpdatePersonModal">Update Person</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateperson" action="update_person_data.php" method="POST">
                <input type="hidden" name="id" id="id" value="">
                <input type="hidden" name="trid" id="trid" value="">
                <div class="mb-3 row">
                    <label for="first_name" class="col-md-3 form-label">First name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="first_name" name="first_name" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="last_name" class="col-md-3 form-label">Last Name</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id_number" class="col-md-3 form-label">Id Number</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="id_number" name="id_number">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="contact_number" class="col-md-3 form-label">Contact Number</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="contact_number" name="contact_number">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dob" class="col-md-3 form-label">Date of Birth</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="dob" name="dob">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="langauge" class="col-md-3 form-label">Langauge</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="langauge" name="langauge">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="interests" class="col-md-3 form-label">Interests</label>
                    <div class="col-md-9">
                        <select  class="form-control" id="interests" name="interests[]" multiple="multiple">
                            <option value="">--- Choose a Interests ---</option>
                            <option value="cooking">cooking</option>
                            <option value="hunting">hunting</option>
                            <option value="Fishing">Fishing</option>
                            <option value="tracking">tracking</option>
                            <option value="Other">Other</option>
                        </select>
                    <!--<input type="text" class="form-control" id="interests" name="interests">-->
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="update_data" id="update_data" class="btn btn-primary">Submit</button>
                </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
        <!----------------------------->
    <!---Create  Data Table--->
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="btnAdd">
                <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addPersonModal"  class="btn btn-success btn-sm" >Add Person</a>
                </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <table id="people_table" class="table">
                                <thead>
                                    <th>Id</th>
                                    <th >First Name</th>
                                    <th >Last Name</th>
                                    <th >Id Number</th>
                                    <th >Contact Number</th>
                                    <th >Email Address</th>
                                    <th >Date of Birth</th>
                                    <th >Langauge</th>
                                    <th >Interests</th>
                                    <th >Edit</th>
                                    <th >Delete</th>
                                </thead>

                            </table>
                            <br>
                            <form action="logout.php" method="post">
                                    <button style="float: inline-end; background : rgb(56, 62, 63); padding : 10px 15px; color : white; border-radius: 5px; margin-right: 10px; border:none;" type="submit" name="LogOut" id="LogOut">Log Out</button>    
                                </form>
                            </div>
   
                        <div class="col-md-2"></div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
    </div>
    <?php include('modal.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <!---fetch data and populate data Table-->
    <script>
        $(document).ready(function() {
        $('#people_table').DataTable({
            "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            $(nRow).attr('id', aData[0]);
            },
            'serverSide':'true',
            'processing':'true',
            'paging':'true',
            'order':[],
            'ajax': {
            'url':'fetch.php',
            'type':'post',
            },
            "columnDefs": [{
            'target':[10],
            'orderable' :false,
            }]
        });
        });
    </script>
    
    <!--Add person Modal-->
    <script>
        $(document).ready(function(){
            $(document).on('submit','#addPerson',function(e){
            e.preventDefault();

        var first_name= $('#new_first_name').val();

        var last_name= $('#new_last_name').val();
        var id_number= $('#new_id_number').val();
        var contact_number= $('#new_contact_number').val();
        var email= $('#new_email').val();
        var dob= $('#new_dob').val();
        var langauge= $('#new_langauge').val();
        var interests= $('#new_interests').val();

        var do_mail = false;

        if(first_name != '' && last_name != '' && id_number != '' && contact_number != '' && email != '' && dob != '' && langauge != '' && interests != '' )
        {
                var addData = $.ajax({
                url:"/add_person.php",
                type:"POST",
                data:{first_name:first_name,last_name:last_name,id_number:id_number,contact_number:contact_number, email:email, dob:dob, langauge:langauge, interests:interests},
                success:function(data)
                {
                    console.log("Data returned : " , data);
                    if(data == 'true'){
                        do_mail = true;

                        
                        
                       // window.location.reload();

                    };


                }
                });
                $.when(addData).then(function sendmail(meilto){
                    console.log('sending mail to', meilto);
            
                    $.ajax({
                        url:"sendmail.php",
                        type:"POST",
                        data:{email:email},
                        success:function(data)
                        {
                            console.log("Data1 returned : " , data);
                            $('#addPersonModal').modal('hide');
                            window.location.reload();

                        }
                        });
                });

            }else {
                alert('Fill all the required fields');
            }
            

            });

            });


    </script>
    <!---------------------------->

 
    <!---------Edit person script------>
    <script>
            $(document).ready(function(){
                $('#people_table').on('click','.editbtn ',function(event){
                var table = $('#people_table').DataTable();
                var trid = $(this).closest('tr').attr('id');
                var id = $(this).data('id');
                
                $.ajax({
                url:"get_person_data.php",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                data:{
                    'click_view_btn': true,
                    'id':id},
                type:'post',
                
                success:function(data)
                {   
                       // console.log("Data returned : ", data);  
                        json = JSON.parse(data);
                       
                        $('#id').val(json['id']);
                        $('#first_name').val(json['first_name']);
                        $('#last_name').val(json['last_name']);
                        $('#id_number').val(json['id_number']);
                        $('#contact_number').val(json['contact_number']);
                        $('#email').val(json['email']);
                        $('#dob').val(json['dob']);
                        $('#langauge').val(json['langauge']);

                        $val = (json['interests']).split(",");
                        $('#interests').attr('select', $val);

                        i = 0, size = $val.length;
                        for(i; i < size; i++){
        
                            $("#interests option[value='" +  $val[i] + "']").attr("selected", 1);
                           
                        }

                        $('#UpdatePersonModal').modal('show');
            
                    }
                });
            });
        });

    </script>
    <!--------------------------------->

    <!---------Removing Person----->
    <script>
        $(document).on('click','.deleteBtn',function(event){
        var table = $('#people_table').DataTable();
        event.preventDefault();
        var id = $(this).data('id');
        if(confirm("Are you sure want to delete this person ? " +  id))
        {
            $.ajax({
                url:"remove_person.php",
                data:{id:id},
                type:"post",
                success:function(data)
                    {                    
                        console.log("Data: ", data);
                        window.location.reload();
                }
            });
        };
    });
    </script>
    <!----------------------------->
    <!------------Log Out---------->
    <script>
        $(document).ready(function(){
            $('#LogOut').on('click','.LogOut ',function(event){
                $.ajax({
                url:"get_person_data.php",
                type:"post",
                success:function(data)
                    {                    
                        console.log("Loged out");
                }
                });
        });
    });
    </script>

    <!-----Send e mail----->
    <script>
        
    </script>
    <!------------------>
    
</body>
</html>