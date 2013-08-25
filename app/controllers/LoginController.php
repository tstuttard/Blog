<?php

class LoginController extends BaseController {

    /**
     * @route /login
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View::make('login.index');
    }
}