<?php

namespace App\Http\Controllers;

use App\Horse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HorseController extends Controller
{

  public function index(){
    $this->middleware('checkRole:admin');
    $this->middleware('auth');
    $user = Auth::user();
    $user->authorizeRoles(['admin']);
    $horse = Horse::all();
    return view('create', compact('horse'));
  }

  public function create(Request $request){
    
    $horsdata = [
                    'name' => $request['name'],
                    'birthday' => $request['birthday'],
                    'father' => $request['father'],
                    'mother' => $request['mother'],
                    'trainingsessions' => $request['trainingsessions'],
                    'owner' => $request['owner']
                ];

    Horse::create($horsdata);

    $data = Horse::all();

    return view('home',['data'=>$data]);

  }

    public function show($id){
      $horse = Horse::find($id);
      return view('show')->with('horse', $horse);
      //return view('show',compact('horse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horse = Horse::find($id);
        return view('edit')->with('horse',$horse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $horse = Horse::find($id);
      $horse->name = $request->input('name');
      $horse->birthday = $request->input('birthday');
      $horse->father = $request->input('father');
      $horse->mother = $request->input('mother');
      $horse->trainingsessions = $request->input('trainingsessions');
      $horse->owner = $request->input('owner');

      $horse->save();

      return redirect('/home');
    }

    /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Horse  $horse
   * @return \Illuminate\Http\Response
   */
  public function destroy(Horse $horse)
  {
      $horse->delete();

      return redirect()->route('home')
                      ->with('success','Horse deleted successfully');
  }
}
