<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/horizontal-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('pageTitle')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('student/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('student/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('student/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('student/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
  <style>
    .bold-text {
    font-size: 18px;
    font-weight: bold;
    color: white;
}

.bold-text-min {
    font-size: 16px;
    font-weight: bold;
    color: white;
}

    .bold-text-font {
    font-size: 13px;
    font-weight: bold;  
    color: white;  
}

    .bold-font {
    font-size: 20px;
    font-weight: bold;
}

.bold-font-qst {
    font-size: 24px;
    /* font-weight: bold; */
}

.bold-font-ans {
    font-size: 16px;
    font-weight: bold;
    color: red;
}

.bold-font-text {
    font-size: 16px;
    font-weight: bold;
    color: black;
}
  </style>
  	<style>
    /* Success Alert */
    .alert.alert-success {
        background-color: #28a745; /* Green background color */
        color: #fff; /* White text color */
        padding: 10px; /* Padding around the text */
        border-radius: 5px; /* Rounded corners */
    }

    /* Error Alert */
    .alert.alert-danger {
        background-color: #dc3545; /* Red background color */
        color: #fff; /* White text color */
        padding: 10px; /* Padding around the text */
        border-radius: 5px; /* Rounded corners */
    }
</style>
</head>
<body class="horizontal-menu">
  <div class="container-scroller">
    <nav class="navbar horizontal-layout-navbar fixed-top navbar-expand-lg">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <!-- <a class="navbar-brand brand-logo" href="#"><img src="{{asset($collegeSetup->avatar)}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset($collegeSetup->avatar)}}" alt="logo" /></a>                     -->
      </div>
      <div class="navbar-menu-wrapper d-flex flex-grow">
        <ul class="navbar-nav navbar-nav-left collapse navbar-collapse" id="horizontal-top-example">
        <li class="nav-item nav-profile">
            <a class="nav-link">
              <div class="nav-profile-text">              
              </div>
              <div class="nav-profile-img">
                <img src="{{asset($collegeSetup->avatar)}}" alt="image" class="img-xs rounded-circle ml-3">
                <span class="availability-status online"></span>             
              </div>
            </a>
          </li>
          <li class="nav-item dropdown">            
            <a class="nav-link active" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="false">            
            <strong><p class="bold-text">Oyo State College of Health Science and Technology</p></strong>
            </a>            
          </li> 
          <li class="nav-item dropdown">            
            <a class="nav-link" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="false">            
            <strong><p class="bold-text-font">{{$studentData->admission_no}}</p></strong>
            </a>            
          </li>   
          <li class="nav-item dropdown">            
            <a class="nav-link active" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="false">            
            <strong><p class="bold-text-font">{{ $studentData->surname }} {{ $studentData->first_name }} {{ $studentData->other_name }}</p></strong>
            </a>            
          </li>   
          <li class="nav-item dropdown">            
            <a class="nav-link" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="false">           
            <strong><p class="bold-text-font">{{$studentData->department}} | {{$studentData->level}}</p></strong>            
            </a>             
          </li> 
          <li class="nav-item dropdown">            
            <a class="nav-link active" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="false">           
            <strong><p class="bold-text-font">{{$examSetting->no_of_qst}}qst | {{$examSetting->duration}}mins</p></strong>            
            </a>             
          </li>  
          <li class="nav-item dropdown">            
            <a class="nav-link" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="true">           
            <strong><p class="bold-text-min">Time Left</p> <p><span class="bold-text-min" id="timer"></span> </p></strong>
</div>
</strong>            
            </a>             
          </li>    
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="collapse" data-target="#horizontal-top-example">
          <span class="fa fa-bars"></span>
        </button>
      </div>
    </nav>
    <br><br>
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              E-Learning - Read questions carefully and select the answer appropriately.
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">                
                <li class="breadcrumb-item active" aria-current="page">E-Learning</li>
              </ol>
            </nav>
          </div>
          <div>
          @if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
          @elseif(session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
						@endif	
          </div>
          

          <div class="row">
          <form action="" method="POST">
              @csrf
          <!-- begin card -->
            <div class="col-12 grid-margin" id="question1">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {{ $questionNo['q1'] }} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question1->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question1->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question1->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question1->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td width="82%">
                      <input type="submit" name="option{{ $questionNo['q1'] }}A" id="option{{ $questionNo['q1'] }}B" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q1'] }}B" id="option{{ $questionNo['q1'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q1'] }}C" id="option{{ $questionNo['q1'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q1'] }}D" id="option{{ $questionNo['q1'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a1']} }}</span> -->
                        <span id="answer1" class="bold-font-ans"></span>
                        
                        </p>
                        <input type="hidden" name="q1" id="questionNumber" value="{{ $questionNo['q1'] }}">
                        </td>
                        <td></td>
                        <td></p></td>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question2">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {{ $questionNo['q2'] }} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question2->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question2->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question2->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question2->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q2'] }}A" id="option{{ $questionNo['q2'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q2'] }}B" id="option{{ $questionNo['q2'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q2'] }}C" id="option{{ $questionNo['q2'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q2'] }}D" id="option{{ $questionNo['q2'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a2']} }}</span> -->
                        <span id="answer2" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q2" id="questionNumber" value="{{ $questionNo['q2'] }}">
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question3">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {{ $questionNo['q3'] }} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question3->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question3->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question3->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question3->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td width="82%"><input type="submit" name="option{{ $questionNo['q3'] }}A" id="option{{ $questionNo['q3'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q3'] }}B" id="option{{ $questionNo['q3'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q3'] }}C" id="option{{ $questionNo['q3'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q3'] }}D" id="option{{ $questionNo['q3'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a3']} }}</span> -->
                        <span id="answer3" class="bold-font-ans"></span>                        
                        </p>
                        <input type="hidden" name="q3" id="questionNumber" value="{{ $questionNo['q3'] }}">                        
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->          
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question4">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {{ $questionNo['q4'] }} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question4->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question4->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question4->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question4->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q4'] }}A" id="option{{ $questionNo['q4'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q4'] }}B" id="option{{ $questionNo['q4'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q4'] }}C" id="option{{ $questionNo['q4'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q4'] }}D" id="option{{ $questionNo['q4'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a4']} }}</span> -->
                        <span id="answer4" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q4" id="questionNumber" value="{{ $questionNo['q4'] }}">

                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question5">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {{ $questionNo['q5'] }} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question5->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question5->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question5->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question5->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q5'] }}A" id="option{{ $questionNo['q5'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q5'] }}B" id="option{{ $questionNo['q5'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q5'] }}C" id="option{{ $questionNo['q5'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q5'] }}D" id="option{{ $questionNo['q5'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a5']} }}</span> -->
                        <span id="answer5" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q5" id="questionNumber" value="{{ $questionNo['q5'] }}">
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question6">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {!! $questionNo['q6'] !!} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question6->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question6->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question6->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question6->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q6'] }}A" id="option{{ $questionNo['q6'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q6'] }}B" id="option{{ $questionNo['q6'] }}B" value="B"  class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q6'] }}C" id="option{{ $questionNo['q6'] }}C" value="C"  class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q6'] }}D" id="option{{ $questionNo['q6'] }}D" value="D"  class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a6']} }}</span> -->
                        <span id="answer6" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q6" id="questionNumber" value="{{ $questionNo['q6'] }}">
                        </td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question7">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {!! $questionNo['q7'] !!} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question7->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question7->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question7->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question7->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q7'] }}A" id="option{{ $questionNo['q7'] }}A" value="A"  class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q7'] }}B" id="option{{ $questionNo['q7'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q7'] }}C" id="option{{ $questionNo['q7'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q7'] }}D" id="option{{ $questionNo['q7'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a7']} }}</span> -->
                        <span id="answer7" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q7" id="questionNumber" value="{{ $questionNo['q7'] }}">
                        </td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question8">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {!! $questionNo['q8'] !!} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question8->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question8->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question8->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question8->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q8'] }}A" id="option{{ $questionNo['q8'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q8'] }}B" id="option{{ $questionNo['q8'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q8'] }}C" id="option{{ $questionNo['q8'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q8'] }}D" id="option{{ $questionNo['q8'] }}D" value="D"class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a8']} }}</span> -->
                        <span id="answer8" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden"  name="q8" id="questionNumber" value="{{ $questionNo['q8'] }}">
                        </td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question9">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {!! $questionNo['q9'] !!} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question9->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question9->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question9->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question9->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q9'] }}A" id="option{{ $questionNo['q9'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q9'] }}B" id="option{{ $questionNo['q9'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q9'] }}C" id="option{{ $questionNo['q9'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q9'] }}D" id="option{{ $questionNo['q9'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a9']} }}</span> -->
                        <span id="answer9" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q9" id="questionNumber" value="{{ $questionNo['q9'] }}">
                        </td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->
           <!-- begin card -->
           <div class="col-12 grid-margin" id="question10">            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                    <strong>Question {!! $questionNo['q10'] !!} </strong>
                  </h4>
                  <div class="table-responsive">
                    <table class="table" width="100%">
                    @if($question10->question_type == 'text-image')
                      <tr>                        
                      <img src="{{asset('questions/' . $question10->graphic)}}" alt="questionImage" width="1200" height="250">                        
                      </tr>
                      <tr>
                        <td><p class="bold-font-qst">{!! $question10->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @else
                      <tr>                        
                        <td><p class="bold-font-qst">{!! $question10->question !!}</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endif
                      <tr>
                      <td><input type="submit" name="option{{ $questionNo['q10'] }}A" id="option{{ $questionNo['q10'] }}A" value="A" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q10'] }}B" id="option{{ $questionNo['q10'] }}B" value="B" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q10'] }}C" id="option{{ $questionNo['q10'] }}C" value="C" class="btn btn-dark"/> &nbsp; &nbsp;
                        <input type="submit" name="option{{ $questionNo['q10'] }}D" id="option{{ $questionNo['q10'] }}D" value="D" class="btn btn-dark"/>&nbsp; &nbsp;&nbsp; &nbsp;
                        <hr>
                        <p><span class="bold-font-text">Selected Answer:</span> 
                        <!-- <span class="bold-font-ans">{{ $studentAnswer->{"OK" . $questionNo['a10']} }}</span> -->
                        <span id="answer10" class="bold-font-ans"></span>
                        </p>
                        <input type="hidden" name="q10" id="questionNumber" value="{{ $questionNo['q10'] }}">
                        </td>
                        <td></td>
                      </tr>
                    </table>                    
                  </div>
                </div>                
              </div>
            </div>
           <!-- end card -->     
           <input type="hidden" name="btn_action" id="btn_action" />    
           <input type="hidden" name="pageNo" value ="{{$pageNo}}">
  </form>
            <div class="col-12 grid-margin">            
              <div class="card">
                <div class="card-body">
                  @if($examSetting->no_of_qst == 10)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>                  
                  @elseif($examSetting->no_of_qst == 20)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>                  
                  @elseif($examSetting->no_of_qst == 30)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>  
                  @elseif($examSetting->no_of_qst == 40)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>   
                  @elseif($examSetting->no_of_qst == 50)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page5', ['id' => $studentData->id])}}" class="btn btn-success">41-50</a>  
                  @elseif($examSetting->no_of_qst == 60)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page5', ['id' => $studentData->id])}}" class="btn btn-success">41-50</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page6', ['id' => $studentData->id])}}" class="btn btn-success">51-60</a>  
                  @elseif($examSetting->no_of_qst == 70)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page5', ['id' => $studentData->id])}}" class="btn btn-success">41-50</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page6', ['id' => $studentData->id])}}" class="btn btn-success">51-60</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page7', ['id' => $studentData->id])}}" class="btn btn-success">61-70</a>   
                  @elseif($examSetting->no_of_qst == 80)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page5', ['id' => $studentData->id])}}" class="btn btn-success">41-50</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page6', ['id' => $studentData->id])}}" class="btn btn-success">51-60</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page7', ['id' => $studentData->id])}}" class="btn btn-success">61-70</a>&nbsp; &nbsp;  
                    <a href="{{route('cbt-page8', ['id' => $studentData->id])}}" class="btn btn-success">71-80</a> 
                  @elseif($examSetting->no_of_qst == 90)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page5', ['id' => $studentData->id])}}" class="btn btn-success">41-50</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page6', ['id' => $studentData->id])}}" class="btn btn-success">51-60</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page7', ['id' => $studentData->id])}}" class="btn btn-success">61-70</a>&nbsp; &nbsp;  
                    <a href="{{route('cbt-page8', ['id' => $studentData->id])}}" class="btn btn-success">71-80</a>&nbsp; &nbsp;  
                    <a href="{{route('cbt-page9', ['id' => $studentData->id])}}" class="btn btn-success">81-90</a>   
                  @elseif($examSetting->no_of_qst == 100)
                    <a href="{{route('cbt-page1', ['id' => $studentData->id])}}" class="btn btn-success">1-10</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page2', ['id' => $studentData->id])}}" class="btn btn-success">11-20</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page3', ['id' => $studentData->id])}}" class="btn btn-success">21-30</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page4', ['id' => $studentData->id])}}" class="btn btn-success">31-40</a>&nbsp; &nbsp; 
                    <a href="{{route('cbt-page5', ['id' => $studentData->id])}}" class="btn btn-success">41-50</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page6', ['id' => $studentData->id])}}" class="btn btn-success">51-60</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page7', ['id' => $studentData->id])}}" class="btn btn-success">61-70</a>&nbsp; &nbsp;  
                    <a href="{{route('cbt-page8', ['id' => $studentData->id])}}" class="btn btn-success">71-80</a>&nbsp; &nbsp;
                    <a href="{{route('cbt-page9', ['id' => $studentData->id])}}" class="btn btn-success">81-90</a>&nbsp; &nbsp;  
                    <a href="{{route('cbt-page10', ['id' => $studentData->id])}}" class="btn btn-success">91-100</a> 
                       
                  @endif                  
                </div>
            </div>
            </div>
          </div>
