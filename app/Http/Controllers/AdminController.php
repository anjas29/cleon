<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Berita;
use App\Pengumuman;
use App\Header;
use App\Tos;
use App\Post;
use App\Faq;
use App\Kantor;
use App\Product;
use App\Timebased;
use App\Volumebased;
use App\Unlimited;
use App\Ss;
use App\Kontak;

use Carbon\Carbon;
use Auth;
use Input;
use File;
use Session;
use Validator;
use Hash;
class AdminController extends Controller
{


	public function __construct(){
		$sites = array('getLogin');

        $this->middleware('auth', ['except' => $sites]);
	}

	public function getLogin(){
        if(Auth::check()){
            return redirect('/administrator');
        }

		return view('admin.login');
	}

    public function getIndex(){
        $berita = Berita::take(8)->orderBy('created_at', 'decs')->get();
        $pengumuman = Pengumuman::take(8)->orderBy('created_at', 'decs')->get();
        $cFaq = Faq::count();
        $cUser = User::count();

    	return view('admin.home')->withBerita($berita)
                                 ->withPengumuman($pengumuman)
                                 ->withFaq($cFaq)
                                 ->withUser($cUser);
    }

    public function getBerita(){
    	$data = Berita::with('post.author')->orderBy('created_at','desc')->get();

    	return view('admin.berita')->withData($data);
    }

    public function getBeritaEdit($id){
        $data = Berita::where('id', $id)->firstOrFail();

        return view('admin.editberita')->withData($data);
    }

    public function postBerita(){
    	$file = array('image' => Input::file('image'));
        $rules = array('image' => 'required');

        $validator = Validator::make($file, $rules);
        
        if($validator->fails()) {
            $berita = new Berita;
            $berita->judul = Input::get('judul');
            $berita->isi = Input::get('isi');
            $berita->save();

            $post = new Post;
            $post->post_id = $berita->id;
            $post->author_id = Auth::user()->id;
            $berita->post()->save($post);            
                
            return redirect('/administrator/berita');
        } else {
            if(Input::file('image')->isValid()){
                $path = storage_path().'/app/berita/';
                $extension = Input::file('image')->getClientOriginalExtension();

                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png'){

                    $fileName = Carbon::now()->format('YmdHis').rand(1,99).'.'.$extension;
                    Input::file('image')->move($path, $fileName);

                    $berita = new Berita;
                    $berita->judul = Input::get('judul');
                    $berita->isi = Input::get('isi');
                    $berita->gambar = $fileName;
                    $berita->save();

                    $post = new Post;
                    $post->post_id = $berita->id;
                    $post->author_id = Auth::user()->id;
                    $berita->post()->save($post);
                   
                }else{
                    Session::flash('messageError', 'Gambar Tidak Sesusai');
                    return redirect('/administrator/header');
                }
            }else{
                Session::flash('messageError', 'Gambar Tidak Sesusai');
                return redirect('/administrator/berita');
            }
        }

