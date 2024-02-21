<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Mail;
use Validator;



class ContactController extends Controller
{
    // home page contact form function
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'g-recaptcha-response'=>'required',
        ]);

      
        if ($validator->passes()) {
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'country_number' => $request->country_number,
            'contact_number' => $request->contact_number,
            'project_budget' => $request->project_budget,
            'contact_message' => $request->contact_message,
            'contact_type'=>$request->home_contact,
						'page_url'=>$request->page_url,
						'server_ip'=>$request->server_ip
        ];
      
        Contacts::create($mailData);
	 Mail::send('emails.home-contact', $mailData, function ($message) {
            $message->to('info@consultantsfromasia.com', 'InstaIt')->subject('Contact Us');
            $message->from('no-reply@instaittech.com', 'Instait');
       });
    }

    return response()->json(['error'=>$validator->errors()]);

        //return redirect()->back();
    }

    // contact-us page function

    public function contact_us_store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            // 'upload_file'=>'required|file|mimes:pdf,jpg,txt,doc',
            'g-recaptcha-response'=>'required',
        ]);
     
        if ($validator->passes()) {
            $input = $request->all();
            $profileImage = '';
        if ($image = $request->file('upload_file')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filesAttach=$image->move($destinationPath, $profileImage);
            $input['upload_file'] = $profileImage;
            
        }

		if(!empty($profileImage)){
			$files = public_path('images/'.$profileImage);
		}

        Contacts::create($input);
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'country_number' => $request->country_number,
            'contact_number' => $request->contact_number,
            'services' => $request->services,
            'project_budget' => $request->project_budget,
            'm' => $request->contact_message,
            'upload_file' => $profileImage,
            'contact_type'=>$request->contact_type,
						'page_url'=>$request->page_url,
						'server_ip'=>$request->server_ip
            //'upload_file' => $request->upload_file,
        ];
       
        Mail::send('emails.contactmail', $mailData, function ($message)use($mailData,$files) {
            $message->to('info@consultantsfromasia.com', 'InstaIt')->subject('project enquiry');
            $message->from('no-reply@instaittech.com', 'Instait');
			if(!empty($files)){
				$message->attach($files);
			}
			
       });
    }
             return response()->json(['error'=>$validator->errors()]);
    }




    // candidate contact  page function

    public function candidate_contact_us_store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'candidate_name' => 'required',
            'candidate_email' => 'required',
            'g-recaptcha-response'=>'required',
            // 'candidate_upload_file'=>'required|file|mimes:pdf,jpg,txt,doc',
        ]);
      
        if ($validator->passes()) {
                $input = $request->all();
                $profileImage = '';
        if ($image = $request->file('candidate_upload_file')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filesAttach=$image->move($destinationPath, $profileImage);
            $input['candidate_upload_file'] = $profileImage;
            
        }

		if(!empty($profileImage)){
			$files = public_path('images/'.$profileImage);
		}
		
            
        

        Contacts::create($input);
        $mailData = [
            'name' => $request->candidate_name,
            'email' => $request->candidate_email,
            'country_number' => $request->country_number,
            'contact_number' => $request->contact_number,
            'experience' => $request->experience,
            'current_company' => $request->current_company,
						'current_ctc'=>$request->current_ctc,
            'designation' => $request->designation,
            'candidate_upload_file' => $profileImage,
						'contact_type'=>$request->contact_type,
						'page_url'=>$request->page_url,
						'server_ip'=>$request->server_ip
            //'upload_file' => $request->upload_file,
        ];
        //dd($mailData);
        Mail::send('emails.contact-us-mail', $mailData, function ($message)use($mailData,$files) {
            $message->to('info@consultantsfromasia.com', 'InstaIt')->subject('candidate applied');
            $message->from('no-reply@instaittech.com', 'Instait');
			if(!empty($files)){
				$message->attach($files);
			}
			
       });
    }
       return response()->json(['error'=>$validator->errors()]);
    }


    // home page contact form function
    public function customer_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'customer_email' => 'required',
            'g-recaptcha-response'=>'required',
        ]);

       
        if ($validator->passes()) {
        $mailData = [
            'name' => $request->first_name,
            'last_name'=>$request->last_name,
            'email' => $request->customer_email,
            'country_number' => $request->country_number,
            'contact_number' => $request->contact_number,
            'website_url' => $request->website_url,
            'contact_message' => $request->message,
            'contact_type'=>$request->customer_contact,
						'page_url'=>$request->page_url,
						'server_ip'=>$request->server_ip
        ];
        //dd( $mailData);
        Contacts::create($mailData);
	 Mail::send('emails.customer-contact', $mailData, function ($message) {
            $message->to('info@consultantsfromasia.com', 'InstaIt')->subject('Contact Us');
            $message->from('no-reply@instaittech.com', 'Instait');
       });
    }

        return response()->json(['error'=>$validator->errors()]);
    }
    
  
}
