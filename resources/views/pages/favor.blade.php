@extends('layouts.app')
@section('content')

        <!-- Page Content-->
<section class="blog_section">
    <div class="container container_body">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12" id="filter_catagory">
                <div class="panel panel-primary left_sidebar">
                    <div class="panel-body">
                        <div class="title_section">
                            <h3>Job Search</h3>
                            <div class="city__section">
                                <label class="job_board_label">City</label>
                                <select class="postform input-sm" id="city" style="border: 1px solid #ddd; color: #212121;">
                                    <!-- class="postform" -->
                                    <option value="1">--Select One--</option>
                                    <option value="2">Dhaka</option>
                                    <option value="3">Online</option>
                                </select>
                                <br>
                                <div class="border_bottom col-xs-12 col-sm-12 col-md-12"></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left: 0px;padding-right: 0px;">
                                <h4>Category</h4>
                                <div class="square-blue form-group col-md-12">
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Bangla Medium</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>English Medium</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Test Preparation</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Language Learning</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Project/Assignment</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>University Admission Test</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>IT</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Arts</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>English Version</strong></span>
                                    </label>
                                </div>

                                <div class="border_bottom col-xs-12 col-sm-12 col-md-12"></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left: 0px;padding-right: 0px;">
                                <h4>Gender</h4>
                                <div class="square-blue form-group col-md-12">
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Male</strong></span>
                                    </label>
                                    <label class="ui-checkbox">
                                        <input name="checkbox1" type="checkbox" value="option1">
                                        <span><strong>Female</strong></span>
                                    </label>
                                </div>

                                <div class="border_bottom col-xs-12 col-sm-12 col-md-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12" id="joblist">
                <div class="job__feed">
                    <div class="share_social">
                        <ul class="list-inline list-social">
                            <li class="social-facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="social-google-plus">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="panel-body">
                            <div class="jobid">
                                <span>ID - 3475</span>
                            </div>
                            <div class="job__title">
                                <h3>Need a tutor for Private student</h3>
                            </div>
                            <div class="job__catagory">
                                <h5><strong>Category: </strong>University Admission Test, Class : Private</h5>
                            </div>
                            <div class="job__description">
                                <p>3 days per week, Salary : 10000 Tk, Tution gender preference : Any Subjects : Physics,Chemistry,English,Maths</p>
                            </div>
                            <div class="job__loaction">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Dhaka, Mirpur 12</span>
                            </div>
                            <div class="other__info">
                                <p>Other Requirements - Experienced tutors are requested to apply. Student wants to sit for IUT admission test in the next session.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 footer">
                        <div class="panel-body">
                            <div class="job_postedby">
                                <p>Job posted by Mrs Sumaiya</p>
                            </div>
                            <div class="job__postdate">
                                <p>Posted on 31st January, 2017</p>
                            </div>
                            <div class="apply_job">
                                <a href="#" class="btn btn-success btn-lg">Interested</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job__feed">
                    <div class="share_social">
                        <ul class="list-inline list-social">
                            <li class="social-facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="social-google-plus">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="panel-body">
                            <div class="jobid">
                                <span>ID - 3475</span>
                            </div>
                            <div class="job__title">
                                <h3>Need a tutor for Private student</h3>
                            </div>
                            <div class="job__catagory">
                                <h5><strong>Category: </strong>University Admission Test, Class : Private</h5>
                            </div>
                            <div class="job__description">
                                <p>3 days per week, Salary : 10000 Tk, Tution gender preference : Any Subjects : Physics,Chemistry,English,Maths</p>
                            </div>
                            <div class="job__loaction">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Dhaka, Mirpur 12</span>
                            </div>
                            <div class="other__info">
                                <p>Other Requirements - Experienced tutors are requested to apply. Student wants to sit for IUT admission test in the next session.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 footer">
                        <div class="panel-body">
                            <div class="job_postedby">
                                <p>Job posted by Mrs Sumaiya</p>
                            </div>
                            <div class="job__postdate">
                                <p>Posted on 31st January, 2017</p>
                            </div>
                            <div class="apply_job">
                                <a href="#" class="btn btn-success btn-lg">Interested</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job__feed">
                    <div class="share_social">
                        <ul class="list-inline list-social">
                            <li class="social-facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="social-google-plus">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="panel-body">
                            <div class="jobid">
                                <span>ID - 3475</span>
                            </div>
                            <div class="job__title">
                                <h3>Need a tutor for Private student</h3>
                            </div>
                            <div class="job__catagory">
                                <h5><strong>Category: </strong>University Admission Test, Class : Private</h5>
                            </div>
                            <div class="job__description">
                                <p>3 days per week, Salary : 10000 Tk, Tution gender preference : Any Subjects : Physics,Chemistry,English,Maths</p>
                            </div>
                            <div class="job__loaction">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Dhaka, Mirpur 12</span>
                            </div>
                            <div class="other__info">
                                <p>Other Requirements - Experienced tutors are requested to apply. Student wants to sit for IUT admission test in the next session.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 footer">
                        <div class="panel-body">
                            <div class="job_postedby">
                                <p>Job posted by Mrs Sumaiya</p>
                            </div>
                            <div class="job__postdate">
                                <p>Posted on 31st January, 2017</p>
                            </div>
                            <div class="apply_job">
                                <a href="#" class="btn btn-success btn-lg">Interested</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection