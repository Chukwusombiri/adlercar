<x-mail::message>
# We've Received Your Shipment Request!

Dear {{ auth()->user()->name }},

Thank you for choosing **ADLERCARGO** as your Shipment service provider! We are excited to inform you that we have received your shipment request and our team is currently reviewing it. Rest assured, we will do everything we can to make your shipment experience as smooth and seamless as possible.

## Here's a summary of your shipment request details:

- **Shipment Product Type:** {{ $shipment['product_type'] }}
- **Shipment item(s):** {{ $shipment['items'] }}
- **Origin:** {{ $shipment['departure'] }}  
- **Destination:** {{ $shipment['arrival'] }}  
- **Mode of Shipment:** {{ $shipment['mos'].' freight' }}
- **Shipment Size:** {{ $shipment['size'].'KG' }}
- **Preferred Payment Method:** {{ $shipment['payment_method'] }}

## Shipment Recipient's details:

- **Name of Recipient:** {{ $shipment['receiver'] }}
- **Email Address:** {{ $shipment['receiver_email'] }}
 
Our team will be in touch with you shortly to confirm the shipment departure time and arrival time. In the meantime, if you have any questions or concerns, please don't hesitate to [contact us]({{ route('contact') }}). We're always happy to help.

Thank you again for choosing ADLERCARGO. We appreciate your business and look forward to serving you soon!

Warm regards,  
ADLERCARGO Team
</x-mail::message> 