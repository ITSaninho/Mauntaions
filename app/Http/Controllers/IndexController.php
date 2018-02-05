<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Comment;
use App\Contact;
use App\Gallery;
use App\Header;
use App\Journal;
use App\Menu;
use App\Order;
use App\Travel;
use App\User;
use App\Wanna;
use App\Work;
use App\Social;
use App\Company;
use App\Images;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('site.index');
    }

    public function getData()
    {
        $mountains = new Header();

        $mountains->header = Header::all();
        $mountains->about = About::all();
        $mountains->comment = Comment::all();
        //$mountains->contact = Contact::all();
        $mountains->gallery = Gallery::all();
        $mountains->journal = Journal::all();
        $mountains->menu = Menu::all();
        //$mountains->order = Order::all();
        $mountains->travel = Travel::all();
        //$mountains->user = User::all();
        $mountains->wanna = Wanna::all();
        $mountains->work = Work::all();
        $mountains->social = Social::all();
        $mountains->company = Company::all();

        return $mountains;

    }

    public function savecontact(Request $request)
    {
        $value = $request->only('name','phone','email');

        $contact = new Contact();
        $contact->name = $value['name'];
        if( ! $value['phone'] && $value['email']){
           $value['phone'] = '';
        } else if ($value['phone'] && ! $value['email']) {
            $value['email'] = '';
        }   
            $contact->phone = $value['phone'];
            $contact->email = $value['email'];
     
        return $contact->save() ? 'true' : 'false';
    }

    public function saveorder(Request $request)
    {
        $value = $request->only('name','phone');

        $order = new Order();
        $order->name = $value['name'];
        $order->phone = $value['phone'];
        return $order->save() ? 'true' : 'false';
    }

    public function noroute()
    {
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
