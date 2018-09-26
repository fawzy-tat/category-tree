<?php
class CategoryTree
{
    public $categories = [];
    public function addCategory($category, $parent)
    {

        $this->categories[] = (object) array('child' => $category , 'parent' => $parent);
    }

    public function getChildren($parent)
    {
      $result = [];
      $categories_array = $this->categories;
      foreach ( $categories_array as $key => $value) {

        if($value->parent == $parent)
        {
            array_push($result,$value->child);
        }
      }
      return  $result;
    }
}

 $c = new CategoryTree;
 $c->addCategory('A', null);
 $c->addCategory('B', 'A');
 $c->addCategory('C', 'A');
 echo implode(',', $c->getChildren('A'));