</div>
        </div>

       

        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 - <?php echo date('Y') ; ?> <a href="{{$collegeSetup->web_url}}" target="_blank">{{$collegeSetup->name}}</a>. </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Version : {{$softwareVersion->version}} </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller --> 
    <!-- Include your JavaScript here -->
    <script>
        let duration = {{ $studentMin }}; // Duration in seconds
        let remainingTime = duration;

        function startTimer() {
            const interval = setInterval(() => {
                if (remainingTime > 0) {
                    remainingTime--;
                    if (remainingTime % 60 === 0) {
                        saveRemainingTime(Math.floor(remainingTime));
                    }
                    updateTimerDisplay(remainingTime);
                } else {
                    clearInterval(interval);
                    alert("Time is up!");
                    // Redirect the user after the alert is dismissed
                    window.location.href = "{{ route('cbt-submit', ['id' => $studentData->id]) }}";
                }
            }, 1000);
        }

        function saveRemainingTime(remainingMinutes) {
            fetch('/update-remaining-time/{{ $studentData->id }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ remaining_time: remainingMinutes })
            }).then(response => response.json())
              .then(data => {
                  if (!data.success) {
                      console.error('Failed to save remaining time');
                  }
              });
        }

        function updateTimerDisplay(remainingTime) {
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;
            document.getElementById('timer').textContent = `${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
        }

        startTimer();
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script type="text/javascript"> 
    // Assuming jQuery is included in your project
    $(document).ready(function() {

        $('input[type="submit"]').click(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var optionName = $(this).attr('name');
            var selectedOption = $(this).val(); 
            console.log("OptionName:", optionName);
            console.log("SelectedOption:", selectedOption);       

            // Extract the question number from optionName
            var number = optionName.match(/\d+/)[0];
            var pageNumber = {{$pageNo}};
            console.log("Question number:", number);
            console.log("Page Number:", pageNumber);

            // Send AJAX request
            $.ajax({
                url: "{{ route('update-answers', ['id' => $studentData->id, 'pageNo' => $pageNo]) }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    optionName: optionName,
                    selectedOption: selectedOption,
                    number: number
                },
                success: function(response) {
                     // Log the response
                     console.log('Response:', response);

                    // Extract data from the response
                    var questionNumber = response.questionNumber;
                    var updatedOption = response.selectedOption;
                    var answerData = response.answerData;

                    // Log extracted data to verify
                    console.log("questionNumber:", questionNumber);
                    console.log("updatedOption:", updatedOption);
                    console.log("answerData:", answerData);

                    // Ensure answerData is defined before attempting to access it
                    if (answerData) {
                        // Update the <span> elements with the received data
                        $('#questionNoDisplay').text(questionNumber);
                        $('#updatedOptionDisplay').text(updatedOption);

                        // Update individual answers
                        $('#answer1').text(answerData['a1'] || '');
                        $('#answer2').text(answerData['a2'] || '');
                        $('#answer3').text(answerData['a3'] || '');
                        $('#answer4').text(answerData['a4'] || '');
                        $('#answer5').text(answerData['a5'] || '');
                        $('#answer6').text(answerData['a6'] || '');
                        $('#answer7').text(answerData['a7'] || '');
                        $('#answer8').text(answerData['a8'] || '');
                        $('#answer9').text(answerData['a9'] || '');
                        $('#answer10').text(answerData['a10'] || '');
                    } else {
                        console.error('answerData is not defined in the response');
                    }
                    console.log('Answer updated successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error updating answer:', error);
                }
            });
        });
    });
</script> -->
<script type="text/javascript">
$(document).ready(function() {
    $('.btn-success').click(function(event) {
        event.preventDefault(); // Prevent the default link behavior

        var url = $(this).attr('href');
        
        // Send AJAX request
        $.ajax({
            url: url,
            method: 'GET',
            success: function(response) {
                // Clear the existing questions
                $('#questions-container').empty();
                
                // Iterate through the response and append each question to the container
                $.each(response, function(index, question) {
                    var questionHtml = `
                        <div class="question">
                            <p>${question.question_text}</p>
                            <input type="submit" name="option${question.question_number}A" value="A" class="btn btn-dark"/>
                            <input type="submit" name="option${question.question_number}B" value="B" class="btn btn-dark"/>
                            <input type="submit" name="option${question.question_number}C" value="C" class="btn btn-dark"/>
                            <input type="submit" name="option${question.question_number}D" value="D" class="btn btn-dark"/>
                        </div>
                    `;
                    $('#questions-container').append(questionHtml);
                });

                // Re-bind the click event for the new buttons
                bindOptionClickEvent();
            },
            error: function(xhr, status, error) {
                console.error('Error fetching questions:', error);
            }
        });
    });

    function bindOptionClickEvent() {
        $('input[type="submit"]').click(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var optionName = $(this).attr('name');
            var selectedOption = $(this).val(); 
            console.log("OptionName:", optionName);
            console.log("selectedOption:", selectedOption);       

            // Extract the question number from optionName
            var number = optionName.match(/\d+/)[0];
            console.log("Question number:", number);

            // Send AJAX request to update the answer
            $.ajax({
                url: "{{ route('update-answers', ['id' => $studentData->id, 'pageNo' => $pageNo]) }}",
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: JSON.stringify({
                    optionName: optionName,
                    selectedOption: selectedOption,
                    number: number
                }),
                success: function(response) {
                    // Update UI if needed
                    // Log the response
                    console.log('Response:', response);

                  // Extract data from the response
                  var questionNumber = response.questionNumber;
                  var updatedOption = response.selectedOption;
                  var answerData = response.answerData;

                  // Log extracted data to verify
                  console.log("questionNumber:", questionNumber);
                  console.log("updatedOption:", updatedOption);
                  console.log("answerData:", answerData);

                  // Ensure answerData is defined before attempting to access it
                  if (answerData) {
                      // Update the <span> elements with the received data
                      $('#questionNoDisplay').text(questionNumber);
                      $('#updatedOptionDisplay').text(updatedOption);

                      // Update individual answers
                      $('#answer1').text(answerData['a1'] || '');
                      $('#answer2').text(answerData['a2'] || '');
                      $('#answer3').text(answerData['a3'] || '');
                      $('#answer4').text(answerData['a4'] || '');
                      $('#answer5').text(answerData['a5'] || '');
                      $('#answer6').text(answerData['a6'] || '');
                      $('#answer7').text(answerData['a7'] || '');
                      $('#answer8').text(answerData['a8'] || '');
                      $('#answer9').text(answerData['a9'] || '');
                      $('#answer10').text(answerData['a10'] || '');
                  } else {
                      console.error('answerData is not defined in the response');
                  }
                    console.log('Answer updated successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error updating answer:', error);
                }
            });
        });
    }

    // Initial binding of click event for options
    bindOptionClickEvent();
});
</script>



  <!-- plugins:js -->
  <script src="{{asset('student/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('student/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('student/js/off-canvas.js')}}"></script>
  <script src="{{asset('student/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('student/js/misc.js')}}"></script>
  <script src="{{asset('student/js/settings.js')}}"></script>
  <script src="{{asset('student/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('student/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="{{asset('student/js/modal-demo.js')}}"></script>
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/horizontal-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
</html>
