<?php namespace App\Http\Controllers;

use App\Entities\Template;
use App\User;
use Illuminate\Support\Facades\Request;
class UsersController extends Controller {
    
    public function index(Template $template){
        
        $view = view('users.index');
        $view->template= $template;
        return $view;
    }
    public function save(){
        
        $input=Request::all();
        $user = new User;
        $user->fill($input);
        $user->save();
        echo json_encode(array('response'=>'Successfully Saves'));
    }
}