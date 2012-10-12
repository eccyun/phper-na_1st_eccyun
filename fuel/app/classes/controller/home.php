<?php

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
        $data['article'] = Model_Article::find()->order_by('id', 'desc')->get();

		$this->template->title = 'ぺちぱな。　はじまり';
		$this->template->content = View_Smarty::forge('home/index', $data);
	}

}
