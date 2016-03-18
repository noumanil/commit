<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
include_once("inc/header.php");


?>
    <div class="content container">
        <h2 class="page-title">Account Info.</h2>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <div class="form-group">
                  <label>Name Surname</label>
                  <input type="text" class="form-control" placeholder="Anıl Ülger" disabled="">
                </div>
                  <div class="form-group">
                  <label>Email Address</label>
                  <input type="text" class="form-control" placeholder="fasdsad@example.com" disabled="">
                  </div>
                    <div class="form-group">
                  <label>Number of Question on temporary database </label>
                  <input type="text" class="form-control" placeholder="6" disabled="">
                  </div>
                    <form role="form">
              <div class="box-body">
                <div class="form-group">
                    <label><b>Request Form</b></label>
                  <textarea class="form-control" rows="3" placeholder="Write your request here.."></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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