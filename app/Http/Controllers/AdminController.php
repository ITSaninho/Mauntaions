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
use App\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input as Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function getAdminData()
    {
        $admin_data = new Header();

        $admin_data->contact = Contact::all();
        $user[0] = Auth::user();
        $admin_data->order = Order::all();
        $admin_data->user = $user;
        $admin_data->images = Images::all();
        return $admin_data;

    }

    public function saveheader(Request $request)
    {

        $data = $request->all();
        foreach ($data as $value) {
            $header = Header::find($value['id']);
            $header->description = $value['description'];
            $header->button_value = $value['button_value'];
            return $header->save() ? 'true' : 'false';
        }      
    }

    public function saveabout(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $about = About::find($value['id']);
            $about->title = $value['title'];
            $about->description = $value['description'];
            return $about->save() ? 'true' : 'false';
        } 
    }

    public function savecomment(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $comment = Comment::find($value['id']);
            $comment->name = $value['name'];
            $comment->work = $value['work'];
            $comment->text = $value['text'];
            $comment->img = $value['img'];
            return $comment->save() ? 'true' : 'false';
        } 
    }

    public function savegallery(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $gallery = Gallery::find($value['id']);
            $gallery->title = $value['title'];
            $gallery->img = $value['img'];
            $gallery->position = $value['position'];
            return $gallery->save() ? 'true' : 'false';
        } 
    }

    public function savejournal(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $journal = Journal::find($value['id']);
            $journal->title = $value['title'];
            $journal->description = $value['description'];
            $journal->number = $value['number'];
            $journal->img = $value['img'];
            $journal->icon = $value['icon'];
            return $journal->save() ? 'true' : 'false';
        } 
    }

    public function savetravel(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $travel = Travel::find($value['id']);
            $travel->title = $value['title'];
            $travel->description = $value['description'];
            $travel->rating = $value['rating'];
            $travel->price = $value['price'];
            $travel->last_price = $value['last_price'];
            $travel->img = $value['img'];
            $travel->position = $value['position'];
            return $travel->save() ? 'true' : 'false';
        } 
    }

    public function savewanna(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $wanna = Wanna::find($value['id']);
            $wanna->title = $value['title'];
            $wanna->description = $value['description'];
            return $wanna->save() ? 'true' : 'false';
        }
    }

    public function savework(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $work = Work::find($value['id']);
            $work->title = $value['title'];
            $work->description = $value['description'];
            $work->img = $value['img'];
            $work->position = $value['position'];
            return $work->save() ? 'true' : 'false';
        }
    }

    public function savesocial(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $work = Social::find($value['id']);
            $work->title = $value['title'];
            $work->img = $value['img'];
            $work->position = $value['position'];
            return $work->save() ? 'true' : 'false';
        }
    }

    public function savecompany(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {
            $work = Social::find($value['id']);
            $work->img = $value['img'];
            $work->position = $value['position'];
            return $work->save() ? 'true' : 'false';
        }
    }

    public function saveuser(Request $request)
    {
        $data = $request->all();
        foreach ($data as $value) {

            $user_info = User::find($value['id']);
            $user_info->name = $value['name'];
            $user_info->email = $value['email'];
            if(!empty($value['password'])){
                $user_info->password = bcrypt($value['password']);
            }
            return $user_info->save() ? 'true' : 'false';
        }
    }

    public function upload_img()
    {

        $images = new Images();
        if(Input::hasFile('file')){
            $img = Input::file('file');
            //mkdir("assets/img", 0755);
            $img->move('assets/img', $img->getClientOriginalName());
            $images->title = $img->getClientOriginalName();
            $images->save();
            return redirect()->back();
        }

    }

    public function delete(Request $request)
    {

        $data = $request->all();

        if($data['table'] == 'comment'){
            $value = Comment::find($data['id']);
            return $value->delete() ? 'true' : 'false';
        }

        if($data['table'] == 'work'){
            $value = Work::find($data['id']);
            return $value->delete() ? 'true' : 'false';
        }

        if($data['table'] == 'travel'){
            $value = Travel::find($data['id']);
            return $value->delete() ? 'true' : 'false';
        }

    }

    public function addjournal(Request $request)
    {
        $data = $request->all();

        $journal = new Journal();
        $journal->title = $data['title'];
        $journal->description = $data['description'];
        $journal->number = $data['number'];
        $journal->img = $data['img'];
        $journal->icon = $data['icon'];
        return $journal->save() ? 'true' : 'false';
    }


    public function addwork(Request $request)
    {
        $data = $request->all();

        $work = new Work();
        $work->title = $data['title'];
        $work->description = $data['description'];
        $work->img = $data['img'];
        $work->position = $data['position'];
        return $work->save() ? 'true' : 'false';
    }

    public function addtravel(Request $request)
    {
        $data = $request->all();

        $last_position = Travel::all()->max('position');

        $travel = new Travel();
        $travel->title = $data['title'];
        $travel->description = $data['description'];
        $travel->rating = $data['rating'];
        $travel->price = $data['price'];
        $travel->last_price = $data['last_price'];
        $travel->img = $data['img'];
        $travel->position = $last_position;
        return $travel->save() ? 'true' : 'false';
    }

    public function addcomment(Request $request)
    {
        $data = $request->all();

        $comment = new Comment();
        $comment->name = $data['name'];
        $comment->work = $data['work'];
        $comment->text = $data['text'];
        $comment->img = $data['img'];
        return $comment->save() ? 'true' : 'false';
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
