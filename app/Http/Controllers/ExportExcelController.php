<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use \Rap2hpoutre\FastExcel\FastExcel;

class ExportExcelController extends Controller
{
    public function exportInvitations()
    {
        $invitations = [];
        $invitationList = Invitation::with('sub')->where('parent_id',null)->get();
        foreach($invitationList as $invitation)
        {
            $invitationStatus = '';
            if($invitation->status == 'pending')
            {
                $invitationStatus = 'قيد الانتظار';
            }else if($invitation->status == 'accept')
            {
                $invitationStatus = 'تم القبول';
            }else{
                $invitationStatus = 'تم الرفض';
            }
            $invitations[] = [
                'الاسم' => $invitation->name,
                'البريد الالكتروني' => $invitation->email,
                'رقم الهاتف' => $invitation->phone,
                'هوية المقيم / جواز السفر' => $invitation->resident_or_passport_id,
                'الجنسية' => $invitation->nationality,
                'حالة القبول' => $invitationStatus,
                'مدعو \ مرافق' => 'مدعو',
            ];
            foreach($invitation->sub as $sub)
            {
                $invitationStatus = '';
                if($sub->status == 'pending')
                {
                    $invitationStatus = 'قيد الانتظار';
                }else if($sub->status == 'accept')
                {
                    $invitationStatus = 'تم القبول';
                }else{
                    $invitationStatus = 'تم الرفض';
                }
                $invitations[] = [
                    'الاسم' => $sub->name,
                    'البريد الالكتروني' => $sub->email,
                    'رقم الهاتف' => $sub->phone,
                    'هوية المقيم / جواز السفر' => $sub->resident_or_passport_id,
                    'الجنسية' => $sub->nationality,
                    'حالة القبول' => $invitationStatus,
                    'مدعو \ مرافق' => 'مرافق',
                ];
            }
        }
        return (new FastExcel($invitations))->download('invitations.xlsx');
    }
}
