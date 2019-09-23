<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onsen;
use Validator;

class OnsenController extends Controller
{
    public function index()
    {
      $onsens = Onsen::all();
      return view('Onsens.index')->with('onsens',$onsens);
    }

    public function serch(request $id)
    {
      $onsens = Onsen::where(['prefectureint' => $id['prefecture']])->get();
      foreach ($onsens as $key) {
        $prefecture = $key->prefectureint;
      }
      return view('Onsens.serch',compact('onsens','prefecture'));
    }

    public function show(request $request)
    {
      $onsens = Onsen::where(['id' => $request['id']])->get();
      foreach ($onsens as $onsen) {
        $onsen;
      }
      $eq = '=';
      $map = '1UXV_NEtZycFB5aQ4_-54dC_G6Me2rsga&ll';
      return view('Onsens.show',compact('onsen','eq','map'));
    }

    public function type()
    {
      $onsens = Onsen::where(['eat' => '◯'])->get();
      return view('Onsens.type',compact('onsens'));
    }

    public function type1()
    {
      $onsens = Onsen::where(['sauna' => '◯'])->get();
      return view('Onsens.type1',compact('onsens'));
    }

    public function type2()
    {
      $onsens = Onsen::where(['towel' => '◯'])->get();
      return view('Onsens.type2',compact('onsens'));
    }

    public function type3()
    {
      $onsens = Onsen::where(['hot_stone' => '◯'])->get();
      return view('Onsens.type3',compact('onsens'));
    }

    public function type4()
    {
      $onsens = Onsen::where(['open_bath' => '◯'])->get();
      return view('Onsens.type4',compact('onsens'));
    }
}
