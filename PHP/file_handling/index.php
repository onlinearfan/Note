<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <h1>File Handling:</h1>

    <?php

    //!All in one
    //? fopen('filename.path','w'),fclose($handle),feof($handle)= alway false, gets($handle),getc(handle) = line and caracter read kore,
    //?fread($handle,filesize('filename.path')) = lengle diye pari ;  fwrite($handle,'what to write');
    //?file('fileName.path') = array convert of line file ,stat('fileName.path') , unlink('fileName.path') = copy('filename.path','newName.path');


    
    

    

    //!file handing introduction,
    //easy than other lesson,read,write,open,close file,

    //!Opening File,
    //fopen use kore kora hoy,url or file open krte parbo,
    //fopen('fileName','mode',true,context,); mode = r = shudu read,,w,r+,w+,a,a+,t,b,
    //file open ta hole error diye false return krbe, krte parle true,
    //waring paboi must open na hole,

    //*code
    /* fopen('myfile.txt','r'); //same directory file open
    fopen('https://courstika.com/','r'); //url open,
    fopen('C:\xampp\htdocs\php_practice\php-note.php','r'); //path of pc file,

    //die() eita reason bolbe open na hobar and er porer code run korbe na,

    $handle = fopen('myfiles.txt','r') or die("can't open");

    echo "hellow"; */

    //! fgets(),feof(); fgetc 
    //fgetc = single caracter read kore,
    //fgets = open file hote hobe and single line read kre,
    //feof() = always false thake and last line read er por true hoi,//fgets diye sob read kore sesh hole feof ar nambe na, and true thakbe,
    
    //*code 

    /* $handle = fopen('myfile.txt','r'); //file open kora hole,

    echo fgets($handle); // single line return korbe open thakle,
    echo fgets($handle); // single line return korbe open thakle,
    // echo fgets($handle); // single line return korbe open thakle,

    echo "<br><br>";
    //fgets diye sob read kore sesh hole feof ar nambe na,
    while((!feof($handle))){
        echo fgets($handle);
    } */

    //!Reading a File into an Array in PHP (Hindi) 
    //file('filename.txt') = eita array return kore, ar na tkale false return kore,
    //single line k numeric array banai fele eita,

    //*code
    
    /* $handle = file('myle.txt'); //false and error return korbe as nai file,
    $handle = file('myfile.txt');

    print_r($handle); */

    //!Checking if a File Exists in PHP (Hindi)
    // file_exists('filepath') = ei funciton return kore true or false if file have in path

    //*code
    /* echo file_exists('myfile.txt') . "<br>"; //true = 1 flase = nothing
    echo file_exists('C:\xampp\htdocs\php_practice\php-note.php') . "<br>"; //full path,
    //url dile hobe na url er file dite hobe,
    echo file_exists('https://courstika.com/wp-content/uploads/2021/09/courstika.png') . "<br>"; //run kore na,

    //using condition 
    if(file_exists('myfile.txt')){
        echo "yes exists";
    }else{
        echo "not found is path";
    } */

    //!File Size in PHP (Hindi) 
    //filesize('filepath/name'); file na paile error massage dibe and return false,,
    //full path dite hobe full location hole,
    //Warning: filesize(): stat failed for aff.txt in C:\xampp\htdocs\php_practice\file_handling\index.php on line 85

    /* echo filesize('myfile.txt'); //file size in bytes, 
    echo filesize('aff.txt'); //file size in bytes,  */

    //!fread();  Reading Binary Reads in PHP (Hindi)
    //fopen kore tarpor read korte hobe, fread, diye,
    //fclose(fopen('path','mode')); 


    //*code
    /* $handle = fopen('myfile.txt','rb');

    echo fread($handle,'10') . "<br>"; //caracter by caracter read kore print korbo.
    //now baki gulo sudu print korbe,
    echo fread($handle,filesize('myfile.txt')); //caracter by caracter read kore print korbo.

    echo "<br>"  . fread(fopen('myfile.txt','rb'),filesize('myfile.txt')) . "<br>";
    echo "<br>"  . fread(fopen('myfile.txt','rb'),stat('myfile.txt')['size']); */

    //!stat() = Getting File Info in PHP (Hindi)
    //stat('filename'); file er info numaric array te dibe,

    //*code
    /* $file_info = stat('myfile.txt');

    echo "<pre>";
    print_r($file_info);
    echo "</pre>"; */

    // [0] => 3931112922
    // [1] => 859061628920924200
    // [2] => 33206
    // [3] => 1
    // [4] => 0
    // [5] => 0
    // [6] => 0
    // [7] => 19
    // [8] => 1634123669
    // [9] => 1634119837
    // [10] => 1634118499
    // [11] => -1
    // [12] => -1
    // [dev] => 3931112922
    // [ino] => 859061628920924200
    // [mode] => 33206
    // [nlink] => 1
    // [uid] => 0
    // [gid] => 0
    // [rdev] => 0
    // [size] => 19
    // [atime] => 1634123669
    // [mtime] => 1634119837
    // [ctime] => 1634118499
    // [blksize] => -1
    // [blocks] => -1


    //!copy file 
    //eita kono file er bitor info copy te kaj kore and eita file name age thakle override kore,
    //destination thik na thkle error show kore  flase return korbe,
    
    //*code
    /* echo copy('myfile.txt','show.php'); //if file name exist then it will overwrite.
    echo copy('mfile.txt','show1.txt'); //file na thakle create kore nibo and true dibo, */

    //!unlink('path'); Delete a File in PHP (Hindi) 
    //file thakle true return korbe and file delete korbe, 
    //file na paile false and error show korbe,
    //file_exists diye file handle er kaj korbo always

    //*code 
    /* echo unlink('ow1.txt'); //eita delete korbe and true return korbe, */


    //!fwrite('path','what to write');  Writing to a File in PHP (Hindi)
    // mode r(only read), r+(Rw not force );
    //fopen kre write korte hobe, mode w(only w) or w+(Rw and force create) thaka lagbe
    /// true hole ja leksi tar byte show korbe and false hole error sadarono to error ase na,
    //eita lekha override kore dei,
    
    //*code
    /* $handle = fopen('myfifafle.txt','w');
    echo fwrite($handle,"f asdf lfdf "); */

    //!a mode appending to files in php (hindi)
    //mode a = ja text ase rakbe and tar por lekbe and cursor first e rakhbe ,all force to create,
    
    //*code
    /* $handle = fopen('appendMode.txt','a');
    echo fwrite($handle,"append mode writing"); */

    //! Writing a File All at Once in PHP (Hindi)
    //file_put_content() = eita diye write kore easy fwrite er theke 
    //write korar somoy append mode on rakhbo, fopen and close er need nai,
    //true hole byte show korbe lekhar and and false hole error , 
    //force to create kore kaj kore, file_append mode on kore kaj korbo,

    /* echo file_put_contents('myfilsadfde.txt','<br>file put content writing',); //eita override korbe,
    echo file_put_contents('myfilsadfde.txt','<br>file put content writing',FILE_APPEND);  */
    













    

   
    
    ?>
</body>
</html>