<?php
use Illuminate\Support\Facades\DB;

class DSTFinancialReport
{
    //
    public static function process_table_data($report_id, $table_data) { 
        DB::table('dst_report') -> insert([
            'report_id'     =>  $report_id,
            'base_rent_current'   =>  $table_data['base_rent_current'],
            'base_rent_ytd'   =>  $table_data['base_rent_ytd'],
            'annual_rent_current'   =>  $table_data['annual_rent_current'],
            'annual_rent_ytd'   =>  $table_data['annual_rent_ytd'],
            'percentage_rent_current'   =>  $table_data['percentage_rent_current'],
            'percentage_rent_ytd'   =>  $table_data['percentage_rent_ytd'],
            'total_rental_income_current'   =>  $table_data['total_rental_income_current'],
            'total_rental_income_ytd'   =>  $table_data['total_rental_income_ytd'],
            'interest_expense_current'   =>  $table_data['interest_expense_current'],
            'interest_expense_ytd'   =>  $table_data['interest_expense_ytd'],
            'real_estate_taxes_current'   =>  $table_data['real_estate_taxes_current'],
            'real_estate_taxes_ytd'   =>  $table_data['real_estate_taxes_ytd'],
            'insurance_current'   =>  $table_data['insurance_current'],
            'insurance_ytd'   =>  $table_data['insurance_ytd'],
            'lender_reserves_current'   =>  $table_data['lender_reserves_current'],
            'lender_reserves_ytd'   =>  $table_data['lender_reserves_ytd'],
            'signatory_trustee_fee_current'   =>  $table_data['signatory_trustee_fee_current'],
            'signatory_trustee_fee_ytd'   =>  $table_data['signatory_trustee_fee_ytd'],
            'independent_trustee_fee_current'   =>  $table_data['independent_trustee_fee_current'],
            'independent_trustee_fee_ytd'   =>  $table_data['independent_trustee_fee_ytd'],
            'total_expenses_current'   =>  $table_data['total_expenses_current'],
            'total_expenses_ytd'   =>  $table_data['total_expenses_ytd'],
            'net_income_before_depr'   =>  $table_data['net_income_before_depr'],
            'net_income_before_amort'   =>  $table_data['net_income_before_amort']
        ]);
    }

    public static function get_table_data($report_id) {
        $cap = DB::table('dst_report')
            ->where('dst_report.report_id', $report_id )
            ->join('reports', 'dst_report.report_id', '=', 'reports.id')
            ->first();
        return response()->json($cap)->original;        
    }
}
