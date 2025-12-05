<?php
namespace App\Helpers;

use App\Http\Requests\EducationInfoRequest;
use Carbon\Carbon;

class EducationHelper
{
    public static function extractSSCInfo(EducationInfoRequest $request)
    {
        return [
                'ssc_passing_year' => $request->ssc_passing_year
                    ?? $request->hsc_ssc_passing_year
                    ?? $request->diploma_ongoing_ssc_passing_year
                    ?? $request->diploma_ssc_passing_year
                    ?? $request->honours_ongoing_ssc_passing_year
                    ?? $request->honours_ssc_passing_year
                    ?? $request->masters_ssc_passing_year,

                'ssc_education_category' => $request->ssc_education_category
                    ?? $request->hsc_ssc_education_category
                    ?? $request->diploma_ongoing_ssc_education_category
                    ?? $request->diploma_ssc_education_category
                    ?? $request->honours_ongoing_ssc_education_category
                    ?? $request->honours_ssc_education_category
                    ?? $request->masters_ssc_education_category,

                'ssc_result' => $request->ssc_result
                    ?? $request->hsc_ssc_result
                    ?? $request->diploma_ongoing_ssc_result
                    ?? $request->diploma_ssc_result
                    ?? $request->honours_ongoing_ssc_result
                    ?? $request->honours_ssc_result
                    ?? $request->masters_ssc_result,
        ];
    }

    //hsc
    public static function extractHSCInfo(EducationInfoRequest $request)
    {
        return [
                'hsc_passing_year' => $request->hsc_passing_year
                    ?? $request->honours_ong_hsc_passing_year
                    ?? $request->honours_hsc_passing_year
                    ?? $request->masters_hsc_passing_year,

                'hsc_education_category' => $request->hsc_education_category
                    ?? $request->honours_ong_hsc_edu_category
                    ?? $request->honours_hsc_edu_category
                    ?? $request->masters_hsc_edu_category,

                'hsc_result' => $request->hsc_result
                    ?? $request->honours_ong_hsc_result
                    ?? $request->honours_hsc_result
                    ?? $request->masters_hsc_result,
        ];
    }
    //diploma
    public static function extractDiplomaInfo(EducationInfoRequest $request)
    {
        return [
                'diploma_passing_subject' => $request->diploma_passing_subject
                    ?? $request->honours_ong_diploma_passing_subject
                    ?? $request->honours_diploma_passing_subject
                    ?? $request->masters_diploma_passing_subject,

                'diploma_passing_year' => $request->diploma_passing_year
                    ?? $request->honours_ong_diploma_passing_year
                    ?? $request->honours_diploma_passing_year
                    ?? $request->masters_diploma_passing_year,

                'diploma_passing_institut' => $request->diploma_passing_institut
                    ?? $request->honours_ong_diploma_passing_institut
                    ?? $request->honours_diploma_passing_institut
                    ?? $request->masters_diploma_passing_institut,
        ];
    }
    //honours
    public static function extractHonoursInfo(EducationInfoRequest $request)
    {
        return [
                'honours_passing_subject' => $request->honours_passing_subject
                    ?? $request->masters_honours_passing_subject,

                'honours_passing_year' => $request->honours_passing_year
                    ?? $request->masters_honours_passing_year,

                'honours_passing_institut' => $request->honours_passing_institut
                    ?? $request->masters_honours_passing_institut,
        ];
    }
    //taqmeel
    public static function extractTaqmeelInfo(EducationInfoRequest $request)
    {
        return [
                'taqmeel_passing_year' => $request->taqmeel_passing_year
                    ?? $request->takhassus_taqmeel_passing_year,

                'taqmeel_result' => $request->taqmeel_result
                    ?? $request->takhassus_taqmeel_result,

                'taqmeel_madrasa_name' => $request->taqmeel_madrasa_name
                    ?? $request->takhassus_taqmeel_madrasa_name,
        ];
    }

    // Date to Bangla format
}// End