        Session::flash('message', 'Input Berita Berhasil');
    	return redirect('/administrator/berita');
    }

    public function postBeritaHapus(){
        $id = Input::get('id');

        $berita = Berita::where('id', $id)->with('post')->firstOrFail();
        $post = Post::where('id', $berita->post->id)->first();

        $berita->delete();
        $post->delete();

        Session::flash('message', 'Hapus Berita Berhasil');
        return redirect('/administrator/berita');
    }

    public function postBeritaEdit(){

        $file = array('image' => Input::file('image'));
        $rules = array('image' => 'required');

        $validator = Validator::make($file, $rules);
        
        if($validator->fails()) {
            $id = Input::get('id');
            $berita = Berita::where('id',$id)->first();     
            $berita->judul = Input::get('judul');
            $berita->isi = Input::get('isi');
            $berita->save();           
                
            return redirect('/administrator/berita');
        } else {
            if(Input::file('image')->isValid()){
                $path = storage_path().'/app/berita/';
                $extension = Input::file('image')->getClientOriginalExtension();

                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png'){

                    $id = Input::get('id');
                    $berita = Berita::where('id',$id)->first();

                    $fileName = $berita->gambar;

                    if($fileName == null)
                        $fileName = Carbon::now()->format('YmdHis').rand(1,99).'.'.$extension;

                    Input::file('image')->move($path, $fileName);

                    $berita->judul = Input::get('judul');
                    $berita->isi = Input::get('isi');
                    $berita->gambar = $fileName;
                    $berita->save();
                   
                }else{
                    Session::flash('messageError', 'Gambar Tidak Sesusai');
                    return redirect('/administrator/header');
                }
            }else{
                Session::flash('messageError', 'Gambar Tidak Sesusai');
                return redirect('/administrator/berita');
            }
        }

        Session::flash('message', 'Edit Berita Berhasil');
        return redirect('/administrator/berita');
    }

    public function getPengumuman(){
    	$data = Pengumuman::with('post.author')->orderBy('created_at','desc')->get();

    	return view('admin.pengumuman')->withData($data);
    }

    public function postPengumuman(){
    	$pengumuman = new Pengumuman;
    	$pengumuman->judul = Input::get('judul');
    	$pengumuman->isi = Input::get('isi');
    	$pengumuman->tipe = Input::get('tipe');
    	$pengumuman->save();

    	$post = new Post;
    	$post->post_id = $pengumuman->id;
    	$post->author_id = Auth::user()->id;
    	$pengumuman->post()->save($post);

    	return redirect('/administrator/pengumuman');
    }

    public function getPengumumanEdit($id){
        $pengumuman = Pengumuman::where('id', $id)->firstOrFail();

         return view('admin.editpengumuman')->withData($pengumuman);
    }

    public function postPengumumanEdit($id){
        $pengumuman = Pengumuman::where('id', $id)->firstOrFail();

        $pengumuman->judul = Input::get('judul');
        $pengumuman->isi = Input::get('isi');
        $pengumuman->tipe = Input::get('tipe');

        $pengumuman->save();

        Session::flash('message', 'Edit Pengumuman Berhasil');
        return redirect('/administrator/pengumuman');
    }

    public function postPengumumanHapus(){
        $id = Input::get('id');
        $pengumuman = Pengumuman::where('id', $id)->firstOrFail();
        $post = Post::where('id', $pengumuman->post->id)->firstOrFail();

        $pengumuman->delete();
        $post->delete();

        Session::flash('message', 'Hapus Pengumuman Berhasil');
        return redirect('/administrator/pengumuman');
    }

    public function getHeader(){
    	$data = Header::orderBy('created_at', 'desc')->orderBy('created_at','desc')->get();

    	return view('admin.header')->withData($data);
    }

    public function postHeader(){
        $file = array('image' => Input::file('image'));
        $rules = array('image' => 'required');

        $validator = Validator::make($file, $rules);
        
        if($validator->fails()) {                
                Session::flash('messageError', 'Pilih Gambar Header');
            return redirect('/administrator/header');
        } else {
            if(Input::file('image')->isValid()){
                $path = storage_path().'/app/header/';
                $extension = Input::file('image')->getClientOriginalExtension();

                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png'){

                    $fileName = Carbon::now()->format('YmdHis').rand(1,99).'.'.$extension;
                    Input::file('image')->move($path, $fileName);

                    $header = new Header;
                    $header->judul = Carbon::now()->format('YmdHis').rand(1,99);
                    $header->header = $fileName;
                    $header->save();

                    $post = new Post;
                    $post->post_id = $header->id;
                    $post->author_id = Auth::user()->id;
                    $header->post()->save($post);
                }else{
                    Session::flash('messageError', 'Gambar Tidak Sesusai');
                    return redirect('/administrator/header');
                }
            }else{
                Session::flash('messageError', 'Gambar Tidak Sesusai');
                return redirect('/administrator/header');
            }
        }
        Session::flash('message', 'Input Header Berhasil');
        return redirect('/administrator/header');
    }

    public function postHeaderHapus(){
        $id = Input::get('id');
        $header = Header::where('id', $id)->firstOrFail();
        $post = Post::where('id', $header->post->id)->firstOrFail();

        $header->delete();
        $fileName = storage_path().'/app/header/'.$header->header;
        
        File::delete($fileName);
        Session::flash('message', 'Hapus Header Berhasil');
        return redirect('/administrator/header');
    }

    public function getTos(){
    	$data = Tos::first();

    	return view('admin.tos')->withData($data);
    }

    public function postTos(){
    	$data = Tos::first();
    	if(is_null($data)){
    		$data = new Tos;
    	}
    	$data->tos = Input::get('tos');
    	$data->save();

        Session::flash('message', 'Edit TOS Berhasil');
    	return redirect('/administrator/tos');
    }

    public function getFaq(){
    	$data = Faq::with('author')->orderBy('created_at', 'desc')->get();

    	return view('admin.faq')->withData($data);
    }

    public function postFaq(){
    	$data = new Faq;
    	$data->author_id = Auth::user()->id;
    	$data->pertanyaan = Input::get('pertanyaan');
    	$data->jawaban = Input::get('jawaban');
    	$data->save();

        Session::flash('message', 'Input FAQ Berhasil');

    	return redirect('/administrator/faq');
    }

    public function postFaqEdit(){
        $id = Input::get('id');
        $faq = Faq::where('id', $id)->firstOrFail();

        $faq->pertanyaan = Input::get('pertanyaan');
        $faq->jawaban = Input::get('jawaban');
        $faq->save();

        Session::flash('message', 'Edit FAQ Berhasil');

        return redirect('/administrator/faq');
    }

    public function postFaqHapus(){
        $id = Input::get('id');
        $faq = Faq::where('id', $id)->firstOrFail();
        $faq->delete();

        return redirect('/administrator/faq/');
    }

    public function getPengumumanPost(){
    	return view('admin.postpengumuman');
    }

    public function getBeritaPost(){
    	return view('admin.postberita');
    }

    public function getTimebased(){
        $timebased = Product::where('product_type', 'App\Timebased')->with('product')->get();

    	return view('admin.timebased')->withData($timebased);
    }

    public function postTimebased(){
        $timebased = new Timebased();
        $timebased->masa_aktif = Input::get("aktif");
        $timebased->quota = Input::get('quota');
        $timebased->save();

        $product = new Product();
        $product->nama = Input::get('nama');
        $product->harga = Input::get('harga');
        $product->speed = Input::get('speed');
        $product->product_id = $timebased->id;
        $timebased->product()->save($product);

        Session::flash('message', 'Input Product Berhasil');

        return redirect('/administrator/timebased');
    }

    public function getVolumebased(){
        $volumebased = Product::where('product_type', 'App\Volumebased')->with('product')->get();

    	return view('admin.volumebased')->withData($volumebased);
    }

    public function postVolumebased(){
        $volumebased = new Volumebased();
        $volumebased->masa_aktif = Input::get("aktif");
        $volumebased->quota = Input::get('quota');
        $volumebased->save();

        $product = new Product();
        $product->nama = Input::get('nama');
        $product->harga = Input::get('harga');
        $product->speed = Input::get('speed');
        $product->product_id = $volumebased->id;
        $volumebased->product()->save($product);

        Session::flash('message', 'Input Product Berhasil');

        return redirect('/administrator/volumebased');
    }

    public function getUnlimited(){ 
        $unlimited = Product::where('product_type', 'App\Unlimited')->with('product')->get();

    	return view('admin.unlimited')->withData($unlimited);
    }   

    public function postUnlimited(){
        $unlimited = new Unlimited();
        $unlimited->fub = Input::get('fub');
        $unlimited->ds = Input::get('ds');
        $unlimited->save();

        $product = new Product();
        $product->nama = Input::get('nama');
        $product->harga = Input::get('harga');
        $product->speed = Input::get('speed');
        $product->product_id = $unlimited->id;
        $unlimited->product()->save($product);

        Session::flash('message', 'Input Product Berhasil');
        return redirect('/administrator/unlimited');
    }

    public function getSs(){
        $ss = Product::where('product_type', 'App\Ss')->with('product')->get();

        return view('admin.ss')->withData($ss);
    }

    public function postSs(){
        $ss = new Ss();
        $ss->masa_aktif = Input::get('aktif');
        $ss->quota = Input::get('quota');
        $ss->save();

        $product = new Product;
        $product->nama = Input::get('nama');
        $product->harga = Input::get('harga');
        $product->speed = Input::get('speed');
        $product->product_id = $ss->id;
        $ss->product()->save($product);

        Session::flash('message', 'Input Product Berhasil');
        return redirect('/administrator/ss');   
    }

    public function postUbahPaketNama(){
        $paket = Product::where('id', Input::get('pk'))->first();

        $paket->nama = Input::get('value');
        $paket->save();
    }

    public function postUbahPaketHarga(){
        $paket = Product::where('id', Input::get('pk'))->first();

        $paket->harga = Input::get('value');
        $paket->save();
    }

    public function postUbahPaketSpeed(){
        $paket = Product::where('id', Input::get('pk'))->first();

        $paket->speed = Input::get('value');
        $paket->save();
    }

    public function postUbahPaketDs(){
        $paket = Product::where('id', Input::get('pk'))->with('product')->first();

        $paket->product->ds = Input::get('value');
        $paket->product->save();
    }

    public function postUbahPaketFub(){
        $paket = Product::where('id', Input::get('pk'))->with('product')->first();

        $paket->product->fub = Input::get('value');
        $paket->product->save();
    }

    public function postUbahPaketMasaAktif(){
        $paket = Product::where('id', Input::get('pk'))->with('product')->first();

        $paket->product->masa_aktif = Input::get('value');
        $paket->product->save();
    }

    public function postUbahPaketQuota(){
        $paket = Product::where('id', Input::get('pk'))->with('product')->first();

        $paket->product->quota = Input::get('value');
        $paket->product->save();
    }

    public function postProductHapus(){
        $id = Input::get('id');

        $product = Product::where('id', $id)->with('product')->first();

        if(is_null($product)){
            Session::flash('messageError', 'Hapus Berita Gagal');
            return redirect('/administrator/index');
        }
        $product->product->delete();
        $product->delete();

        Session::flash('message', 'Hapus Berita Berhasil');
    }

    public function getUser(){
        $user = User::all();

        return view('admin.user')->withData($user);
    }

    public function postUser(){
        $user = new User;
        $user->nama = Input::get('nama');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->username = Input::get('username');
        $user->save();

        Session::flash('message', 'Input User Berhasil');

        return redirect('/administrator/user');
    }

    public function postUserHapus(){
        $id = Input::get('id');
        if(Auth::user()->id == $id){
            Session::flash('messageError', 'Hapus User Gagal');

            return 'fail';
        }


        $user = User::where('id', $id)->first();
        $user->delete();

        Session::flash('message', 'Hapus User Berhasil');

        return 'success';
    }

    public function getKantor(){
        $data = Kantor::first();
        $kontak = Kontak::orderBy('tipe', 'asc')->get();

        return view('admin.kantor')->withData($data)->withKontak($kontak);
    }

    public function postKantor(){
        $data = Kantor::first();

        if(is_null($data)){
            $data = new Kantor;
        }

        $data->nama = Input::get('nama');
        $data->alamat = Input::get('alamat');
        $data->jam_kerja = Input::get('jam_kerja');
        $data->hotline = Input::get('hotline');
        $data->sms_service = Input::get('sms_service');
        $data->save();

        Session::flash('message', 'Edit Profil Kantor Berhasil');

        return redirect('/administrator/kantor');
    }

    public function getProfil(){
        $user = Auth::user();
        return view('admin.profil')->withData($user);
    }

    public function postProfil(){
        $user = Auth::user();
        $user->nama = Input::get('nama');
        $password = Input::get('password');
        if(!is_null($password) && $password != ''){
            $user->password = Hash::make($password);
        }
        $user->save();

        Session::flash('message', 'Edit Profil Berhasil');
        return redirect('/administrator/profil');
    }

    public function postFoto(){
        $file = array('image' => Input::file('image'));
        $rules = array('image' => 'required');

        $validator = Validator::make($file, $rules);
        
        if($validator->fails()) {                
                Session::flash('messageError', 'Pilih Gambar Header');
            return redirect('/administrator/profil');
        } else {
            if(Input::file('image')->isValid()){
                $user = Auth::user();

                $path = storage_path().'/app/profil/';
                $extension = Input::file('image')->getClientOriginalExtension();

                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png'){
                    $fileName = $user->foto;

                    if($fileName == null || $fileName == 'profil.png')
                        $fileName = $user->id . Carbon::now()->format('YmdHis') . rand(1,99).'.'.$extension;
                    

                    Input::file('image')->move($path, $fileName);

                    $user->foto = $fileName;
                    $user->save();
                }else{
                    Session::flash('messageError', 'Gambar Tidak Sesusai');
                    return redirect('/administrator/header');
                }
            }else{
                Session::flash('messageError', 'Gambar Tidak Sesusai');
                return redirect('/administrator/header');
            }
        }
        Session::flash('message', 'Edit Foto Berhasil');
        return redirect('/administrator/profil');
    }

    public function postKontak(){
        $kontak = new Kontak();
        $kontak->telepon = Input::get('telepon');
        $kontak->tipe = Input::get('tipe');
        $kontak->save();

        Session::flash('message', 'Input Kontak Berhasil');
        return redirect('/administrator/kantor');
    }

    public function postEditKontak(){
        $id = Input::get('id');
        $data = Kontak::where('id', $id)->firstOrFail();
        $data->telepon = Input::get('telepon');
        $data->tipe = Input::get('tipe');
        $data->save();

        Session::flash('message', 'Edit Kontak Berhasil');
        return redirect('/administrator/kantor');
    }

    public function postKontakHapus(){
        $id = Input::get('id');
        $kontak = Kontak::where('id', $id)->firstOrFail();

        $kontak->delete();

        Session::flash('message', 'Hapus Kontak Berhasil');
        return redirect('/administrator/kantor');
    }
}