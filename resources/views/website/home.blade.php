@extends('layouts.website')
@section('content')
	<?php 
       $whatsapp_input = str_replace('+', '', $setting->phone);
       $whatsapp_input = str_replace(' ','',$whatsapp_input); 
       $telephone_input = str_replace(' ','',$setting->phone);
    ?>

	@include('components.hero_banner')

	@include('components.idk_title')

	@include('components.title_description')

	@include('components.properties_list')

	@include('components.contact_us_section')

	@include('components.property_modal')



@endsection
