<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvitationRequest;
use App\Http\Requests\SubmitQuestionnaireRequest;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use  Dinushchathurya\NationalityList\Nationality;

class InvitationController extends Controller
{
    public function index()
    {
        $invitations = Invitation::orderBy('id','desc')->paginate(3);
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
        // Mail::send('emails.invitation', $data, function($message) {
        //     $message->to('')->subject('Invitation');
        //     $message->from('','Sender Name');
        // });

        return redirect()->route('invitations');
    }

    public function invitation($id)
    {
        return view('invitation',compact('id'));
    }

    public function acceptOrReject(Request $request,$id)
    {

        $invitation = Invitation::find($id);
        $invitation->update(['status' => $request->status]);
        if($request->status == 'accept')
        {
            return redirect()->route('questionnaire',$invitation->id);
        }
        return redirect()->route('thank-you');
    }

    public function questionnaire($id)
    {
        $nationalities = Nationality::getNationalities();
        return view('questionnaire',compact('id','nationalities'));
    }

    public function submitQuestionnaire(SubmitQuestionnaireRequest $request,$id)
    {
        $invitation = Invitation::find($id);
        $invitation->update($request->validated());
        return redirect()->route('thank-you');
    }
}
