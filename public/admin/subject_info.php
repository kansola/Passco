<?php 
    require_once 'initialise.php';
    //$subjectyears = find_by_id_from_table('subject_test','subject_id',$_GET['subject_id']);

    $subjectyears = find_all_from_table_where('subject_test','subject_id',$_GET['subject_id']);
    //$subject_test_id = retreive_subject_test_id($year,$subject_id);
    include('layout-header.php');
?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-7">
                    <h1>List of Available Years</h1>
                 

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                        foreach($subjectyears as $subjectyear)
                                        {

                                            echo '<ul><li><a href ="edit_test_questions.php?subject_test_id='.$subject_test_id = retreive_subject_test_id($subjectyear['year'],$_GET['subject_id']).'">'. $subjectyear['year'].'</li></ul>';
                                        }


                                    ?>
                                        
                                   
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