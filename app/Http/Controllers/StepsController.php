<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sapioweb\Geocode\GeoCode;
use App\Http\Requests;

class StepsController extends Controller
{
	public function step1()
	{
		return view('step1');
	}

	public function step2 (Request $request)
	{
		$this->validate($request, [
			'address' => 'required',
		]);

		$geocode = new Geocode;
	    	$geocode = $geocode->getCoordinates($request->address);

		return view('step2')->with([
			'fullAddress' => $geocode['formatted_address'],
			'latLng' => $geocode['geometry']['location'],
			'addressComponents' => $geocode['address_components']
		]);
	}

	public function contactPost(Request $request)
	{
		$data = $request->all();

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'timeframe' => 'required',
		]);

		\Mail::send('emails.valuationIntroduction', ['data' => $data], function ($m) use ($data) {
			$m->from(env('EMAIL'), 'Jacobs Group Vegas');
			$m->to($data['email'], $data['name'])->subject('Home Valuation!');
		});

		\Mail::send('emails.valuationIntroductionAgent', ['data' => $data], function ($m) use ($data) {
			$m->from(env('EMAIL'), 'Jacobs Group Vegas');
			$m->to(env('EMAIL'), 'Jacobs Group Vegas')->subject('New Home Valuation!');
		});

		return redirect()->back()->with('success_message', 'You will hear from us very soon with your valuation!');
	}
}
