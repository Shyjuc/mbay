<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use Mail;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        $datas = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        );

        $datathanks = array(
            'name'    => $request->get('name'),
            'subject'    => $request->get('subject')
        );

        $emails = ["shyjuc@wing20.com"];
        $emailthanks = [$request->get('email')];

        Mail::send('movgingbayquery', $datas, function($message) use ($emails) {
                 $message->to($emails)->subject
                    ('Quote from Movingbay.org');
                 $message->from('info@movingbay.org','Movingbay');
              });

        Mail::send('thanksemail', $datathanks, function($message) use ($emailthanks) {
                 $message->to($emailthanks)->subject
                    ('Movingbay | Thank you. Your Query has been noted');
                 $message->from('info@movingbay.org','Movingbay');
              });  

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }


    public function GetaquoteForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all()+ ['subject' => 'Get a Quote Query']);

        $datas = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_query' => $request->get('message'),
        );

        $datathanks = array(
            'name'    => $request->get('name'),
            'subject'    => $request->get('message')
        );

        $emails = ["shyjuc@wing20.com"];
        $emailthanks = [$request->get('email')];

        Mail::send('movgingbayhomequery', $datas, function($message) use ($emails) {
                 $message->to($emails)->subject
                    ('Quote from Movingbay.org');
                 $message->from('info@movingbay.org','Movingbay');
              });

        Mail::send('thanksemail', $datathanks, function($message) use ($emailthanks) {
                 $message->to($emailthanks)->subject
                    ('Movingbay | Thank you. Your Query has been noted');
                 $message->from('info@movingbay.org','Movingbay');
              });  

        // 
        return back()->with('success', 'Thank you for your inquiry. We will get back to you as soon as possible');
    }

    // Store Contact Form data
    public function QuotesForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'fromcountry' => 'required',
            'tocountry' => 'required',
            'shippingitem' => 'required',
            'shippingtype' => 'required',
            'shippingsize' => 'required',
            'servicetype' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'subject' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'message'=>'required',
            'address_line1'=>'required',
            'address_line2'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'country'=>'required',
            'dest_address_line1'=>'required',
            'dest_address_line2'=>'required',
            'dest_city'=>'required',
            'dest_state'=>'required',
            'dest_zip'=>'required',
            'dest_country'=>'required'
         ]);


         $data = $request->input();
       
         $emails = ["shyjuc@wing20.com"];
        
        $datas = array(
            'fromcountry'    => $data['fromcountry'],
            'tocountry'    => $data['tocountry'],
            'shipitem'    => $data['shippingitem'],
            'shiptype'    => $data['shippingtype'],
            'shipsize'    => $data['shippingsize'],
            'servicetype'    => $data['servicetype'],
            'fname'    => $data['firstname'],
            'lname'    => $data['lastname'],
            'subject'    => $data['subject'],
            'phone'    => $data['phone'],
            'email'    => $data['email'],
            'message'    => $data['message'],
            'address1'    => $data['address_line1'],
            'address2'    => $data['address_line2'],
            'city'    => $data['city'],
            'state'    => $data['state'],
            'zip'    => $data['zip'],
            'country'    => $data['country'],
            'daddress1'    => $data['dest_address_line1'],
            'daddress2'    => $data['dest_address_line2'],
            'dcity'    => $data['dest_city'],
            'dstate'    => $data['dest_state'],
            'dzip'    => $data['dest_zip'],
            'dcountry'    => $data['dest_country']
        );

        $datathanks = array(
            'fname'    => $data['firstname'],
            'lname'    => $data['lastname']
        );

        $emailthanks = [$data['email']];

        Mail::send('movgingbayquote', $datas, function($message) use ($emails) {
                 $message->to($emails)->subject
                    ('Quote from Movingbay.org');
                 $message->from('info@movingbay.org','Movingbay');
              });

        Mail::send('thanksemail', $datathanks, function($message) use ($emailthanks) {
                 $message->to($emailthanks)->subject
                    ('Movingbay | Thank you. Your Query has been noted');
                 $message->from('info@movingbay.org','Movingbay');
              });      

        // 
        return back()->with('success', 'Thank you so much for your query. We have received your message. We will get back to you soon.');
    }


    // Store Pet Sihpping Form data
    public function PetForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'petname' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'weight' => 'required|numeric',
            'age' => 'required|numeric',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'message'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'country'=>'required',
            'dest_city'=>'required',
            'dest_state'=>'required',
            'dest_zip'=>'required',
            'dest_country'=>'required'
         ]);


         $data = $request->input();
       
         $emails = ["shyjuc@wing20.com"];
        
        $datas = array(
            'fname'    => $data['fname'],
            'lname'    => $data['lname'],
            'phone'    => $data['phone'],
            'email'    => $data['email'],
            'pname'    => $data['petname'],
            'species'    => $data['species'],
            'breed'    => $data['breed'],
            'weight'    => $data['weight'],
            'age'    => $data['age'],
            'length'    => $data['length'],
            'height'    => $data['height'],
            'message'    => $data['message'],
            'city'    => $data['city'],
            'state'    => $data['state'],
            'zip'    => $data['zip'],
            'country'    => $data['country'],
            'dcity'    => $data['dest_city'],
            'dstate'    => $data['dest_state'],
            'dzip'    => $data['dest_zip'],
            'dcountry'    => $data['dest_country']
        );

        $datathanks = array(
            'fname'    => $data['fname'],
            'lname'    => $data['lname']
        );

        $emailthanks = [$data['email']];

        Mail::send('movgingbaypetquote', $datas, function($message) use ($emails) {
                 $message->to($emails)->subject
                    ('Pet shipping Quote from Movingbay.org');
                 $message->from('info@movingbay.org','Movingbay');
              });

        Mail::send('thanksemail', $datathanks, function($message) use ($emailthanks) {
                 $message->to($emailthanks)->subject
                    ('Movingbay | Thank you. Your Query has been noted');
                 $message->from('info@movingbay.org','Movingbay');
              });      

        // 
        return back()->with('success', 'Thank you so much for your query to move your pet. We have received your message. We will get back to you soon.');
    }

}
