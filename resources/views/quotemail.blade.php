<h2>Hello</h2> <br><br>

You have got an email from : {{ $name }} <br><br>

User details: <br><br>

<b>From :</b> {{ $fromcountry }} <br>
<b>To :</b> {{ $tocountry }} <br>
<b>Shipping Item :</b> {{ $item }} <br>
<b>Shipping Type :</b> {{ $type }} <br>
<b>Shipping Size :</b> {{ $size }} <br>
<b>Service Type :</b> {{ $service }} <br>

Thanks

<table id='u_content_text_2' style='font-family:'Rubik',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:40px 50px 50px;font-family:'Rubik',sans-serif;' align='left'>
        
  <div class='v-text-align' style='color: #5c5c5c; line-height: 170%; text-align: left; word-wrap: break-word;'>
    <p style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'><strong>Hi, You have got an email from : {{ $fname }}, </strong></span></p>
<p style='font-size: 14px; line-height: 170%;'>&nbsp;</p>
<p style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'>
<b>From :</b> {{ $fromcountry }} <br>
<b>To :</b> {{ $tocountry }} <br>
<b>Shipping Item :</b> {{ $item }} <br>
<b>Shipping Type :</b> {{ $type }} <br>
<b>Shipping Size :</b> {{ $size }} <br>
<b>Service Type :</b> {{ $service }} <br>
<b>Details :</b> {{ $message }} <br></span></p>
<p style='font-size: 14px; line-height: 170%;'>&nbsp;</p>
<h4 style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'>Personal Details:</span></h4>
<p style='font-size: 14px; line-height: 170%;'><strong><span style='font-size: 16px; line-height: 27.2px;'>
Name: {{ $fname }} &nbsp; {{ $lname }} <br>
Email: {{ $email }} <br>
Phone: {{ $phone }} <br>
</span></strong></p>
<p style='font-size: 14px; line-height: 170%;'>&nbsp;</p>
<h4 style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'>Relocation Details:</span></h4>
<p style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'>
<b>Origin Address :</b> {{ $address1 }},{{ $address2 }},{{ $city }},{{ $state }},{{ $country }}, Zip: {{ $zip }} <br>
<b>Destination Address :</b> {{ $daddress1 }},{{ $daddress2 }},{{ $dcity }},{{ $dstate }},{{ $dcountry }}, Zip: {{ $dzip }} <br>
</span></p>

<p style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'>With Regards,</span></p>
<p style='font-size: 14px; line-height: 170%;'><span style='font-size: 16px; line-height: 27.2px;'><strong>{{ $fname }}</strong></span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>