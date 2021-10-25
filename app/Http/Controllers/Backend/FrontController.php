<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data = [];
        $data['current_time'] = date('d-m-Y,H:i:s');
        $data['site_title'] = 'Happy Life';
        $data['links'] = [
            'Facebook'=>'https://facebook.com',
            'Github'=>'https://github.com',
            'Linkedin'=>'https://linkedin.com',
            'Twitter'=>'https://twitter.com',
            'Youtube'=>'https://youtube.com',
        ];
       
        return view('index',$data);
    }
    public function post()
    {  $data = [];
        $data['current_time'] = date('d-m-Y,H:i:s');
        $data['site_title'] = 'Happy Life';
        $data['links'] = [
            'Facebook'=>'https://facebook.com',
            'Github'=>'https://github.com',
            'Linkedin'=>'https://linkedin.com',
            'Twitter'=>'https://twitter.com',
            'Youtube'=>'https://youtube.com',
        ];
        $data['post'] = [
        'title'=> 'This is a Sample blog post',
        'author' => 'January 1, 2014 by Rony',
        'description'=> 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

        Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
        Donec id elit non mi porta gravida at eget metus.
        Nulla vitae elit libero, a pharetra augue.
        Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
        
        Vestibulum id ligula porta felis euismod semper.
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        Maecenas sed diam eget risus varius blandit sit amet non magna.
        Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.
        
         
        About
        Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
        
        Archives
        March 2014
        February 2014
        January 2014
        December 2013
        November 2013
        October 2013
        September 2013
        August 2013
        July 2013
        June 2013
        May 2013
        April 2013
        Elsewhere
        GitHub
        Twitter
        '
        ];
        return view('post',$data);
    }
}
