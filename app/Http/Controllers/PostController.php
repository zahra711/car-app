<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       dd('idf');
//////       $posts=Post::all();
        return view('home.add');

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


//        $this->check();

//            $data = $request->except('_token');

//            unset($data['file1']);
//            unset($data['file2']);
//            unset($data['file3']);


//            $data['packages'] = implode(',', (array) $request->get('packages'));


        $validated = $request->validate([
            'company' =>'required|max:255',
            'model' => 'required|max:255',
            'year' =>'required|max:255',
            'fuel' => 'required|max:255',
            'transfer' => 'required|max:255',
            'cilandr' =>'required|max:255',
            'VIN' => 'required|max:255',
            'color' => 'required|max:255',
            'price' =>'required|max:255',
            'packages' => 'required|max:255',
            'img' => 'required|max:255',
//            'user_id' => null
        ]);


        for ($i = 1; $i <= 3; $i++) {
            $ext = $request->file('file' . $i)->extension();
            $name = 'pic' . $i . time() . '_' . $ext;
            $file[] = $request->file('file' . $i)->move("image", $name);
            if ($i == 1)
                $picname1 = $name;
            elseif ($i == 2)
                $picname2 = $name;
            elseif ($i = 3)
                $picname3 = $name;
        }
        $picnames = $picname1 . ',' . $picname2 . ',' . $picname3;
        $posts = Post::create(
            ['company' => $request->post('company'),
                'model' => $request->post('model'),
                'year' => $request->post('year'),
                'fuel' => $request->post('fuel'),
                'transfer' => $request->post('transfer'),
                'cilandr' => $request->post('cilandr'),
                'VIN' => $request->post('VIN'),
                'color' => $request->post('color'),
                'price' => $request->post('price'),
                'packages' => implode(',', (array)$request->post('packages')),
                'img' => $picnames,
                'user_id' => null]
        );

        return back()->with('message','خودرو باموفقیت درسیستم ثبت شد .');
//        dd('save');
//        $insert->update([
//                'img' =>
//          ]);
//            $ext1 = $request->file('file1')->extension();
//            $file1 = $request->file('file1')->move(public_path()."/image",  'picyek'.time().'_'. $ext1);
//
//            $ext2 = $request->file('file2')->extension();
//            $file2 = $request->file('file2')->move(public_path()."/image",  'picdo'.time().'_'. $ext2);
//
//            $ext3 = $request->file('file3')->extension();
//            $file3 = $request->file('file3')->move(public_path()."/image",  'picse'.time().'_'. $ext3);


//            $insert->update([
//                'img' => $file1.','.$file2.','.$file3
//            ]);

//


////
////
//
//       Post::create($input);
//        return redirect()->route('PostController@indedx');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edir', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('fgkfl', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
