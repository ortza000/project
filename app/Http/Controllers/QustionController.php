<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\qustion;
class QustionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = qustion::paginate(5);
        return view('qustion.index_admin', compact('users'));

    }
    public function index2()
    {
        $users = qustion::paginate(5);
        return view('qustion.index', compact('users'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('qustion.create');

    }
    // public function search(Request $request )
    // {

    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
          'qusname' => 'required',
          'qusdes' => 'required'

        ]
        );
        $user = new qustion(
          [
          'name_qus'    => $request->get('qusname'),
          'name_des'  => $request->get('qusdes')
          ]
        );
          $user->save();
          return redirect('/qustion');


    }

    public function search(Request $request )
    {
         $search = $request->get('search');
         $post = DB::table('qustion')->where('name_qus','like','%'.$search.'%')->paginate(5);
        return view('qustion.index_admin',['users' => $post]);
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
       $user = qustion::find($id);
       return view('qustion.edit',compact('user','id'));
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
      $this->validate($request,
      [
        'qusid' => 'required',
        'qusname' => 'required',
        'qusdes' => 'required'
      ]
      );
      $user = qustion::find($id);
      $user->id = $request->get('qusid');
      $user->name_qus = $request->get('qusname');
      $user->name_des = $request->get('qusdes');

        $user->save();
        return redirect('/qustion');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // dd($id);
      $user = qustion::find($id);
      qustion::destroy($id);

      return redirect('/qustion');
    }
    // public function AuthRouteAPI(Request $request){
    //     return $request->user();
    //  }
}
