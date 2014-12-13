<head>
    <link rel="stylesheet" href="style.css">
</head>

<P>


<br>
<a href= "main.php"   >Here is the main page<a>

<br>
<div main>


you should always sanitize superglobals before using them. One way to do
this is via the PHP htmlentities function. It converts all characters into HTML entities.
For example, less-than and greater-than characters (< and >) are transformed into the
strings &lt;  and &gt;  so that they are rendered harmless, as are all quotes and back‐
slashes, and so on.
Therefore, a much better way to access $_SERVER (and other superglobals) is:
$came_from = htmlentities($_SERVER['HTTP_REFERER']);


<br>

<strong> Javascript should not be relied upon for web security.  This should always be done on the server side.</strong>
<p>


</div>
