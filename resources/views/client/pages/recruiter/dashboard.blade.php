@extends('client.layout.layout')

@section('title','My Dashboard')


@section('style')
@endsection


@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Welcome Tera Planer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div class="container">
             <div class="row no-gape">
                 <aside class="col-lg-3 column border-right">
                     <div class="widget">
                         <div class="tree_widget-sec">
                             <ul>
                                 <li><a href="employer_profile.html" title=""><i class="la la-file-text"></i>Company Profile</a></li>
                                 <li><a href="employer_manage_jobs.html" title=""><i class="la la-briefcase"></i>Manage Jobs</a></li>
                                 <li><a href="employer_transactions.html" title=""><i class="la la-money"></i>Transactions</a></li>
                                 <li><a href="employer_resume.html" title=""><i class="la la-paper-plane"></i>Resumes</a></li>
                                 <li><a href="employer_packages.html" title=""><i class="la la-user"></i>Packages</a></li>
                                 <li><a href="employer_post_new.html" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
                                 <li><a href="employer_job_alert.html" title=""><i class="la la-flash"></i>Job Alerts</a></li>
                                 <li><a href="employer_change_password.html" title=""><i class="la la-lock"></i>Change Password</a></li>
                                 <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
                             </ul>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                     <div class="padding-left">
                         <div class="manage-jobs-sec">
                             <h3>Manage Jobs</h3>
                             <div class="extra-job-info">
                                 <span><i class="la la-clock-o"></i><strong>9</strong> Job Posted</span>
                                 <span><i class="la la-file-text"></i><strong>20</strong> Application</span>
                                 <span><i class="la la-users"></i><strong>18</strong> Active Jobs</span>
                             </div>
                             <table>
                                 <thead>
                                     <tr>
                                         <td>Title</td>
                                         <td>Applications</td>
                                         <td>Created & Expired</td>
                                         <td>Status</td>
                                         <td>Action</td>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <div class="table-list-title">
                                                 <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                 <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                             </div>
                                         </td>
                                         <td>
                                             <span class="applied-field">3+ Applied</span>
                                         </td>
                                         <td>
                                             <span>October 27, 2017</span><br />
                                             <span>April 25, 2011</span>
                                         </td>
                                         <td>
                                             <span class="status active">Active</span>
                                         </td>
                                         <td>
                                             <ul class="action_job">
                                                 <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                 <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                 <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                             </ul>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <div class="table-list-title">
                                                 <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                 <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                             </div>
                                         </td>
                                         <td>
                                             <span class="applied-field">3+ Applied</span>
                                         </td>
                                         <td>
                                             <span>October 27, 2017</span><br />
                                             <span>April 25, 2011</span>
                                         </td>
                                         <td>
                                             <span class="status active">Active</span>
                                         </td>
                                         <td>
                                             <ul class="action_job">
                                                 <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                 <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                 <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                             </ul>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <div class="table-list-title">
                                                 <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                 <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                             </div>
                                         </td>
                                         <td>
                                             <span class="applied-field">3+ Applied</span>
                                         </td>
                                         <td>
                                             <span>October 27, 2017</span><br />
                                             <span>April 25, 2011</span>
                                         </td>
                                         <td>
                                             <span class="status">Inactive</span>
                                         </td>
                                         <td>
                                             <ul class="action_job">
                                                 <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                 <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                 <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                             </ul>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <div class="table-list-title">
                                                 <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                 <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                             </div>
                                         </td>
                                         <td>
                                             <span class="applied-field">3+ Applied</span>
                                         </td>
                                         <td>
                                             <span>October 27, 2017</span><br />
                                             <span>April 25, 2011</span>
                                         </td>
                                         <td>
                                             <span class="status active">Active</span>
                                         </td>
                                         <td>
                                             <ul class="action_job">
                                                 <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                 <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                 <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                             </ul>
                                         </td>
                                     </tr>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                </div>
             </div>
        </div>
    </div>
</section>

@endsection



@section('modal')
@endsection


@section('javascript')


  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection