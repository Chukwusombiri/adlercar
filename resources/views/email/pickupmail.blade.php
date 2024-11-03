<x-mail::message>
# We've Received Your Pickup Request!

Dear {{ $pickup['name'] }},

Thank you for choosing **ADLERCARGO** as your delivery service provider! We are excited to inform you that we have received your pickup request and our team is currently reviewing it. Rest assured, we will do everything we can to make your pickup experience as smooth and seamless as possible.

## Here's a summary of your pickup request details:

- **Pick-up item(s):** {{ $pickup['pickup_item'] }}
- **Pickup Address:** {{ $pickup['pickup_address'] }}  
- **Pickup Date:** {{ $pickup['pickup_date'] }}  
- **Pickup Time:** {{ $pickup['pickup_time'] }}
 
Our team will be in touch with you shortly to confirm the pickup date and time. In the meantime, if you have any questions or concerns, please don't hesitate to [contact us]({{ route('contact') }}). We're always happy to help.

Thank you again for choosing ADLERCARGO. We appreciate your business and look forward to serving you soon!

Warm regards,  
ADLERCARGO Team
</x-mail::message> 