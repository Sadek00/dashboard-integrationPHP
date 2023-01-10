

<?php
    require('inc/header.php');
    require_once"../Database.php";
    $select="SELECT * FROM user_form WHERE status=1";
    $query_user =mysqli_query($db,$select);
?>

      <article class="content error-404-page">
            <div class="title-block">
                <h3 class="title"> ALL USER</h3>
            </div>
         <section class="section">
                <?php
                      if (isset($_SESSION['Delete'])) {?>
                        <div class="alert alert-danger">
                          <span>
                            <?php
                        echo $_SESSION['Delete'];
                        unset($_SESSION['Delete']); 
                        ?>                             
                      </span>
                        </div>
                      <?php }
                      ?>

                      <?php

                      if (isset($_SESSION['Update'])) {?>
                        <div class="alert alert-success">
                          <span>
                            <?php
                        echo $_SESSION['Update'];
                        unset($_SESSION['Update']);
                        ?>
                          </span>
                        </div>
                 <?php }       
                      
                ?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($query_user as $KEY=>$value) { ?>
                  <tr>
                  <td><?= ++$KEY ?></td>
                  <td><?= $value['name']?></td>
                  <td><?= $value['email']?></td>
                  <td>
                    <?php
                    if ($value['role']==1) {
                      echo 'User';
                    }
                    elseif($value['role']==2){
                      echo 'Employee';
                      }
                    else{
                      echo 'Admin';
                    }
                    ?>
                  
                </td>
                  <td>
                    <a href="user_edit.php?user_iq=<?= $value['id']?>" class="btn btn-primary">Edit</a>
                    <a href="user_delete.php?user_iq=<?= $value['id']?>" class="btn btn-danger">Delete</a>
                    <!-- <button data-id="<?= $value['id']?>" class="btn btn-danger UserDelete ">Delete</button> -->
                  </td>
                </tr>
                <?php }
                ?>
                   
              </tbody>
            </table>
        </section>
    </article>
    <!-- <script type="text/javascript">
      $('.UserDelete').click(function(){
        let  id=$(this).attr("data-id");

        /*Sweet Alert*/
        swal({
              title:"Are you sure?",
              text:"Once deleted, you will not be able to recover this data!",
              icon:"warning",
              buttons:true,
              dangerMode:true,
              })
              .then((willDelete)=>{
              if(willDelete){
              swal("Your Data has been deleted!",{
              icon:"success",
              });
              setTimeout(function () {
               window.location.href='user_delete.php?user_iq='+id; //redirect user_delete.php page
             }, 5000);
              
              }else{
        swal("Your Data is safe!");
              }
              });
        

      })
      
    </script> -->
<?php
    require('inc/footer.php');
?>
