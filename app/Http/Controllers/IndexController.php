<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
  
    function Store (){
        $products = array(
            (object) [
              'id' => 1,
              'name' => 'iphone 1',
              'price' => 10000
            ],
            (object) [
                'id' => 2,
                'name' => 'iphone 2',
                'price' => 10000
              ],
              (object) [
                'id' => 3,
                'name' => 'iphone 3',
                'price' => 10000
              ],
               (object) [
                'id' => 4,
                'name' => 'iphone 4',
                'price' => 10000
              ],
              (object) [
                'id' => 5,
                'name' => 'Watch 1',
                'price' => 5000
              ], (object) [
                'id' => 6,
                'name' => 'Watch 2',
                'price' => 5000
              ], (object) [
                'id' => 7,
                'name' => 'Watch 3',
                'price' => 5000
              ], (object) [
                'id' => 8,
                'name' => 'Watch 4',
                'price' => 5000
              ], (object) [
                'id' => 9,
                'name' => 'Wear 1',
                'price' => 200
              ], (object) [
                'id' => 10,
                'name' => 'Wear 2',
                'price' => 200
              ], (object) [
                'id' => 11,
                'name' => 'Wear 3',
                'price' => 200
              ], (object) [
                'id' => 12,
                'name' => 'Wear 4',
                'price' => 200
              ]
          );

          $categories=['Phones','Watches','Sport Wear','Other'];

          return view ('hello',['products'=>$products],['categories'=>$categories]);
          

    }
 public function prod_details($id){
    $products = array(
        (object) [
          'id' => 1,
          'name' => 'iphone 1',
          'price' => 10000
        ],
        (object) [
            'id' => 2,
            'name' => 'iphone 2',
            'price' => 10000
          ],
          (object) [
            'id' => 3,
            'name' => 'iphone 3',
            'price' => 10000
          ],
           (object) [
            'id' => 4,
            'name' => 'iphone 4',
            'price' => 10000
          ],
          (object) [
            'id' => 5,
            'name' => 'Watch 1',
            'price' => 5000
          ], (object) [
            'id' => 6,
            'name' => 'Watch 2',
            'price' => 5000
          ], (object) [
            'id' => 7,
            'name' => 'Watch 3',
            'price' => 5000
          ], (object) [
            'id' => 8,
            'name' => 'Watch 4',
            'price' => 5000
          ], (object) [
            'id' => 9,
            'name' => 'Wear 1',
            'price' => 200
          ], (object) [
            'id' => 10,
            'name' => 'Wear 2',
            'price' => 200
          ], (object) [
            'id' => 11,
            'name' => 'Wear 3',
            'price' => 200
          ], (object) [
            'id' => 12,
            'name' => 'Wear 4',
            'price' => 200
          ]
      );

    //    $product= array_search($id, $products);
    // $product = array_map(function($id) { return $id->id;}, $products);
    foreach ($products as $obj ) {
        if ($obj->id==$id) {
            $product = $obj;
        }
      

    }
    return view('ProductDetails',['product'=>$product]);
 }
  

     function Phones(){
    $products = array(
        (object) [
          'id' => 1,
          'name' => 'iphone 1',
          'price' => 10000
        ],
        (object) [
            'id' => 2,
            'name' => 'iphone 2',
            'price' => 10000
          ],
          (object) [
            'id' => 3,
            'name' => 'iphone 3',
            'price' => 10000
          ],
           (object) [
            'id' => 4,
            'name' => 'iphone 4',
            'price' => 10000
          ],
          (object) [
            'id' => 5,
            'name' => 'Watch 1',
            'price' => 5000
          ], (object) [
            'id' => 6,
            'name' => 'Watch 2',
            'price' => 5000
          ], (object) [
            'id' => 7,
            'name' => 'Watch 3',
            'price' => 5000
          ], (object) [
            'id' => 8,
            'name' => 'Watch 4',
            'price' => 5000
          ], (object) [
            'id' => 9,
            'name' => 'Wear 1',
            'price' => 200
          ], (object) [
            'id' => 10,
            'name' => 'Wear 2',
            'price' => 200
          ], (object) [
            'id' => 11,
            'name' => 'Wear 3',
            'price' => 200
          ], (object) [
            'id' => 12,
            'name' => 'Wear 4',
            'price' => 200
          ]
      );
      $categories=['Phones','Watches','Sport Wear','Other'];
        $phones= array_slice($products, 0, 4) ;
        
        return view('ProductList',['products'=>$phones],['categories'=>$categories]);
        // return view('ProductList',['categories'=>$categories]);
     }


     function Watches(){
        $products = array(
            (object) [
              'id' => 1,
              'name' => 'iphone 1',
              'price' => 10000
            ],
            (object) [
                'id' => 2,
                'name' => 'iphone 2',
                'price' => 10000
              ],
              (object) [
                'id' => 3,
                'name' => 'iphone 3',
                'price' => 10000
              ],
               (object) [
                'id' => 4,
                'name' => 'iphone 4',
                'price' => 10000
              ],
              (object) [
                'id' => 5,
                'name' => 'Watch 1',
                'price' => 5000
              ], (object) [
                'id' => 6,
                'name' => 'Watch 2',
                'price' => 5000
              ], (object) [
                'id' => 7,
                'name' => 'Watch 3',
                'price' => 5000
              ], (object) [
                'id' => 8,
                'name' => 'Watch 4',
                'price' => 5000
              ], (object) [
                'id' => 9,
                'name' => 'Wear 1',
                'price' => 200
              ], (object) [
                'id' => 10,
                'name' => 'Wear 2',
                'price' => 200
              ], (object) [
                'id' => 11,
                'name' => 'Wear 3',
                'price' => 200
              ], (object) [
                'id' => 12,
                'name' => 'Wear 4',
                'price' => 200
              ]
          );
            $watches= array_slice($products, 4, 4) ;
            $categories=['Phones','Watches','Sport Wear','Other'];

            return view('ProductList',['products'=>$watches],['categories'=>$categories]);
            // return view('ProductList',['categories'=>$categories]);
         }

         function SportWear(){
            $products = array(
                (object) [
                  'id' => 1,
                  'name' => 'iphone 1',
                  'price' => 10000
                ],
                (object) [
                    'id' => 2,
                    'name' => 'iphone 2',
                    'price' => 10000
                  ],
                  (object) [
                    'id' => 3,
                    'name' => 'iphone 3',
                    'price' => 10000
                  ],
                   (object) [
                    'id' => 4,
                    'name' => 'iphone 4',
                    'price' => 10000
                  ],
                  (object) [
                    'id' => 5,
                    'name' => 'Watch 1',
                    'price' => 5000
                  ], (object) [
                    'id' => 6,
                    'name' => 'Watch 2',
                    'price' => 5000
                  ], (object) [
                    'id' => 7,
                    'name' => 'Watch 3',
                    'price' => 5000
                  ], (object) [
                    'id' => 8,
                    'name' => 'Watch 4',
                    'price' => 5000
                  ], (object) [
                    'id' => 9,
                    'name' => 'Wear 1',
                    'price' => 200
                  ], (object) [
                    'id' => 10,
                    'name' => 'Wear 2',
                    'price' => 200
                  ], (object) [
                    'id' => 11,
                    'name' => 'Wear 3',
                    'price' => 200
                  ], (object) [
                    'id' => 12,
                    'name' => 'Wear 4',
                    'price' => 200
                  ]
              );
                $SportWear= array_slice($products, 8, 12) ;
                $categories=['Phones','Watches','Sport Wear','Other'];

                return view('ProductList',['products'=>$SportWear],['categories'=>$categories]);
                // return view('ProductList',['categories'=>$categories]);
             }


}
