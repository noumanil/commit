
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search.">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="nav-item  ">
                            <a href="<?=site_url()?>/clogin/vstaffhomepage">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-question"></i>
                                <span class="title">Question Management</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style="display: block;">
                                <li class="nav-item active open">
                                    <a href="<?=site_url()?>/clogin/add_question">
                                        <i class="icon-plus"></i>
                                        <span class="title">Add New Question</span>
                                        <span class="selected"></span>

                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?=site_url()?>/clogin/edit_question">
                                        <i class="icon-pencil"></i>
                                        <span class="title">Edit Questions</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        
                       
                        <li class="nav-item  " >
                            <a href="<?=site_url()?>/clogin/myprofile">
                                <i class="icon-user"></i>
                                <span class="title">My Profile</span>
                                
                            </a>
                        </li>
                        <li class="nav-item  " >
                            <a href="<?=site_url()?>/clogin/logout">
                                <i class="icon-logout"></i>
                                <span class="title">Logout</span>
                                
                            </a>
                        </li>
                        
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="min-height:1112px">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                <div class="portlet light bordered" id="form_wizard_1">
                                   
                                <div class="portlet-body form col-md-11">
                                    <form class="form-horizontal" id="submit_form" method="POST" novalidate="novalidate">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i>Create Question </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Add a Choice </span>
                                                        </a>
                                                    </li>
                                                  
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%;"> </div>
                                                </div>
                                             <div class="tab-content">
                                                 

                                                        
                                                    <div class="tab-pane active" id="tab1">
                                                     <div class="form-group">
                                                            <label class="control-label col-md-3">Select a Category
                                                                <span class="required" aria-required="true"> * </span>
                                                            </label>
                                                            <div class="col-md-4">                                                                    
                                                                    <select id="select2-single-input-sm" name="category_id" class="form-control input-sm select2-multiple select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                         <?php if (count($categories)) {
                                                                                foreach ($categories as $list) {
                                                                                    echo "<option value='". $list['category_id'] . "'>" . $list['category_name'] . "</option>";
                                                                                }
                                                                            }       ?>                                           
                                                                    </select> 
                                                            </div>
                                                        </div>  
                                                     <div class="form-group">
                                                         <label class="control-label col-md-3">Select Status
                                                                <span class="required" aria-required="true"> * </span>
                                                            </label>

                                                          <div class="col-md-2" style="height: 30px;">
                                                              <input type="checkbox" style="" checked class="make-switch"   data-on-text="Draft"  data-off-text="Bank" id="status" data-size="small">
                                        
                                                          </div>  

                                                     </div>

                                         

                                                     <div class="form-group">
                                                            <label class="control-label col-md-3">Write a Question
                                                                <span class="required" aria-required="true"> * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <textarea id="questionSummernote"></textarea>

                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                        <div class="tab-pane" id="tab2">  
										<div class="row">
										<div class="col-md-10">
										  <button id="addNewChoice" type="button" class="btn btn-danger">Add New Choice</button>
										</div>
										
										</div>

										<div class="row " style=" margin-top:20px;">
                                            <div class="col-md-4" style="">
											   
											
											   
											
                                            <div class="form-group form-md-radios col-md-12" id="choiceList" style="display:none" >
                                                <label class="col-md-4 " for="form_control_1">Select Choice</label>
                                                <div class="col-md-8">
                                                    <div id="choices" class="md-radio-list">
                                                  
                                                     
                                                    </div>
													  <button id="setCorrectAnswer" type="button" class="btn btn-danger">Set as Correct Answer</button>
                                                </div>
                                            </div>
                                            
                                          

                                            </div>
                                                         <div id="choiceAreas" style="display:none" class="form-group col-md-8">
                                                            <label id="choiceLabel" class=" col-md-3">Write choice <span id="choicenum"></span>
                                                            </label>
                                                        
                                                    
                                                        </div>                                                      
                                                    </div>
                                                </div>
                                         <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                                            <i class="fa fa-angle-left"></i> Back </a>
                                                        <button type="button" onclick="true" id="continue" class="btn btn-outline green button-next">Continue
                                                        <i class="fa fa-angle-right"></i></button>
          
                                                    
                                                       
                                                        <input type="submit" id = "submit_form" value="Submit" style="display: none;" class="btn green button-submit"></input>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
  
                       <script>
					   
					   
					   
					   
                                    $(document).ready(function () {
									
									var correctAnswer = "";
									$('#status').on('switchChange.bootstrapSwitch', function () {

                                             if($('#status').bootstrapSwitch('state'))
                                                toastr.success('Your question will be stored in Drafts');
                                             else
                                                toastr.success('Your question will be stored in Question Bank');

                                           }); 
									
									$("#setCorrectAnswer").click(function(){
									$(".cr").remove();
									var input = $('input[name=choiceRadio]:checked');
									input.parent().append('<i class="cr fa fa-check"></i>');
									correctAnswer = input.attr("data-cnt");
									
									});
									
									
									
									
									
									
									$('body').on('click', 'input[name="choiceRadio"]', function() {
										var a = $(this).val();
										console.log($("#" + a));
										$(".textareasmaindiv").hide(); 
									
										$("#"+a).parent().show();
										 $("#choicenum").text($(this).attr('data-cnt'));
                                        
									});
									
									 
									
									var choiceCnt = 1;

                                    if(choiceCnt ==1){
                                        $("#choices").append(
                                        '              <div class="md-radio rm'+choiceCnt+'"> '+
                                                          '  <input type="radio" id="choice'+choiceCnt+'" data-cnt = "'+choiceCnt+'" name="choiceRadio" value="ch'+choiceCnt+'" class="md-radiobtn choiceRadioButtons" checked>'+
                                                          '  <label for="choice'+choiceCnt+'">'+
                                                             '   <span class="inc"></span>'+
                                                            '    <span class="check"></span>'+
                                                            '    <span class="box"></span> Choice '+ choiceCnt +' </label>'+
                                                       ' </div>');
                                                       
                                                   
                                                                $(".textareasmaindiv").hide(); 
                                                                
                                        $("#choiceAreas").append('<div class="col-md-8 textareasmaindiv" >'+
                                                               ' <textarea id="ch'+choiceCnt+'" class="choiceTextArea"></textarea>'+
                                                                '</div>');
                                                                
                                                        $('#ch'+ choiceCnt).summernote({
                                            height: 300, // set editor height
                                            minHeight: null, // set minimum height of editor
                                            maxHeight: null, // set maximum height of editor
                                            focus: true                  // set focus to editable area after initializing summernote
                                        });
                                                       
                                                    
                                                       $("#choicenum").text(choiceCnt);
                                                       $("#choiceAreas").show();
                                                       $("#choiceList").show();
                                                       
                                                       choiceCnt++;

                                    }
										
										
									
										
										$("#addNewChoice").click(function(){
										
										
										$("#choices").append(
										'  			   <div class="md-radio rm'+choiceCnt+'"> '+
                                                          '  <input type="radio" id="choice'+choiceCnt+'" data-cnt = "'+choiceCnt+'" name="choiceRadio" value="ch'+choiceCnt+'" class="md-radiobtn choiceRadioButtons" checked>'+
                                                          '  <label for="choice'+choiceCnt+'">'+
                                                             '   <span class="inc"></span>'+
                                                            '    <span class="check"></span>'+
                                                            '    <span class="box"></span> Choice '+ choiceCnt +' </label>'+
                                                       ' </div>');
													   
												   
																$(".textareasmaindiv").hide(); 
																
										$("#choiceAreas").append('<div class="col-md-8 textareasmaindiv" >'+
                                                               ' <textarea id="ch'+choiceCnt+'" class="choiceTextArea"></textarea>'+
																'</div>');
																
													    $('#ch'+ choiceCnt).summernote({
                                            height: 300, // set editor height
                                            minHeight: null, // set minimum height of editor
                                            maxHeight: null, // set maximum height of editor
                                            focus: true                  // set focus to editable area after initializing summernote
                                        });
													   
													
													   $("#choicenum").text(choiceCnt);
													   $("#choiceAreas").show();
													   $("#choiceList").show();
													   
													   choiceCnt++;
													  
										
										});
									
									
                                        $('#questionSummernote').summernote({
                                            height: 300, // set editor height
                                            minHeight: null, // set minimum height of editor
                                            maxHeight: null, // set maximum height of editor
                                            focus: true                  // set focus to editable area after initializing summernote
                                        });
										
                                    var question = $("#questionSummernote").val();

                                        $( "#continue" ).click(function(event) {
                                            var question = $("#questionSummernote").val();

                                            if (!question) {
                                                event.stopImmediatePropagation(); 
                                                toastr.error('Please write a question', 'Error!');
                                              }

										});
										  $("#submit_form").submit(function (event) {  
										
										   event.preventDefault();

                                           

                                            var question = $("#questionSummernote").val();
                                            var categoryId = $('select[name=category_id]').val();
                                            var status = $('#status').bootstrapSwitch('state');

                                            var statusInt;

                                            if(status)
                                                statusInt = 1;
                                            else
                                                statusInt = 0;

                                            if (question) {
                                                var url = "http://localhost/index.php/clogin/add_new_questionJ";
                                                $.ajax({
                                                    url: url,
                                                    data: {question: question, status: statusInt, category_id : categoryId},
                                                    type: "POST",
                                                    success: function (data) {
                                                        if (data == 0)           
                                                            toastr.error('There was an error.', 'Error!');

                                                        else {
                                                            questionId = data;
															toastr.success('Question is added. The choices is adding' + questionId +'.question' , 'Success!');
															 
															 var choices = [];
														
															 $.each( $(".choiceRadioButtons"), function( key, value ) {
															 var txtId = $(value).val();
																choices.push($("#" + txtId).val());
																
															});
																		choices = JSON.stringify(choices);	
																												
																		$.ajax({
																			url: "http://localhost/index.php/clogin/add_new_choiceJ",
																			data: {choice: choices, questionId: questionId, correctAnswer:$("#ch" + correctAnswer).val() },
																			type: "POST",
																			success: function (data) {
																		
																				if (data == 0)           
																					toastr.error('There was an error.', 'Error!');

																				else {
																					questionId = data;
																					toastr.success('Cevaplar eklendi.' + questionId, 'Success!'); 
																					
																																							
																				}
																			}


																		});
														 
                                                        }
                                                    }


                                                });

                                            } 
                                        });
										
										
                                    });

                                  
                                </script>

                           

     </div>
       
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                  
            <!-- END QUICK SIDEBAR -->
        
    