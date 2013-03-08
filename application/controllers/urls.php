<?php

class Urls_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
    }

	public function post_create()
    {
        // Validate

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

	public function get_show()
    {

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