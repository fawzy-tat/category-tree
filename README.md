# category-tree
PHP - Problem solving 


Category tree is a class with 2 main functions 

1 - (add category) which accepts 2 parameters ( category - parent ) 

2- ( get category) returns all the children of a given parent 

Ex :

 $c = new CategoryTree;
 
 $c->addCategory('A', null);
 
 $c->addCategory('B', 'A');
 
 $c->addCategory('C', 'A');
 
 echo implode(',', $c->getChildren('A'));
 


Should return B,C 
