<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Constants\Category;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->session()->get('contact_input', []);
        return view('index', compact('input'));
    }

    public function confirm(ContactRequest $request)
    {
        $categoryLabel = Category::LIST[$request->category_id];
        $data = $request->all();
        $data['name'] = $request->last_name . '  ' . $request->first_name;
        $data['tel'] = $request->tel1 . $request->tel2 . $request->tel3;
        $genderList = [
            1 => '男性',
            2 => '女性',
            3 => 'その他'
        ];
        $genderLabel = $genderList[$request->gender] ?? '';
        $request->session()->put('contact_input', $request->all());
        return view('confirm', compact('data','genderLabel','categoryLabel'));
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create([
            'category_id' => $request->category_id,
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'gender'      => $request->gender,
            'email'       => $request->email,
            'tel'         => $request->tel,
            'address'     => $request->address,
            'building'    => $request->building,
            'detail'      => $request->content,
        ]);
        $request->session()->forget('contact_input');
        return redirect('/thanks');
    }
}
