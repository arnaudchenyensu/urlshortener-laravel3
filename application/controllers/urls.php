<?php

class Urls_Controller extends Base_Controller {

	public $restful = true;

	public function post_create()
    {
        // Validate
        $validation = Url::validate(Input::get());
        if($validation!==true)
            return Redirect::to('/')->with_errors($validation->errors);

        // If the url is already in the table
        $url = Input::get('url');
        $shortened = Url::where_url($url)->first();
        if($shortened)
            return View::make('url.show')->with('shortened', $shortened->shortened);

        // Else, insert into the urls table
        $shortened = Url::getUniqueUrl();
        Url::create(array(
            'url' => $url,
            'shortened' => $shortened));
        return View::make('url.show')->with('shortened', $shortened);
    }

	public function get_show($shortened)
    {
        // If the url exist
        $url = Url::where_shortened($shortened)->first();
        if($url)
            return Redirect::to($url->url);
        // Else
        return Response::error('404');
    }

	public function get_edit()
    {

    }

	public function get_new()
    {
        return View::make('url.new');
    }

	public function put_update()
    {

    }

	public function delete_destroy()
    {

    }

}