<?php
    require 'connection.php';
    require 'header.php';
    require 'menu.php';

    if (isset($_GET['admin_id'])) {
        $admin_id = $_GET['admin_id'];  
        // echo $admin_id;
          
        if($del_response){
            header('location:adminprofile.php');
        } else {
            echo "not deleted please try again";
        }
    }
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">Admin List</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All adminlist
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="users-list">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl No</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Password</th>
                                        <!-- <th class="text-center">Edit</th> -->
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <!--<tbody class="text-center"> 
                                    <tr class="">
                                        <td>1</td>
                                        <td>User</td>
                                        <td>user@gmail.com</td>
                                        <td>1234</td>
                                        <td>-->

                                            <?php  
                                     $sql = "SELECT * FROM `user` WHERE `type` = '1'";
                                         $result = mysqli_query($conn,$sql);
                                                                        

                                            while ($rows = mysqli_fetch_assoc($result)) {

                                        ?>
                                        <tbody class="text-center">
                                        <tr class="">
                                                <td><?php echo $rows['id']; ?></td>
                                                <td><?php echo $rows['name']; ?></td>
                                                <td><?php echo $rows['email']; ?></td>
                                                <td><?php echo $rows['password']; ?></td>
                                                <!-- <td class="text-center">
                                                    <a href="#" onclick="EditUser()"><i class="btn btn-success" aria-hidden="true">Edit</i></a>
                                                </td> -->
                                                <td class="text-center">
                                                    <a href="adminprofile.php?admin_id=<?=$rows['id']; ?>" onclick="deleteUser()"><i class="btn btn-danger" aria-hidden="true">Delete</i></a>
                                                </td>
                                        </tr>
                                        </tbody>
                                 <?php 
                                        }
                                  ?>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>  
<!-- <script>
    $(document).ready(function() 
    {
        $('#users-list').DataTable({
            responsive: true,
        });
    });

    function deleteUser() 
    {
        swal
        ({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then
        ((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            });
          } else {
            swal("Your imaginary file is safe!");
          }
        });
    };
</script>
 -->
