<?php
use SilverStripe\ORM\DataObject;
use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\View\ArrayData;
use SilverStripe\Forms\Form;
use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\Security\PermissionProvider;
use SilverStripe\Forms\DateField;
use SilverStripe\ORM\DB;
use SilverStripe\ORM\Queries\SQLSelect;
use SilverStripe\Security\Member;
//use guzzlehttp\guzzle;
use GuzzleHttp\Psr7\Request;
//use GuzzleHttp\GuzzleClient;
use GuzzleHttp\Client;
//use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Guzzle;
use GuzzleHttp\ClientInterface;
//require 'vendor/autoload.php';
header("Content-Type:application/json");

class SkippitdbTest extends Page{
    
}

class SkippitdbTestController extends PageController{
    private static $allowed_actions = ['returnAPI','returnAPIStatus',
    ];
    // private static $url_handlers = array(
    //     'returnAPIStatus/$Action/$ID' => 'returnAPIStatus'
    //     );
    public function returnAPIStatus(){
            $ctoken = $this->request->param('token');
            $token='skippittoken';
      if($ctoken==$token){
            $status = 200;
            $status_message = "OK";
      }
      else 
      {   
            $status = 400;
            $status_message = "Bad Request";
      }
      $this->returnAPI($status,$status_message);
    }
    
    public function returnAPI($status, $status_message){
        header("HTTP/1.1 $status $status_message");
        if($status==200){
        // $client = new Client([
        //     // Base URI is used with relative requests
        //     'base_uri' => 'http://httpbin.org',
        //     // You can set any number of default request options.
        //     'timeout'  => 2.0,
        // ]);
        //    $response = $client->get('http://httpbin.org/get');
        $count = SkippitSigndb::get();
        //$count = DB::query('SELECT username,email FROM "SkippitSigndb"');
        $jsonData = array(); 
        $email = array();
        $name = array();
        $username = array();
        $password = array();
        $friendemail = array();
        $peoplebehine = array();
        $peopleafter = array();
        $paint = array();
        $music = array();
        $book = array();
        $game = array();
        $sport = array();
        $movie = array();
        $introduction = array();
        $schedulefree = array();
        $scheduledate = array();
        $chat = array();
        $match = array();
        $unmatch = array();
        $datedrink = array();
        $datemovie = array();
        $datedinner = array();
        $dateeventtime = array();
        $offers = array();
        $active = array();
        $address = array();
        $hobbies = array();
        $photo1 = array();
        $photo2= array();
        $photo3 = array();
        $returnData = array();
        
    // foreach($count as $item) {
        $email = SkippitSigndb::get()->column('email');
        $email = json_encode($email);
        $name = SkippitSigndb::get()->column('name');
        $name = json_encode($name);
        $username = SkippitSigndb::get()->column('username');
        $username = json_encode($username);
        $password = SkippitSigndb::get()->column('password');
        $password = json_encode($password);
        $friendemail = SkippitSigndb::get()->column('friendemail');
        $friendemail = json_encode($friendemail);
        $peoplebehine = SkippitSigndb::get()->column('peoplebehine');
        $peoplebehine = json_encode($peoplebehine);
        $peopleafter = SkippitSigndb::get()->column('peopleafter');
        $peopleafter = json_encode($peopleafter);
        $paint = SkippitSigndb::get()->column('paint');
        $paint = json_encode($paint);
        $music = SkippitSigndb::get()->column('music');
        $music = json_encode($music);
        $book = SkippitSigndb::get()->column('book');
        $book = json_encode($book);
        $game = SkippitSigndb::get()->column('game');
        $game = json_encode($game);
        $sport = SkippitSigndb::get()->column('sport');
        $sport = json_encode($sport);
        $movie = SkippitSigndb::get()->column('movie');
        $movie = json_encode($movie);
        $introduction = SkippitSigndb::get()->column('introduction');
        $introduction = json_encode($introduction);
        $schedulefree = SkippitSigndb::get()->column('schedulefree');
        $schedulefree = json_encode($schedulefree);
        $scheduledate = SkippitSigndb::get()->column('scheduledate');
        $scheduledate = json_encode($scheduledate);
        $chat = SkippitSigndb::get()->column('chat');
        $chat = json_encode($chat);
        $match = SkippitSigndb::get()->column('match');
        $match = json_encode($match);
        $unmatch = SkippitSigndb::get()->column('unmatch');
        $unmatch = json_encode($unmatch);
        $datedrink = SkippitSigndb::get()->column('datedrink');
        $datedrink = json_encode($datedrink);
        $datemovie = SkippitSigndb::get()->column('datemovie');
        $datemovie = json_encode($datemovie);
        $datedinner = SkippitSigndb::get()->column('datedinner');
        $datedinner = json_encode($datedinner);
        $dateeventtime = SkippitSigndb::get()->column('dateeventtime');
        $dateeventtime = json_encode($dateeventtime);
        $offers = SkippitSigndb::get()->column('offers');
        $offers = json_encode($offers);
        $active = SkippitSigndb::get()->column('active');
        $active = json_encode($active);
        $address = SkippitSigndb::get()->column('address');
        $address = json_encode($address);
        $hobbies = SkippitSigndb::get()->column('hobbies');
        $hobbies = json_encode($hobbies);
        $photo1 = SkippitSigndb::get()->column('photo1');
        $photo1 = json_encode($photo1);
        $photo2= SkippitSigndb::get()->column('photo2');
        $photo2 = json_encode($photo2);
        $photo3 = SkippitSigndb::get()->column('photo3');
        $photo3 = json_encode($photo3);
        $video = SkippitSigndb::get()->column('video');
        $video = json_encode($video);
        
        $returnData = ['Email:'.$email ,'Name:'.$name,'Username:'.$username,
        'Password:'.$password,'Friend"s Email:'.$friendemail,"No of people behind ".$name.":".$peoplebehine,
        'No of people after'.$name.":".$peopleafter,"Favourite Painting:".$paint,"Favourite Music:".$music,"Favourite Book:".$book,
        "Favourite Game:".$game,"Favourite Sport:".$sport,"Favourite Movie:".$movie,
        "Introduction:".$introduction,"Free Schedule:".$schedulefree,"Date Schedule on:".$scheduledate,"Recent Chats:".$chat,"Profile unmatched:".$unmatch,
        "Drink on date:".$datedrink,"Movie on date:".$datemovie,"Dinner on date:".$datedinner,
        "Date time".$dateeventtime,"Offers:".$offers,"Status:".$active,"Residence:".$address,"Hobbies:".$hobbies,
        "Photo URL1:".$photo1,"Photo URL2:".$photo2,"PhotoURL3:".$photo3,"Video URL:".$video
        ];
        //$returnData = json_encode(str_replace('\\', '',$returnData));
        // $returnData['status']=$status;
        // $returnData['status_message'] = $status_message
        echo json_encode($returnData);
    }
        else 
        {
            echo $status_message;   
        }
    } 
          
}





