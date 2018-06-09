
<?php
  
    
    require_once 'initialise.php';
    //$id = 7;
    global $initial;
    global $morequestions;
    $testRecord = find_by_id_from_table('subject_test','id', $_GET['test_id']);
   //$id = $_GET['test_id'];
   // echo $id;
    //$questions = $testRecord['no_of_questions'];
    //$morequestions = $_POST['more_questions'];
    //$allquestions = $questions + $morequestions;
    if(isset($_POST['save-questions'])){

        for($i =1;$i<=$testRecord['no_of_questions'];$i++)
        {
            $data = [
                        'subject_test_id'       => $_POST['test_id'],
                'question_text' => $_POST[$i.'_question_text'],
                'alt_a'         => $_POST[$i.'_alt_a'],
                'alt_b'         => $_POST[$i.'_alt_b'],
                'alt_c'         => $_POST[$i.'_alt_c'],
                'alt_d'         => $_POST[$i.'_alt_d'],

                'answer_alt'    => $_POST[$i.'_answer_alt'],
                'explain_text'  => $_POST[$i.'_explain_text']

                    ];

                 insert_into_table('subject_test_questions', $data);
                 
        }
            $_SESSION['fb_message'] = 'Subject successfully added';
            $_SESSION['fb_message_type'] = 'success';
    }

    
    
?>
<?php 
     include('layout-header.php'); 
?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-7">
                    <h1> Please Enter Your Questions</h1>
                        <form method = "POST">
                            <?php for($initial=1;$initial<=$testRecord['no_of_questions'];$initial++) {?>
                
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class=""><?php echo $initial;?></p>
                            <textarea class="form-control" name = "<?php echo $initial;?>_question_text" placeholder="Enter question" required ></textarea>
                            <h4><input type ="text" name ="<?php echo $initial ?>_alt_a" class ="form_control" placeholder="alt a" required></h4>
                            <h4><input type ="text" name ="<?php echo $initial ?>_alt_b" class ="form_control" placeholder="alt b" required></h4>

                            <h4><input type ="text" name ="<?php echo $initial ?>_alt_c" class ="form_control" placeholder="alt c" required></h4>
                            <h4><input type ="text" name ="<?php echo $initial ?>_alt_d" class ="form_control" placeholder="alt d" required></h4>

                            <h4>
                            <select name ="<?php echo $initial;?>_answer_alt" required>
                                <option value = "" >Select Answer </option>
                                <option value = "alt_a">alternate a </option>
                                <option value = "alt_b">alternate b </option>
                                <option value = "alt_c">alternate c </option>
                                <option value = "alt_d">alternate d </option>

                            </select>
                            <h4>Explanation</h4>
                            <textarea class="form-control" name = "<?php echo $initial;?>_explain_text" placeholder="Enter question" ></textarea>
                            </h4>
                        </div>
                    </div>
                        <?php }

                        //     The add more questions code

                        /* if(isset($_POST['add_more_questions'])){
                            $morequestions = $_POST['more_questions'];

                                        for($a=1;$a<=$_POST['more_questions'];$a++)
                                     {
                                            $b = $a+;
                                         echo '<div class="panel panel-default">
                                        <div class="panel-body"><p class=""> '.$b.'</p>
                                        <textarea class="form-control" name = " '.$b.'_question_text" placeholder="Enter question" ></textarea>
                                        <h4><input type ="text" name =" '.$b.'_alt_a"   size="35" class ="form_control"  placeholder="alt a"  ></h4>
                                        <h4><input type ="text" name =" '.$b.'_alt_b"  size="35" class ="form_control" placeholder="alt b" ></h4>
                                        <h4><input type ="text" name =" '.$b.'_alt_c"  size="35" class ="form_control" placeholder="alt c" ></h4>
                                        <h4><input type ="text" name =" '.$b.'_alt_d"  size="35" class ="form_control" placeholder="alt d" ></h4>

                                        <h4>
                                            <select name ="'. $b.'_answer_alt" >
                                                <option value = "" >Select Answer </option>
                                                <option value = "alt_a">alternate a </option>
                                                <option value = "alt_b">alternate b </option>
                                                <option value = "alt_c">alternate c </option>
                                                <option value = "alt_d">alternate d </option>

                                            </select>
                                        </h4>
                                        </div></div>';

                            
                                    }
                            }
                            */








                        ?>
                        <div class="panel panel-default">
                        <div class="panel-body" > 
                            <input type="hidden" name="test_id" value="<?php echo $_GET['test_id'];?>"> 
                            <input type="hidden" name="number_of_questions" value="<?php echo  $testRecord['no_of_questions'];?>"> 
                            <!--<h4>Add more Questions<input type = "text" name = "more_questions"></h4>
                            <button class="form-control btn-btn-info" onclick="add_more_questions" name="add_more_questions">Add</button>-->
                            <input type="submit" name="save-questions" class="form-control btn-btn-info" value="SAVE QUESTIONS">   
                         </div> 
                    </div> 
                     </form>
                </div>

               
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
<?php include('layout-footer.php');?>