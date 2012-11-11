<?php

class Snippets_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index($default_snippet = '')
    {
        return View::make('snippet.index')
                    ->with('snippet', $default_snippet);
    }    

	public function post_index()
    {
        $snippet = Input::get('snippet');

        //validate
        if(!Snippet::valid(array('snippet' => $snippet))) return Redirect::to_route('new_snippet');

        //save
        $record = Snippet::create(array(
            'snippet' => $snippet
        ));

        if( $record ) {
            return Redirect::to_route('show_snippet', $record->id);
        } else {
            return Redirect::to_route('new_snippet');
        }
    }    

	public function get_show($id)
    {
        $snippet = Snippet::find($id);
        return View::make('snippet.show')->with('snippet', $snippet);
    }    

    public function get_fork($id) {
        $snippet = Snippet::find($id);
        return $this->get_index($snippet->snippet);
    }

}