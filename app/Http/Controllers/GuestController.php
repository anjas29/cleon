<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Header;
use App\Kantor;
use App\Kontak;
use App\Berita;
use App\Pengumuman;
use App\Faq;
use App\Tos;
use App\Timebased;
use App\Volumebased;
use App\Unlimited;
use App\Ss;

class guestController extends Controller
{
    public function getIndex(){
    	$header = Header::orderBy('created_at', 'desc')->take(4)->get();
    	$pengumuman = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();
    	$footer = $this->getFooter();

    	return view('index')->withHeader($header)
    				->withPengumuman($pengumuman)
    				->withFooter($footer);
    }

    public function getDetailPengumuman($id){
        $pengumuman = Pengumuman::where('id', $id)->first();

        return view('post')->withData($pengumuman)->withFooter($this->getFooter());
    }

    public function getBerita(){
    	$berita = Berita::orderBy('created_at', 'desc')->get();
    	$footer = $this->getFooter();

    	return view('berita')->withBerita($berita)
    				->withFooter($footer);
    }

    public function getDetail($id){
        $berita = Berita::where('id', $id)->first();

        return view('post')->withData($berita)->withFooter($this->getFooter());
    }

    public function getProduct(){
    	$timebased = Timebased::get();
    	$volumebased = Volumebased::get();
    	$unlimited = Unlimited::get();
        $ss = Ss::get();
        
    	$footer = $this->getFooter();
    	return view('product')->withFooter($footer)->withUnlimited($unlimited)
    							->withVolumebased($volumebased)
                                ->withSs($ss)
    							->withTimebased($timebased);
    }

	public function getFaq(){
    	$faq = Faq::get();
    	$footer = $this->getFooter();

    	return view('FAQ')->withFaq($faq)
    				->withFooter($footer);
    }


    public function getTos(){
    	$tos = Tos::first();
    	$footer = $this->getFooter();

    	return view('tos')->withTos($tos)
    				->withFooter($footer);
    }

    public function getFooter(){
    	$kantor = Kantor::first();
    	$droppingVoucher = Kontak::where('tipe', 'Dropping Voucher')->get();
    	$support = Kontak::where('tipe', 'Support')->get();
    	$administrasi = Kontak::where('tipe', 'Administrasi')->get();
    	$onlineSupport = Kontak::where('tipe', 'Online Support')->get();
    	
    	return array('droppingVoucher'=>$droppingVoucher,
    				 'support'=>$support,
    				 'administrasi'=>$administrasi,
    				 'onlineSupport'=>$onlineSupport,
    				 'kantor'=>$kantor);
    }
}
