<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiResortController extends Controller
{
    public function index(){
        return json_encode(array(
            "resorts" => [
                array(
                    "id"=> 1,
                    "title" => "Shangri-La Boracay Resort and Spa",
                    "location"=> "Boracay Island, Aklan",
                    "description"=> "Shangri-La's Boracay Resort and Spa is a luxurious beachfront resort on Boracay Island, Philippines. It features spacious rooms with private balconies, multiple dining and bar options, and activities such as water sports, island hopping, yoga, and spa treatments. Popular for both leisure and business travelers seeking a memorable stay.",
                    "rating" => array(
                        "rate" => 4.7,
                        "reviews" => 2383
                    ),
                    "images" => array("https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/a5/54/39/aerial-view-of-shangri.jpg?w=1200&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/02/2d/b3/ca/infinity-pool.jpg?w=1200&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/02/2d/b3/c8/swimming-pool.jpg?w=1200&h=-1&s=1"),
                    "amenities"=> array("Free parking", "Free High Speed Internet (Wifi)", "Pool", "Free Breakfast", "Kids stay free"),
                    "contacts"=>
                        array(
                            "address" => "Barangay Yapak, Boracay Island, Malay, Aklan 5608, Philippines",
                            "phone" => "+63 36 288 4988",
                            "email" => "slbo@shangri-la.com",
                        ),
                    "room" => [
                        array( 
                            "title"=>"Deluxe Room",
                            "features"=> array("63 sqm including balcony", "High-speed Wi-Fi internet", "Sofa bed", "Marble bathroom"),
                            "amenities"=> array("Coffee and Tea Making", "Minibar", "37-Inch Flat Screen Cable TV", "In-Room Locker"),
                            "images"=> "https://sitecore-cd-imgr.shangri-la.com/MediaFiles/7/E/0/%7B7E061A14-57FE-48C7-B0E4-25AFAE10009A%7D4e9d9f297b474d3195b10586895bd044.jpg",
                            "price"=>"26,125",
                        ),
                        array( 
                            "title"=>"Deluxe Seaview Room",
                            "features"=> array("63 sqm including balcony", "High-speed Wi-Fi", "Sofa bed", "Marble bathroom", "Views of trees"),
                            "amenities"=> array("Coffee and Tea Making", "Minibar", "37-Inch Flat Screen Cable TV", "In-Room Locker"),
                            "images"=> "https://sitecore-cd-imgr.shangri-la.com/MediaFiles/1/9/7/%7B197D101B-48FE-4B14-A436-8E946B524D65%7D191029_SLBO_Deluxe_Seaview_Room.jpg",
                            "price"=>"28,000",
                        ),
                        array( 
                            "title"=>"Premier Seaview Room",
                            "features"=> array("63 sqm including balcony", "High-speed Wi-Fi", "Sofa bed", "Marble bathroom", "Closer to Bunga Beach"),
                            "amenities"=> array("Coffee and Tea Making", "Minibar", "37-Inch Flat Screen Cable TV", "In-Room Locker"),
                            "images"=> "https://sitecore-cd-imgr.shangri-la.com/MediaFiles/8/9/A/%7B89A8E428-A3CE-4C8D-AE21-FF424DD9AEBF%7Dd12fd16e599147e4bb7a835ee8beaf6f.jpg",
                            "price"=>"30,000",
                        )]
                    
                        ),
                        array(
                            "id"=> 2,
                            "title" => "El Nido Resorts Miniloc Island",
                            "location"=> "El Nido, Palawan",
                            "description"=> "El Nido Resorts Miniloc Island is a luxurious Palawan resort with traditional overwater cottages and stunning views. Guests can enjoy snorkeling, diving, kayaking, and island hopping, and dine on local and international cuisine at the restaurant. The poolside bar serves refreshing cocktails. With an idyllic location and top-notch amenities, it's perfect for an unforgettable island getaway.",
                            "rating" => array (
                                "rate" => 4.8,
                                "reviews" => 768
                            ),
                            "images" =>["https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/03/e0/3d/miniloc-island-water.jpg?w=700&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/03/de/ac/miniloc-island-s-newly.jpg?w=700&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/41/04/fd/miniloc-island.jpg?w=700&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/41/05/4b/miniloc-island.jpg?w=700&h=-1&s=1" ],
                            "amenities"=> ["Free internet", "Canoeing", "Spa", "Free airport transportation", "Diving"],
                            "contacts"=>
                                array(
                                    "address"=> "Miniloc Island, El Nido, Palawan, Philippines",
                                    "phone"=> "+63 2 8 771 97 94, +63 917 843 7908",
                                    "email"=> "holiday@elnidoresorts.com",
                                ),
                            "room" => [
                                array( 
                                    "title"=>"Deluxe Sea View",
                                    "features"=> ["1 double bed", "Room size: 43 m2", "Ocean View", "Balcony/terrace", "Free Wi-fi"],
                                    "amenities"=> ["Satellite/cable channels", "air-conditioning", "mini bar", "in-room safe box", "Toiletries"],
                                    "images"=> "https://pix8.agoda.net/hotelImages/9714/-1/49634c39dd37c04b81c1b4978c00871a.jpg?ca=13&ce=1&s=1024x768",
                                    "price"=>"26,586",
                                ),
                                array( 
                                    "title"=>"Garden cottage",
                                    "features"=> ["1 double bed", "Room size: 28 m2", "Garden view", "Balcony.terrace", "Free Wifi"],
                                    "amenities"=> ["Satellite/cable channels", "air-conditioning", "mini bar", "in-room safe box", "Toiletries"],
                                    "images"=> "https://q-xx.bstatic.com/xdata/images/hotel/840x460/16994357.jpg?k=e5bd504ae5897def6b4744eebb52b17b6e78176f7607f60c07e933a4ba1820b3&o=",
                                    "price"=>"42,392"
                                )]
                                ),
                                array(
                                    "id"=> 3,
                                    "title" => "Eskaya Beach Resort and Spa",
                                    "location"=> "Panglao Island, Bohol",
                                    "description"=> "Eskaya Beach Resort and Spa is a luxurious boutique resort on tranquil Panglao Island in Bohol, Philippines. Villas feature private pools, outdoor showers, and lush gardens. Guests can enjoy spa treatments, yoga, and a private beach, as well as international and Filipino cuisine at the restaurant and bar. With personalized service and luxurious amenities, Eskaya is perfect for a relaxing escape.",
                                    "rating" => array (
                                        "rate" => 4.2,
                                        "reviews" => 181
                                    ),
                                    "images" =>["https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/33/96/7a/photo9jpg.jpg?w=1200&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/a8/61/d5/photo0jpg.jpg?w=1200&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/33/96/6b/photo0jpg.jpg?w=1200&h=-1&s=1", "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/06/b8/7e/eskaya-beach-resort-spa.jpg?w=1200&h=-1&s=1"],
                                    "amenities"=> ["Free Parking", "Free High Speed Internet", "Free breakfast", "Free airport transportation", "Pool" ],
                                    "contacts"=>
                                        array(
                                            "address"=> "Barangay Tawala, Panglao Island, Bohol, 6340 Philippines",
                                            "phone"=> "+63 38 502 9516",
                                            "email"=> "reservations@eskayabeach.com",
                                        ),
                                    "room" => [
                                        array( 
                                            "title"=>"Deluxe Villa with Private Pool",
                                            "features"=> array("1 king bed", "Room size: 90 m2", "Sea view", "Private pool", "Free Wi-fi"),
                                            "amenities"=> ["Satellite/cable channels", "video game console", "air conditioning", "coffee/tea maker", "in-room safe box"],
                                            "images"=> "https://pix8.agoda.net/hotelImages/4887735/78589468/ed421f50be630e351e2dee21730fe0bb.jpg?ca=23&ce=0&s=1024x768",
                                            "price"=>"17,668",
                                        ),
                                        array( 
                                            "title"=>"Deluxe Villa",
                                            "features"=> ["Room size: 90m2", "Free Wi-fi"],
                                            "amenities"=> ["Satellite/cable channels", "video game console", "air conditioning", "Mini-bar", "in-room safe box"],
                                            "images"=> "https://sitecore-cd-imgr.shangri-la.com/MediaFiles/1/9/7/%7B197D101B-48FE-4B14-A436-8E946B524D65%7D191029_SLBO_Deluxe_Seaview_Room.jpg",
                                            "price"=>"28,000",
                                        ),
                                        array( 
                                            "title"=>"Premier Seaview Room",
                                            "features"=> ["63 sqm including balcony", "High-speed", "Sofa bed", "Marble bathroom", "Closer Punta Bunga Beach"],
                                            "amenities"=> ["Coffee and Tea Making", "Minibar", "37-Inch Flat Screen Cable TV", "In-Room Locker"],
                                            "images"=> "https://sitecore-cd-imgr.shangri-la.com/MediaFiles/8/9/A/%7B89A8E428-A3CE-4C8D-AE21-FF424DD9AEBF%7Dd12fd16e599147e4bb7a835ee8beaf6f.jpg",
                                            "price"=>"30,000",
                                        )]
                                )

            ]
         ));
    }

    public function show ($id) {
        //logic get resort from database based on resort id
        //temporary
        return json_encode(array(
            "id"=> 1,
            "Title" => "Shangri-La Boracay Resort and Spa",
             "Location"=> "Boracay Island, Aklan",
        ));
    }
}
