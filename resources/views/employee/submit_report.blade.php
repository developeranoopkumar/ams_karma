@extends('includes.master')
@section('title', 'ams_karma | Submit Report')
@section('page_title', 'Submit Report')
@section('content')
    <!-- Right Panel -->
        <div class="content mt-3"> <!-- content start -->

     <!-- /# column -->
     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Anoop Kumar (Design Department)</h4>
                            </div>
                            <div class="card-body">
                                <div class="custom-tab">

                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="daily-task-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Daily tasks</a>
                                            <a class="nav-item nav-link" id="weekly-task-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Weekly Tasks</a>
                                            <a class="nav-item nav-link" id="fortnightly-task-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Fortnightly tasks</a>
                                            <a class="nav-item nav-link" id="monthly-task-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Monthly Tasks</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content px-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="daily-task-tab">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-12"><label class=" form-control-label">Suggest description for your task, if required.</label></div>
                                                            </div>                                   
                                                            <div class="row form-group" style="border-bottom: 1px solid #e8ebef;">
                                                                    <div class="col col-md-6"><label class=" form-control-label"><strong>1-</strong> Coordination meeting and query resolving with all members of the sales team</label></div>
                                                                    <div class="col col-md-6">
                                                                        <div class="form-check-inline form-check">
                                                                            <label for="inline-radio1" class="form-check-label mx-2">
                                                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Yes
                                                                            </label>
                                                                            <label for="inline-radio2" class="form-check-label mx-2">
                                                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">No
                                                                            </label>
                                                                            <label for="inline-radio3" class="form-check-label mx-2">
                                                                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Not required or not due today
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                              
                                                             
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                                                </div>
                                                        </form>
                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="weekly-task-tab">
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone. Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="fortnightly-task-tab">
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone. Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="monthly-task-tab">
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone. Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->

      

        </div> <!-- content end-->
    <!-- Right Panel -->
@stop
