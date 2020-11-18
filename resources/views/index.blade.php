lora1
@foreach ($data as $key)
    @if ($key['dev_id']=='arusip_lora1')        
    {{ $key['payload_fields']['ax'] }}
    @endif
@endforeach
<br>
lora3
@foreach ($data as $key)
    @if ($key['dev_id']=='arusip_lora3')        
    {{ $key['payload_fields']['ax'] }}
    @endif
@endforeach
