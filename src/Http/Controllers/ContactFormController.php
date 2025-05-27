<?php 

    namespace Onoma\Contactform\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Support\Facades\Mail;
    use Onoma\Contactform\Models\Contact;
    use Onoma\Contactform\Mail\InquiryMail;


    class ContactFormController extends BaseController
    {

        public function create()
        {

            return view('Contactform::create');

        }

        public function store(Request $request)
        {

            $validated = $request->validate([

                'email' => "required|email",
                'message' => "required|max:255",
            ]);



             Contact::create($validated);
           

            $email_to = config('contactform.e_email');  //getting the value of the env values.

            if($email_to === "" || !$email_to ){

                throw new \Exception('The receiver must have values and not null');

            }else{

                Mail::to($validated['email'])->send(new InquiryMail($validated));

            }
            
            return redirect()->back()->with('success', 'Email sent successfully!');

        }

    }