<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
<link href="/auto/css/indexInputForm.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div class="container">
  <header>
    <a href="#"><img src="" alt="Insert Logo Here" name="Insert_logo" width="180" height="90" id="Insert_logo" style="background: #C6D580; display:block;" /></a>
  </header>
  <div class="sidebar1">
    <nav>
      <ul>
        <li><a href="#">Link one</a></li>
        <li><a href="#">Link two</a></li>
        <li><a href="#">Link three</a></li>
        <li><a href="#">Link four</a></li>
      </ul>
    </nav>
    <aside>
      <p> The above links demonstrate a basic navigational structure using an unordered list styled with CSS. Use this as a starting point and modify the properties to produce your own unique look. If you require flyout menus, create your own using a Spry menu, a menu widget from Adobe's Exchange or a variety of other javascript or CSS solutions.</p>
      <p>If you would like the navigation along the top, simply move the ul to the top of the page and recreate the styling.</p>
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Instructions</h1>
    <section>
     <h2>How to use this document</h2>
      <form name="form1" method="post" action="./log.php">
        <p>
          <label for="partReplaced">Part Replaced: </label>
          <input type="text" name="partReplaced" id="partReplaced">
        </p>
        <p>
          <label for="dateReplaced">Date Replaced: </label>
          <input type="text" name="dateReplaced" id="dateReplaced">
        </p>
        <p>
          <label for="odometer">Odometer: </label>
          <input type="text" name="odometer" id="odometer">
        </p>
        <p>
          <label for="volvoPartNum">Volvo Part Number: </label>
          <input type="text" name="volvoPartNum" id="volvoPartNum">
        </p>
        <p>
          <label for="newPartOrigin">From Which Store: </label>
          <input type="text" name="newPartOrigin" id="newPartOrigin">
        </p>
        <p>
          <label for="newPartNum">Store Specific Part Number: </label>
          <input type="text" name="newPartNum" id="newPartNum">
        </p>
        <p>Submit Input
          <input type="submit" name="submitInput" id="submitInput" value="Submit Input">
        </p>
      </form>
      <p>&nbsp;</p>
    </section>
  <!-- end .content --></article>
  <aside>
    <h4>Backgrounds</h4>
    <p>By nature, the background color on any block element will only show for the length of the content. If you'd like a dividing line instead of a color, place a border on the side of the .content block (but only if it will always contain more content).</p>
  </aside>
  <footer>
    <p>This footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <address>
      Address Content
    </address>
  </footer>
  <!-- end .container --></div>
</body>
</html>