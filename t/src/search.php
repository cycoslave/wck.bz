    $q="";
    if (isset($_GET['q']))
    {
        $q=htmlentities($_GET['q']);
    }

    ?>
<h1>You can search for posts which Google has indexed below...</h1>


<form action="http://pastebin.com/search" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3281640380846080:rwgn88wz7bt" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="32" value="<?php echo $q ?>"/>
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>


<h1>Search Results</h1>

<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 800;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
