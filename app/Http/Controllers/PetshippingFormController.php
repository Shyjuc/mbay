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

        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('shyjuc@wing20.com', 'Admin')->subject($request->get('subject'));
        });

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
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

        //  Store data in database
        //Contact::create($request->all());

        //  Send mail to admin
        
        /*
        \Mail::send('email.movgingbayquote', array(
            'fromcountry' => $data['fromcountry'],
            'tocountry' => $data['tocountry'],
            'item' => $request->get('shippingitem'),
            'type' => $request->get('shippingtype'),
            'size' => $request->get('shippingsize'),
            'service' => $request->get('servicetype'),
            'fname' => $request->get('firstname'),
            'lname' => $request->get('lastname'),
            'subject' => $request->get('subject'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'address1' => $request->get('address_line1'),
            'address2' => $request->get('address_line2'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'zip' => $request->get('zip'),
            'country' => $request->get('country'),
            'daddress1' => $request->get('dest_address_line1'),
            'daddress2' => $request->get('dest_address_line2'),
            'dcity' => $request->get('dest_city'),
            'dstate' => $request->get('dest_state'),
            'dzip' => $request->get('dest_zip'),
            'dcountry' => $request->get('dest_country'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('shyjuc@wing20.com', 'Admin')->subject($request->get('subject'));
        });
        */

        

       
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

}
