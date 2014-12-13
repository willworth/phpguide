<head>
    <link rel="stylesheet" href="style.css">
</head>
<div title>



<h1>This is play.php - <br>A play page for the code from learning PHP, MySQL, JavaScript, CSS, and HTML5. </h1>
</div>

<?php
 echo " Today is " . date("l") . ". ";
?>
Here's the latest news.
<br>
<a href= "security.php"   >Here is the security page<a>

<br>


Today is <?php echo date("l"); ?>. Here's the latest news.
</br>
</br>
<strong> Javascript should not be relied upon for web security.  This should always be done on the server side.</strong>
<p>
</br>
And now, javascript!

</br>
<p>
<script type="text/javascript">
 document.write("Today is " + Date() );
</script>
<p>
</br></br>

JavaScript is being used for Ajax. This is a term for the process of
accessing the web server in the background. (It originally meant "Asynchronous Java-Script and XML," but that phrase is already a bit outdated.)
</br></br></p>

<br>
 To install FireFTP, visit http://fireftp.mozdev.org using Firefox and click on the Down‐
load FireFTP link

<br>

<br>

<?php
echo "This is deprecated php, due to the lazy opening code"; ?>
<br><br>
Viewing examples from this book at http://lpmj.net

<br>

Operator Example Equivalent to<br>
=        $j = 15     $j = 15  <br>
+=       $j += 5   $j = $j + 5<br>
−=     $j −= 3        $j = $j − 3<br>
*=    $j *= 8       $j = $j * 8<br>
/=    $j /= 16      $j = $j / 16<br>
.=    $j .= $k      $j = $j . $k<br>
%=     $j %= 4      $j = $j % 4<br>

The most unusual of these operators is xor, which stands for exclusive or and returns a
TRUE value if either value is TRUE, but a FALSE value if both inputs are TRUE or both inputs
are FALSE. To understand this, imagine that you want to concoct your own cleaner for
household items. Ammonia makes a good cleaner, and so does bleach, so you want your
cleaner to have one of these. But the cleaner must not have both, because the combi‐
nation is hazardous. In PHP, you could represent this as:
$ingredient = $ammonia xor $bleach;

<br><p>
There are also a couple of other assignment operators that you will find useful. For
example, we’ve already seen:<br>
$x += 10;<br>
which tells the PHP parser to add the value on the right (in this instance, the value 10)
to the variable $x. Likewise, we could subtract as follows:<br>
$y −= 10;<br>
Variable incrementing and decrementing<br>
Adding or subtracting 1 is such a common operation that PHP provides special oper‐
ators for it. You can use one of the following in place of the += and −= operators:<br>
++$x;<br>
−−$y;<br>
In conjunction with a test (an if statement), you could use the following code:<br>
if (++$x == 10) echo $x;<br>
This tells PHP to first increment the value of $x and then test whether it has the value
10; if it does, output its value. But you can also require PHP to increment (or, in the
following example, decrement) a variable after it has tested the value, like this:<br>
if ($y−− == 0) echo $y;<br>
which gives a subtly different result. Suppose $y starts out as 0 before the statement is
executed. The comparison will return a TRUE result, but $y will be set to −1 after the
comparison is made. So what will the echo statement display: 0 or −1? Try to guess, and
then try out the statement in a PHP processor to confirm. Because this combination of
statements is confusing, it should be taken as just an educational example and not as a
guide to good programming style.<br>
In short, whether a variable is incremented or decremented before or after testing de‐
pends on whether the increment or decrement operator is placed before or after the
variable.<br>
By the way, the correct answer to the previous question is that the echo statement will
display the result −1, because $y was decremented right after it was accessed in the if
statement, and before the echo statement.<br>
<p>



<br><br>


Ohhh look! Escape characters!


<br><br>

$text = "She wrote upon it, \"Return to sender\".";


<br><br>

<br><br><br>

String types
PHP supports two types of strings that are denoted by the type of quotation mark that
you use. If you wish to assign a literal string, preserving the exact contents, you should
use the single quotation mark (apostrophe) like this:
$info = 'Preface variables with a $ like this: $variable';
In this case, every character within the single-quoted string is assigned to $info. If you
had used double quotes, PHP would have attempted to evaluate $variable as a variable.
On the other hand, when you want to include the value of a variable inside a string, you
do so by using double-quoted strings:
echo "This week $count people have viewed your profile";
As you will realize, this syntax also offers a simpler form of concatenation in which you
don’t need to use a period, or close and reopen quotes, to append one string to another.
This is called variable substitution, and you will notice some applications using it ex‐
tensively and others not using it at all.
<br><br>

<br><br><br>





One handy use of these variables is for debugging purposes, when you need to insert a
line of code to see whether the program flow reaches it:<br>
echo "This is line " . __LINE__ . " of file " . __FILE__;<br><br>


<br><br><br>





$b ? print "TRUE" : print "FALSE";

<br>
The question mark is simply a way of interrogating whether variable $b is TRUE or
FALSE. Whichever command is on the left of the following colon is executed if $b is
TRUE, whereas the command to the right is executed if $b is FALSE.

<br><br><br>




<?php
function test()
{
static $count = 0;
echo $count;
$count++;
}
?>
<br><br><br>
<?php test(); ?>
