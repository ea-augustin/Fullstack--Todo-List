<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tasks = Auth::user()
          ->tasks()
          ->orderBy('category_id')
          ->orderByDesc('created_at')
          ->paginate(5);

      // return task index view with paginated tasks
      return view('tasks', [
          'tasks' => $tasks
      ]);
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
      switch ($id) {
        case '1':
          $cat = "Finances";
          break;

          case '2':
            $cat = "Démarches Administratives";
            break;

        default:
          $cat = "Divers";
          break;
      }

      session(['category_id' => $id]);
      //Link tasks to id.
      $idu=Auth::id();
      $tasks = Task::all()->where("category_id",$id)->where('user_id',$idu);
      return view('tasks')->with(
      'tasks', $tasks)->with('category', $cat);
      //  return $idu;
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
