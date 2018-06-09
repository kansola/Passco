
<?php 
   

    
    require_once'initialise.php';

    if (isset($_POST['submit']))
    {

        if(subject_exists($_POST['subject_name'],$_POST['subject_type']) === false){

           
        $_SESSION['fb_message'] = 'Subject already exists';
        $_SESSION['fb_message_type'] = 'error';
        }


        
    
    else
    {


        $subject = array(
            'subject_name' =>$_POST['subject_name'],
            'subject_type' =>$_POST['subject_type'] 
            );

        insert_into_table('subjects',$subject);
        
        $_SESSION['fb_message'] = 'Subject successfully added';
        $_SESSION['fb_message_type'] = 'success';
    }



}



   


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
                                
                                <form method="POST">
                                        <div class="col-md-6 col-sm-6 col-xs-6">

                                             <div class="form-group">
                                                <label class="form-label"><strong>Subject name*</strong></label> 
                                                <div class="controls">
                                                    <input type="text" class="form-control"  title ="requested format letters only" placeholder="e.g Mathematics" name="subject_name"  required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"><strong>Exam type</strong>  </label> 
                                                <div class="controls">
                                                    <select class="form-control" name="subject_type">
                                                        <option value="BECE">BECE</option>
                                                        <option value="WASSCE">WASSCE</option>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                           
                                           
                                               
                                            <div class="form-group text-center">
                                                <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
                                            </div>
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