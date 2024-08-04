<?php

namespace App\classes;

use App\classes\Category;
class Product
{
    public $res=[];
    public function detailsProduct($id)
    {
        $products = $this->allProduct();
        foreach ($products as $product) {
            if ($product['id']==$id) {
                $category= new Category();
                $categoryById=$category->categoryById($product['CategoryId']);
                $product['name']=$categoryById['category_name'];
                return $product;
            }
        }
    }

    public function productByCategory($catId)
    {
      $products = $this->allProduct();
      foreach ($products as $product) {
          if ($product['CategoryId']==$catId) {
              array_push($this->res,$product);
          }
      }
      return $this->res;
    }

 public function allProduct()
 {
     return[
         0=>[
             'id'=>1,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'660 Tk',
             'image'=>'1.jpg',
             'description'=>'Bat Man',
             ],
         1=>[
             'id'=>2,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'670 Tk',
             'image'=>'2.jpg',
             'description'=>'Vigo Man',
             ],
         2=>[
             'id'=>3,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'999 TK',
             'image'=>'3.jpg',
             'description'=>'Super Man',
         ],
         3=>[
             'id'=>4,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'775 Tk',
             'image'=>'4.jpg',
             'description'=>'X Man',
         ],
         4=>[
             'id'=>5,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'1700 Tk',
             'image'=>'5.jpg',
             'description'=>'Captain America',
            ],
         5=>[
             'id'=>6,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'1699 TK',
             'image'=>'6.jpg',
             'description'=>'Black Panther',
         ],
         6=>[
             'id'=>7,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'2200 TK',
             'image'=>'7.jpg',
             'description'=>'X-Men',
         ],

         7=>[
             'id'=>7,
             'CategoryId'=>1,
             'name'=>'Man Fashion',
             'price'=>'1576 TK',
             'image'=>'8.jpg',
             'description'=>'Ghost Rider',
         ],
         8=>[
                 'id'=>8,
                 'CategoryId'=>2,
                 'name'=>'Woman Fashion',
                 'price'=>'1390 TK',
                 'image'=>'9.jpg',
                  'description'=>'Catwoman',
         ],
         9=>[
             'id'=>9,
             'CategoryId'=>2,
             'name'=>' Woman Fashion',
             'price'=>'1199 TK',
             'image'=>'10.jpg',
             'description'=>' Wonder Woman Full series',
             ],
         10=>[
             'id'=>10,
             'CategoryId'=>2,
             'name'=>'  Woman Fashion',
             'price'=>'1999 TK',
             'image'=>'11.jpg',
             'description'=>'Supergirl Full series',
             ],
         11=>[
             'id'=>11,
             'CategoryId'=>2,
             'name'=>'Invisible Woman Woman Fashion',
             'price'=>'2176 TK',
             'image'=>'12.jpg',
             'description'=>' Invisible Woman Full series',
              ],
         12=>[
             'id'=>12,
             'CategoryId'=>2,
             'name'=>' Woman Fashion',
             'price'=>'1576 TK',
             'image'=>'13.jpg',
             'description'=>' StarFire Full series',
             ],
         13=>[
             'id'=>13,
             'CategoryId'=>2,
             'name'=>' Woman Fashion',
             'price'=>'1176 TK',
             'image'=>'14.jpg',
             'description'=>' Black Widow Full series',
             ],
         14=>[
             'id'=>'14',
             'CategoryId'=>3,
             'name'=>' Children Fashion',
             'price'=>'999 TK',
             'image'=>'15.jpg',
             'description'=>'<b>Tom and Jerry   <br> Full series  <br> </b>
             One of the most beloved rivalries in history is re‐ignited when Jerry moves into New York City’s finest hotel on the eve of “the wedding of the century,” forcing the event’s desperate planner to hire Tom to get rid of him. The ensuing cat and mouse battle threatens to destroy her career, the wedding and possibly the hotel itself. But soon, an even bigger problem arises: a diabolically ambitious staffer conspiring against all three of them. An eye‐popping blend of classic animation and live action, Tom and Jerry’s new big‐screen adventure stakes new ground for 
             the iconic characters and forces them to do the unthinkable...work together to save the day.',
         ],
         15=>[
             'id'=>'15',
             'CategoryId'=>3,
             'name'=>'Children Fashion',
             'price'=>'1999 TK',
             'image'=>'16.jpg',
             'description'=>' <b>Popeye   <br> Full series  <br> </b>
             The person believed to have inspired Popeye was Frank "Rocky" Fiegel, a tough laborer from Chester, Illinois who was always getting in fights.
              It was believed he could have been a professional boxer. However,
               he also gave out candy and treats to children, including E.C
             ',

         ],


     ];
 }

}