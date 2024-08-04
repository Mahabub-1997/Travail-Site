<?php

namespace App\classes;

class Category
{

    public function categoryById($id)
    {
       $categories=$this->allCategory();
       foreach ($categories as $category) {
           if ($category['id']==$id) {
               return $category;
           }
       }
    }
 public function allCategory()
 {
     return [
         0=>[
             'id'=>1,
             'category_name'=>'Man Fashion',
            ],
         1=>[
             'id'=>2,
             'category_name'=>'Woman Fashion',
         ],
         2=>[
             'id'=>3,
             'category_name'=>' Children',
         ],
         /*


         3=>[
             'id'=>4,
             'name'=>''
         ],

         4=>[
             'id'=>5,
             'name'=>'Man Fashion'
         ],
         5=>[
             'id'=>6,
             'name'=>'Man Fashion'
         ],
         6=>[
             'id'=>7,
             'name'=>'Man Fashion'
         ],
         7=>[
             'id'=>8,
             'name'=>'Man Fashion'
         ],
         9=>[
             'id'=>9,
             'name'=>'Woman Fashion'
         ],
         10=>[
             'id'=>10,
             'name'=>'Woman Fashion'
         ],
         11=>[
             'id'=>11,
             'name'=>'Woman Fashion'
         ],
         12=>[
             'id'=>12,
             'name'=>'Woman Fashion'
         ],
         13=>[
             'id'=>13,
             'name'=>'Woman Fashion'
         ],
         14=>[
             'id'=>14,
             'name'=>'Children'
         ],
         15=>[
             'id'=>15,
             'name'=>'Children'
         ] */


     ];

 }
}