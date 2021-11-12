<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Practice Code</title>
</head>
<body>
    <h1>OOP - Practice Code:</h1><hr>
    <?php 
    //!Object Oriented Programming in Advance PHP (Hindi) 
    //amra amdr carpache ja dekhi sob e object,
    //object er property or gunagun er name hocche var or property,
    //ei object tar property or kono oparatio janar jonno ja run kore ta hocce method/function
    //Mobile ekta object, er brand, ram,rom camara pix,display panel agulo property, and egulo show korte j option run korbo oigulo method,

    //! class - info about some property and method ,
    //class er vitor kichu property and method thake and egulo obj diye run korte hoi ,
    //class obj chara useless,
    //class-> obj make-> obj diye access all property and method,
    //2+5, geeky.show can asssing in property, one value only, __ dubble underscore can't,

    function classInfo(){


        class ClassName{
            public $propertyName = "Hello OOP";
            public $propertyName2 ="yes";
    
            public function display(){
                //global $propertyName; echo $propertyName; $this->propertyName = "Reassing";
                echo $this->propertyName;
                
            }

            public function displayInnerFunction(){
                $this->display();
                
            }
        }
    
        $objName = new ClassName(); //() eita dile valo constructor use er jonno,
    
        echo $objName->propertyName . "<br>";
    
        $objName->display();
        $objName->propertyName = "Hello OOP 2"; // Reassing
        $objName->displayInnerFunction();


    }

    // classInfo(); //*calling

    //!Object - this can change by various name, samsung , lg,xiomi,(mobile class,)
    //object class type var, each time create obj take copy of all var in class,
    //but function has one copy share by all,
    // $objName = new className(); //$objName->propertyName = "Hello", $objName->display($para);
    //function er vitor property and method run korte pari 
    //publick key na dile error ase,


    function objInfo(){

        class Mobile{

            public $brand = "Sumsung";
            public $model;
    
            public function display(){
                echo $this->brand . "<br>";
            }
    
            public function showModel($modelValue){
                $this->model = $modelValue;
    
                echo "your Mobile Model No : $this->model <br>";
            }
        }
    
        //sumsung obj
        $Sumsung = new Mobile();
        $Sumsung->display();
        $Sumsung->showModel('A8');
    
        //LG object,
    
        $LG = new Mobile();
    
        $LG->showModel('G5');

    }

    // objInfo(); //*calling

    //! $this->property name, $this->displayFun(), this keyword,
    //eita diye,property and function run korte pari, this mean class name,

    //!constructor = eita __Costruct() key diye,
    //obj create er satei run hoi, $objName = new ClassName($construc_para);
    //eita ekta method ja obj create er satei run kore,
    //father child uvoy er construc thakle child er vitor father k run korte hobe,
    //eitar accutal use hocce ami cacchi j keu amr class er obj banalei jate ei funciton ta run korei, must,
    //__construct(), __construct($para1) = para constructor
    //constructor ektai banano jai, ekta funciton er para onno te this key diye access kora ja,
    //dectructor last e run kor,
    function constructorInfo(){

        class MobileInfo{
            public $brand;
            public $model;

            
    
            function __construct($brand,$model){
                $this->brand = $brand;
                $this->model = $model;
    
                echo "your brand name is $this->brand and Model No : $this->model<br>";
            }

            function __destruct()
            {
                echo "Object Trush $this->brand";
            }
            
        }
    
        //obj creat er satei run hobe,
    
        $samsung = new MobileInfo("Sumsung","J7");
        $LG = new MobileInfo("LG","G5");

    }

    // constructorInfo(); //* calling,

    //!Inheritance, = singleline,multilevel,hairarky, base,super,extend,sub,
    // (fatehr - child,) (grandF->fatehr->child) (father-son,father-dauther) 
    //extend keyword use, 
    //industry employee(base), ->industry ->manager(sub),
    //Inheritance e child tar property method sob public gulo access korte pare freely,
    //local var can't call by this key

    //*code 1 single line
        /* class Father{
            // public $bank_balance = "10k";
            // public $car_amount = 10;

            // function displayFather(){
            //     echo"Bank Balance". $this->bank_balance . "Car amount" . $this->car_amount;
            // }

            public $a;
            public $b;
            public $sum;

            public function getValue($a,$b){
                $this->a = $a;
                $this->b = $b;
                // $sum = ($this->a+$this->b);

                // return $sum;
            }

            public function sum(){
                $this->sum = $this->a+$this->b;
                return $this->sum;
            }

        }

        //child Class 

        class Child extends Father{

            function child_sum(){
                // $sum = $this->a + $this->b;
                echo "a = $this->a and b = $this->b Sum =" . $this->sum();
                
            }
        }

        $child_obj = new Child();

        $child_obj->getValue(10,15);
        // $child_obj->sum();
        $child_obj->child_sum(); */

        //*code 2  Multi level

        // a = 10 b = 20, child c = 30, and sum = all, dautor show all,


        /* class Father{
            public $a;
            public $b;

            public function getValue($para1,$para2){
                $this->a = $para1;
                $this->b = $para2;
            }
        }

        class Son extends Father{
            public $c;
            public $sum;

            public function sum($para3){
                $this->c = $para3;
                $this->sum = $this->a+$this->b+$this->c;
                return $this->sum;

            }
        }

        class Son_child extends Son{

            function showResult(){
                echo "Value A = $this->a<br>";
                echo "Value B = $this->b<br>";
                echo "Value C = $this->c<br>"; //value c asbe an pore excure funcion er jonno,
                // echo "value Sum = $this->sum";
                echo "value Sum = " . $this->sum(20);
            }
        }

        $son_child = new Son_child;

        $son_child->getValue(10,15);
        $son_child->showResult(); */

        //*code 3  hairarkeykal

        
        /* class Father{
            public $a;
            public $b; 
            public $c;

            public function getValue($para1,$para2,$para3){
                $this->a = $para1;
                $this->b = $para2;
                $this->c = $para3;

            }
        }

        class Son extends Father{
            public $sum;

            function add(){
                $this->sum = $this->a+$this->b+$this->c;
                return $this->sum;
            }

            public function result(){
                echo "value of a = $this->a<br>";
                echo "value of b = $this->b<br>";
                echo "value of c = $this->c<br>";
                // echo "value of addition = $this->sum";
                echo "value of addition =" . $this->add() . "<br>";
            }
        }

        class Daughter extends Father{
            public $multi;
            function multi(){
                $this->multi = $this->a*$this->b*$this->c;
                return $this->multi;
            }

            public function result(){
                echo "value of a = $this->a<br>";
                echo "value of b = $this->b<br>";
                echo "value of c = $this->c<br>";
                // echo "value of addition = $this->sum";
                echo "value of addition = $this->multi" . "<br>";
            }
        }

        $Son = new Son();

        $Son->getValue(5,10,15);

        // $Son->add(); //call inside function 
        $Son->result();
        
        $dauther = new Daughter();
        $dauther->getValue(10,15,20);
        $dauther->multi();
        $dauther->result(); */

        //!Inharitance with constructor 
        //father and child e constructor thakle father er ta child e call korte hobe
        // noyto fatehr alada babe call korte hobe
        //ek line funciton + . diye kichu call korle seta age asbe,

       /*  class Father{
            public $a;

            public function __construct($para1)
            {
                $this->a = $para1;

                echo "Father Constructor calling $this->a";
            }
        }

        class Son extends Father{

            public function __construct($x,$para2)
            {   
                echo "Son is Calling $para2<br>";
                parent::__construct($x); //fatehr::__construct
               
                
            }
        }

        $son_obj = new Son("father-parameter","Son-Parameter");

        // $father_obj = new Father('Seperater f'); */


        //!Public,private,protacted Access Mode 
        //out side access = public , inside with Inharitance = public , protected,
        //inside in main class = public , protected, private,
        //mode diye amra funciton and property banate pari
        // private $property, protected function display(){}; 
        //constructor private hoi na, 



        //*code 1 

        /* class AccessMode{
            public $a_public = "public Value";
            private $b_private = "Private Value";
            protected $c_protected = "Protected Value";

            public function display(){
                echo $this->b_private;
            }
        }

        $mainClass = new AccessMode();

        // echo $mainClass->a_public = "new public value";

        $mainClass->display();

        class SubClass extends AccessMode{
            // protected $c_protected = "Change Value Of Protected";

            protected function protected()
            {
                //  echo $this->b_protected; //can't access,
                 echo $this->c_protected;// can access
            }

            public function display2(){
                $this->protected();
            }
        }

        $subClass = new SubClass();
        $subClass->display2(); */


        //!constructor with access mode  = public and protected can work
        // protected ta Inharitance kore call korte hoi, and child e must constructor thaka lagbe,



        /* class Employee{
            public $money;

            protected function __construct($para)
            {
                $this->money = $para;

                echo $this->money;
            }

        }

        // $obj_employee = new Employee(10); can't call this 

        class Manager extends Employee{

            function __construct(){
                Employee::__construct(10);
                echo "hellow";
            }
        }

        $obj_manager = new Manager; */


        //!static property and static method, in oop,
        //static key use kore korte hoi, public static $propertyName = "value";
        //static key Father::$property = 10; eita bahir theke access without createing obj 
        //static method o banate pari ja obj charai echo korte pari,
        //static property access static method,
        //static property tar change value k store kore rakhe,
        //static property inherit korte pari,  selft:property,fahter:$a, son::$a,
        //static property can access no-static method but not static property can't,
        //static public ,private ,protected kre use korte pari, access mode rules apply hobe,

        
        
        /* class Father {
            public static $a = 10;

            function display(){
                Father::$a++;
                echo Father::$a . "<br>";
            }

            static function displayStatic(){
                echo "hello static" . Father::$a; //static property in method
            }
        }

        class son extends Father{

            public static function displaySon(){
                echo son::$a;
            }
        }

        $obj = new Father;

        $obj->display();
        $obj->display();
        $obj->display();

        echo Father::$a = 15;
        $obj->display();
        $obj->display();

        Father::displayStatic();

        echo "<br><br>";

        son::displaySon(); */




        // static var, static method, conts propertyName = 10; 
        // ei 3 ta direct call kora jai, ClassName::$staticVar, ClassName::staticFun(),
        //className::constName , 

        //final class and method, final class can be inherited, final,static method can't be overrride,
        //interface , (consts property, abstruct method only,), expand, implement by class,
        //interface er value class e implement korei use korte hoi,
        // class Son extend Father(class) implement Mother,dauther
        //interface Son extend mother,father,sister{}
        //static method e non static property kaj krbe na,

        //!abstruct class and abstruct method, 
        //abstruct class = non abstruc method parbe, normar property parbe,obj banano jabe na,
        // abstruc class inherit kore use krte hobe,

        //abstruc method = eita define kora jabe na inherit kre override kore define krte hoi, 
        //abstuct method tar inherit k must define korte hobe,
        //abstruc key use kore kaj kore,
        //abstruc method private hote parbe na / protected and public parbe,

        /* abstract class Father
        {
            public $a;

            function display(){
                echo "abstruct class";
            }

            abstract function abstructFunction();

            
        }

        class son  extends Father
        {
            function abstructFunction()
            {
                echo "Abstruct Method Define";
            }
        }

        $Son = new son();

        $Son->abstructFunction();
        $Son->display();
 */

        //!const key var = 
        //eita define korte hobe deyar sather and pore change korte parbo na,
        // Father::constName , public private protected use korte parbo
        //eita inherited hobe easily


        /* class Father  
        {
            const mark = 101;

            public function display(){
                echo self::mark;
                echo Father::mark;
            }
        }

        echo Father::mark; */

        //!interface,(single line interface,multi-level-interface,multi-interface,hairarky)
        //interface( const property and abstruct method only,)\
        //interface NameOfInterface extend interface2,interface3{}
        //class ClassName extend className2 implement Interface1,2,3
        //interface class e inherit kore use korte hobe,
        //interface er class k tar sob abstruct method define korte hobe,
        //interface all method by default abstruc hoi tai tar vitor defin kora jai na,

        //*code 1 

        /* interface Father {
            // public $mark = 1001; //parbo na dite
            const mark = 1001;

            function interfaceMethod1();

            function interfaceMethod2();


        }

        class Son implements Father{

            function interfaceMethod1()
            {
                
            }

            function interfaceMethod2()
            {
                
            }
        }

        $Son = new Son(); */


        


        

        


        //!method override = 
        //final, static, can't override, fully copy hote hobe override korte,



        //!final method and class -
         //final class and method, final class can be inherited, final,static method can't be overrride,

        /* class Father {
            public $a = "final method and class";

            //final can't override,
             final public function displayF(){
                echo $this->a;
            }
         }

         class Son extends Father{

            function displayF(){
                echo "Override dispay F";
            }
         }

         $Son = new Son;

         $Son->displayF(); */

       
         

         


        









    


    ?>


   

</body>
</html>