<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');

//'middleware' => 'auth'
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/common/projects', 'Common\ProjectController@index');
    
    Route::get('/clients',        'ClientInformation\ClientController@index');
    Route::post('/clients/form',  'ClientInformation\ClientController@form');
    Route::post('/clients/store', 'ClientInformation\ClientController@store');
    Route::post('/clients/show',  'ClientInformation\ClientController@show');

    Route::get('/projects',        'ClientInformation\ProjectController@index');
    Route::post('/projects/form',  'ClientInformation\ProjectController@form');
    Route::post('/projects/show',  'ClientInformation\ProjectController@show');
    Route::post('/projects/store', 'ClientInformation\ProjectController@store');
    Route::post('/projects/delete', 'ClientInformation\ProjectController@delete');

    Route::get('/primary-data-collections',      'PrimaryInformation\PrimaryDataCollectionController@index');
    Route::post('/primary-data-collections/form', 'PrimaryInformation\PrimaryDataCollectionController@form');
    Route::post('/primary-data-collections/show', 'PrimaryInformation\PrimaryDataCollectionController@show');
    Route::get('/primary-proposal-drawings',       'PrimaryInformation\PrimaryProposalDrawingController@index');
    Route::get('/primary-proposal-drawings/show/{projectId}', 'PrimaryInformation\PrimaryProposalDrawingController@show');
    Route::post('/primary-proposal-drawings/form',            'PrimaryInformation\PrimaryProposalDrawingController@form');
    Route::post('/primary-proposal-drawings/store',           'PrimaryInformation\PrimaryProposalDrawingController@store');
    Route::post('/primary-proposal-drawings/delete',          'PrimaryInformation\PrimaryProposalDrawingController@delete');
    
    Route::get('/primary-quotations',                  'PrimaryInformation\PrimaryQuotationController@index');
    Route::get('/primary-quotations/show/{projectId}', 'PrimaryInformation\PrimaryQuotationController@show');
    Route::post('/primary-quotations/form',            'PrimaryInformation\PrimaryQuotationController@form');
    Route::post('/primary-quotations/delete',          'PrimaryInformation\PrimaryQuotationController@delete');
    Route::post('/primary-quotations/store',           'PrimaryInformation\PrimaryQuotationController@store');

    Route::get('/final-data-collection', 'FinalInformation\FinalDataCollectionController@index');
    Route::get('/final-data-collection/form', 'FinalInformation\FinalDataCollectionController@form');
    Route::get('/final-data-collection/show', 'FinalInformation\FinalDataCollectionController@show');
    Route::get('/final-data-collection/report', 'FinalInformation\FinalDataCollectionController@report');

    Route::get('/final-proposal-drawing', 'FinalInformation\FinalProposalDrawingController@index');
    Route::get('/final-proposal-drawing/show', 'FinalInformation\FinalProposalDrawingController@show');
    Route::get('/final-proposal-drawing/report', 'FinalInformation\FinalProposalDrawingController@report');

    Route::get('/final-estimation', 'FinalInformation\FinalEstimationController@index');
    Route::get('/final-estimation/show', 'FinalInformation\FinalEstimationController@show');
    Route::get('/final-estimation/report', 'FinalInformation\FinalEstimationController@report');

    Route::get('/final-quotation', 'FinalInformation\FinalQuotationController@index');
    Route::get('/final-quotation/show', 'FinalInformation\FinalQuotationController@show');
    Route::get('/final-quotation/report', 'FinalInformation\FinalQuotationController@report');

    Route::get('/work-order', 'FinalInformation\WorkOrderController@index');
    Route::get('/work-order/show', 'FinalInformation\WorkOrderController@show');
    Route::get('/work-order/report', 'FinalInformation\WorkOrderController@report');

    Route::get('/fabrication-drawing', 'DesignEngineering\FabricationDrawingController@index');
    Route::get('/fabrication-drawing/show', 'DesignEngineering\FabricationDrawingController@show');
    Route::get('/fabrication-drawing/report', 'DesignEngineering\FabricationDrawingController@report');

    Route::get('/material-requisition', 'DesignEngineering\MaterialRequisitionController@index');
    Route::get('/material-requisition/show', 'DesignEngineering\MaterialRequisitionController@show');
    Route::get('/material-requisition/report', 'DesignEngineering\MaterialRequisitionController@report');

    Route::get('/erection-drawing', 'DesignEngineering\ErectionDrawingController@index');
    Route::get('/erection-drawing/show', 'DesignEngineering\ErectionDrawingController@show');
    Route::get('/erection-drawing/report', 'DesignEngineering\ErectionDrawingController@report');

    Route::get('/bill-submission', 'DesignEngineering\BillSubmissionController@index');
    Route::get('/bill-submission/show', 'DesignEngineering\BillSubmissionController@show');
    Route::get('/bill-submission/report', 'DesignEngineering\BillSubmissionController@report');

    Route::get('/project-information', 'SiteManagement\ProjectInformationController@index');
    Route::get('/project-information/show', 'SiteManagement\ProjectInformationController@show');
    Route::get('/project-information/report', 'SiteManagement\ProjectInformationController@report');

    Route::get('/staff', 'SiteManagement\StaffController@index');
    Route::get('/staff/show', 'SiteManagement\StaffController@show');
    Route::get('/staff/report', 'SiteManagement\StaffController@report');

    Route::get('/equipments', 'SiteManagement\EquipmentController@index');
    Route::get('/equipment/show', 'SiteManagement\EquipmentController@show');
    Route::get('/equipment/report', 'SiteManagement\EquipmentController@report');

    Route::get('/work-schedule', 'SiteManagement\WorkScheduleController@index');
    Route::get('/work-schedule/show', 'SiteManagement\WorkScheduleController@show');
    Route::get('/work-schedule/report', 'SiteManagement\WorkScheduleController@report');

    Route::get('/erection-budget', 'SiteManagement\ErectionBudgetController@index');
    Route::get('/erection-budget/show', 'SiteManagement\ErectionBudgetController@show');
    Route::get('/erection-budget/report', 'SiteManagement\ErectionBudgetController@report');

    Route::get('/erection-progress', 'SiteManagement\ErectionProgressController@index');
    Route::get('/erection-progress/show', 'SiteManagement\ErectionProgressController@show');
    Route::get('/erection-progress/report', 'SiteManagement\ErectionProgressController@report');

    Route::get('/fund-follow', 'SiteManagement\FundFollowController@index');
    Route::get('/fund-follow/show', 'SiteManagement\FundFollowController@show');
    Route::get('/clients/report', 'ClientInformation\ClientController@report');

    // Human Resource
    Route::get('/employee-data', 'HumanResource\EmployeeDataController@index');
    Route::get('/employee-data/show', 'HumanResource\EmployeeDataController@show');
    Route::get('/clients/report', 'ClientInformation\ClientController@report');

    Route::get('/recruitment-process', 'HumanResource\RecruitmentProcessController@index');
    Route::get('/recruitment-process/show', 'HumanResource\RecruitmentProcessController@show');
    Route::get('/recruitment-process/report', 'HumanResource\RecruitmentProcessController@report');

    Route::get('/leave-management', 'HumanResource\LeaveManagementController@index');
    Route::get('/leave-management/show', 'HumanResource\LeaveManagementController@show');
    Route::get('/leave-management/report', 'HumanResource\LeaveManagementController@report');

    Route::get('/holiday', 'HumanResource\HolidayController@index');
    Route::get('/holiday/report', 'HumanResource\HolidayController@report');

    Route::get('/attendance-register', 'HumanResource\AttendanceRegisterController@index');
    Route::get('/attendance-register/show', 'HumanResource\AttendanceRegisterController@show');
    Route::get('/attendance-register/report', 'HumanResource\AttendanceRegisterController@report');

    Route::get('/performance-appraisal', 'HumanResource\PerformanceAppraisalController@index');
    Route::get('/performance-appraisal/show', 'HumanResource\PerformanceAppraisalController@show');
    Route::get('/performance-appraisal/report', 'HumanResource\PerformanceAppraisalController@report');
    Route::get('/performance-appraisal/report', 'HumanResource\PerformanceAppraisalController@report');

    // Payroll Management
    Route::get('/employee-salary', 'PayrollManagement\EmployeeSalaryController@index');
    Route::get('/employee-salary/show', 'PayrollManagement\EmployeeSalaryController@show');
    Route::get('/employee-salary/report', 'PayrollManagement\EmployeeSalaryController@report');

    Route::get('/payroll-item', 'PayrollManagement\PayrollItemController@index');
    Route::get('/payroll-item/show', 'PayrollManagement\PayrollItemController@show');
    Route::get('/payroll-item/report', 'PayrollManagement\PayrollItemController@report');

    Route::get('/pay-slip', 'PayrollManagement\PaySlipController@index');
    Route::get('/pay-slip/show', 'PayrollManagement\PaySlipController@show');
    Route::get('/pay-slip/report', 'PayrollManagement\PaySlipController@report');

    // Asset Management
    Route::get('/asset-register', 'AssetManagement\AssetRegisterController@index');
    Route::get('/asset-register/show', 'AssetManagement\AssetRegisterController@show');
    Route::get('/asset-register/report', 'AssetManagement\AssetRegisterController@report');

    Route::get('/spare-parts', 'AssetManagement\SparePartsController@index');
    Route::get('/spare-parts/report', 'AssetManagement\SparePartsController@report');

    Route::get('/vehicle-management', 'AssetManagement\VehicleManagementController@index');
    Route::get('/vehicle-management/report', 'AssetManagement\VehicleManagementController@report');

    // Accounts & Finance

    // Internal Audit
});

Auth::routes();
