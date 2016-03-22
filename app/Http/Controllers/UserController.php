<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

Use \App\User;
use \App\UserTransformer;

use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;


class UserController extends ApiGuardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $apiMethods = [
          'all' => [
              'keyAuthentication' => false
          ],
          'show' => [
            'keyAuthentication' => false
          ],
          'store' => [
            'keyAuthentication' => false
          ],
      ];
    public function all()
    {
      $users = User::all();
      return $this->response->withCollection($users, new UserTransformer);

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

      try {

          $user = User::findOrFail($id);

          return $this->response->withItem($user, new UserTransformer);

      } catch (ModelNotFoundException $e) {

          return $this->response->errorNotFound();

      }
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
