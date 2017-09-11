<?php

namespace Gist\TemplateBundle\DataFixtures\ORM\Gist;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gist\UserBundle\Entity\Group;

class LoadGroupsData  extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $groups = array(
            "hr_admin" => ["cat_dashboard.menu","cat_config.menu","cat_config.view","cat_config.edit","cat_admin.menu","hris_omnibar.view","hris_admin.menu","hris_admin_department.menu","hris_admin_department.view","hris_admin_department.add","hris_admin_department.edit","hris_admin_department.delete","hris_admin_events.menu","hris_admin_events.view","hris_admin_events.add","hris_admin_events.edit","hris_admin_events.delete","hris_admin_jobtitles.menu","hris_admin_jobtitles.view","hris_admin_jobtitles.add","hris_admin_jobtitles.edit","hris_admin_jobtitles.delete","hris_admin_joblevel.menu","hris_admin_joblevel.view","hris_admin_joblevel.add","hris_admin_joblevel.edit","hris_admin_joblevel.delete","hris_admin_location.menu","hris_admin_location.view","hris_admin_location.add","hris_admin_location.edit","hris_admin_location.delete","hris_admin_benefit.menu","hris_admin_benefit.view","hris_admin_benefit.add","hris_admin_benefit.edit","hris_admin_benefit.delete","hris_admin_schedules.menu","hris_admin_schedules.view","hris_admin_schedules.add","hris_admin_schedules.edit","hris_admin_schedules. delete","hris_admin_checklist.menu","hris_admin_checklist.view","hris_admin_checklist.add","hris_admin_checklist.edit","hris_admin_checklist.delete","hris_admin_holiday.menu","hris_admin_holiday.view","hris_admin_holiday.add","hris_admin_holiday.edit","hris_admin_holiday.delete","hris_admin_downloadables.menu","hris_admin_downloadables.view","hris_admin_downloadables.add","hris_admin_downloadables.edit","hris_admin_downloadables.delete","hris_admin_leave.menu","hris_admin_leave_type.menu","hris_admin_leave_type.view","hris_admin_leave_type.add","hris_admin_leave_type.edit","hris_admin_leave_type.delete","hris_admin_leave_rules.menu","hris_admin_leave_rules.view","hris_admin_leave_rules.add","hris_admin_leave_rules.edit","hris_admin_leave_rules.delete","hris_admin_appraisal_settings.menu","hris_admin_appraisal_settings.view","hris_admin_appraisal_settings.add","hris_admin_appraisal_settings.edit","hris_admin_appraisal_settings.delete","hris_admin_otsetting.menu","hris_admin_otsetting.edit","hris_admin_form_codes.menu","hris_admin_form_codes.view","hris_admin_form_codes.edit","hris_workforce.menu","hris_workforce_employee.menu","hris_workforce_employee.view","hris_workforce_employee.add","hris_workforce_employee.edit","hris_workforce_attendance.menu","hris_workforce_attendance.view","hris_workforce_attendance.review","hris_workforce_attendance.approve","hris_workforce_attendance.reject","hris_workforce_leave.menu","hris_workforce_leave.view","hris_workforce_leave.edit","hris_workforce_leave.reject","hris_workforce_leave.review","hris_workforce_appraisals.menu","hris_workforce_appraisals.view","hris_workforce_appraisals.add","hris_workforce_appraisals.edit","hris_workforce_appraisals.delete","hris_workforce_appraisals.evaluate","hris_workforce_issued_property.menu","hris_workforce_issued_property.view","hris_workforce_issued_property.add","hris_workforce_issued_property.edit","hris_memo.menu","hris_memo.view","hris_memo.add","hris_memo.edit","hris_memo_company.menu","hris_memo_company.view","hris_memo_company.add","hris_memo_company.edit","hris_memo_disciplinary.menu","hris_memo_disciplinary.view","hris_memo_disciplinary.add","hris_memo_disciplinary.edit","hris_memo_tardiness.menu","hris_memo_tardiness.view","hris_memo_tardiness.add","hris_memo_tardiness.edit","hris_memo_violation.menu","hris_memo_violation.view","hris_memo_violation.add","hris_memo_violation.edit","hris_memo_promotion.menu","hris_memo_promotion.view","hris_memo_promotion.add","hris_memo_promotion.edit","hris_memo_regularization.menu","hris_memo_regularization.view","hris_memo_regularization.add","hris_memo_regularization.edit","hris_workforce_incident.menu","hris_workforce_incident.view","hris_workforce_incident.add","hris_workforce_incident.edit","hris_workforce_incident.review","hris_workforce_resign.menu","hris_workforce_resign.edit","hris_workforce_resign.view","hris_workforce_overtime.menu","hris_workforce_overtime.view","hris_workforce_overtime.edit","hris_cash.menu","hris_remuneration_incentive.menu","hris_remuneration_incentive.view","hris_remuneration_incentive.add","hris_remuneration_incentive.edit","hris_remuneration_loan.menu","hris_remuneration_loan.view","hris_remuneration_loan.add","hris_remuneration_loan.edit","hris_workforce_reimbursement.menu","hris_workforce_reimbursement.view","hris_workforce_reimbursement.add","hris_workforce_reimbursement.edit","hris_remuneration_cashbond.menu","hris_remuneration_cashbond.view","hris_remuneration_cashbond.add","hris_remuneration_cashbond.edit","hris_recruit.menu","hris_applications.menu","hris_applications.view","hris_applications.add","hris_applications.edit","hris_applications.delete","hris_applications_edit_progress.view","hris_applications_edit_progress.edit","hris_requisition.menu","hris_requisition.view","hris_requisition.add","hris_requisition.edit","hris_requisition.delete","hris_com_overview.menu","hris_com_info.menu","hris_com_info.view","hris_com_info.add","hris_com_orgchart.menu","hris_com_orgchart.view","hris_com_directory.menu","hris_com_directory.view","hris_payroll.menu","hris_payroll_setting.menu","hris_payroll_sss.menu","hris_payroll_sss.view","hris_payroll_sss.add","hris_payroll_sss.edit","hris_payroll_sss.delete","hris_payroll_philhealth.menu","hris_payroll_philhealth.view","hris_payroll_philhealth.add","hris_payroll_philhealth.edit","hris_payroll_philhealth.delete","hris_payroll_tax.menu","hris_payroll_tax.view","hris_payroll_tax.add","hris_payroll_tax.edit","hris_payroll_tax.delete","hris_payroll_weekly.menu","hris_payroll_semimonthly.menu","hris_payroll_generate.menu","hris_payroll_generate.view","hris_payroll_weekly_generate.menu","hris_payroll_weekly_generate.view","hris_payroll_review.menu","hris_payroll_review.view","hris_payroll_view.menu","hris_payroll_view.view","hris_payroll_view.details","hris_payroll_thirteenth.menu","hris_payroll_thirteenth.view","hris_payroll_thirteenth_view.menu","hris_payroll_thirteenth_view.view","hris_payroll_thirteenth_view.details","hris_payroll_setting_min.menu","hris_payroll_setting_min.edit","hris_profile_request.approve","hris_profile_request.reject","hris_profile_request.edit_coe","hris_profile_request.save_coe","hris_profile_request.print_coe","hris_report.menu","hris_report_leave.menu","hris_report_leave.view","hris_report_attendance.menu","hris_report_attendance.view","hris_report_reimbursement.menu","hris_report_reimbursement.view","hris_report_regulars.menu","hris_report_regulars.view","hris_report_total_expense.menu","hris_report_total_expense.view","hris_report_turnover.menu","hris_report_turnover.view","hris_report_loans.menu","hris_report_loans.view","hris_report_incentives.menu","hris_report_incentives.view","hris_report_evals.menu","hris_report_evals.view","hris_report_payroll.menu","hris_report_payroll.view"],
            "employee" => ["cat_dashboard.menu","hris_workforce_appraisals.menu","hris_workforce_appraisals.view","hris_workforce_appraisals.edit","hris_workforce_appraisals.evaluate","hris_memo.view","hris_memo_company.view","hris_memo_disciplinary.view","hris_memo_tardiness.view","hris_memo_violation.view","hris_memo_promotion.view","hris_memo_regularization.view","hris_workforce_reimbursement.view","hris_workforce_reimbursement.add","hris_workforce_reimbursement.edit","hris_com_overview.menu","hris_com_info.menu","hris_com_info.view","hris_com_orgchart.menu","hris_com_orgchart.view","hris_com_directory.menu","hris_com_directory.view","hris_profile_employee.menu","hris_profile_employee.edit","hris_profile_request.menu","hris_profile_request.add","hris_profile_request.view","hris_profile_request.edit","hris_profile_request.delete","hris_profile_leave.menu","hris_profile_leave.add","hris_profile_leave.view","hris_profile_leave.edit","hris_profile_leave.delete","hris_profile_attendance.menu","hris_profile_attendance.add","hris_profile_attendance.view","hris_profile_attendance.edit","hris_profile_attendance.delete"],
            "dept_head" => ["cat_dashboard.menu","hris_workforce.menu","hris_workforce_attendance.menu","hris_workforce_attendance.view","hris_workforce_leave.menu","hris_workforce_leave.view","hris_workforce_leave.edit","hris_workforce_leave.reject","hris_workforce_leave.review","hris_workforce_appraisals.menu","hris_workforce_appraisals.view","hris_workforce_appraisals.edit","hris_workforce_appraisals.evaluate","hris_memo.view","hris_memo_company.view","hris_memo_disciplinary.view","hris_memo_tardiness.view","hris_memo_violation.view","hris_memo_promotion.view","hris_memo_regularization.view","hris_workforce_resign.menu","hris_workforce_resign.edit","hris_workforce_resign.view","hris_recruit.menu","hris_requisition.menu","hris_requisition.view","hris_requisition.add","hris_requisition.edit","hris_requisition.delete","hris_requisition.review","hris_requisition.reject"],
            "vp_operations" => ["cat_dashboard.menu","cat_config.menu","cat_config.view","cat_config.edit","cat_user_user.menu","cat_user_user.view","cat_user_user.add","cat_user_user.edit","cat_user_user.delete","cat_user_group.menu","cat_user_group.view","cat_user_group.add","cat_user_group.edit","cat_user_group.delete","cat_admin.menu","hris_omnibar.view","hris_admin.menu","hris_admin_department.menu","hris_admin_department.view","hris_admin_department.add","hris_admin_department.edit","hris_admin_department.delete","hris_admin_events.menu","hris_admin_events.view","hris_admin_events.add","hris_admin_events.edit","hris_admin_events.delete","hris_admin_jobtitles.menu","hris_admin_jobtitles.view","hris_admin_jobtitles.add","hris_admin_jobtitles.edit","hris_admin_jobtitles.delete","hris_admin_joblevel.menu","hris_admin_joblevel.view","hris_admin_joblevel.add","hris_admin_joblevel.edit","hris_admin_joblevel.delete","hris_admin_location.menu","hris_admin_location.view","hris_admin_location.add","hris_admin_location.edit","hris_admin_location.delete","hris_admin_benefit.menu","hris_admin_benefit.view","hris_admin_benefit.add","hris_admin_benefit.edit","hris_admin_benefit.delete","hris_admin_schedules.menu","hris_admin_schedules.view","hris_admin_schedules.add","hris_admin_schedules.edit","hris_admin_schedules. delete","hris_admin_checklist.menu","hris_admin_checklist.view","hris_admin_checklist.add","hris_admin_checklist.edit","hris_admin_checklist.delete","hris_admin_holiday.menu","hris_admin_holiday.view","hris_admin_holiday.add","hris_admin_holiday.edit","hris_admin_holiday.delete","hris_admin_downloadables.menu","hris_admin_downloadables.view","hris_admin_downloadables.add","hris_admin_downloadables.edit","hris_admin_downloadables.delete","hris_admin_leave.menu","hris_admin_leave_type.menu","hris_admin_leave_type.view","hris_admin_leave_type.add","hris_admin_leave_type.edit","hris_admin_leave_type.delete","hris_admin_leave_rules.menu","hris_admin_leave_rules.view","hris_admin_leave_rules.add","hris_admin_leave_rules.edit","hris_admin_leave_rules.delete","hris_admin_appraisal_settings.menu","hris_admin_appraisal_settings.view","hris_admin_appraisal_settings.add","hris_admin_appraisal_settings.edit","hris_admin_appraisal_settings.delete","hris_admin_otsetting.menu","hris_admin_otsetting.edit","hris_biometrics.menu","hris_biometrics.view","hris_biometrics.add","hris_admin_form_codes.menu","hris_admin_form_codes.view","hris_admin_form_codes.edit","hris_workforce.menu","hris_workforce_employee.menu","hris_workforce_employee.view","hris_workforce_employee.add","hris_workforce_employee.edit","hris_workforce_attendance.menu","hris_workforce_attendance.view","hris_workforce_attendance.edit","hris_workforce_attendance.review","hris_workforce_attendance.approve","hris_workforce_attendance.reject","hris_workforce_leave.menu","hris_workforce_leave.view","hris_workforce_leave.add","hris_workforce_leave.edit","hris_workforce_leave.approve","hris_workforce_leave.reject","hris_workforce_appraisals.menu","hris_workforce_appraisals.view","hris_workforce_appraisals.add","hris_workforce_appraisals.edit","hris_workforce_appraisals.delete","hris_workforce_appraisals.evaluate","hris_workforce_issued_property.menu","hris_workforce_issued_property.view","hris_workforce_issued_property.add","hris_workforce_issued_property.edit","hris_memo.menu","hris_memo.view","hris_memo.add","hris_memo.edit","hris_memo_company.menu","hris_memo_company.view","hris_memo_company.add","hris_memo_company.edit","hris_memo_disciplinary.menu","hris_memo_disciplinary.view","hris_memo_disciplinary.add","hris_memo_disciplinary.edit","hris_memo_tardiness.menu","hris_memo_tardiness.view","hris_memo_tardiness.add","hris_memo_tardiness.edit","hris_memo_violation.menu","hris_memo_violation.view","hris_memo_violation.add","hris_memo_violation.edit","hris_memo_promotion.menu","hris_memo_promotion.view","hris_memo_promotion.add","hris_memo_promotion.edit","hris_memo_regularization.menu","hris_memo_regularization.view","hris_memo_regularization.add","hris_memo_regularization.edit","hris_workforce_incident.menu","hris_workforce_incident.view","hris_workforce_incident.add","hris_workforce_incident.edit","hris_workforce_resign.menu","hris_workforce_resign.view","hris_workforce_overtime.menu","hris_workforce_overtime.view","hris_workforce_overtime.edit","hris_cash.menu","hris_remuneration_incentive.menu","hris_remuneration_incentive.view","hris_remuneration_incentive.add","hris_remuneration_incentive.edit","hris_remuneration_incentive.delete","hris_remuneration_loan.menu","hris_remuneration_loan.view","hris_remuneration_loan.add","hris_remuneration_loan.edit","hris_remuneration_loan.delete","hris_workforce_reimbursement.menu","hris_workforce_reimbursement.view","hris_workforce_reimbursement.add","hris_workforce_reimbursement.edit","hris_workforce_reimbursement.delete","hris_workforce_reimbursement.approve","hris_workforce_reimbursement.reject","hris_remuneration_cashbond.menu","hris_remuneration_cashbond.view","hris_remuneration_cashbond.add","hris_remuneration_cashbond.edit","hris_recruit.menu","hris_applications.menu","hris_applications.view","hris_applications_edit_progress.view","hris_requisition.menu","hris_requisition.view","hris_requisition.add","hris_requisition.edit","hris_requisition.delete","hris_requisition.approve","hris_requisition.reject","hris_com_overview.menu","hris_com_info.menu","hris_com_info.view","hris_com_info.add","hris_com_orgchart.menu","hris_com_orgchart.view","hris_com_directory.menu","hris_com_directory.view","hris_payroll.menu","hris_payroll_setting.menu","hris_payroll_sss.menu","hris_payroll_sss.view","hris_payroll_sss.add","hris_payroll_sss.edit","hris_payroll_sss.delete","hris_payroll_philhealth.menu","hris_payroll_philhealth.view","hris_payroll_philhealth.add","hris_payroll_philhealth.edit","hris_payroll_philhealth.delete","hris_payroll_tax.menu","hris_payroll_tax.view","hris_payroll_tax.add","hris_payroll_tax.edit","hris_payroll_tax.delete","hris_payroll_weekly.menu","hris_payroll_semimonthly.menu","hris_payroll_generate.menu","hris_payroll_generate.view","hris_payroll_weekly_generate.menu","hris_payroll_weekly_generate.view","hris_payroll_review.menu","hris_payroll_review.view","hris_payroll_view.menu","hris_payroll_view.view","hris_payroll_view.details","hris_payroll_thirteenth.menu","hris_payroll_thirteenth.view","hris_payroll_thirteenth_view.menu","hris_payroll_thirteenth_view.view","hris_payroll_thirteenth_view.details","hris_payroll_setting_min.menu","hris_payroll_setting_min.edit","hris_profile_employee.menu","hris_profile_request.approve","hris_profile_request.reject","hris_report.menu","hris_report_leave.menu","hris_report_leave.view","hris_report_attendance.menu","hris_report_attendance.view","hris_report_reimbursement.menu","hris_report_reimbursement.view","hris_report_regulars.menu","hris_report_regulars.view","hris_report_total_expense.menu","hris_report_total_expense.view","hris_report_turnover.menu","hris_report_turnover.view","hris_report_loans.menu","hris_report_loans.view","hris_report_incentives.menu","hris_report_incentives.view","hris_report_evals.menu","hris_report_evals.view","hris_report_payroll.menu","hris_report_payroll.view"],
            "hr_recruitment" => ["cat_dashboard.menu","hris_admin.menu","hris_admin_department.menu","hris_admin_department.view","hris_admin_department.add","hris_admin_department.edit","hris_admin_events.menu","hris_admin_events.view","hris_admin_events.add","hris_admin_events.edit","hris_admin_jobtitles.menu","hris_admin_jobtitles.view","hris_admin_jobtitles.add","hris_admin_jobtitles.edit","hris_admin_joblevel.menu","hris_admin_joblevel.view","hris_admin_joblevel.add","hris_admin_joblevel.edit","hris_admin_location.menu","hris_admin_location.view","hris_admin_location.add","hris_admin_location.edit","hris_admin_benefit.menu","hris_admin_benefit.view","hris_admin_benefit.add","hris_admin_benefit.edit","hris_admin_schedules.menu","hris_admin_schedules.view","hris_admin_schedules.add","hris_admin_schedules.edit","hris_admin_checklist.menu","hris_admin_checklist.view","hris_admin_checklist.add","hris_admin_checklist.edit","hris_admin_holiday.menu","hris_admin_holiday.view","hris_admin_holiday.add","hris_admin_holiday.edit","hris_admin_downloadables.menu","hris_admin_downloadables.view","hris_admin_downloadables.add","hris_admin_downloadables.edit","hris_admin_leave.menu","hris_admin_leave_type.menu","hris_admin_leave_type.view","hris_admin_leave_type.add","hris_admin_leave_type.edit","hris_admin_leave_rules.menu","hris_admin_leave_rules.view","hris_admin_leave_rules.add","hris_admin_leave_rules.edit","hris_admin_form_codes.menu","hris_admin_form_codes.view","hris_admin_form_codes.edit","hris_workforce.menu","hris_workforce_employee.menu","hris_workforce_employee.view","hris_workforce_attendance.menu","hris_workforce_attendance.view","hris_workforce_leave.menu","hris_workforce_leave.view","hris_workforce_leave.approve","hris_workforce_leave.reject","hris_workforce_leave.review","hris_workforce_issued_property.menu","hris_workforce_issued_property.view","hris_workforce_issued_property.add","hris_workforce_resign.menu","hris_workforce_resign.view","hris_cash.menu","hris_workforce_reimbursement.menu","hris_workforce_reimbursement.view","hris_workforce_reimbursement.add","hris_workforce_reimbursement.edit","hris_recruit.menu","hris_applications.menu","hris_applications.view","hris_applications.add","hris_applications.edit","hris_applications.delete","hris_applications_edit_progress.view","hris_applications_edit_progress.edit","hris_requisition.menu","hris_requisition.view","hris_requisition.add","hris_requisition.edit","hris_com_overview.menu","hris_com_info.menu","hris_com_info.view","hris_com_info.add","hris_com_orgchart.menu","hris_com_orgchart.view","hris_com_directory.menu","hris_com_directory.view"],
            "hr_comp_ben" => ["cat_dashboard.menu","hris_admin.menu","hris_admin_benefit.menu","hris_admin_benefit.view","hris_admin_benefit.add","hris_admin_benefit.edit","hris_workforce.menu","hris_workforce_attendance.menu","hris_workforce_attendance.view","hris_workforce_issued_property.menu","hris_workforce_issued_property.view","hris_cash.menu","hris_remuneration_incentive.menu","hris_remuneration_incentive.view","hris_remuneration_incentive.add","hris_remuneration_incentive.edit","hris_remuneration_loan.menu","hris_remuneration_loan.view","hris_remuneration_loan.add","hris_remuneration_loan.edit","hris_workforce_reimbursement.menu","hris_workforce_reimbursement.view","hris_workforce_reimbursement.add","hris_workforce_reimbursement.edit","hris_workforce_reimbursement.review","hris_workforce_reimbursement.approve","hris_workforce_reimbursement.reject","hris_remuneration_cashbond.menu","hris_remuneration_cashbond.view","hris_remuneration_cashbond.add","hris_remuneration_cashbond.edit","hris_payroll.menu","hris_payroll_setting.menu","hris_payroll_sss.menu","hris_payroll_sss.view","hris_payroll_philhealth.menu","hris_payroll_philhealth.view","hris_payroll_tax.menu","hris_payroll_tax.view","hris_payroll_weekly.menu","hris_payroll_semimonthly.menu","hris_payroll_generate.menu","hris_payroll_generate.view","hris_payroll_weekly_generate.menu","hris_payroll_weekly_generate.view","hris_payroll_review.menu","hris_payroll_review.view","hris_payroll_view.menu","hris_payroll_view.view","hris_payroll_view.details","hris_payroll_thirteenth.menu","hris_payroll_thirteenth.view","hris_payroll_thirteenth_view.menu","hris_payroll_thirteenth_view.view","hris_payroll_thirteenth_view.details","hris_payroll_setting_min.menu","hris_payroll_setting_min.edit"],
            "hr_emp_relations" => ["cat_dashboard.menu","hris_admin.menu","hris_admin_events.menu","hris_admin_events.view","hris_admin_events.edit","hris_admin_benefit.menu","hris_admin_benefit.view","hris_admin_benefit.edit","hris_admin_schedules.menu","hris_admin_schedules.view","hris_admin_schedules.edit","hris_admin_holiday.menu","hris_admin_holiday.view","hris_admin_holiday.edit","hris_admin_downloadables.menu","hris_admin_downloadables.view","hris_admin_downloadables.edit","hris_admin_appraisal_settings.menu","hris_admin_appraisal_settings.view","hris_admin_appraisal_settings.add","hris_admin_appraisal_settings.edit","hris_admin_form_codes.menu","hris_admin_form_codes.view","hris_admin_form_codes.edit","hris_workforce.menu","hris_workforce_attendance.menu","hris_workforce_attendance.view","hris_workforce_appraisals.menu","hris_workforce_appraisals.view","hris_workforce_appraisals.add","hris_workforce_appraisals.edit","hris_workforce_appraisals.evaluate","hris_workforce_appraisals.create","hris_workforce_issued_property.menu","hris_workforce_issued_property.view","hris_workforce_issued_property.add","hris_memo.menu","hris_memo.view","hris_memo.add","hris_memo.edit","hris_memo_company.menu","hris_memo_company.view","hris_memo_company.add","hris_memo_company.edit","hris_memo_disciplinary.menu","hris_memo_disciplinary.view","hris_memo_disciplinary.add","hris_memo_disciplinary.edit","hris_memo_tardiness.menu","hris_memo_tardiness.view","hris_memo_tardiness.add","hris_memo_tardiness.edit","hris_memo_violation.menu","hris_memo_violation.view","hris_memo_violation.add","hris_memo_violation.edit","hris_memo_promotion.menu","hris_memo_promotion.view","hris_memo_promotion.add","hris_memo_promotion.edit","hris_memo_regularization.menu","hris_memo_regularization.view","hris_memo_regularization.add","hris_memo_regularization.edit","hris_workforce_incident.menu","hris_workforce_incident.view","hris_workforce_incident.add","hris_workforce_incident.edit","hris_workforce_incident.review","hris_workforce_resign.menu","hris_workforce_resign.edit","hris_workforce_resign.view","hris_cash.menu","hris_workforce_reimbursement.menu","hris_workforce_reimbursement.view","hris_workforce_reimbursement.add","hris_workforce_reimbursement.edit","hris_recruit.menu","hris_applications.menu","hris_applications.view","hris_applications.edit"],
        );
        
        foreach ($groups as $name => $acl) {
            $group = new Group('');
            $group->setName($name);
            $group->clearAccess();
            foreach ($acl as $id => $val)
                $group->addAccess($val);

            $em->persist($group);
        }

        $em->flush();
    }
    
    public function getOrder()
    {
        return 0;
    }
}