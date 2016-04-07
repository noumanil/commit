<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
include_once("inc/header.php");
?>
<div class="content container">
    <h2 class="page-title">Add new Question</h2>
    <div class="row">
        <div class="col-lg-12">
            <section class="widget">
                <header>
                    <div class="widget-controls">
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                    </div>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="widget">
                            <header>
                                <h4><i class="fa fa-file-alt"></i> Add Question</h4>
                            </header>
                            <div class="body">
                                <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate"
                                      data-parsley-priority-enabled="false">
                                    <fieldset>

                                        <div class="form-group">

                                            <div class="col-sm-12">
                                                <textarea rows="10" class="form-control input-transparent question" id="content"></textarea>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="form-actions add-question">
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <div class="btn-toolbar">
                                                    <a id="addQuestion" class="btn btn-success">Save Question and fill choices</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </section>
                    </div>
                    <div class="col-lg-12">
                        <div id="choicesList" style="display:none">

                            <div class="col-sm-4">
                                <a id="correctAnswer"  class="btn btn-primary">Set as Correct Answer</a>
                            </div>
                        </div>
                    </div>



                    <div  id="choices" class="col-lg-12" style="display:none" >
                        <div class="col-sm-8">
                            <input type="text" id="choice" class="form-control input-transparent" placeholder="Insert Choice">
                        </div>
                        <div class="col-sm-4">
                            <a id="saveChoice"  class="btn btn-primary">Save Choice</a>
                        </div>
                    </div>

            </section>


        </div>
    </div>
</div>

<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin"></i>
</div>
</div>

<script>

    $(document).ready(function () {
        var tempPath = "/index.php/";


        $("#addQuestion").click(function () {
            var question = $("#content").val();

            if (question)
            {
                $(".add-question").hide();

                $.post(tempPath + "/func_addquestion", {question: question})
                        .done(function (lastInsertId) {

                            $("#saveChoice").attr("data-id", lastInsertId);
                            $("#choices").show();

                        });
            } else
            {

                alert("Question is empty");

            }
        });


        $("#saveChoice").click(function () {



            var choice = $("#choice").val();

            var question_id = $("#saveChoice").attr("data-id");
            $.post(tempPath + "/func_addchoice", {choice: choice, question: question_id})
                    .done(function (data) {

                        if (data == -1)
                        {
                            alert("hata");
                        } else
                        {

                            $('#choicesList').prepend('   <div class="radio"><input type="radio" name="choices" id="' + choice + '" value="' + data + '"><label for="' + choice + '">' + choice + '</label></div>   ');
                            $('#choice').val('');
                            lastRadioButton = "#" + choice;
                            $(lastRadioButton).prop("checked", true)
                            $("#choicesList").show();
                        }


                    });


        });



        $("#correctAnswer").click(function () {


            var answerId = $('input[name=choices]:checked').val();
            var questionId = $("#saveChoice").attr("data-id");
            $.post(tempPath + "/func_setanswer", {answerId: answerId, questionId: questionId})
                    .done(function (data) {

                        if (data == 1)
                        {

                            alert("Succesfully Set the choice");

                        }


                    });


        });

    });

</script>


<?php include_once("inc/footer.php");
?>