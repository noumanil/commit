<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
include_once("inc/header.php");


?>
    <div class="content container">
        <h2 class="page-title">Question Management</h2>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                    <a href="<?=site_url()?>/new_question" class="btn btn-primary">Add new question</a> 	
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
						
                        </div>
                    </header>
                    <div class="body no-margin">
				
					
						  <section class="widget">
                    <header>
                        
                    
                    </header>
                    <div class="body">
                        <h3>Latest  <span class="fw-semi-bold">Questions</span></h3>
                    
                    </div>
                    <div class="widget-table-overflow">
                        <table class="table table-striped table-lg mt-lg mb-0">
                            <thead class="no-bd">
                            <tr>
                                <th>Question</th>
                                <th class="text-align-left">Choices</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php 
							foreach($questions as $question)
							{
							?>
                            <tr>
                             
                                <td><?=$question['question']?></td>
                                <td class="text-align-left">
								<?php 
								foreach($question['choices'] as $choice)
								if($question['correct_choice_id'] == $choice['id'])
									echo '<li style="color:yellow">'.$choice['choice'].'</li>';
								else
									echo '<li>'.$choice['choice'].'</li>';
								?>
								
								</td>
                         
                            </tr>
                           <?php 
						   }
						   ?>
                            </tbody>
                        </table>
                    </div>
                </section>

				
                    </div>
                </section>
              
            </div>
        </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>

   <?php include_once("inc/footer.php");
   ?>