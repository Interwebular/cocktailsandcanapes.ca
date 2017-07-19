<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class PageController extends Controller
{

    /**
    *   Show the wedding page
    *
    *   @return View
    */
    public function weddings() {

        $dinners = \App\Menu::where('slug', 'plated-dinner-fine')->first();

        if($dinners)
            $dinners = $dinners->meals()->whereNotNull('image')->take(6)->get();
        else
            $dinners = null;

        return view('website.wedding', [
            'dinners' => $dinners,
            'venues' => \App\Venue::where('is_featured', 1)->take(6)->orderBy('sorting_order', 'ASC')->get()
        ]);
    }

    public function corporate() {
      $dinners = \App\Menu::where('slug', 'plated-dinner-fine')->first();

      if($dinners)
          $dinners = $dinners->meals()->whereNotNull('image')->take(6)->get();
      else
          $dinners = null;

      return view('website.corporate', [
          'dinners' => $dinners,
          'venues' => \App\Venue::where('is_featured', 1)->take(6)->orderBy('sorting_order', 'ASC')->get()
      ]);
    }
    public function parties() {
        $dinners = \App\Menu::where('slug', 'plated-dinner-fine')->first();

        if($dinners)
            $dinners = $dinners->meals()->whereNotNull('image')->take(6)->get();
        else
            $dinners = null;

        return view('website.parties', [
            'dinners' => $dinners,
            'venues' => \App\Venue::where('is_featured', 1)->take(6)->orderBy('sorting_order', 'ASC')->get()
        ]);
    }
    /**
    *   Show the contact page
    *
    *   @return View
    */
    public function contact() {
        return view('website.contact');
    }

    /**
    *   Show the event page
    *
    *   @return View
    */
    public function events() {
        return view('website.events');
    }
    public function about() {
        return view('website.about');
    }

    /**
    *   Show the services
    *
    *   @return View
    */
    public function services() {
        $dinners = \App\Menu::where('slug', 'plated-dinner-fine')->first();

        if($dinners)
            $dinners = $dinners->meals()->whereNotNull('image')->take(6)->get();
        else
            $dinners = null;

        return view('website.services', [
            'dinners' => $dinners
        ]);
    }

    /**
    *   Process the contact form
    *
    *   @param Request $request
    *
    *   @return View
    */
    public function postContact(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:128',
            'email' => 'required|email',
            'message' => 'required|max:1028',
            'phone_number' => 'required|max:25',
            'company' => 'max:128',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        $rawMessage = "Name: " . $request->name . "\n";
        if($request->venue) $rawMessage .= "Venue: " . $request->venue . "\n";
        $rawMessage .= "Email: " . $request->email . "\n";
        $rawMessage .= "Phone: " . $request->phone_number . "\n\n";
        $rawMessage .= $request->message;

        $this->dispatch(new \App\Jobs\SendContactEmail($request->name, $request->email, $rawMessage));

        //$redirect = 'contact.index';

        return redirect()->back()->with('success', 'Thanks! We\'ll get back to you shortly');
    }


    /**
    *   Show the gallery page
    *
    *   @return View
    */
    public function gallery() {
        return view('website.gallery', [
            'images' => \App\Image::orderBy('sorting_order', 'ASC')->paginate(100)
        ]);
    }

    /**
    *   Show the disclaimer
    *
    *   @return View
    */
    public function disclaimer() {
        return view('website.disclaimer');
    }

    /**
    *   Show the privacy policy
    *
    *   @return View
    */
    public function privacy() {
        return view('website.privacy');
    }

    public function DeightonCup() {
        return view('website.deightoncup');
    }
}
