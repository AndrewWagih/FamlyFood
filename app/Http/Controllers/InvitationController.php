<?php

namespace App\Http\Controllers;

use App\Http\Classes\AppSetting;
use App\Http\Requests\StoreInvitationRequest;
use App\Http\Requests\SubmitQuestionnaireRequest;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use  Dinushchathurya\NationalityList\Nationality;
use Illuminate\Support\Facades\Session;

class InvitationController extends Controller
{

    public function downloadAgenda(){
        return response()->download(public_path('assets/PDF/agenda.pdf'), 'Agenda for the inauguration ceremony of the Arabic Translation Observatory.pdf');
    }
    public function index()
    {
        $invitations = Invitation::with('sub')->where('parent_id',null)->orderBy('id','desc')->paginate(3);
        return view('invitations.index',compact('invitations'));
    }

    public function create()
    {
        return view('invitations.create');
    }

    public function store(StoreInvitationRequest $request)
    {
        $invitation = Invitation::create($request->validated());
        $data = ['invitation' => $invitation];
        // Mail::send('emails.invitation', $data, function($message) use($invitation) {
        //     $message->to($invitation->email)->subject('Invitation');
        //     $message->from('','Sender Name');
        // });
        Session::flash('successfully', 'operation was done successfully');
        return redirect()->route('invitations');
    }

    public function invitation($id)
    {
        $setting = new AppSetting();
        // /storage/Images/Settings/$setting->get('invitation_image')
        // dd($setting->get('invitation_image'));
        return view('invitation',compact('id','setting'));
    }

    public function acceptOrReject(Request $request,$id)
    {

        $invitation = Invitation::find($id);
        $invitation->update(['status' => $request->status]);
        if($request->status == 'accept')
        {
            return redirect()->route('invitation-accept-or-reject-second-step',['invitation_id'=>$invitation->id]);
            // return redirect()->route('questionnaire',$invitation->id);
        }
        return redirect()->route('thank-you');
    }

    public function confirmedAcceptance($id){
        $invitation = Invitation::find($id);
        return view('confirmed-acceptance',compact('invitation'));
    }

    public function questionnaire($id)
    {
        $nationalities = Nationality::getNationalities();
        return view('questionnaire',compact('id','nationalities'));
    }

    public function submitQuestionnaire(SubmitQuestionnaireRequest $request,$id)
    {
        
        $invitation = Invitation::find($id);
        if($invitation->confirmed_attendance == 1)
        {
            Session::flash('error-message', 'you already confirmed attendance / لقد قمت بتاكيد الحجز مسبقا');
            return redirect()->back();
        }
        $invitation->update([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'resident_or_passport_id' => $request->resident_or_passport_id,
            'phone' => $request->phone,
            'confirmed_attendance' => 1,
        ]);

        foreach($request->accompanying as $accompanying)
        {
            $accompanying['parent_id'] = $invitation->id;
            // dd($accompanying);
            Invitation::create($accompanying);
        }
        // Mail::send('emails.confirm-attend', $data, function($message) use($invitation) {
        //     $message->to($invitation->email)->subject('Confirm attend');
        //     $message->from('','Sender Name');
        // });
        Session::flash('successfully', 'operation was done successfully');
        
        return redirect()->route('confirmed-acceptance',$invitation->id);
    }
}
