<x-mail::message>
# Your Shipment Has Been Approved - Get Ready to Ship with ADLERCARGO!

Dear {{$shipment->user->name}},

We are pleased to inform you that your shipment request has been approved and will be processed immediately. We have received all the necessary information and documents regarding your shipment, and we have confirmed that it meets all our shipping standards.

Please note that your shipment will be handled with the utmost care and professionalism. We use only the most reliable and secure methods of shipping, and we have a team of experienced professionals who will ensure that your shipment arrives at its destination safely and on time.

### As a reminder, the details of your shipment are as follows:

- Tracking Code: {{$shipment->tracker->tracker_id}}
- Product type: {{$shipment->product_type}}
- Items: {{$shipment->items}}
- Size: {{$shipment->size}}KG
- Origin: {{$shipment->departure}}
- Destination: {{$shipment->arrival}}
- Payment method: {{$shipment->payment_method}}
- Recipient: {{$shipment->receiver}}
- Recipient email: {{$shipment->receiver_email}}

@if ($shipment->itemPhoto)
<x-mail::panel>
## Shipment Items Photo

@foreach($shipment->itemPhoto as $photo)
![{{ $photo->id }}]({{ url('storage/'.$photo->photo_path) }})<br><br>
@endforeach

</x-mail::panel>
@endif   

If you have any further questions or concerns about your shipment, please do not hesitate to contact us. We are always here to assist you in any way we can.

Thank you for choosing ADLERCARGO Shipping Company. We look forward to serving you again in the future.

Best regards,

Paul Mcneil - Business Administrator<br>
ADLERCARGO Shipping Company
    
</x-mail::message>
