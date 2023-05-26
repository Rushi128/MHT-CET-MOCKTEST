<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

//Faculty

$route['Fac'] = 'Faculty/facultyHome';
$route['Faculty'] = 'Faculty/facultyDash';
$route['FacultyAddExam'] = 'Faculty/facaddexam';
$route['FacultyAddQuestion/(:any)'] = 'Faculty/facaddquestion/$1';
$route['FacAddQue/(:any)'] = 'Faculty/facaddque/$1';
// $route['FacultyDelQuestion'] = 'Faculty/facdelquestion';
//$route['FacultyDelExam'] = 'Faculty/delselexam';
$route['FacultyExamlist'] = 'Faculty/facexamlist';
$route['FacultyResult'] = 'Faculty/facresult';
// $route['FacultyShowResult'] = 'Faculty/facshowresult';
// $route['FacultyManSel'] = 'Faculty/facmanselexam';
$route['FacultyStopup'] = 'Faculty/facstopupload';
// $route['FacultyUpdquest'] = 'Faculty/facupdquest';
$route['FacultyUpload'] = 'Faculty/facupload';
$route['Faculty_log'] = 'Faculty/verifylogin';

$route['FacultyUpload/(:any)'] = 'Faculty/exupload/$1';
$route['FacultyStopup/(:any)'] = 'Faculty/stexupload/$1';
$route['FacultyManSel/(:any)'] = 'Faculty/facmanselexam/$1';
$route['FacultyUpdExam/(:any)'] = 'Faculty/updexam/$1';

$route['FacultyDelExam/(:any)'] = 'Faculty/delselexam/$1';
$route['FacAddEx'] = 'Faculty/facaddex';
$route['FacLogOut'] = 'Faculty/faclogout';
$route['FacultyShowResult/(:any)'] = 'Faculty/facshowresult/$1';
$route['FacultyUpdquest/(:any)'] = 'Faculty/facupdquest/$1';
$route['FacultySelUpdquest/(:any)'] = 'Faculty/facselupdquest/$1';
$route['FacultyDelQuestion/(:any)'] = 'Faculty/facdelquestion/$1';
$route['Facupstres/(:any)'] = 'Faculty/upstres/$1';

//Students
$route['Students'] = 'Students/studentsHome';
$route['Students_Register'] = 'Students/studentsReg';
$route['Students_Dash'] = 'Students/studentsDash';
// $route['Students_Check'] = 'Students/studentscheck';
// $route['Students_Exam'] = 'Students/studentsExam';
$route['Students_Result'] = 'Students/studentsResult';
$route['Students_Show_Result'] = 'Students/studentsshowResult'; 
// $route['Students_Verify'] = 'Students/studentsVerify';
$route['Students_insert']='Students/insertStudents';
$route['Students_log']='Students/verifylogin';
$route['Students_logout']='Students/studlogout';
$route['Thankyou']='Students/studentsThanks';
$route['ErrorPage']='Students/studentsError';
$route['StAlGiv'] = 'Students/studalgivex';
$route['Students_Verify/(:any)'] = 'Students/studentsVerify/$1';
$route['StudVerifyex/(:any)'] = 'Students/stverifyex/$1';
$route['Students_Exam/(:any)'] = 'Students/studentsExam/$1';
$route['Students_Check/(:any)'] = 'Students/studentscheck/$1';