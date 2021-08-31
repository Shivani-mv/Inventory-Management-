<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">View Branch</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table  class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Branch ID</th>
              <th>Branch Name</th>              
              <th>Address</th>
              <th>Phone</th>             
              <th>Pincode</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from branch";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            <td><?php echo $i++;?></td>
            <td><?php echo $ros['branch_id'];?></td>
            <td><?php echo $ros['branch_name'];?></td>           
            <td><?php echo $ros['branchaddress'];?></td>
            <td><?php echo $ros['phone'];?></td>           
            <td><?php echo $ros['pincode'];?></td>
          </tr>
          <?php

        }
        ?>
       

          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>

<?php

include('footer.php');
?>
