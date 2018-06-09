<?php
require_once 'initialise.php';
    
    //require_once'initialise.php';

    $subjects = find_all_from_table('subjects');
?>




<?php 
    include('layout-header.php');

 ?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-7">
                
                 

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-md-12">  
                                <table class=" table table-striped">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> SUBJECT </th>
                                            <th> EXAM TYPE </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cnt = 1;
                                            foreach($subjects as $subject){
                                                ?>
                                        <tr>

                                            <td><?php echo $cnt++;?></td>
                                            <td><a href = "subject_test.php?id=<?php echo $subject['id'];?>" style='color:#428bca'> <?php echo $subject['subject_name'];?></a></td>
                                            <td><?php echo $subject['subject_type'];?></td>
                                        </tr>
                                            <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                     
                </div>

               
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
<?php include('layout-footer.php');?>