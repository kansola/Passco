<?php
  
    
    require_once'initialise.php';


    if(isset($_POST['submit']))
    {

        if(subject_test_exists($_GET['id'],$_POST['no_of_questions'],$_POST['year']) === false){
                $_SESSION['fb_message'] = 'This test info has been added before!!!';
                $_SESSION['fb_message_type'] = 'error';
            

        }
        else
        {

            $subject_test = array(
                'subject_id' => $_POST['subject_id'],
                'instruction' => $_POST['instruction'],
                'no_of_questions' => $_POST['no_of_questions'],
                'pass_mark' => $_POST['pass_mark'],
                'time_duration' => $_POST['time_duration'],
                'year' => $_POST['year']
                );

                $last_insert_id = insert_into_table('subject_test',$subject_test);
                //echo   $last_insert_id ;
            //echo 'Test Info successfully added';
                //redirect_to('add_test_questions.php?subject_test_id ='.$last_insert_id);
                header('Location: add_test_questions.php?test_id='.$last_insert_id);
                //header('Location: add_test_questions.php?subject_test_id ='.$last_insert_id );
        }
    }

      //include('../../includes/layout-header.php');
    
?>
<?php include('layout-header.php');?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Add Test Info </h1>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <form method = "POST">
                                    <div class="col-md-12 col-sm-12 col-xs-12 ">  
                                        <div class="form-group">
                                            <label class="form-label"><strong>Test Instruction*</strong></label>
                                            <span class="tips"> like "Answer All"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="instruction" title ="requested format letters only" pattern="[A-Za-z_-\s]{1,30}" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label"><strong>No of Questions*</strong></label>
                                            <span class="tips"> like "10"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="no_of_questions" title ="requested format numbers only" pattern="[0-9]{1,30}" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label"><strong>Pass Mark*</strong></label>
                                            <span class="tips"> like "5"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="pass_mark" title ="requested format numbers only" pattern="[0-9]{1,30}" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label"><strong>time_duration_in_mins*</strong></label>
                                            <span class="tips"> like "60"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="time_duration" title ="requested format numbers only" pattern="[0-9]{1,30}" required>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                                <label class="form-label"><strong>Year*</strong>
                                                </label>
                                                <span class="tips">like "2003"</span>
                                                <div class="controls">
                                                    <select class="form-control" name="year">
                                                        <?php
                                                            for($i = 1990; $i <= date("Y") + 1; $i++){
                                                        ?>
                                                                <option value="<?php echo $i;?>"> <?php echo $i;?> </option>
                                                        

                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group text-center">
                                                     <input type="hidden" name="subject_id" value="<?php echo $_GET['id'];?>">
                                                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                                                    <button type="reset" class="btn btn-default">Cancel</button>
                                             </div>
                                                
                                </form>
                            </div>
                        </div>
                    </div>
                     
                </div>

               
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
<?php include('layout-footer.php');?>