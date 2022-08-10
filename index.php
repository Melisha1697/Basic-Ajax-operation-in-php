<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
   
</head>
<body>
    <div class="row mb-2 mt-5">
        <div class="col-6 offset-3">
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" 
                    placeholder="Enter Name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" name="contact" id="contact" 
                    placeholder="Enter Contact" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" name="email" id="email" 
                    placeholder="Enter Email" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" id="add">ADD</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" id="load">LOAD DATA</button>
        </div>
        <div class="card-body" id="table-data">
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="script.js"></script> -->
    <!-- Parameter -->
    <!-- 1. URL
        2. TYPE
        3. DATA
        4. SUCCESS
    -->
    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'ajax-show.php',
                    type: 'GET',
                    success: function(data){
                        $('#table-data').html(data);
                        console.log('CLICKED');
                    }
                });
            };
            
            // $('#load').on('click', function(e){
            //     $.ajax({
            //         url: 'ajax-show.php',
            //         type: 'GET',
            //         success: function(data){
            //             $('#table-data').html(data);
            //             console.log('CLICKED');
            //         }
            //     });
            // });

            loadData();
            addData();
            function addData(){
                $('#add').on('submit', function(e){
                
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var contact = $('#contact').val();

                    $.ajax({
                        url: 'ajax-insert.php',
                        type: 'POST',
                        data: {name: name, contact:contact, email:email},
                        success: function(data){
                            loadData();
                            console.log(data.name);
                            console.log(email);
                            console.log(contact);
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>